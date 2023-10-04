<?php

namespace App\Http\Controllers;

use App\Services\TodoService;

class TodoController extends Controller
{
    private TodoService $todoService;

    public function __construct(TodoService $todoService)
    {
        $this->todoService = $todoService;
    }

    public function index()
    {
        return $this->todoService->getTodos();
    }

    public function show(string $id)
    {
        return $this->todoService->getTodoById($id);
    }
}
