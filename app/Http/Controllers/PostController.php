<?php

namespace App\Http\Controllers;

use App\Services\PostService;

class PostController extends ServiceController
{
    protected $serviceClass = PostService::class;
}
