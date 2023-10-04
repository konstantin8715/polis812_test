<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private PostService $post_service;

    public function __construct(PostService $post_service) {
        $this->post_service = $post_service;
    }

    public function index()
    {
        return $this->post_service->getPosts();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        return $this->post_service->createPost($data);
    }


    public function show(string $id)
    {
        return $this->post_service->getPostById($id);
    }


    public function update(Request $request, string $id)
    {
        $data = $request->all();
        return $this->post_service->updatePost($data, $id);
    }


    public function destroy(string $id)
    {
        return $this->post_service->deletePost($id);
    }
}
