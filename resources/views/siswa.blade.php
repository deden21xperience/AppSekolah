@extends('administrasi.template')
@section('title_section', 'Daftar Siswa')
@section('main-content')
<div class="my-3">
  <label for="kelas">Rombel</label>
  <select name="kelas" id="kelas">
    <option value="tkj"></option>
  </select>

  <a href="{{ route('create_student') }}" class="btn btn-primary">Tambah Data</a>
  <a href="#" class="btn btn-danger">Import</a>
  <a href="#" class="btn btn-warning">Export</a>
</div>
@if (session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif
<div class="table-responsive-md">
  <table class="table table-striped table-sm">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Tempat Lahir</th>
        <th scope="col">Tgl Lahir</th>
        <th scope="col">L/P</th>
        <th scope="col">Rombel Saat Ini</th>
        <th scope="col">Alamat</th>
        <th scope="col">Ayah</th>
        <th scope="col">Ibu</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $student)
      <tr>
        {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $student->biodata['nama'] }}</td>
        <td>{{ $student->biodata['tpt_lahir'] }}</td>
        <td>{{ $student->biodata['tgl_lahir']}}</td>
        <?php
          $status;
          if ($student->status == 0) {
            $status = "Casis";
          } elseif ($student->status == 1) {
            $status = "Aktif";
          } elseif ($student->status == 2) {
            $status = "Alumni";
          } else {
            $status = "Keluar";
          }
      ?>
        {{-- <td>{{ $jk }}</td> --}}
        <td>{{ $student->biodata['jk'] }}</td>
        <td>{{ strtoupper( $student->jurusan)}}</td>
        <td>
          {{ $student->biodata['alamat'] ." RT. ". $student->biodata['RT']." RW. ". $student->biodata['rw']." Kec. ". $student->biodata['kec']. " Kab. ".$student->biodata['kab'] . " Prov. ".$student->biodata['prov']}}
        </td>
        <td>{{ $student->nama_ayah }}</td>
        <td>{{ $student->nama_ibu }}</td>
        <td>{{ $status }}</td>

        <td>
          <a href="{{ url('/siswa').'/'.$student->id }}/edit" class="badge badge-primary">edit</a>
          <form action="{{ url('/siswa') .'/'. $student->id }}" method="post" class="d-inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>

</div>
@endsection