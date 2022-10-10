<?php

namespace App\Repositories\Interfaces\Post;



use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

interface EloquentPostRepositoryInterface extends PostRepositoryInterface
{
    public function getAllByUser(User $user = null): LengthAwarePaginator;
}
