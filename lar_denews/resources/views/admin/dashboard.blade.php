@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">

            <div class="row">
                
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-header">PUBLISHED <br/>  POSTS</div>
                        <div class="card-body">
                            <h1>{{ $published_posts }}</h1>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-header">TRASHED <br/> POSTS</div>
                        <div class="card-body">
                            <h1>{{ $trashed_posts }}</h1>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-header">TOTAL <br/> USERS</div>
                        <div class="card-body">
                            <h1>{{ $total_users }}</h1>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-header">TOTAL <br/> CATEGORIES</div>
                        <div class="card-body">
                            <h1>{{ $total_categories }}</h1>
                        </div>
                    </div>
                </div>

            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

        </div>
    </div>
@endsection
