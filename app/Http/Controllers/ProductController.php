<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return $products;
    }

    public function show(Product $product)
    {
        return $product;
    }

    // store
    public function store(StoreRequest $request)
    {
        $product = Product::create($request->all());
        return $product;
    }

    // update
    public function update(UpdateRequest $request, Product $product)
    {
        $product->update($request->all());
        return $product;
    }

    // destroy
    public function destroy(Product $product)
    {
        $product->delete();
        return $product;
    }
}
