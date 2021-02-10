@extends('administrasi.template')
@section('title_section', 'Dashboard')
@section('main-content')
<div class="row justify-content-center mb-2">
  {{-- @auth       --}}
  <div class="col my-2">
    <div class="card">
      <div class="card-header">
      </div>
      <div class="card-body text-center">
        {{-- @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
      @endif --}}
      {{-- {{ __('You are logged in!') }} --}}

      <h3>SELAMAT DATANG</h3>
      <h4><b>{{ strtoupper(Auth::user()->name) }}</b></h4>
      <h5>Data Anda belum lengkap, silahkan lengkapi, clik tombol lengkapi untuk melanjutkan</h5>
      @role('casis')
      <p> No. Pendaftaran Anda: <b>{{ Auth::user()->userable->no_pendaftaran}}</b></p>
      @endrole
      <a href="{{ route('edit_profile_home', Auth::user()->id) }}" class="btn btn-primary">Lengkapi</a>
    </div>
  </div>
</div>
</div>
<div class="row">
  <div class="col my-2">
    <div class="card">
      <div class="card-header">
      </div>
      <div class="card-body text-center">
        @include('components.progress')
      </div>
    </div>
  </div>
</div>
{{-- @else --}}

@role('operator')
<div class="col-lg-3 col-6">
  <!-- small box -->
  <div class="small-box bg-warning">
    <div class="inner">
      <h3>{{ \App\Student::where('status',0)->count() }}</h3>
      <p>Casis Mendaftar</p>
    </div>
    <div class="icon">
      <i class="ion ion-person-add"></i>
    </div>
    <a href="{{Route('data_ppdb')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
</div>
@endrole
@endsection