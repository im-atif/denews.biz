@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Edit Post: {{ $post->title }}</div>

        <div class="card-body">
            @include('admin.includes.errors')
            <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                </div>

                <div class="form-group">
                    <label for="category">Select a Category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option
                                value="{{ $category->id }}"
                                @if($post->category->id === $category->id) selected @endif
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="featured">Post Image</label>
                    <input type="file" class="form-control" name="featured">
                </div>

                <div class="form-group">
                    <label for="tags">Select Tags</label>
                    @foreach($tags as $tag)
                        <div class="checkbox"><input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                             @foreach($post->tags as $t)
                                 @if($tag->id === $t->id) checked @endif
                             @endforeach
                            >{{ $tag->tag }}</div>
                    @endforeach
                </div>

                <div class="form-group">
                    <label for="content">Post Content</label>
                    <textarea name="blog_desc" id="content" cols="5" rows="5" class="form-control">{{ $post->content }}</textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-default btn-outline-success" type="submit">Update Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection