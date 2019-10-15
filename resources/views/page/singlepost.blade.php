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
    <p> <img src="img/{{$post->img}}" alt="No image!"></p>
    <div class="tags">
      Tags:
      @foreach ($post->tags as $tag)
        <a href='{{route('tag.show', $tag->id)}}'> {{$tag->name}} </a>
      @endforeach
    </div>
  </div>

@endsection
