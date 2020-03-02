@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Tags</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Sr #</th>
                <th>Tags</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @php $i = 1; @endphp
                @if($tags->count() > 0)
                    @foreach($tags as $tag)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $tag->tag }}</td>
                            <td>
                                <a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="btn btn-xs btn-info"> Edit </a>
                            </td>
                            <td>
                                <a href="{{ route('tag.delete', ['id' => $tag->id]) }}" class="btn btn-xs btn-danger"> Delete </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="text-center"><th colspan="4">Oppppssss! No tags available yet, Create and check again.</th></tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop