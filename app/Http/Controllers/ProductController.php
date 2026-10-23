<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Services\ProductService;

class ProductController extends Controller
{
    public function __construct(private ProductService $productService)
    {
    }

    public function index()
    {
        $products = $this->productService->paginate();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        $this->productService->create($request->validated());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $this->productService->update($product, $request->validated());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $this->productService->delete($product);

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
}