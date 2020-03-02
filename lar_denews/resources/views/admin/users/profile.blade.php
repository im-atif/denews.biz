@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Edit your profile</div>

        <div class="card-body">
            @include('admin.includes.errors')
            <form action="{{ route('user.profile.update') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email"  value="{{ $user->email }}">
                </div>

                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <div class="form-group">
                    <label for="avatar">Upload New Avatar</label>
                    <input type="file" class="form-control" name="avatar" id="avatar" >
                </div>

                <div class="form-group">
                    <label for="facebook">Facebook Profile</label>
                    <input type="text" class="form-control" name="facebook" id="facebook" value="{{ $user->profile->facebook }}">
                </div>

                <div class="form-group">
                    <label for="instagram">Instagram Profile</label>
                    <input type="text" class="form-control" name="instagram" id="instagram" value="{{ $user->profile->instagram }}">
                </div>

                <div class="form-group">
                    <label for="about">About You</label>
                    <textarea name="about" id="about" cols="6" rows="6" class="form-control">{{ $user->profile->about }}</textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-default btn-outline-success" type="submit">Update Profiel</button>
                </div>
            </form>
        </div>
    </div>

@endsection