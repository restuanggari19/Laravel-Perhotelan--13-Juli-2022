@extends('layout.admin')

@section('content')
<div class=" fs-1 text-center">HOME</div>
<br>
<div class="row">
  <div class="col-sm-3">
    <div class="card bg-primary ">
      <div class="card-body ">
      <div class="text-center">
        <h5 class="card-title text-white fs-1">Total Tamu</h5>
        <br>
        <a href="#" class="btn btn-primary fs-3">{{ $users }}</a>
      </div>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card bg-success">
      <div class="card-body">
      <div class="text-center">
        <h5 class="card-title text-white fs-1">Total....</h5>
        <br>
        <a href="#" class="btn btn-success fs-3">{{ $users }}</a>
      </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
@endsection