@extends('users.admin.app')
@section('title', 'Category')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Category :{{$category->name}} </h1>
        <a wire:navigate href="{{ route('categories.index') }}" class="btn btn-primary">Go Back</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Update products</th>

            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>

                        <th>
                            <div class="btn-group gap-2">
                                <a wire:navigate href="{{route('products.edit', $product)}}" class="btn btn-primary">Update</a>
                            </div>
                        </th>

                </tr>
            @empty
                <tr>
                    <td colspan="6" align="center">
                        <h6>No products for this category.</h6>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
