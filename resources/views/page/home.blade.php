@extends('layout.base')

@section('content')

<div class="container">

  <div class="posts">
      @foreach ($posts as $post)
        <div class='post'>
          <p>Title: {{$post->title}}</p>
          <p>By: {{$post-> author}}</p>
          <p>Created at: {{$post->creation_date}}</p>
          <p>Category: {{$categories[($post->category_id)-1]->name}}</p>
          <p> <a href="{{route('post.show', $post->id)}}">Leggi il post</a> </p>
        </div>
      @endforeach
  </div>


  <div class="categories">
    @foreach ($categories as $cat)
      <button class="cat-button" type="button" name="button">
        <a href="{{route('category.show', $cat->id)}}">{{$cat->name}}</a>
      </button>
    @endforeach
    <button class="new-post-button">
      <a href="{{route('post.create')}}">Nuovo Post...</a>
    </button>
  </div>


</div>



@endsection
