@extends('layout.base')

@section('content')
  <div class="post">
    <p>Title: {{$post->title}}</p>
    <p>By: {{$post-> author}}</p>
    <p>Created at: {{$post->creation_date}}</p>
    <p>Category: {{$catName}}</p>
    <button type="button" name="button">
      <a href="{{route('post.edit', $post->id)}}">Edit</a>
    </button>
    <button type="button" name="button">
      <a href="{{route('post.destroy', $post->id)}}">!!DELETE!!</a>
    </button>

    <p>{!!$post->content!!}</p>

  </div>

@endsection
