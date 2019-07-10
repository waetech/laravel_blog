@extends('main')

@section('title', '| Create New Posts')

@section('stylesheets')



@endsection

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Create New Form</h1>
        <form method="POST" action="{{ route('posts.store') }}">
            <div class="form-group">
              <label name="title">Title:</label>
            <input id="title" name="title" class="form-control">
            </div>

            {{ Form::label('slug', 'Slug:')}}
            {{ Form::text('slug', null, array('class' => 'form-control', 'required', 'minlength' => '5', 'maxlength' => '255') ) }}

            {{ Form::label('category_id', 'Category:') }}
             <select class="form-control" name="category_id">
              
              @foreach ($categories as $category)
             <option value='{{ $category->id }}'>{{ $category->name }}</option>
              @endforeach
               
               

             </select>

            <div class="form-group">
              <label name="body">Post Body:</label>
            <textarea id="body" name="body" rows="10" class="form-control"></textarea>
            </div>
            <input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
          </form>
    </div>
</div>

@endsection

@section('scripts')



@endsection


