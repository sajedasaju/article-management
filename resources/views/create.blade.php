@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header"  style="background-color:darkgrey">


                <h3 style="text-align:center;color:black">Add Article</h3>
                
                </div>
                <!--close card-header-->
                <div class="card-body"style= "background-color:#bbbbbb4f">

                <form action="/articles" method="POST">
                @csrf

                    <div class="form-group">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                     placeholder="Writer name" value="{{old('name')}}">
                    @error('name')

                    <span class="text-danger">{{$message}}</span>
                    @enderror

                     </div>
                     <!--close form-group-->

                     <div class="form-group">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Writer email" value="{{old('email')}}">

                    @error('email')

                    <span class="text-danger">{{$message}}</span>
                    @enderror
                     </div>
                     <!--close form-group-->

                     <div class="form-group">
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Writer title of your article" value="{{old('title')}}">
                    @error('title')

                        <span class="text-danger">{{$message}}</span>
                        @enderror
                     
                     </div>
                     <!--close form-group-->

                     <div class="form-group">
                    <input type="text" name="article_post" class="form-control @error('article_post') is-invalid @enderror" placeholder="Writer your article" value="{{old('article_post')}}">

                    @error('article_post')

                        <span class="text-danger">{{$message}}</span>
                        @enderror
                     </div>
                     <!--close form-group-->

                     <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Add Article">

                     </div>
                     <!--close form-group-->



                 </form>


                </div>
                <!--close card-body-->
                
            </div>
            <!--close card-->
        </div><!--col-md-8 div-->
    </div><!--row justify-content-center div-->
</div><!--container div-->
@endsection