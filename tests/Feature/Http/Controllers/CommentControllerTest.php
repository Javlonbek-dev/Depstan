<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CommentController
 */
final class CommentControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $comments = Comment::factory()->count(3)->create();

        $response = $this->get(route('comments.index'));

        $response->assertOk();
        $response->assertViewIs('comments.index');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('comments.create'));

        $response->assertOk();
        $response->assertViewIs('comments.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CommentController::class,
            'store',
            \App\Http\Requests\CommentStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $article_id = $this->faker->word();
        $user_id = $this->faker->word();
        $content = $this->faker->paragraphs(3, true);
        $status = $this->faker->word();

        $response = $this->post(route('comments.store'), [
            'article_id' => $article_id,
            'user_id' => $user_id,
            'content' => $content,
            'status' => $status,
        ]);

        $comments = Comment::query()
            ->where('article_id', $article_id)
            ->where('user_id', $user_id)
            ->where('content', $content)
            ->where('status', $status)
            ->get();
        $this->assertCount(1, $comments);
        $comment = $comments->first();

        $response->assertRedirect(route('comments.index'));
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $comment = Comment::factory()->create();

        $response = $this->get(route('comments.edit', $comment));

        $response->assertOk();
        $response->assertViewIs('comments.edit');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CommentController::class,
            'update',
            \App\Http\Requests\CommentUpdateRequest::class
        );
    }

    #[Test]
    public function update_saves_and_redirects(): void
    {
        $comment = Comment::factory()->create();
        $article_id = $this->faker->word();
        $user_id = $this->faker->word();
        $content = $this->faker->paragraphs(3, true);
        $status = $this->faker->word();

        $response = $this->put(route('comments.update', $comment), [
            'article_id' => $article_id,
            'user_id' => $user_id,
            'content' => $content,
            'status' => $status,
        ]);

        $comments = Comment::query()
            ->where('article_id', $article_id)
            ->where('user_id', $user_id)
            ->where('content', $content)
            ->where('status', $status)
            ->get();
        $this->assertCount(1, $comments);
        $comment = $comments->first();

        $response->assertRedirect(route('comments.index'));
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $comment = Comment::factory()->create();

        $response = $this->delete(route('comments.destroy', $comment));

        $response->assertRedirect(route('comments.index'));

        $this->assertModelMissing($comment);
    }
}
