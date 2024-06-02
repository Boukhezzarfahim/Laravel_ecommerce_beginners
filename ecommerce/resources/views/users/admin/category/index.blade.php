@extends('users.admin.app')
@section('title', 'Category')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Category list </h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>

                        <th>
                            <div class="btn-group gap-2">
                                <a href="{{route('categories.show', $category)}}" class="btn btn-info">Show</a>

                                <a href="{{route('categories.edit', $category)}}" class="btn btn-primary">Update</a>
                                <form method="post" action="{{route('categories.destroy' , $category)}}">
                                    @csrf
                                    @method('DELETE')
                        <button wire:click="deleteProduct({{ $category->id }})" class="btn btn-danger">Delete</button>
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
    {{ $categories->links() }}
@endsection
