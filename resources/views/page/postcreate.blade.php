@extends('layout.base')

@section('content')
  <div class="container">
    <form class="post-form"  action="{{route('post.store')}}" method="post">
      @csrf
      @method('POST')
      <div class="input">
        <label for="title">Title:</label>
        <input type="text" name="title" value="Lorem ipsum">
      </div>
      <div class="input">
        <label for="author">Author:</label>
        <input type="text" name="author" value="Admin">
      </div>
      <div class="input">
        <label for="content">Content:</label>
        <textarea class="input-content" type="text" name="content" >Admin dice:</textarea>
      </div>
      <div class="input">
        <label for="categories">Category:</label>
        <select class="input" name="category_id">
          @foreach ($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="input">
        <button type="submit" name="button">Invia</button>
      </div>

    </form>
  </div>


@endsection
