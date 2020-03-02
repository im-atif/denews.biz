@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Create New Post</div>

        <div class="card-body">
            @include('admin.includes.errors')
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" class="form-control" name="title">
                </div>

                <div class="form-group">
                    <label for="category">Select a Category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="featured">Post Image</label>
                    <input type="file" class="form-control" name="featured">
                </div>

                <div class="form-group">
                    <label for="content">Post Content</label>
                    <textarea name="blog_desc" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="tags">Select Tags</label>
                    @foreach($tags as $tag)
                        <div class="checkbox"><input type="checkbox" name="tags[]" value="{{ $tag->id }}">{{ $tag->tag }}</div>
                    @endforeach
                </div>

                <div class="form-group">
                    <button class="btn btn-default btn-outline-success" type="submit">Create Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('styles')
    <link href="{{ asset('css/summernote/summernote.css') }}" rel="stylesheet">
    <!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet"> -->
@stop

@section('scripts')
    <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>  -->
    <!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>  -->
    <script src="{{ asset('js/summernote/summernote.js') }}" defer></script>
    <!-- <link href="{{ asset('js/summernote/summernote.js') }}" rel="stylesheet"> -->
    <script>
        $(document).ready(function() {
            $('#content').summernote();
        });
    </script>
@stop