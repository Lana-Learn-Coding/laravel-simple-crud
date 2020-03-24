<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
        Product::destroy($id);
        return response('ok', 200);
    }

    public function createProduct(Request $request)
    {
        $product = Product::create($request->input());
        $product->save();
        return redirect('/products');
    }
}
