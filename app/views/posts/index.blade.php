@extends('layouts.master')
@section('content')
 @foreach ($posts as $post) 
 <li>{{ link_to("/posts/{$post->title})",$post->title}}</li>
 @endforeach
@stop
