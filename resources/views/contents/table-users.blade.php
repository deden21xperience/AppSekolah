@extends('administrasi.template')
@section('title_section', 'Manajemen Role')
@section('main-content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a href=""><i class="fas fa-plus"></i>Tambah data</a>
  </div>
  <div class="card-body">
    <table class="table table-striped">
      <thead class="thead-light">
        <tr>
          <th>No</th>
          <th>Nama User</th>
          <th>Level</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($biodatas as $biodata)
        <tr>
          <td>{{ $loop->iteration}}</td>
          <td>{{ $biodata->nama}}</td>
          <td>role_level</td>
          <td>
            <a href="#" class="btn btn-warning">edit</a>
            <a href="#" class="btn btn-warning">delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection