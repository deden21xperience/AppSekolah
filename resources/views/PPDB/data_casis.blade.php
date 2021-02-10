@extends('administrasi.template')
@section('title_section', 'Data calon siswa')
@section('main-content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <!-- Button trigger modal -->
    <button style="float: right;" type="button" class="btn btn-primary" data-toggle="modal"
      data-target="#staticBackdrop"> <i class="fas fa-plus"></i> Casis
    </button>
  </div>
  <div class="card-body">
    <table class="table table-striped table-responsive-lg">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">No.Pendaftaran</th>
          <th scope="col">Nama</th>
          <th scope="col">Asal Sekolah</th>
          <th scope="col">No.Hp</th>
          <th scope="col">Kelengkapan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($casis as $item)
        <tr>
          <td scope="row">{{ $loop->iteration}}</td>
          <td>{{ $item->no_pendaftaran }}</td>
          <td>{{ $item->biodata['nama'] }}</td>
          <td>{{ $item->biodata['sekolah'] }}</td>
          <td>no hp</td>
          <td>@include('utilities.progressbar')</td>
          <td>
            {{-- <form action="{{ route('delete_role',$item->id) }}" method="post" class="d-inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">delete</button> --}}
            <button type="submit" class="btn btn-warning">detail</button>
            {{-- </form> --}}
            {{-- <a href="#" class="btn btn-warning">edit</a> --}}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection