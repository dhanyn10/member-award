@extends('layout')
@section('content')
@include('navbar')
@include('alert')
<div class="row">
  @if (count($dataAward) > 0)
  @foreach ($dataAward as $item)
  <div class="col-md-4 mb-2">
    <div class="card border-0 card-award">
      <img data-src="{{$item->image}}" class="lazy card-img"/>
      <div class="card-img-overlay">
        <div class="float-end">
          @if ($item->type == 1)
          <span class="badge text-bg-primary">Vouchers</span>
          @elseif ($item->type == 2)
          <span class="badge text-bg-warning">Products</span>
          @elseif ($item->type == 3)
          <span class="badge text-bg-danger">Gift Cards</span>
        @endif
        </div>
        <div class="card-poin">
          <span class="text-disabled">{{$item->poin}}</span>
          @if (session('role') == 1)
            <form action="{{url('award/delete', $item->id)}}" method="post" class="float-end">
                {{ csrf_field() }}
              <button type="submit" class="btn btn-outline-danger btn-sm">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </button>
            </form>
          @endif
        </div>
      </div>
    </div>
    <strong class="text-disabled">{{$item->name}}</strong>
  </div>
  @endforeach
  {{ $dataAward->links() }}
  @else
  <div class="col-lg-12">
    <div class="alert alert-danger" role="alert">
      no data found
    </div>
  </div>
  @endif
</div>
@endsection