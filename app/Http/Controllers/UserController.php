<?php

namespace App\Http\Controllers;

use App\Services\UserService;

class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return $this->userService->getUsers();
    }

    public function show(string $id)
    {
        return $this->userService->getUserById($id);
    }

    public function showUserPosts(string $id) {
        return $this->userService->getPostsForUser($id);
    }

    public function showUserTodos(string $id) {
        return $this->userService->getTodosForUser($id);
    }
}
