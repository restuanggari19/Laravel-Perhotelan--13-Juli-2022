@extends('layout.admin')

@section('content')
    <div class="card">
        <div class="card-body">
        <form method="POST" action="/update">
            @csrf
        <div class="mb-3">
          <label type="hidden" for="exampleInputEmail1">Nama Tamu</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_tamu" placeholder="Masukan Nama Anda" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Jenis Kelamin</label>
          <select class="form-control" name="jenis_kelamin">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Nama Kamar</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kamar" placeholder="Masukan Nama Kamar" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">No Kamar</label>
          <input type="number" class="form-control" id="exampleInputEmail1" name="no_kamar" placeholder="Masukan No Kamar" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Fasilitas</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="fasilitas" placeholder="Fasilitas" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">No Handphone</label>
          <input type="number" class="form-control" id="exampleInputEmail1" name="no_handphone" placeholder="Masukan No Handphone" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Masukan Email" aria-describedby="emailHelp">
        </div>
            <button type="submit" class="btn btn-primary float-end">Update</button>
        </form>
        </div>
    </div>  
@endsection