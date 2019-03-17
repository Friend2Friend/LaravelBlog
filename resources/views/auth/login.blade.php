@extends('layouts.master')
@section('content')
    <h1 class="title has-text-centered">
      Login
    </h1>
    <div class="column is-half
    is-offset-one-quarter">
      <form action="/login" method="POST">
        {{ csrf_field() }}
        <div class="field">
          <label class="label">Email</label>
          <div class="control">
            <input class="input" type="email" placeholder="Email" name="email">
          </div>
        </div>
        <div class="field">
          <label class="label">Password</label>
          <div class="control">
            <input class="input" type="password" placeholder="Password" name="password">
          </div>
        </div>
        <div class="field">
          <div class="control">
            <button class="button is-link is-fullwidth" type="submit">Login</button>
          </div>
        </div>
      </form>
      @include('layouts.errors')
    </div>
@endsection