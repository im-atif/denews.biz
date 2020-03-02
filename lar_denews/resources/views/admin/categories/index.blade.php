@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Sr #</th>
                <th>Category Name</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @php $i = 1; @endphp
                @if($categories->count() > 0)
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-xs btn-info"> EDIT </a>
                            </td>
                            <td>
                                <a href="{{ route('category.delete', ['id' => $category->id]) }}" class="btn btn-xs btn-danger"> X </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="text-center"><th colspan="4">Oppppssss! No Categories Available Yet</th></tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop