
@php
    use Illuminate\Support\Facades\Route;

    $isAdminRoute = (Route::is('admin_dashboard'));
    $isCategoriesRoute = (Route::is('categories.*'));
    $isProductsRoute = (Route::is('products.*'));
    $defaultClasses = 'list-group-item list-group-item-action';
@endphp

<div class="list-group">
    <a wire:navigate @class([$defaultClasses, 'active' => $isAdminRoute]) href="{{route('admin_dashboard')}}">Dashboard</a>
    <a wire:navigate @class([$defaultClasses, 'active' => $isProductsRoute]) href="{{route('products.index')}}"
       class="list-group-item list-group-item-action">Products</a>
    <a  wire:navigate @class([$defaultClasses, 'active' => $isCategoriesRoute]) href="{{route('categories.index')}}" class="list-group-item list-group-item-action">Categories</a>
</div>