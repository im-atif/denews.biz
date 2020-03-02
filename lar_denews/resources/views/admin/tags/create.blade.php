@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Create New Tag</div>

        <div class="card-body">
            @include('admin.includes.errors')
            <form action="{{ route('tag.store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="tag">Tag Name</label>
                    <input type="text" class="form-control" name="tag" id="tag">
                </div>

                <div class="form-group">
                    <button class="btn btn-default btn-outline-success" type="submit">Create Tag</button>
                </div>
            </form>
        </div>
    </div>
@endsection