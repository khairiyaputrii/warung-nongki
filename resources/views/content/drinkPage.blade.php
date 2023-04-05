@extends('layout')
@section('uncommon_head')
@stop

@section('content')
<div class="p-2 d-flex flex-wrap">
    <h1 class="text-center col-12">Drinks</h1>
    <hr class="col-12">
    @foreach ($menu as $m)
    <div class="col-12 col-sm-4 col-lg-3 p-2">
        <div class="card border-1 border-danger h-100">
            <img src="{{ asset('storage/images/'.$m['pic_file']) }}" style="max-height:350px; object-fit: cover">
            <div class="card-body">
                <h5 class="card-title">{{ $m['name'] }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Rp {{ $m['price'] }}</h6>
            </div>
        </div>
    </div>
    @endforeach
    <h6 class="text-muted text-center col-12 p-5">New menus will be updated!</h6>
</div>
@stop