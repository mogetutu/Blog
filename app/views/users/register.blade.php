@extends('layouts.master')
@section('content')
<div class="col-sm-8 col-sm-offset-2">

	@foreach ($errors->all('<li>:message</li>') as $error)
		{{$error}}
	@endforeach
	
	<div class="page-header">
	<div class="pull-right">
	<a href="{{route('users.login')}}" class="btn btn-primary">sign in</a>
	</div>
	<h2>Creat Account</h2>
	</div>
	{{ Form::open(['route' => 'users.store']) }}
	<div class="form-group">
	{{Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'username'])}}
	</div>
	<div class="form-group">
	{{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'username'])}}
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