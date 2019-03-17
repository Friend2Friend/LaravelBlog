@extends('layouts.master')
@section('content')
    <div class="content">
      <h1 class="title is-3">
        Create Blog
      </h1>
      <hr>
      <div class="columns">
        <div class="column is-9">
          <div class="create-form">
              <form action="/posts" method="POST">
                @csrf
                <div class="field">
                  <label for="title" class="label">Title:</label>
                  <input type="text" class="input" name="title" placeholder="Your awesome title">
                </div>
                <div class="field">
                  <label for="description" class="label">Description</label>
                  <textarea name="body" id="" cols="30" rows="10" class="textarea" placeholder="Your description"></textarea>
                </div>
                <div class="field">
                  <button class="button is-dark">
                    Publish
                  </button>
                </div>
              </form>
              @include('layouts.errors')
          </div>
        </div>
        @include('layouts.post-sidebar')
      </div>
    </div>
@endsection