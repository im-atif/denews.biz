@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Edit Category</div>

        <div class="card-body">
            @include('admin.includes.errors')
            <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}">
                </div>

                <div class="form-group">
                    <button class="btn btn-default btn-outline-success" type="submit">Update Category</button>
                </div>
            </form>
        </div>
    </div>
@endsection