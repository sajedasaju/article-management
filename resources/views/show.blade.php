@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header" style= "background-color:darkgray">{{ __('Dashboard') }}</div>

                <div class="card-body" style= "background-color:#bbbbbb4f">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if(Session::has("articleAdded"))
                    <div class="alert alert-success">
                        {{Session::get("articleAdded")}}
                   
                    </div>
                    
                     @endif

                    <br>
                    <p>You can create you article from here:<p>
                   <div class="row">
                    <a href="/articles/create " class="btn btn-primary">Add Article</a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="/home" class="btn btn-primary">Home</a>

                    <br><!--search start-->
                    <div style="float:left" class="col-md-4">
                    <form action="/search" method="GET">
                    <div class="input-group">
                    <input type="search" name="search" class="form-control" placeholder="Search by name">
                    <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                    </form>
                   

                    </div>
                    </div>
</div>
<br><br>

                    <!--search finish-->
                    @if (count($articles)>0)
                    <table class="table table-responsive"  border="2" width="100%">

                        <thead>
                        <tr border="2" >
                        <th>Name</th>
                        <th>Email</th>
                        <th>Title</th>
                        <th>Article</th>
                        
                        <th>Edit</th>
                        <th>Delete</th>
                        
                        

                        </tr>
                        
                        
                        </thead>
                        <tbody>

                        @foreach($articles as $article)
                        <tr>
                            <td>{{$article->name}}</td>
                            <td>{{$article->email}}</td>
                            <td>{{$article->title}}</td>
                            <td>{{$article->article_post}}<br><br><small>_Written on{{$article->created_at}}<small></td>

                           
                            <td><a href="articles/{{$article->id}}/edit" style="background:#444" class="btn btn-warning" >Edit</a></td>
                            <td>
                            <form action="articles/{{$article->id}}" method="POST">
                            @csrf

                         @method("DELETE")
                         <input type="submit" value="Delete" class="btn btn-danger" style="background:#8b0000c2">
                            </form>
                            
                            </td>


                        </tr>
                        
                        
                        @endforeach
                        </tbody>
                        

                    
                    </table>
                   {{$articles->links()}}
                   
                        
                    @endif
                    
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
