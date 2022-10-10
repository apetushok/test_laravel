<?php

namespace App\Providers;

use App\Handlers\CreatePostHandler;
use App\Repositories\EloquentPostRepository;
use App\Resolvers\UserResolver;
use App\Services\Interfaces\PostServiceInterface;
use App\Services\PostService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PostServiceInterface::class, function ($app) {
            $eloquentPostRepository = $app->make(EloquentPostRepository::class);
            return new PostService(
                $eloquentPostRepository,
                $app->make(CreatePostHandler::class, ['eloquentPostRepository' => $eloquentPostRepository]),
                $app->make(UserResolver::class)
            );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
