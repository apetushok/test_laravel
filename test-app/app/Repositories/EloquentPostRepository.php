<?php

namespace App\Repositories;


use App\Models\Post;
use App\Models\User;
use App\Repositories\Interfaces\Post\EloquentPostRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class EloquentPostRepository implements EloquentPostRepositoryInterface
{
    public function getAll(): LengthAwarePaginator
    {
        return Post::orderByDesc('id')->paginate();
    }

    public function create(array $data):?Post
    {
        return Post::create($data);
    }

    public function getAllByUser(User $user = null): LengthAwarePaginator
    {
        return Post::where('user_id', $user->id)->orderByDesc('id')->paginate();
    }
}
