@extends('layout')
@section('content')
<div class="row">
  <div class="col-md-4 offset-md-4 mt-4 text-center">
    <i class="fa fa-star text-warning" style="font-size: 10em;" aria-hidden="true"></i>
    <h1 style="font-weight: bolder">{{strtoupper(config('app.name'))}}</h1>
    @if (flash()->message)
        <div class="alert alert-{{ flash()->class }}" role="alert">
          {{ flash()->message }}
        </div>
    @endif
    <p>enter your email address<br/>to sign in and continue</p>
    <form method="post">
      {{ csrf_field() }}
      <input type="text" name="email" placeholder="Email Address" class="form-control mb-3"/>
      <button type="submit" class="btn btn-secondary rounded-0">Sign In</button>
    </form>
  </div>
</div>
@endsection