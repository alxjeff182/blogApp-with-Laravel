@extends('main')
@section('content')
@section('title', '| Create New Post')

<div class="container">
    <div class="row">
        <div class="col-md-8 text-center">
            <h2>Create a new post</h2>
{!! Form::open(['route' => 'posts.store']) !!}
{{ Form::label('title' , 'Title') }}
{{ Form::text('title' , null, array('class'=>'form-control')) }}
{{ Form::label('body' , 'Body') }}
{{ Form::textarea('body' , null, array('class'=>'form-control')) }}
{{ Form::submit('Create post', array('class'=>'btn btn-primary')) }}
{!! Form::close() !!}
</div>
    </div>
</div>

@endsection
