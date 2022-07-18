@extends('layout.admin')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

  <div class="card">
    <div class="card-header fs-2 text-center">Data Pesanana Kamar 
    <a href="/form-kamar" class="btn btn-primary float-end">Tambah Kamar</a>
    </div>
    <div class="card-body">
      <table class="table datatable" id="kamar">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Kamar</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  
  <script>
    $('#kamar').DataTable({
      'ajax': '/datatable/kamar'
    })
  </script>
@endsection