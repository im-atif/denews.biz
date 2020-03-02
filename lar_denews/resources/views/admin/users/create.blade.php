@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Create New User</div>

        <div class="card-body">
            @include('admin.includes.errors')
            <form action="{{ route('user.store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="form-group">
                    <label for="name">User Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>

                <div class="form-group">
                    <button class="btn btn-default btn-outline-success" type="submit">Add User</button>
                </div>
            </form>
        </div>
    </div>
@endsection