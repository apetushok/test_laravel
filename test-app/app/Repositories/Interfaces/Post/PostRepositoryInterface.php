<?php

namespace App\Repositories\Interfaces\Post;



use App\Models\User;

interface PostRepositoryInterface
{
    public function getAll();
    public function create(array $data);
}
