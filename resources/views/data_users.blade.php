@extends('administrasi.template')
@section('title_section', 'Dashboard')
@section('main-content')
@include('utilities.table',[$item_judul, $item_data])
@endsection