<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\TagController
 */
final class TagControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $tags = Tag::factory()->count(3)->create();

        $response = $this->get(route('tags.index'));

        $response->assertOk();
        $response->assertViewIs('tags.index');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('tags.create'));

        $response->assertOk();
        $response->assertViewIs('tags.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TagController::class,
            'store',
            \App\Http\Requests\TagStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $name = $this->faker->name();
        $slug = $this->faker->slug();

        $response = $this->post(route('tags.store'), [
            'name' => $name,
            'slug' => $slug,
        ]);

        $tags = Tag::query()
            ->where('name', $name)
            ->where('slug', $slug)
            ->get();
        $this->assertCount(1, $tags);
        $tag = $tags->first();

        $response->assertRedirect(route('tags.index'));
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $tag = Tag::factory()->create();

        $response = $this->get(route('tags.edit', $tag));

        $response->assertOk();
        $response->assertViewIs('tags.edit');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\TagController::class,
            'update',
            \App\Http\Requests\TagUpdateRequest::class
        );
    }

    #[Test]
    public function update_saves_and_redirects(): void
    {
        $tag = Tag::factory()->create();
        $name = $this->faker->name();
        $slug = $this->faker->slug();

        $response = $this->put(route('tags.update', $tag), [
            'name' => $name,
            'slug' => $slug,
        ]);

        $tags = Tag::query()
            ->where('name', $name)
            ->where('slug', $slug)
            ->get();
        $this->assertCount(1, $tags);
        $tag = $tags->first();

        $response->assertRedirect(route('tags.index'));
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $tag = Tag::factory()->create();

        $response = $this->delete(route('tags.destroy', $tag));

        $response->assertRedirect(route('tags.index'));

        $this->assertModelMissing($tag);
    }
}
