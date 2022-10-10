<?php


namespace App\Services\Interfaces;


use Illuminate\Pagination\LengthAwarePaginator;

interface PostServiceInterface
{
    public function getPaginatedPosts();
}
