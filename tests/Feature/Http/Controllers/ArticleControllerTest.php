<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Carbon;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ArticleController
 */
final class ArticleControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $articles = Article::factory()->count(3)->create();

        $response = $this->get(route('articles.index'));

        $response->assertOk();
        $response->assertViewIs('articles.index');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('articles.create'));

        $response->assertOk();
        $response->assertViewIs('articles.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ArticleController::class,
            'store',
            \App\Http\Requests\ArticleStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $title = $this->faker->sentence(4);
        $content = $this->faker->paragraphs(3, true);
        $author_id = $this->faker->word();
        $category_id = $this->faker->word();
        $status = $this->faker->word();
        $featured_image = $this->faker->word();
        $published_at = Carbon::parse($this->faker->dateTime());

        $response = $this->post(route('articles.store'), [
            'title' => $title,
            'content' => $content,
            'author_id' => $author_id,
            'category_id' => $category_id,
            'status' => $status,
            'featured_image' => $featured_image,
            'published_at' => $published_at,
        ]);

        $articles = Article::query()
            ->where('title', $title)
            ->where('content', $content)
            ->where('author_id', $author_id)
            ->where('category_id', $category_id)
            ->where('status', $status)
            ->where('featured_image', $featured_image)
            ->where('published_at', $published_at)
            ->get();
        $this->assertCount(1, $articles);
        $article = $articles->first();

        $response->assertRedirect(route('articles.index'));
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $article = Article::factory()->create();

        $response = $this->get(route('articles.edit', $article));

        $response->assertOk();
        $response->assertViewIs('articles.edit');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ArticleController::class,
            'update',
            \App\Http\Requests\ArticleUpdateRequest::class
        );
    }

    #[Test]
    public function update_saves_and_redirects(): void
    {
        $article = Article::factory()->create();
        $title = $this->faker->sentence(4);
        $content = $this->faker->paragraphs(3, true);
        $author_id = $this->faker->word();
        $category_id = $this->faker->word();
        $status = $this->faker->word();
        $featured_image = $this->faker->word();
        $published_at = Carbon::parse($this->faker->dateTime());

        $response = $this->put(route('articles.update', $article), [
            'title' => $title,
            'content' => $content,
            'author_id' => $author_id,
            'category_id' => $category_id,
            'status' => $status,
            'featured_image' => $featured_image,
            'published_at' => $published_at,
        ]);

        $articles = Article::query()
            ->where('title', $title)
            ->where('content', $content)
            ->where('author_id', $author_id)
            ->where('category_id', $category_id)
            ->where('status', $status)
            ->where('featured_image', $featured_image)
            ->where('published_at', $published_at)
            ->get();
        $this->assertCount(1, $articles);
        $article = $articles->first();

        $response->assertRedirect(route('articles.index'));
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $article = Article::factory()->create();

        $response = $this->delete(route('articles.destroy', $article));

        $response->assertRedirect(route('articles.index'));

        $this->assertModelMissing($article);
    }
}
