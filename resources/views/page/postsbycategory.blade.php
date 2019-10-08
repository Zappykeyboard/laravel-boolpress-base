@extends('layout.base')


@section('content')
  Showing posts for category: {{$catName}}
  <ul>
    @foreach ($posts as $post)
      <li>
        <p>Title: {{$post->title}}</p>
        <p>By: {{$post-> author}}</p>
        <p>Created at: {{$post->creation_date}}</p>
        
      </li>
    @endforeach
  </ul>
@endsection
