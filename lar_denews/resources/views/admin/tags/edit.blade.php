@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Edit Tag: {{ $tag->tag }}</div>

        <div class="card-body">
            @include('admin.includes.errors')
            <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="tag">Tag Name</label>
                    <input type="text" class="form-control" name="tag" id="tag" value="{{ $tag->tag }}">
                </div>

                <div class="form-group">
                    <button class="btn btn-default btn-outline-success" type="submit">Update Tag</button>
                </div>
            </form>
        </div>
    </div>
@endsection