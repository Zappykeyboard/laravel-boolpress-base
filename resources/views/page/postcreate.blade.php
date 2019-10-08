@extends('layout.base')

@section('content')
  <div class="container">
    <form class="post-form"  action="{{route('post.store')}}" method="post">
      @csrf
      @method('POST')
      <div class="">
        <label for="title">Title:</label>
        <input type="text" name="title" value="Lorem ipsum">
      </div>
      <div class="">
        <label for="author">Author:</label>
        <input type="text" name="author" value="Admin">
      </div>
      <div class="">
        <label for="content">Content:</label>
        <input type="text" name="content" value="Admin dice:">
      </div>
      <div class="">
        <label for="categories">Categories:</label>
        <select class="" name="category_id">
          @foreach ($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" name="button">Invia</button>
    </form>
  </div>


@endsection
