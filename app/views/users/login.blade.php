@extends('layouts.master')
@section('content')
<div class="col-sm-8 col-sm-offset-2">

	@foreach ($errors->all('<li>:message</li>') as $error)
		{{$error}}
	@endforeach
	
	<div class="page-header">
	<h2>Login in</h2>
	</div>

	{{ Form::open(array('route'=>'users.signin')) }}
	<div class="form-group">
	{{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email'])}}
	</div>
	<div class="form-group">
	{{Form::password('password', ['class' => 'form-control', 'placeholder' => 'password'])}}
	</div>
	<div class="form-group">
	{{Form::submit('Submit', ['class' => 'btn btn-success'])}}
	</div>
	{{Form::close()}}
</div>
@stop