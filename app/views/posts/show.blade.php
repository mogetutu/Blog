@extends('layouts.master')
@section ('content')
<h2>Blog</h2>
<div class="pull-right">
<div class="btn-group">
		<a href="{{route('users.register')}}" class="btn btn-primary">create blog</a>
    </div>
    @foreach ($posts as $post) 
    <li>{{$post->title}}</li>
    @endforeach
    </div>
@stop