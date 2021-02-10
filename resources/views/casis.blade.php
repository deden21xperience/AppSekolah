@extends('administrasi.template')
@section('title_section', 'Data Pendaftaran')
@section('main-content')
@include('utilities.table',['casis' => $casis, 'namaKolom' => $namaKolom] )
@endsection