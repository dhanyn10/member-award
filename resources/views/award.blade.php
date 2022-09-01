@extends('layout')
@section('content')
@include('navbar')
<div class="row">
  @foreach ($dataAward as $item)
  <div class="col-md-4 mb-2">
    <div class="card">
      <div class="card-body card-award">
        <div class="float-end">
          @if ($item->type == 1)
          <span class="badge text-bg-primary">Vouchers</span>
          @elseif ($item->type == 2)
          <span class="badge text-bg-warning">Products</span>
          @elseif ($item->type == 3)
          <span class="badge text-bg-danger">Gift Cards</span>
        @endif
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection