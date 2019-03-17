@extends('layouts.master')
@section('content')
  <div class="content">
    <h1 class="title">
      Blogs
    </h1>
    <hr>
    <div class="columns">
      <div class="column is-9">
       @foreach ($posts as $post)
        @include('posts.post')
       @endforeach
      </div>
      @include('layouts.post-sidebar')
    </div>
  </div>
@endsection