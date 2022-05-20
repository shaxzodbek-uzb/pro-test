<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\PostStoreRequest;
use App\Http\Requests\Post\PostUpdateRequest;
use App\Services\PostService;

class PostController extends Controller
{
    protected $serviceClass = PostService::class;
    protected $storeRequestClass = PostStoreRequest::class;
    protected $updateRequestClass = PostUpdateRequest::class;

}
