@extends('layout')
@section('content')
<div class="row">
  <div class="col-md-4 offset-md-4 text-center">
    {{config('app.name')}}
    <p>enter your email address<br/>to sign in and continue</p>
    <input type="text" name="" id="" placeholder="Email Address" class="form-control mb-3"/>
    <button class="btn btn-secondary">Sign In</button>
  </div>
</div>
@endsection