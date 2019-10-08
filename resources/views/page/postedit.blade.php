@extends('layout.base')

@section('content')
  <div class="container">
    <form class='post-form'  action="{{route('post.update', $post->id)}}" method="post">
      @csrf
      @method('POST')
      <div class="">
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{$post->title}}">
      </div>
      <div class="">
        <label for="author">Author:</label>
        <input type="text" name="author" value="{{$post->author}}">
      </div>
      <div class="">
        <label for="content">Content:</label>
        <input type="text" name="content" value="{{$post->content}}">
      </div>
      <div class="">
        <label for="categories">Categories:</label>
        <select class="" name="category_id" >
          @foreach ($categories as $cat)
            <option
            @if ($post->category_id == $cat->id)
              selected = "selected"
            @endif
             value="{{$cat->id}}">{{$cat->name}}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" name="button">Invia</button>
    </form>
  </div>


@endsection
