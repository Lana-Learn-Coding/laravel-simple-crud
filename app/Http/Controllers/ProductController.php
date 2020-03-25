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

    public function index(Request $request)
    {
        $pageSize = $request->query('size') ?? 10;
        $sort = $request->query('sort') ?? 'id';
        $direction = $request->query('direction') ?? 'asc';

        $products = Product::select()
            ->orderBy($sort, $direction)
            ->paginate($pageSize);

        return view('product/product', [
            'products' => $products
        ]);
    }

    public function deleteProduct(int $id)
    {
        Product::destroy($id);
        return response('ok', 200);
    }

    public function createProduct(Request $request)
    {
        $request->validate([
            'name' => 'bail|required|min:3',
            'price' => 'bail|required|numeric|min:0'
        ]);

        Product::create($request->input());
        return redirect('/products');
    }

    public function getUpdateProductView(Int $id)
    {
        $oldProduct = Product::find($id);
        if ($oldProduct) {
            return view('product/product-update', [
                'product' => $oldProduct,
            ]);
        }
        return abort(404);
    }

    public function updateProduct(Request $request, Int $id)
    {
        $request->validate([
            'name' => 'bail|required|min:3',
            'price' => 'bail|required|numeric|min:0'
        ]);

        Product::findOrNew($id)
            ->update($request->input());
        return redirect('/products');
    }
}
