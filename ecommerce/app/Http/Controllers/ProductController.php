<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query()->paginate(10);
<<<<<<< HEAD
        return view('users.admin.product.index', compact(
=======
        return view('users.admin.product.index', compact(
>>>>>>> 8c09309d71aabf58d9177d22315ee98ca7fa06ee
            'products'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Product();
        $categories = Category::all();
        $product->fill([
            'quantity' => 0,
            'price' => 0,
        ]);
        $isUpdate = false;
<<<<<<< HEAD
        return view('users.admin.product.form', compact(
=======
        return view('product.form', compact(
>>>>>>> 8c09309d71aabf58d9177d22315ee98ca7fa06ee
            'product', 'isUpdate', 'categories'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(ProductRequest $request)
     {
         $formFields = $request->validated();
         
         if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('product', 'public');
        }

         Product::create($formFields);

         return to_route('products.index')->with('success', 'Product created successfully');
     }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $isUpdate = true;
        $categories = Category::all();
<<<<<<< HEAD
        return view('users.admin.product.form', compact(
=======
        return view('product.form', compact(
>>>>>>> 8c09309d71aabf58d9177d22315ee98ca7fa06ee
            'product', 'isUpdate', 'categories'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {

        $formFields = $request->validated();


        $product->fill($formFields)->save();


        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('products.index')->with('success', 'Product deleted successfully');
    }
}
