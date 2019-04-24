@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <br>

                    @if (Auth::user()->admin == 1)
                    <div>I'm an admin!</div>
                    <br>
                    <a class="btn btn-info" href="/users">Users Page</a>
                    <a class="btn btn-info" href="/profiles">Profiles Page</a>



                    @else
                    <div>I'm a user!</div>
                    <br>
                    

                    @endif



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
