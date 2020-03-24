<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('product/product', [
            'products' => Product::all()
        ]);
    }

    public function deleteProduct(int $id)
    {
        echo "$id";
        Product::destroy($id);
        return response('ok', 200);
    }
}
