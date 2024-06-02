@extends('users.admin.app')
@section('title', 'Products')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Product list </h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Descriptions</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Category</th>
                <th>Price</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td><img width="100px" src="storage/{{ $product->image }}" alt=""></td>

<<<<<<< HEAD:ecommerce/resources/views/users/admin/product/index.blade.php
                    <td> 
                        <a class="" href="{{route('users.admin.categories.show' , $product->category_id)}}"> 
                        <span class="badge bg-success">
                            {{ $product->category->name }}
                       </span>
                    </a>
                </td>
=======
                    <td> <span class="badge bg-success">{{ $product->category->name }}</span></td>
>>>>>>> 8c09309d71aabf58d9177d22315ee98ca7fa06ee:ecommerce/resources/views/product/index.blade.php

                    <td>{{ $product->price }} DZA</td>

                        <th>
                            <div class="btn-group gap-2">
                                <a href="{{route('products.edit', $product)}}" class="btn btn-primary">Update</a>
                                <form method="post" action="{{route('products.destroy' , $product)}}">
                                    @csrf
                                    @method('DELETE')
                        <button wire:click="deleteProduct({{ $product->id }})" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </th>

                </tr>
            @empty
                <tr>
                    <td colspan="6" align="center">
                        <h6>No products</h6>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $products->links() }}
@endsection
