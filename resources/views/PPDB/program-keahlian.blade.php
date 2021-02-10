@php
$programKeahlian = [
'tkr' => 'Teknik Kendaraan Ringan adalah jurusan yang menekankan dengan penguasaan keterampilan, khususnya dalam
pemeliharaan kendaraan
ringan seperti
mobil',
'tkj' => 'Teknik Komputer Jaringan merupakan sebuah kejurusan yang mempelajari tentang cara-cara merakit komputer dan
menginstalasi
program komputer.Program keahlian TKJ berbeda dengan RPL(Rekayasa Perangkat Lunak).',
'tbsm' => 'Teknik dan Bisnis Sepeda Motor (TBSM) dan Kendaraan Ringan (TKRO) SMK memiliki perbedaan yang
signifikan.',
'otkp' => 'Otomatisasi dan Tata Kelola Perkantoran adalah sebuah jurusan yang sangat berhubungan dengan surat menyurat
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
              <img height="340" data-src="{{ asset('/img/logo-jurusan/logo-' . $item .'.webp') }}"
                alt="logo-{{ $item }}" class="mx-auto d-block image-fluid lazyload" loading="lazy">
              <div class="carousel-caption d-md-block" style="color:#fff">
                <h5><b>{{ strtoupper($item) }}</b></h5>
                <p>{{ $value }}</p>
                <a href="{{ route('register_ppdb') }}" class="btn btn-primary btn-lg">Gabung bersama kami!</a>
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