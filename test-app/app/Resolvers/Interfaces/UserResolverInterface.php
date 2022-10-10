<?php


namespace App\Resolvers\Interfaces;


use App\Models\User;

interface UserResolverInterface
{
    public function resolve(User $user = null):?User;
}
