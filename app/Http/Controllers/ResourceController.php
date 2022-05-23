<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Support\Str;

class ResourceController extends ServiceController
{
    public function __construct() {
        $resourceName = request()->route()->parameter('resource');
        $resourceName = ucfirst($resourceName);
        $resourceName = Str::singular($resourceName);
        $this->service = app("App\\Services\\" . $resourceName . 'Service');
    }
}
