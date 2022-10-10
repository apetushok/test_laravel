<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use App\Services\Interfaces\PostServiceInterface;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class PostTest extends TestCase
{
    use DatabaseTransactions;

    public function test_home_page()
    {
        $response = $this->get(route('home'));
        $response->assertStatus(200);
    }

    public function test_post_page()
    {
        $response = $this->get(route('post', Post::orderByDesc('created_at')->first()));
        $response->assertStatus(200);
    }
    public function test_profile_page()
    {
        $this->actingAs(User::first());

        $response = $this->get(route('profile'));
        $response->assertStatus(200);
    }

    public function test_store()
    {
        $this->actingAs(User::first());

        $data = [
            'title' => 'test title',
            'description' => 'test description',
            'content' => 'test content',
        ];

        $postService = app()->make(PostServiceInterface::class);
        $post = $postService->addPost($data);

        $this->assertInstanceOf(Post::class, $post);
        $this->assertEquals($data['title'], $post->title);
        $this->assertEquals($data['description'], $post->description);
        $this->assertEquals($data['content'], $post->content);
    }
}
