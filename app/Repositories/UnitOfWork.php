<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Repositories\Concrete\CategoryRepository;
use App\Repositories\Concrete\CommentRepository;
use App\Repositories\Concrete\PostRepository;
use App\Repositories\Concrete\TagRepository;
use App\Repositories\Concrete\UserRepository;
use Illuminate\Database\Eloquent\Model;

class UnitOfWork
{
    protected $categoryRepository;
    protected $postRepository;
    protected $tagRepository;
    protected $commentRepository;
    protected $userRepository;
    protected $model;

    /**
     * @return CategoryRepository
     */
    public function categoryRepository(): CategoryRepository
    {
        $this->model = new Category();
        $this->categoryRepository = new CategoryRepository($this->model);
        return  $this->categoryRepository;
    }

    /**
     * @return PostRepository
     */
    public function postRepository(): PostRepository
    {
        $this->model = new Post();
        $this->postRepository = new PostRepository($this->model);
        return $this->postRepository;
    }

    /**
     * @return TagRepository
     */
    public function tagRepository(): TagRepository
    {
        $this->model = new Tag();
        $this->tagRepository = new TagRepository($this->model);
        return $this->tagRepository;
    }

    /**
     * @return CommentRepository
     */
    public function commentRepository(): CommentRepository
    {
        $this->model = new Comment();
        $this->commentRepository = new CommentRepository($this->model);
        return $this->commentRepository;
    }

    /**
     * @return UserRepository
     */
    public function userRepository(): UserRepository
    {
        $this->model = new User();
        $this->userRepository = new UserRepository($this->model);
        return $this->userRepository;
    }




}
