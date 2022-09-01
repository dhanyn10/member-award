@extends('layout')
@section('content')
@if (flash()->message)
  <div class="alert alert-{{ flash()->class }}" role="alert">
    {{ flash()->message }}
  </div>
@endif
<div class="card mt-2">
  <div class="card-header">Tambah Data</div>
  <div class="card-body">
    <form method="post">
      {{ csrf_field() }}
      <input type="text" name="name" class="form-control mb-3" placeholder="name">
      <select name="type" class="form-control mb-3">
        <option value="1">Vouchers</option>
        <option value="2">Products</option>
        <option value="3">Gift Cards</option>
      </select>
      <input type="number" name="poin" class="form-control mb-3" placeholder="poin">
      <button type="submit" class="btn btn-danger">submit</button>
    </form>
  </div>
  <div class="card-footer">
    <a href="{{route('auto-add')}}" class="btn btn-sm btn-outline-secondary">Tambah Otomatis</a>
  </div>
  <div class="card-footer">
    <a href="{{route('award')}}" class="btn btn-sm btn-outline-secondary">kembali</a>
  </div>
</div>
@endsection