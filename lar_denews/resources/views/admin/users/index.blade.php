@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Users</div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                <th>Sr #</th>
                <th>Image</th>
                <th>Name</th>
                <th>Admin</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @php $i = 1; @endphp
                @if($users->count() > 0)
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td><img src="{{ asset($user->profile->avatar) }}" alt="Post Image" height="60px" width="60px" style="border-radius: 50%;"></td>
                            <td>{{ $user->name }}</td>
                            <td>
                                @if($user->admin)
                                    <a href="{{ route('user.not.admin', ['id' => $user->id])}}" class="btn btn-xs btn-danger">Remove Admin</a>
                                @else
                                    <a href="{{ route('user.admin', ['id' => $user->id])}}" class="btn btn-xs btn-success">Make Admin</a>
                                @endif
                            </td>
                            <td>
                                @if(Auth::id() !== $user->id)
                                    <a href="{{ route('user.delete', ['id'  =>  $user->id]) }}" class="btn btn-xs btn-danger">Delete</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="text-center"><th colspan="5">Oppppssss! No Users Found</th></tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop