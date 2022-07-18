@extends('layout.admin')

@section('content')
  <div class="card">
    <div class="card-body">
      <form method="POST" action="/store-kamar">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1">Nama Kamar</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kamar" placeholder="Masukan Nama Kamar" aria-describedby="emailHelp">
        </div>
        <button  type="submit" class="btn btn-primary float-end">Tambah</button>
      </form>
    </div>
  </div>
@endsection