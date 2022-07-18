@extends('layout.admin')

@section('content')
    <div class="card">
        <div class="card-body">
        <form method="POST" action="/update">
            @csrf
        <div class="mb-3">
        <input type="hidden" class="form-control" name="id" value="{{ $tamu->id }}">
          <label type="hidden" for="exampleInputEmail1">Nama Tamu</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_tamu" placeholder="Masukan Nama Anda" aria-describedby="emailHelp" value="{{ $tamu->nama_tamu }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Jenis Kelamin</label>
          <select class="form-control" name="jenis_kelamin">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="alamat" placeholder="Masukan Alamat Anda" aria-describedby="emailHelp" value="{{ $tamu->alamat }}">
        </div>
            <div class="mb-3">
          <label for="exampleInputEmail1">No Telepon</label>
          <input type="number" class="form-control" id="exampleInputEmail1" name="no_telepon" placeholder="Masukan No Telepon" aria-describedby="emailHelp" value="{{ $tamu->no_telepon}}">
        </div>
            <button type="submit" class="btn btn-primary float-end">Update</button>
        </form>
        </div>
    </div>  
@endsection