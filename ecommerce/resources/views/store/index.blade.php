@extends('base')
@section('title', 'Products')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h1>Product list </h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Create</a>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4" style="width: 18rem;">
    @foreach($products as $product)

    <img class="card-img-top"  src="storage/{{ $product->image }}" alt="">

    <div class="card-body">
        <span class="badge bg-primary">{{ $product->price }} DZA</span>
        <span class="badge bg-primary">{{ $product->quantity }}</span>
      <h5 class="card-title">{{ $product->name }}</h5>
      <p class="card-text">{{ $product->description }}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
@endforeach
    {{ $products->links() }}
@endsection 
