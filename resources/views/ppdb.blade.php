@extends('layouts.app')
@section('title', 'PPDB SMK Pasja')
@section('content')
<header class="mb-3">

  <nav class="navbar navbar-expand-lg navbar-light">

    <div class="container-fluid">

      <a class="navbar-brand" href="#">SMK Pasundan Jatinangor</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        <div class="navbar-nav ml-auto">

          <a class="nav-link" href="#fasilitas">Fasilitas</a>

          <a class="nav-link" href="#program-keahlian">Keahlian</a>

          {{-- <a class="nav-link" href="#">Daftar</a> --}}

          {{-- @if (Route::has('login'))

            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();

          document.getElementById('logout-form').submit();">

          {{ __('Logout') }}

          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

            @csrf

          </form>

          {{--@else



              @endif --}}

          {{-- <a class="nav-link" href="{{ route('login') }}">Login</a> --}}



          @auth

          <a class="nav-link" href="{{ url('/home') }}">Home</a>

          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();

                        document.getElementById('logout-form').submit();">

            <i class="fas fa-sign-out-alt"></i>{{ __('Logout') }}

          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

            @csrf

          </form>

          @else

          <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-key"></i> Login</a>

          @endauth

        </div>

      </div>

  </nav>

  {{-- <div class="banner"> --}}

  <div class="banner-img">

    <img data-sizes="auto" loading="lazy" data-src="{{ asset('/img/smkpasja-1.webp') }}" class="lazyload"
      alt="ppdb-pasundan-jatinangor2021/2022" width="1199">

  </div>

  {{-- <div class="banner-logo">

        <a href="">

          <img data-sizes="auto" src="{{ asset('img/LOGO.png') }}" alt="pasja" width=75>

  </a>

  </div> --}}

  {{-- <div class="banner-text text-center shadow rounded"> --}}

  @guest

  <div class="container-fluid">

    <div class="row justify-content-center">

      <div class="col-sm-10 text-center info-panel">

        <h4>PENERIMAAN PESERTA DIDIK BARU</h4>

        <h5>TAHUN PELAJARAN 2021-2022</h5>

        <a href="{{ route('register_ppdb') }}" class="btn btn-primary">Klik disini untuk mendaftar</a>

      </div>

    </div>

  </div>

  @endguest

</header>

<!--------------------------------------------------------------------------->

<div class="container-fluid">

  <section>

    <h3>Alur Pendaftran Online</h3>

    <div class="row">

      @guest

      <div class="col-md-4">

        <div class="card" style="height: 250px">

          <div class="card-header bg-warning text-center">

            <h3 class="card-title">1</h3>

          </div>

          <div class="card-body">

            <p>Calon Peserta didik terlebih dahulu membuat <a href="{{ route('register_ppdb') }}">akun</a></p>

          </div>

        </div>

      </div>

      <div class="col-md-4">

        <div class="card" style="height: 250px">

          <div class="card-header bg-info text-center">

            <h3 class="card-title">2</h3>

          </div>

          <div class="card-body">

            <p>Jika selesai membuat akun bisa langsung <a href="{{route('login')}}">login </a> dengan username dan
              password

              yang

              dibuat</p>

            <small>Lengkapi Formulir yang diberikan dengan data yang benar</small>

          </div>

        </div>

      </div>

      <div class="col-md-4">

        <div class="card" style="height: 250px">

          <div class="card-header bg-primary text-center">

            <h3 class="card-title">3</h3>

          </div>

          <div class="card-body">

            <p>Melakukan pembayaran pendaftaran sebesar Rp.350.000 :</p>

          </div>

        </div>

      </div>

      @endguest



      @auth

      <div class="col-md-4">

        <div class="card" style="height: 250px">

          <div class="card-header bg-info text-center">

            <h3 class="card-title">1</h3>

          </div>

          <div class="card-body">

            <p>Selesaikan proses perekaman data dengan melengkapi Formulir yang diberikan dengan data yang benar</p>

          </div>

        </div>

      </div>

      <div class="col-md-4">

        <div class="card" style="height: 250px">

          <div class="card-header bg-primary text-center">

            <h3 class="card-title">2</h3>

          </div>

          <div class="card-body">

            <p>Melakukan pembayaran pendaftaran sebesar Rp.350.000 :</p>

          </div>

        </div>

      </div>

      @endauth

















    </div>

    {{-- <div class="row">

      <div class="col">

        <div class="card">

          <div class="card-body">

            <h3 class="card-title">Panduan Pendaftaran</h3>

            <div class="card-text">

              <ol>

                <li></li>

<li>

  

</li>

<li></li>

<li>

  <p>Pembayaran dapat dilakukan dengan 2 cara:</p>

  <ol type="a">

    <li>Transfer melalui Bank:

    </li>

    <p>Biaya pendaftaran ditambahkan tiga digit kode unik sesuai no pendaftaran</p>

    <p><b>contoh:</b></p>

    <p>nomor pendaftaran: <b>PPDB2021<span style="color:red">012</span></b>

    </p>

    <p>Maka, jumlah yang harus dibayarkan sebesar <b>Rp.350.<span style="color:red">012</span></b>

      dikirim ke No. Rekening di bawah ini:</p>

    <p><b>Bank BNI</b></p>

    <p>No.Rekening: 0000-000-00000</p>

    <p>a.n. SMK Pasundan Jatinangor</p>

    <li>

      Pembayaran langsung ke Sekolah

    </li>

    <p>Pembayaran bisa dilakukan di Sekolah dengan menyebutkan <em> kode pendaftaran </em> ke panitia

      yang

      ada

      di

      sekolah</p>

  </ol>

</li>

</ol>

</div>

</div>

</div>

</div>

</div> --}}





  </section>

</div>



<div class="container-fluid">





  <!-------------------------------------------------------------->

  {{-- Kegiatan --}}

  <section class="my-2" id="program-keahlian">

    <h3>Program Keahlian</h3>

    @php

    $programKeahlian = [

    'tkr' => 'Teknik Kendaraan Ringan adalah jurusan yang menekankan dengan penguasaan keterampilan, khususnya dalam

    pemeliharaan kendaraan

    ringan seperti

    mobil',

    'tkj' => 'Teknik Komputer Jaringan merupakan sebuah kejurusan yang mempelajari tentang cara-cara merakit komputer
    dan

    menginstalasi

    program komputer.Program keahlian TKJ berbeda dengan RPL(Rekayasa Perangkat Lunak).',

    'tbsm' => 'Teknik dan Bisnis Sepeda Motor (TBSM) dan Kendaraan Ringan (TKRO) SMK memiliki perbedaan yang

    signifikan.',

    'otkp' => 'Otomatisasi dan Tata Kelola Perkantoran adalah sebuah jurusan yang sangat berhubungan dengan surat
    menyurat

    dan

    komunikasi. Jurusan Otomatisasi Tata Kelola Perkantoran (OTKP)',

    'akuntansi' =>'Jurusan akuntansi adalah salah satu jurusan menggiurkan dengan gaji yang menjanjikan. Setiap

    perusahaan membutuhkan

    lulusan akuntansi'

    ]

    @endphp

    {{-- <div class="smk-bisa">

  <img width="150" height="150" alt="smk-bisa" class="lazyload" data-src="{{ asset('img/logo-jurusan/smk-bisa.png') }}">

</div> --}}

<div class="card shadow">

  <div class="card-body">

    <div class="row">

      <div class="col" style="padding:0">

        <div id="skill-program" class=" carousel slide" data-ride="carousel">

          <ol class="carousel-indicators">

            <li data-target="#skill-program" data-slide-to="0" class="active"></li>

            <li data-target="#skill-program" data-slide-to="1"></li>

            <li data-target="#skill-program" data-slide-to="2"></li>

            <li data-target="#skill-program" data-slide-to="3"></li>

            <li data-target="#skill-program" data-slide-to="4"></li>

          </ol>

          <div class="carousel-inner">

            {{-- carousel-item --}}

            @foreach ($programKeahlian as $item =>$value)

            <div class="carousel-item @if ($loop->index == 0) ? active @endif"
              style="height: 340px;width:100%;background-color:#808080">

              <img height="340" data-src="{{ asset('/img/logo-jurusan/logo-' . $item .'.png') }}" alt="logo-{{ $item }}"
                class="mx-auto d-block image-fluid lazyload" loading="lazy">

              <div class="carousel-caption d-md-block" style="color:#fff">

                <h5><b>{{ strtoupper($item) }}</b></h5>

                <p>{{ $value }}</p>

                @guest

                <a href="{{ route('register_ppdb') }}" class="btn btn-primary btn-lg">Gabung bersama kami!</a>

                @endguest

              </div>

            </div>

            @endforeach

          </div>

          <a class="carousel-control-prev" href="#skill-program" role="button" data-slide="prev">

            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            <span class="sr-only">Previous</span>

          </a>

          <a class="carousel-control-next" href="#skill-program" role="button" data-slide="next">

            <span class="carousel-control-next-icon" aria-hidden="true"></span>

            <span class="sr-only">Next</span>

          </a>

        </div>

      </div>

    </div>

  </div>

</div>









</section>

<!-------------------------------------------------------------->

{{-- Kegiatan --}}

{{-- <section>

    <h3>Kegiatan</h3>

    <div class="foto-tes"> --}}

{{-- @include('ppdb.kegiatan') --}}

{{-- <div style="width: 100%">

        <a href="#" data-filter="all" tabindex="-1">ALL</a>

        <a href="#" data-filter="red" tabindex="-1">RED</a>

        <a href="#" data-filter="green" tabindex="-1">GREEN</a>

        <a href="#" data-filter="blue" tabindex="-1">BLUE</a>

      </div>

      <div class="d-inline-flex p-2" data-filter="red"></div>

      <div class="d-inline-flex p-2" data-filter="blue"></div>

      <div class="d-inline-flex p-2" data-filter="red"></div>

      <div class="d-inline-flex p-2" data-filter="blue"></div>

      <div class="d-inline-flex p-2" data-filter="green"></div>

      <div class="d-inline-flex p-2" data-filter="red"></div>

      <div class="d-inline-flex p-2" data-filter="red"></div>

      <div class="d-inline-flex p-2" data-filter="red"></div>

      <div class="d-inline-flex p-2" data-filter="blue"></div>

      <div class="d-inline-flex p-2" data-filter="green"></div>

      <div class="d-inline-flex p-2" data-filter="blue"></div>

      <div class="d-inline-flex p-2" data-filter="green"></div>

      <div class="d-inline-flex p-2" data-filter="green"></div>

    </div>

  </section> --}}



{{-- Fasilitas --}}

<section>
  <h3 id="fasilitas">Fasilitas</h3>
  <div class="row">
    <div class="col-lg-2 my-1">

      <img data-sizes="auto" loading="lazy" class="lazyload img-thumbnail card-img-top"
        data-src="{{ asset('/img/fasilitas/lab-tkj-1.webp') }}" alt="lab-tkj">

    </div>

    <div class="col-lg-2 my-1">

      <img data-sizes="auto" loading="lazy" class="lazyload img-thumbnail card-img-top"
        data-src="{{ asset('/img/fasilitas/lab-tkj-2.webp') }}" alt="lab-tkj">

    </div>

    <div class="col-lg-2 my-1">

      <img data-sizes="auto" loading="lazy" class="lazyload img-thumbnail card-img-top"
        data-src="{{ asset('/img/fasilitas/lab-tkr-1.webp') }}" alt="lab-tkr">

    </div>

    <div class="col-lg-2 my-1">

      <img data-sizes="auto" loading="lazy" class="lazyload img-thumbnail card-img-top"
        data-src="{{ asset('/img/fasilitas/lab-tkr-2.webp') }}" alt="lab-tkr">

    </div>

    <div class="col-lg-2 my-1">

      <img data-sizes="auto" loading="lazy" class="lazyload img-thumbnail card-img-top"
        data-src="{{ asset('/img/fasilitas/lab-tkr-3.webp') }}" alt="lab-tkr">

    </div>

    <div class="col-lg-2 my-1">

      <img data-sizes="auto" loading="lazy" class="lazyload img-thumbnail card-img-top"
        data-src="{{ asset('/img/fasilitas/lab-tbsm-1.webp') }}" alt="lab-tbsm">

    </div>

    <div class="col-lg-2 my-1">

      <img data-sizes="auto" loading="lazy" class="lazyload img-thumbnail card-img-top"
        data-src="{{ asset('/img/fasilitas/lab-tbsm-2.webp') }}" alt="lab-tbsm">

    </div>

    <div class="col-lg-2 my-1">

      <img data-sizes="auto" loading="lazy" class="lazyload img-thumbnail card-img-top"
        data-src="{{ asset('/img/fasilitas/lab-otkp.webp') }}" alt="lab-otkp">

    </div>

    <div class="col-lg-2 my-1">

      <img data-sizes="auto" loading="lazy" class="lazyload img-thumbnail card-img-top"
        data-src="{{ asset('/img/fasilitas/lab-ak.webp') }}" alt="lab-ak">

    </div>

    <div class="col-lg-2 my-1">

      <img data-sizes="auto" loading="lazy" class="lazyload img-thumbnail card-img-top"
        data-src="{{ asset('/img/fasilitas/lap-basket.webp') }}" alt="lap-basket">

    </div>

    <div class="col-lg-2 my-1">

      <img data-sizes="auto" loading="lazy" class="lazyload img-thumbnail card-img-top"
        data-src="{{ asset('/img/fasilitas/masjid.webp') }}" alt="masjid-pasja">

    </div>

    <div class="col-lg-2 my-1">

      <img data-sizes="auto" loading="lazy" class="lazyload img-thumbnail card-img-top"
        data-src="{{ asset('/img/fasilitas/perpus.webp') }}" alt="perpustakaan">

    </div>

  </div>
</section>



{{-- Tentang Kami --}}

{{-- <section class="mt-2">

  <h3 class="text-center">Tentang Kami</h3>

  <div class="row">

    <div class="col-md-8">

      <div class="card">

        <div class="card-body">

          <h4 class="card-title">SMK Pasundan Jatinangor</h4>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, quod!</p>

        </div>

      </div>

    </div>

    <div class="col-md">

      <div class="card">

        <img data-sizes="auto" loading="lazy" class="lazyload card-img-top"

          data-src="{{ asset('/img/fasilitas/lab-ak.jpg') }}" width=150 alt="lab-ak">

<div class="card-body">

  <p class="card-text">Lab. Praktek Akuntansi</p>

</div>

</div>

</div>

</div>

</section> --}}



</div>

<!-------------- SECTION Footer --------------------->

{{-- <footer class="" style="height: 100px; background-color:grey; width:100%">

  <div class="container">

    <div class="col">

      <h3>SMK Pasundan Jatinangor</h3>

      <h2>Jl. Kol. Ahmad Syam, Sayang, Jatinangor</h2>

    </div>

    <div class="col"></div>

  </div>

</footer> --}}

{{-- ---------------------------------------------------------------- --}}

@section('costum-script')

<script src="{{ asset('js/lazysizes.min.js') }}" async=""></script>

@endsection

{{-- ---------------------------------------------------------------- --}}





@endsection