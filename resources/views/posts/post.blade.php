<div class="blog">
    <h1 class="title is-4 blog-title">
    <a href="/posts/{{$post->id}}">
      {{$post->title}}
    </a>
    </h1>
    <p class="title is-6 blog-info">
     <span>
        <small class="has-text-grey">
            {{ $post->created_at->toFormattedDateString() }}
        </small>
     </span>
     by: 
      <a href="/posts/{{ $post->user_id }}">
        {{ $post->user->first_name . " " . $post->user->last_name  }}
      </a>
    </p>
    <article class="article">
     {!! Str::words($post->body, 50, '') !!} 
     <a href="/posts/{{ $post->user_id }}">
      [...]
    </a>
    </article>
    <hr>
  </div>