<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TodoService
{
    private string $url = "https://jsonplaceholder.typicode.com/todos";

    public function getTodos()
    {
        return Http::get("$this->url")->json();
    }

    public function getTodoById(string $id)
    {
        return Http::get("$this->url/$id")->json();
    }
}
