@extends('layouts.app')

@section('content')

<div class="container">
    

<secttion  class="banner" style="vertical-align:middle">
    <img  src="/images/ARTICLE.png" alt="Cover Image" width="1000" >

    </section>


    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <h1>Welcome To Article Management
                
            </h1>
            <p style="font-size:18px">The article is a written composition in prose, usually nonfiction, on a specific topic, 
            forming an independent part of a book or other publication, as a newspaper or magazine. 
            That project I developed for this web development course. This project's motive is that some bloggers or article writers cannot
             manage their articles properly, so I try to make something that can help keep their articles in one place. I try to keep it simple
              that users can use this blog site quickly. I include CRUD operation, search operation 
            & add some features. I hope you will like this project.</p>

            <br>

            <section class="list">
                <p style="font-size:15px">A list of articles will appear once you start adding them : 
                <div class="link"><a href="/articles/create " class="btn btn-primary">Add Article</a></div><p>
               
</section>
<section class="list">
                <p style="font-size:15px">To see the list of all articles you can click this link: 
                    <div class="link"><a href="/articles" class="btn btn-primary">Show Article</a></div><p>
                

        </div>
    </div>
    <section>
</div>
@endsection