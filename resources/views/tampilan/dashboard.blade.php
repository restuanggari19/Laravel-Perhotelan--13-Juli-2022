@extends('layout.admin')

@section('content')
<div class=" fs-1 text-center">HOME</div>
<br>
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header bg-primary fs-2 text-center">Total Tamu</div>
  <div class="card-body">
    <p class="card-text  fs-3 text-center">{{ $users }}</p>
  </div>
</div>
@endsection