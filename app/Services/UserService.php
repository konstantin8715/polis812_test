<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class UserService
{
    private string $url = "https://jsonplaceholder.typicode.com/users";

    public function getUsers()
    {
        return Http::get("$this->url")->json();
    }

    public function getUserById(string $id)
    {
        return Http::get("$this->url/$id")->json();
    }

    public function getPostsForUser(string $id)
    {
        return Http::get("$this->url/$id/posts")->json();
    }

    public function getTodosForUser(string $id)
    {
        return Http::get("$this->url/$id/todos")->json();
    }
}
