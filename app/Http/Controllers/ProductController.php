<?php

namespace App\Http\Controllers;

use App\Http\Repositories\Interfaces\ProductRepositoryInterface;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productRepository = null;

    public function __construct(ProductRepositoryInterface $prdRepository)
    {
        $this->productRepository = $prdRepository;
    }

    public function index(Request $request)
    {
        $products = $this->productRepository->all();
        return view('home', compact('products'));
    }

    public function show(Request $request, $id)
    {
        $product = $this->productRepository->show($id);
        return view('product', compact('product'));
    }

}
