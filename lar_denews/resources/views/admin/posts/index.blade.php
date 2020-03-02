@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Posts</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Sr #</th>
                <th>Image</th>
                <th>Title</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @php $i = 1; @endphp
                @if($posts->count() > 0)
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td><img src="{{ $post->featured }}" alt="Post Image" height="50"></td>
                            <td>{{ $post->title }}</td>
                            <td>
                                <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-xs btn-info"> EDIT </a>
                            </td>
                            <td>
                                <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-xs btn-danger"> Trash </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="text-center"><th colspan="5">Oppppssss! No Published Posts Found</th></tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop