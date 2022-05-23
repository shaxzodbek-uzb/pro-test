<?php

namespace App\Http\Controllers;

use App\Services\ProductService;

class ProductController extends ServiceController
{
    protected $serviceClass = ProductService::class;
}
