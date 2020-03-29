<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ProductRepositoryInterface as ProductRepository;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private ProductRepository $productRepo;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $pageSize = $request->query('size') ?? 10;
        $sort = $request->query('sort') ?? 'id';
        $direction = $request->query('direction') ?? 'asc';

        $products = $this->productRepo->findAll()
            ->orderBy($sort, $direction)
            ->paginate($pageSize);

        return view('product/product', [
            'products' => $products
        ]);
    }

    public function deleteProduct(int $id)
    {
        $this->productRepo->delete($id);
        return response('ok', 200);
    }

    public function createProduct(Request $request)
    {
        $request->validate([
            'name' => 'bail|required|min:3',
            'price' => 'bail|required|numeric|min:0'
        ]);

        $this->productRepo->create($request->input());
        return redirect('/products');
    }

    public function getUpdateProductView(Int $id)
    {
        try {
            $product = $this->productRepo->findOne($id);
            return view('product/product-update', [
                'product' => $product,
            ]);
        } catch (Exception $e) {
            return abort(404);
        }
    }

    public function updateProduct(Request $request, Int $id)
    {
        $request->validate([
            'name' => 'bail|required|min:3',
            'price' => 'bail|required|numeric|min:0'
        ]);

        try {
            $this->productRepo->update($id, $request->input());
            return redirect('/products');
        } catch (Exception $e) {
            return abort(404);
        }
    }
}
