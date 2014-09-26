@extends('layouts.master')
@section ('content')
<div class="col-sm-8 col-sm-offset-2">
@foreach ($errors->all('<li>:message</li>') as $error)
		{{$error}}
@endforeach
<div class="page-header">
<h2>Create new blog</h2>
{{Form::label('Title')}}
{{Form::text('title')}}
</div>
    <div class="btn-group">
{{Form::open(['route' => 'posts.store'])}}

{{Form::label('Post')}}
{{Form::textarea('blog')}}
{{Form::submit('Done',(['class' => 'btn btn-primary']))}}
{{Form::close()}}
</div>
@stop