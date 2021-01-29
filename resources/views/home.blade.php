@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align:center; background-color:darkgrey"class="card-header" >{{ __('Dashboard') }}</div>

                <div class="card-body" style= "background-color:#bbbbbb4f">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif<br>
                    <!--<h1>User Dashboard</h1>-->


                  
                    <div style="text-align:center">
                    {{ __('You are logged in!') }}<br>
                    <p>You can create or show your article from here:<p>
                    <a href="/articles/create " class="btn btn-primary">Add Article</a>
                    <a href="/articles" class="btn btn-primary">Show Article</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
