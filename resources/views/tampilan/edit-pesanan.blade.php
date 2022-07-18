@extends('layout.admin')

@section('content')
    <div class="card">
        <div class="card-body">
          <form method="POST" action="/edit-pesanan">
          @csrf
        <div class="mb-3">
          <input type="hidden" class="form-control" id="exampleInputEmail1" name="id" aria-describedby="emailHelp" value="{{ $tamu_hotel->id }}">
          <label for="exampleInputEmail1">Nama Tamu</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_tamu" placeholder="Masukan Nama Anda" aria-describedby="emailHelp" value="{{ $tamu_hotel->nama_tamu }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Nama Kamar</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kamar" placeholder="Masukan Nama Kamar" aria-describedby="emailHelp" value="{{ $tamu_hotel->nama_kamar }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">No Kamar</label>
          <input type="number" class="form-control" id="exampleInputEmail1" name="no_kamar" placeholder="Masukan No Kamar" aria-describedby="emailHelp" value="{{ $tamu_hotel->no_kamar }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1">Fasilitas</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="fasilitas" placeholder="Masukan Fasilitas" aria-describedby="emailHelp" value="{{ $tamu_hotel->fasilitas }}">
        </div>
            <button type="submit" class="btn btn-primary float-end">Update</button>
        </form>
        </div>
    </div>  
@endsection