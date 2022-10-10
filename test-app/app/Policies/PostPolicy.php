<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Pagination\LengthAwarePaginator;

class PostPolicy
{
    use HandlesAuthorization;
}
