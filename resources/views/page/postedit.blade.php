@extends('layout.base')

@section('content')
  <div class="container">
    <form class='post-form'
          action="{{route('post.update', $post->id)}}"
          method="post"
          accept-charset="UTF-8"
          enctype="multipart/form-data">
      @csrf
      @method('POST')
      <div class="input">
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{$post->title}}">
      </div>
      <div class="input">
        <label for="author">Author:</label>
        <input type="text" name="author" value="{{$post->author}}">
      </div>
      <div class="input">
        <input type="file" name="img" accept="image/*">
      </div>
      <div class="input">
        <label for="content">Content:</label>
        <textarea class="input-content" type="text" name="content" >Admin dice:</textarea>
      </div>
      <div class="input">
        <label for="categories">Category:</label>
        <select class="input" name="category_id" >
          @foreach ($categories as $cat)
            <option
            @if ($post->category_id == $cat->id)
              selected = "selected"
            @endif
             value="{{$cat->id}}">{{$cat->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="input">
        <button type="submit" name="button">Invia</button>
      </div>
    </form>
  </div>


@endsection
