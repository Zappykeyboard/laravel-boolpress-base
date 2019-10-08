@extends('layout.base')

@section('content')

  <p>Title: {{$post->title}}</p>
  <p>By: {{$post-> author}}</p>
  <p>Created at: {{$post->creation_date}}</p>
  <p>Category: {{$catName}}</p> 
  <p>{{$post->content}}</p>

@endsection
