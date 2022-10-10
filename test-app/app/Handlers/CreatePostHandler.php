<?php


namespace App\Handlers;


use App\Handlers\Interfaces\HandlerInterface;
use App\Models\Post;
use App\Models\User;
use App\Repositories\EloquentPostRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CreatePostHandler implements HandlerInterface
{
    private $postRepository;

    public function __construct(EloquentPostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(array $data):?Post
    {
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($data['title'], '-');

        return $this->postRepository->create($data);
    }

}
