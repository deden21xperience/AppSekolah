@extends('administrasi.template')
@section('content')
<div class="card">
  <div class="card-header">
    <h3>Mata Pelajaran</h3>
    <h4>Matematika</h4>
    <p>Senin</p>
    <p>30 Januari 2021</p>
    <p>Counter Time</p>
    00:05
  </div>
  <div class="card-body">
    <h5 class="card-title">Silahkan absen terlebih dahulu</h5>
    {{-- <a href="#" class="btn btn-primary">Masuk Kelas</a> --}}
    <form action="{{ route('absensi') }}" method="POST">
      @csrf
      {{-- @method('') --}}
      <button type="submit" class="btn btn-primary" id="tes">tes</button>
    </form>
  </div>
</div>
@if (session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif


@php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
@endphp

@endsection