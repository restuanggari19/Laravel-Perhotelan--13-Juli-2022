@extends('layout.admin')

@section('content')
  <div class="card">
    <div class="card-body">
      <form method="POST" action="/store-tamu">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1">Nama Tamu</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_tamu" placeholder="Masukan Nama Anda" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Jenis Kelamin</label>
          <select class="form-control" name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="alamat" placeholder="Masukan Alamat Anda" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">No Telepon</label>
          <input type="number" class="form-control" id="exampleInputEmail1" name="no_telepon" placeholder="Masukan No Telepon" aria-describedby="emailHelp">
        </div>
        <button  type="submit" class="btn btn-primary float-end">Tambah</button>
      </form>
    </div>
  </div>
@endsection