@extends('main')

@section('title', '| Homepage')

@section('content')

<div class="row">
        <div class="col-md-12">
                <div class="jumbotron">
                        <h1 class="display-4">Welcome to my blog!</h1>
                        <p class="lead">Thank you for visiting.  This is my test website built with Laravel. Please read my latest post.</p>
                        <hr class="my-4">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
                      </div>
        </div>
    </div><!--End of header row-->
<div class="row">
        <div class="col-md-8">

         @foreach($posts as $post)

            <div class="post">
            <h3>{{ $post->title }}</h3>
            <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." :"" }}</p>
            <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            @endforeach

            </div>
            <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
            </div>

</div>

@endsection

