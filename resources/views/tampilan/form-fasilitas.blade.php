@extends('layout.admin')

@section('content')
  <div class="card">
    <div class="card-body">
      <form method="POST" action="/store-fasilitas">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1">Nama Fasilitas</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_fasilitas" placeholder="Masukan Nama fasilitas" aria-describedby="emailHelp">
        </div>
        
        <div class="mb-3">
          <label for="exampleInputEmail1">Harga</label>
          <input type="number" class="form-control" id="exampleInputEmail1" name="harga" placeholder="Masukan Harga" aria-describedby="emailHelp">
        </div>
        <button  type="submit" class="btn btn-primary float-end">Tambah</button>
      </form>
    </div>
  </div>
@endsection