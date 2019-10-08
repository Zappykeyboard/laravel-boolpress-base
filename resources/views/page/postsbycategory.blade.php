@extends('layout.base')


@section('content')
  Showing posts for category: {{$catName}}
  <ul>
    @foreach ($posts as $post)
      <li>
        <p>Title: {{$post->title}}</p>
        <p>By: {{$post-> author}}</p>
        <p>Created at: {{$post->creation_date}}</p>
        <p> <a href="{{route('post.show', $post->id)}}">Leggi il post</a> </p>
      </li>
    @endforeach
  </ul>
@endsection
