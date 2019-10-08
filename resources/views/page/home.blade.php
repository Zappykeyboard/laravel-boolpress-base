@extends('layout.base')

@section('content')

  <div class="categories">
    @foreach ($categories as $cat)
      |<a href="{{route('category.show', $cat->id)}}">{{$cat->name}}</a>
    @endforeach
  </div>

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
