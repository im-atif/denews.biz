@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Edit Blog Settings</div>

        <div class="card-body">
            @include('admin.includes.errors')
            <form action="{{ route('settings.update') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="site_name">Site Name</label>
                    <input type="text" class="form-control" name="site_name" id="site_name" value="{{ $settings->site_name }}">
                </div>

                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" class="form-control" name="contact_number" id="contact_number" value="{{ $settings->contact_number }}">
                </div>

                <div class="form-group">
                    <label for="contact_email">Contact Email</label>
                    <input type="email" class="form-control" name="contact_email" id="contact_email" value="{{ $settings->contact_email }}">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" class="form-control">{{ $settings->address }}</textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-default btn-outline-success" type="submit">Update Settings</button>
                </div>
            </form>
        </div>
    </div>
@endsection