@extends('layout.base')


@section('content')
  <div class="container">

    <div class="posts">
      Showing posts for category: {{$catName}}
        @foreach ($posts as $post)
          <div class='post'>
            <p>Title: {{$post->title}}</p>
            <p>By: {{$post-> author}}</p>
            <p>Created at: {{$post->creation_date}}</p>
            <p>Category: {{$catName}}</p>
            <p> <a href="{{route('post.show', $post->id)}}">Leggi il post</a> </p>
          </div>
        @endforeach
    </div>
  </div>

@endsection
