<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PostService
{
    private string $url = "https://jsonplaceholder.typicode.com/posts";

    public function getPosts()
    {
        return Http::get("$this->url")->json();
    }

    public function getPostById(string $id)
    {
        return Http::get("$this->url/$id")->json();
    }

    public function createPost($data)
    {
        return Http::post("$this->url", $data)->json();
    }

    public function updatePost($data, string $id)
    {
        return Http::patch("$this->url/$id", $data)->json();
    }

    public function deletePost(string $id)
    {
        return Http::delete("$this->url/$id")->json();
    }
}
