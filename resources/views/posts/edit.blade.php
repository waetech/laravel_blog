@extends('main')

@section('title', '| Edit Blog Post')

@section('content')

<div class="row">
    <div class="col-md-8">
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PATCH']) !!}
    <div class="col-md-12">
            {{ Form::label('title', 'Title')}}
            {{ Form::text('title', null, ["class" => 'form-control']) }}

           {{ Form::label('body', "Body:", ['class' => 'form-spacing-top']) }}
           {{  Form::textarea('body', null, ['class' => 'form-control']) }}
    </div>
</div>

    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <dt>Created At:</dt>
                <dd> {{ date('M j, Y h:iA', strtotime($post->created_at)) }}</dd>
            </dl>

            <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
            <dd> {{ date('M j, Y h:iA', strtotime($post->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                       {!! Html::LinkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                       
                    </div>
                </div>
        </div>
    </div>
    {!! Form::close() !!}
</div><!--End of the .row form-->

@endsection