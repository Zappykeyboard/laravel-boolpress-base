@extends('layout.base')

@section('content')

  <div class="categories">
    @foreach ($categories as $cat)
      |<a href="#">{{$cat->name}}</a>
    @endforeach
  </div>

  <ul>
    @foreach ($posts as $post)
      <li>
        <p>By: {{$post-> author}}</p>
        <p>{{$post->content}}</p>
        <p>Created at: {{$post->creation_date}}</p>
      </li>
    @endforeach
  </ul>

@endsection
