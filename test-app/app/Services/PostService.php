<?php

namespace App\Services;


use App\Handlers\Interfaces\HandlerInterface;
use App\Repositories\EloquentPostRepository;
use App\Resolvers\Interfaces\UserResolverInterface;
use App\Services\Interfaces\PostServiceInterface;

class PostService implements PostServiceInterface
{
    protected $eloquentPostRepository;
    protected $createPostHandler;
    protected $userResolver;

    public function __construct(
        EloquentPostRepository $eloquentPostRepository,
        HandlerInterface $createPostHandler,
        UserResolverInterface $userResolver
    )
    {
        $this->eloquentPostRepository = $eloquentPostRepository;
        $this->createPostHandler = $createPostHandler;
        $this->userResolver = $userResolver;
    }

    public function getPaginatedPosts()
    {
        return $this->eloquentPostRepository->getAll();
    }

    public function addPost(array $data)
    {
        return $this->createPostHandler->handle($data);
    }

    public function getPaginatedPostsForUser($user = null)
    {
        $user = $this->userResolver->resolve($user);
        return $this->eloquentPostRepository->getAllByUser($user);
    }
}
