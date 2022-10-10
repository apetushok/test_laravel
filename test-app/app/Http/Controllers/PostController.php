<?php

namespace App\Http\Controllers;

use App\Policies\Abilities;
use App\Http\Requests\PostFormRequest;
use App\Models\Post;
use App\Services\Interfaces\PostServiceInterface;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(PostServiceInterface $postService)
    {
        return view('pages.home', [
            'posts' => $postService->getPaginatedPosts()
        ]);
    }

    public function single(Post $post)
    {
        return view('pages.post', ['post' => $post]);
    }

    public function createForm()
    {
        return view('pages.post_form');
    }

    public function store(PostServiceInterface $postService, PostFormRequest $formRequest)
    {
        $data = $formRequest->getFormData();
        $postService->addPost($data);

        return to_route('profile');
    }

    public function profile(PostServiceInterface $postService)
    {
        return view('pages.profile', [
            'posts' => $postService->getPaginatedPostsForUser()
        ]);
    }
}
