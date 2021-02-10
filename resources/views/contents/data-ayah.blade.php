<div class="form-group">
  <!-- *************************************************************************-->
  {{-- Nama Lengkap --}}
  <div class="form-group">
    <label for="nama">NIK Ayah:</label>
    <input type="text" name="nik_ayah" id="nik_ayah" class="form-control">
  </div>
  <div class="form-group">
    <label for="nama">Nama Lengkap:</label>
    <!-- <small class="form-text text-muted">Isi Nama Sesuai Akta Kelahiran</small> -->
    <input value="{{ $student->nama_ayah }}" type="text" name="nama" id="nama" style="text-transform:uppercase"
      class="form-control @error ('nama') is-invalid @enderror">
    @error ('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
  </div>
  <!-- *************************************************************************-->
  {{-- Tahun Lahir --}}
  <div class="form-group">
    <label for="tgl_lahir">Tahun Lahir:</label>
    <input value="{{  $student->tgl_lahir_ayah}}" type="text" name="tgl_lahir" id="tgl_lahir"
      class="datepicker form-control @error ('tgl_lahir') is-invalid @enderror">
    @error ('tgl_lahir') <div class="input-group-addon">
      <span class="glyphicon glyphicon-th"></span>
    </div>
    <div class="invalid-feedback">{{ $message }}</div> @enderror
  </div>
  <!-- *************************************************************************-->
  {{-- Pekerjaan --}}
  <div class="form-group">
    <div class="row">
      <div class="col-sm-6">
        <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
        <select name="pendidikan_terakhir" id="" class="form-control">
          <option value="" selected disabled></option>
          <option value="0">SD/Sederajat</option>
          <option value="1">SMP/Sederajat</option>
          <option value="2">SMA/Sederajat</option>
          <option value="3">D3</option>
          <option value="4">D4/Strata 1</option>
          <option value="5">Strata 2</option>
          <option value="6">Strata 3</option>
          <option value="7">Tidak Sekolah</option>
        </select>
      </div>
      <div class="col-sm-6">
        <label for="pekerjaan">Pekerjaan</label>
        <select name="pekerjaan" id="" class="form-control">
          <option value="" selected disabled></option>
          <option value="0">Buruh harian lepas</option>
          <option value="1">Karyawan Swasta</option>
          <option value="2">Mengurus rumah tangga</option>
          <option value="3">Pedagang</option>
          <option value="4">PNS/TNI/Polri</option>
          <option value="5">Tidak/Belum bekerja</option>
          <option value="6">Wiraswasta</option>
          <option value="7">Wirausaha</option>
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
        <input value="{{$student->alamat_ayah}}" type="text" name="alamat" id="alamat"
          class="form-control @error ('alamat') is-invalid @enderror">
        @error ('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="col">
        <label for="rt">RT:</label>
        <input value="{{ $student->rt_ayah }} " maxlength="4" type="text" name="rt" id="rt"
          class="form-control @error ('rt') is-invalid @enderror">
        @error ('rt') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="col">
        <label for="rw">RW:</label>
        <input value="{{ $student->rw_ayah }}" maxlength="4" type="text" name="rw" id="rw"
          class="form-control @error ('rw') is-invalid @enderror">
        @error ('rw') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
    </div>
    {{-- Alamat 2--}}
    <div class="row">
      <div class="col-sm-6">
        <label for="desa">Desa:</label>
        <!-- <small class="form-text text-muted">Isi nama Sesuai Akta Kelahiran</small> -->
        <input value="{{$student->desa_ayah}}" type="text" name="desa" id="desa"
          class="form-control @error ('desa') is-invalid @enderror">
        @error ('desa') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
      <div class="col-sm-6">
        <label for="kecamatan">Kecamatan:</label>
        <input value="{{$student->kec_ayah}}" type="text" name="kec" id="kecamatan"
          class="form-control @error ('kecamatan') is-invalid @enderror">
        @error ('kecamatan') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <label for="kabupaten">Kabupaten:</label>
      <input value="{{$student->kab_ayah}}" type="text" name="kab" id="kabupaten"
        class="form-control @error ('kabupaten') is-invalid @enderror">
      @error ('kabupaten') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="col-sm-6">
      <label for="provinsi">Provinsi:</label>
      <input value="{{ $student->prov_ayah}}" type="text" name="prov" id="provinsi"
        class="form-control @error ('provinsi') is-invalid @enderror">
      @error ('provinsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
  </div>
  <!--*************************************************************************-->
  <div class="form-group">
    <label for="no_hp">No Handphone</label>
    <input value="{{ $student->no_hp}}" type="text" name="no_hp" id="no_hp" class="form-control">
  </div>