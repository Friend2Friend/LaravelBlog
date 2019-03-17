@extends('layouts.master')
@section('content')
    <h1 class="title has-text-centered">
      Register
    </h1>
    <div class="column is-half
    is-offset-one-quarter">
      <form action="/register" method="POST">
        {{ csrf_field() }}
        <div class="field">
          <label class="label">First name</label>
          <div class="control">
            <input class="input" type="text" placeholder="First Name" name="first_name">
          </div>
        </div>
        <div class="field">
          <label class="label">Last name</label>
          <div class="control">
            <input class="input" type="text" placeholder="Last Name" name="last_name">
          </div>
        </div>
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
          <label class="label">Password Confirmation</label>
          <div class="control">
            <input class="input" type="password" placeholder="Password Confirmation" name="password_confirmation">
          </div>
        </div>
        <div class="field">
          <div class="control">
            <button class="button is-link is-fullwidth" type="submit">Register</button>
          </div>
        </div>
      </form>
      @include('layouts.errors')
    </div>
@endsection