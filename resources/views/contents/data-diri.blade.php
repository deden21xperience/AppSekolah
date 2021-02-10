<div class="form-group">
  <label for="">Jurusan/Keahlian yang dipilih:</label>
  <select class="form-control" aria-label="Default select example" name="jurusan" id="">
    <option value="tkj">TKJ</option>
    <option value="tbsm">TBSM</option>
    <option value="tkr">TKR</option>
    <option value="otkp">OTKP</option>
    <option value="ak">AK</option>
  </select>
</div>
<!-- *************************************************************************-->
<div class="form-group">
  <label for="nama">NIK:</label>
  <input type="text" name="nik_diri" id="nik_diri" class="form-control">
</div>
{{-- Nama Lengkap --}}
<div class="form-group">
  <label for="nama">Nama Lengkap:</label>
  <!-- <small class="form-text text-muted">Isi Nama Sesuai Akta Kelahiran</small> -->
  <input value="{{ $student->biodata->nama }}" type="text" name="nama" id="nama" style="text-transform:uppercase"
    class="form-control @error ('nama') is-invalid @enderror">
  @error ('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<!-- *************************************************************************-->
{{-- Tempat & Tanggal Lahir --}}
<div class="form-group">
  <div class="row">
    <div class="col">
      <label for="tpt_lahir">Tempat Lahir:</label>
      <!-- <small class="form-text text-muted">Isi nama Sesuai Akta Kelahiran</small> -->
      <input value="{{ $student->biodata->tpt_lahir }}" type="text" name="tpt_lahir" id="tpt_lahir"
        class="form-control @error ('tpt_lahir') is-invalid @enderror">
      @error ('tpt_lahir') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="col">
      <div class="form-group">
        <label>Tanggal Lahir:</label>
        <input type="date" class="form-control pull-right" id="datepicker">
        {{-- <div class="input-group date"> --}}
        {{-- <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div> --}}
        {{-- </div> --}}
        <!-- /.input group -->
      </div>
    </div>
  </div>
</div>
<!-- *************************************************************************-->
{{-- Jenis Kelamin --}}
<div class="form-group">
  <div class="row">
    <div class="col">
      <label for="">Jenis Kelamin</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jk" id="jk" value="option2">
        <label class="form-check-label" for="exampleRadios2">
          Laki-laki
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jk" id="jk" value="option2">
        <label class="form-check-label" for="exampleRadios2">
          Perempuan
        </label>
      </div>
    </div>
    <!-- *************************************************************************-->
    {{-- Agama --}}
    <div class="col-sm-8">
      <label for="agama">Agama:</label>
      <select name="agama" id="agama" class="form-control">
        <option value="" disabled selected></option>
        <option value="1">Islam</option>
        <option value="2">Kristen Protestan</option>
        <option value="3">Kristen Katholik</option>
        <option value="4">Budha</option>
        <option value="5">Hindu</option>
        <option value="6">Konghuchu</option>
      </select>
    </div>
  </div>
</div>
<!-- *************************************************************************-->
{{-- Alamat 1 --}}
<div class="from-group">
  <div class="row">
    <div class="col-sm-8">
      <label for="alamat">Alamat:</label>
      <!-- <small class="form-text text-muted">Isi nama Sesuai Akta Kelahiran</small> -->
      <input value="{{$student->biodata->alamat}}" type="text" name="alamat" id="alamat"
        class="form-control @error ('alamat') is-invalid @enderror">
      @error ('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="col">
      <label for="rt">RT:</label>
      <input value="{{ $student->biodata->rt }} " maxlength="4" type="text" name="rt" id="rt"
        class="form-control @error ('rt') is-invalid @enderror">
      @error ('rt') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="col">
      <label for="rw">RW:</label>
      <input value="{{ $student->biodata->rw }}" maxlength="4" type="text" name="rw" id="rw"
        class="form-control @error ('rw') is-invalid @enderror">
      @error ('rw') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
  </div>
  {{-- Alamat 2--}}
</div>
<div class="form-group">
  <div class="row">
    <div class="col-sm-6">
      <label for="desa">Desa:</label>
      <!-- <small class="form-text text-muted">Isi nama Sesuai Akta Kelahiran</small> -->
      <input value="{{$student->biodata->desa}}" type="text" name="desa" id="desa"
        class="form-control @error ('desa') is-invalid @enderror">
      @error ('desa') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="col-sm-6">
      <label for="kecamatan">Kecamatan:</label>
      <input value="{{$student->biodata->kec}}" type="text" name="kec" id="kecamatan"
        class="form-control @error ('kecamatan') is-invalid @enderror">
      @error ('kecamatan') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-sm-6">
      <label for="kabupaten">Kabupaten:</label>
      <input value="{{$student->biodata->kab}}" type="text" name="kab" id="kabupaten"
        class="form-control @error ('kabupaten') is-invalid @enderror">
      @error ('kabupaten') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="col-sm-6">
      <label for="provinsi">Provinsi:</label>
      <input value="{{ $student->biodata->prov}}" type="text" name="prov" id="provinsi"
        class="form-control @error ('provinsi') is-invalid @enderror">
      @error ('provinsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
  </div>
</div>
<!-- *************************************************************************-->
{{-- Asal Sekolah --}}
<div class="form-group">
  <div class="row">
    <div class="col-sm-6">
      <label for="asal_sekolah">Asal Sekolah</label>
      <!-- <small class="form-text text-muted">Isi nama Sesuai Akta Kelahiran</small> -->
      <input value="{{ $student->biodata->sekolah}}" type="text" name="asal_sekolah" id="asal_sekolah"
        class="form-control @error ('asal_sekolah') is-invalid @enderror">
      @error ('asal_sekolah') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="col-sm-6">
      <label for="asal_sekolah">NISN</label>
      <input value="{{ $student->biodata->nisn}}" type="text" name="nisn" id="nisn"
        class="form-control @error ('nisn') is-invalid @enderror">
      @error ('nisn') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
  </div>
</div>

<div class="form-group">
  <div class="row">
    <div class="col-sm-6">
      <label for="">Tinggi Badan</label>
      <input type="number" class="form-control">
    </div>
    <div class="col-sm-6">
      <label for="">Berat Badan</label>
      <input type="number" class="form-control">
    </div>
  </div>
</div>
{{-- Tinggi Badan, bb, hoby cita2 --}}


<div class="form-group">
  <div class="row">
    <div class="col-sm-6">
      <label for="">Hobi</label>
      <input type="text" class="form-control">
    </div>
    <div class="col-sm-6">
      <label for="">Cita-cita</label>
      <input type="text" class="form-control">
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-md-6">
      <label for="">Status dalam Keluarga</label>
      <select name="status_dlm_keluarga" id="" class="form-control">
        <option value="anak_kandung">Anaka Kandung</option>
        <option value="famili_lainnya">Famili lain</option>
      </select>
    </div>
    <div class="col-md-3">
      <label for="">Jumlah Saudara</label>
      <input type="number" class="form-control">
    </div>
    <div class="col-md-3">
      <label for="">Anak Ke - </label>
      <input type="number" class="form-control">
    </div>
  </div>
</div>
<div class="form-group">
  <small class="form-text disabled">Jika mempunyai KIP, Silahkan diisi</small>
  <label for="">No.KIP</label>
  <input type="text" class="form-control">
</div>

<!--*************************************************************************-->
<div class="form-group">
  <label for="no_hp">No Handphone</label>
  <input value="{{ $student->biodata->no_hp}}" type="text" name="no_hp" id="no_hp" class="form-control">
</div>
{{-- </form> --}}