<?php


namespace App\Resolvers;


use App\Models\User;
use App\Resolvers\Interfaces\UserResolverInterface;
use Illuminate\Support\Facades\Auth;

class UserResolver implements UserResolverInterface
{
    public function resolve(User $user = null):User
    {
        if(!$user){
            $user = Auth::user();
        }

        return $user;
    }
}
