@extends('layout')
@section('content')
<div class="row">
  <div class="col-md-4 offset-md-4 text-center">
    {{config('app.name')}}
    @if (flash()->message)
        <div class="alert alert-{{ flash()->class }}" role="alert">
          {{ flash()->message }}
        </div>
    @endif
    <p>enter your email address<br/>to sign in and continue</p>
    <form method="post">
      {{ csrf_field() }}
      <input type="text" name="email" placeholder="Email Address" class="form-control mb-3"/>
      <button type="submit" class="btn btn-secondary">Sign In</button>
    </form>
  </div>
</div>
@endsection