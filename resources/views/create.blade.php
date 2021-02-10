@extends('administrasi.template')
@section('title', 'Tambah Siswa')
@section('costum-css')
<style>
  /* input[type|="text"] {
    text-transform: uppercase; */
  input:enabled {
    text-transform: uppercase;
  }
</style>
@endsection
@section('content')
<div class="container-fluid">
  <div class="row justify-content-center" style="margin-top:52px">
    <div class="col-md-8">
      <div class="card" style="color:#212529">
        <div class="card-header" style="background-color:#17A2B8;color:#fff">
          <h2>Formulir Pendaftaran</h2>
        </div>
        <div class="card-body">
          <form method="post" action="{{ $url }}" id="form-pendaftaran">
            @csrf
            <div class="form-group">
              <label for="">1. Jurusan/Keahlian</label>
              <select required class="form-control @error ('jurusan') is-invalid @enderror" name="jurusan">
                <option disabled selected></option>
                @foreach ($vocations as $vocation => $value)
                @if ( old('jurusan') == $vocation )
                <option selected value="{{ $vocation}}">{{ $value }}</option>
                @else
                <option value="{{ $vocation}}">{{ $value }}</option>
                @endif
                @endforeach
              </select>
              @error('jurusan')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <!-- *************************************************************************-->
            {{-- Nama Lengkap --}}
            <div class="form-group">
              <label for="nama">2. Nama Lengkap:</label>
              <!-- <small class="form-text text-muted">Isi Nama Sesuai Akta Kelahiran</small> -->
              <input required type="text" value="{{old('nama')}}" type="text" name="nama" id="nama"
                class="form-control @error ('nama') is-invalid @enderror">
              @error ('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <!-- *************************************************************************-->
            {{-- Tempat & Tanggal Lahir --}}
            <div class="row">
              <div class="col-sm-6">
                <label for="tpt_lahir">3. Tempat Lahir:</label>
                <!-- <small class="form-text text-muted">Isi nama Sesuai Akta Kelahiran</small> -->
                <input required value="{{old('tpt_lahir')}}" type="text" name="tpt_lahir" id="tpt_lahir"
                  class="form-control @error ('tpt_lahir') is-invalid @enderror">
                @error ('tpt_lahir') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="col-sm-6">
                <label for="tgl_lahir">4. Tanggal Lahir:</label>
                <input required type="date" autocomplete=off value="{{old('tgl_lahir')}}" type="text" name="tgl_lahir"
                  id="tgl_lahir" class="datepicker form-control @error ('tgl_lahir') is-invalid @enderror"
                  placeholder="dd-mm-yyyy">
                {{-- <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-check"></i></span>
                </div> --}}
                @error ('tgl_lahir') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
            </div>

            <!-- *************************************************************************-->

            {{-- Jenis Kelamin --}}
            <div class="form-group">
              <div class="row">
                <div class="col-sm-4">
                  <label>5. Jenis Kelamin:</label>
                  <div class=" form-check">
                    <input required class="form-check-input" id="lk" type="radio" name="jk" value="L"
                      {{ old('name') == 'L' ? 'checked':'' }}>
                    <label class="form-check-label" for="lk">Laki-laki</label>
                  </div>
                  <div class="form-check">
                    <input required class="form-check-input" id="per" type="radio" name="jk" value="P" value="L"
                      {{ old('name') == 'L' ? 'checked':''}}>
                    <label class="form-check-label" for="per">Perempuan</label>
                  </div>
                </div>
                <!-- *************************************************************************-->
                {{-- Agama --}}
                <div class="col-sm-8">
                  <label for="inputAgama">6. Agama</label>
                  <select required class="custom-select @error ('agama') is-invalid @enderror" id="inputAgama"
                    name="agama">
                    <option selected disabled></option>
                    <option value="islam">Islam</option>
                    <option value="kristen katolik">Kristen Katolik</option>
                    <option value="kristen protestan">Kristen Protestan</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                    <option value="konghucu">Konghucu</option>
                  </select>
                  @error('agama')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>


            <!-- *************************************************************************-->
            {{-- Alamat 1 --}}
            <div class="row">
              <div class="col-sm-8">
                <label for="alamat">7. Alamat:</label>
                <!-- <small class="form-text text-muted">Isi nama Sesuai Akta Kelahiran</small> -->
                <input required value="{{old('alamat')}}" type="text" name="alamat" id="alamat"
                  class="form-control @error ('alamat') is-invalid @enderror">
                @error ('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="col">
                <label for="rt">8. RT:</label>
                <input required value="{{old('rt')}} " maxlength="4" type="text" name="rt" id="rt"
                  class="form-control @error ('rt') is-invalid @enderror">
                @error ('rt') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="col">
                <label for="rw">9. RW:</label>
                <input required value="{{old('rw')}}" maxlength="4" type="text" name="rw" id="rw"
                  class="form-control @error ('rw') is-invalid @enderror">
                @error ('rw') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
            </div>
            {{-- Alamat 2--}}
            <div class="row">
              <div class="col-sm-6">
                <label for="desa">10. Desa:</label>
                <!-- <small class="form-text text-muted">Isi nama Sesuai Akta Kelahiran</small> -->
                <input required value="{{old('desa')}}" type="text" name="desa" id="desa"
                  class="form-control @error ('desa') is-invalid @enderror">
                @error ('desa') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="col-sm-6">
                <label for="kecamatan">11. Kecamatan:</label>
                <input required value="{{old('kec')}}" type="text" name="kec" id="kecamatan"
                  class="form-control @error ('kecamatan') is-invalid @enderror">
                @error ('kecamatan') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <label for="kabupaten">12. Kabupaten:</label>
                <input required value="{{old('kab')}}" type="text" name="kab" id="kabupaten"
                  class="form-control @error ('kabupaten') is-invalid @enderror">
                @error ('kabupaten') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
              <div class="col-sm-6">
                <label for="provinsi">13. Provinsi:</label>
                <input required value="{{old('prov')}}" type="text" name="prov" id="provinsi"
                  class="form-control @error ('provinsi') is-invalid @enderror">
                @error ('provinsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
              </div>
            </div>

            <!-- *************************************************************************-->
            {{-- Asal Sekolah --}}
            <div class="form-group">
              <label for="asal_sekolah">14. Asal Sekolah</label>
              <!-- <small class="form-text text-muted">Isi nama Sesuai Akta Kelahiran</small> -->
              <input required value="{{old('asal_sekolah')}}" type="text" name="asal_sekolah" id="asal_sekolah"
                class="form-control @error ('asal_sekolah') is-invalid @enderror">
              @error ('asal_sekolah') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!--*************************************************************************-->
            <div class="form-group">
              <label for="no_hp">15. No Handphone</label>
              <small class="form-text disabled">(Diisi untuk info dan konfirmasi)</small>
              <input required value="{{old('no_hp')}}" type="text" name="no_hp" id="no_hp" class="form-control">
            </div>
            <div class="form-group">
              <label for="">username</label>
              <small class="form-text text-muted">username dan password digunakan untuk login aplikasi ppdb-smk,
                simpan baik-baik</small>
              <input type="text" class="form-control" disabled value="{{ old('username') }}" id="username">
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-6">
                  <label for="">password</label>
                  <input required type="password" class="form-control disable" name="password1">
                  <small>masukan password anda</small>
                </div>
                <div class="col-sm-6">
                  <label for="">ulangi password</label>
                  <input required type="password" class="form-control disable" name="password2">
                </div>
              </div>
            </div>
            <a href="/" class="btn btn-warning">Batal</a>
            {{--<button type="submit" class="btn btn-primary">Daftar</button> --}}
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Proses
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <b>Akun yang dibuat akan berlaku selama aktif sebagai siswa di SMK Pasundan Jatinangor</b>
        <small>username tidak bisa dirubah, silahkan isikan password</small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="proses">Lanjut</button>
      </div>
    </div>
  </div>
</div>
</div>
@section('costum-script')
<script src="{{ asset('js/home.js')}}"></script>
@endsection
@endsection