@extends('users.admin.app')
@section('title', ($isUpdate ? 'Update' : 'Create') . ' ' . 'products')

@section('content')
    <h1>@yield('title')</h1>
    @php
        $route = route('products.store');
        if ($isUpdate) {
          $route =  route('products.update', $product);
        }
    @endphp

    <form action="{{ $route }}" method="post" enctype="multipart/form-data">
        @csrf
        @if($isUpdate)
        @method('PUT')
          @endif

        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}">
        </div>
        <div class="form-group">
            <label for="name" class="form-label">Description</label>
            <textarea type="text" name="description" id="description" class="form-control">{{ old('description', $product->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="name" class="form-label">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control"
                value="{{ old('quantity', $product->quantity) }}">
        </div>
        <div class="form-group">
            <label for="name" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            @if ($product)
                <img width="100px" src="/storage/{{ $product->image }}" alt="">
            @endif
        </div>
        <div class="form-group">
            <label for="name" class="form-label">Price</label>
            <input type="number" name="price" step="0.5" class="form-control"
                value="{{ old('price', $product->price) }}">
        </div>
        <div class="form-group">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-select">
                <option value="" >----Choisir la catégorie----</option>
                @foreach($categories as $category)
                <option @selected(old('category_id', $product->category_id) === $category->id) value="{{$category->id}}">{{$category->name}}</option>
                @endforeach

            </select>
        </div>
<br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}">
        </div>
    </form>
@endsection
