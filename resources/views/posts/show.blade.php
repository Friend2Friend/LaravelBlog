@extends('layouts.master')
@section('content')
    <div class="columns">
      <div class="column is-9">
        <h1 class="title is4">
          {{ $post->title }}
        </h1>
        <p>
          {{ $post->body }}
        </p>
        <hr>
        <div class="comments">
          @if ($post->comments->count() < 1)
              <p>
               <strong>No comment Yet</strong>
              </p>
          @else
            @foreach ($post->comments as $comment)
                <p class="box">
                  <strong>
                    {{ $comment->created_at->diffForHumans() }}: &nbsp
                  </strong>
                  {{ $comment->body }}
                </p>
            @endforeach
          @endif
        </div>
        <hr>
        <div class="buttons">
            <a href="/posts" class="button is-primary">Return Back</a>
        </div>
        {{-- add a comment --}}
        <div class="card">
          <div class="card-content">
          <form action="/posts/{{$post->id}}/comments" method="POST">
              @csrf
                <div class="field">
                  <label for="comment" class="label">Your Comment</label>
                  <textarea class="textarea" name="body" id="" cols="30" rows="5" placeholder="Add Comment" required></textarea>
                </div>
                <div class="field">
                  <button class="button is-link" type="submit">Comment</button>
                </div>
              </form>
              @include('layouts.errors')
          </div>
        </div>
      </div>
      @include('layouts.post-sidebar')
    </div>
@endsection