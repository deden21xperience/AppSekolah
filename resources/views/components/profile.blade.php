@extends('layouts.app')
@section('sidebar')
@include('components.sidebar')
@endsection
@section('title_section', 'My Profile')
@section('content')
<h1>halaman profile</h1>
<ul>
    @foreach ($student_biodata as $biodata => $value)
    <li>{{ $value }}</li>
    @endforeach
</ul>

<div class="card-body">
    <form method="post" action="{{ route('update_student', $student->id ) }}">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="">1. Jurusan/Keahlian</label>
            <input type="text" value="{{ $student }}">
        </div>
        <!-- *************************************************************************-->
        {{-- Nama Lengkap --}}
        <div class="form-group">
            <label for="nama">2. Nama Lengkap:</label>
            <!-- <small class="form-text text-muted">Isi Nama Sesuai Akta Kelahiran</small> -->
            <input value="{{ $student->biodata['nama'] }}" type="text" name="nama" id="nama"
                style="text-transform:uppercase" class="form-control @error ('nama') is-invalid @enderror">
            @error ('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <!-- *************************************************************************-->
        {{-- Tempat & Tanggal Lahir --}}
        <div class="row">
            <div class="col">
                <label for="tpt_lahir">3. Tempat Lahir:</label>
                <!-- <small class="form-text text-muted">Isi nama Sesuai Akta Kelahiran</small> -->
                <input value="{{ $student->biodata['tpt_lahir'] }}" type="text" name="tpt_lahir" id="tpt_lahir"
                    class="form-control @error ('tpt_lahir') is-invalid @enderror">
                @error ('tpt_lahir') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col">
                <label for="tgl_lahir">4. Tanggal Lahir:</label>
                <input value="{{ $student->biodata['tgl_lahir']}}" type="text" name="tgl_lahir" id="tgl_lahir"
                    class="datepicker form-control @error ('tgl_lahir') is-invalid @enderror">
                @error ('tgl_lahir') <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
                <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        <!-- *************************************************************************-->
        {{-- Jenis Kelamin --}}
        <div class="form-group">
            <label>5. Jenis Kelamin:</label>
            <div class=" form-check">

                <input class="form-check-input" id="lk" type="radio" name="jk" value="L"
                    {{ ($student->biodata['jk'] == 'L') ? 'checked': '' }}>
                <label class="form-check-label" for="lk">Laki-laki</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="per" type="radio" name="jk" value="P"
                    {{ ($student->biodata['jk'] == 'P') ? 'checked':'' }}>
                <label class=" form-check-label" for="per">Perempuan</label>
            </div>
        </div>

        <!-- *************************************************************************-->
        {{-- Agama --}}
        <div class="form-group">
            <label for="inputAgama">6. Agama</label>
            <select class="custom-select" id="agama" name="agama">
                @foreach ($religions as $religion)
                @if ( strtolower($student->biodata['agama']) == strtolower($religion) )
                <option selected value="{{ $religion}}">{{ $religion }}</option>
                @else
                <option value="{{ $religion}}">{{ $religion }}</option>
                @endif
                @endforeach
            </select>
        </div>


        <!-- *************************************************************************-->
        {{-- Alamat 1 --}}
        <div class="row">
            <div class="col-sm-8">
                <label for="alamat">Alamat:</label>
                <!-- <small class="form-text text-muted">Isi nama Sesuai Akta Kelahiran</small> -->
                <input value="{{$student->biodata['alamat']}}" type="text" name="alamat" id="alamat"
                    class="form-control @error ('alamat') is-invalid @enderror">
                @error ('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col">
                <label for="rt">RT:</label>
                <input value="{{ $student->biodata['rt'] }} " maxlength="4" type="text" name="rt" id="rt"
                    class="form-control @error ('rt') is-invalid @enderror">
                @error ('rt') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col">
                <label for="rw">RW:</label>
                <input value="{{ $student->biodata['rw'] }}" maxlength="4" type="text" name="rw" id="rw"
                    class="form-control @error ('rw') is-invalid @enderror">
                @error ('rw') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
        {{-- Alamat 2--}}
        <div class="row">
            <div class="col">
                <label for="desa">Desa:</label>
                <!-- <small class="form-text text-muted">Isi nama Sesuai Akta Kelahiran</small> -->
                <input value="{{$student->biodata['desa']}}" type="text" name="desa" id="desa"
                    class="form-control @error ('desa') is-invalid @enderror">
                @error ('desa') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col">
                <label for="kecamatan">Kecamatan:</label>
                <input value="{{$student->biodata['kec']}}" type="text" name="kec" id="kecamatan"
                    class="form-control @error ('kecamatan') is-invalid @enderror">
                @error ('kecamatan') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col">
                <label for="kabupaten">Kabupaten:</label>
                <input value="{{$student->biodata['kab']}}" type="text" name="kab" id="kabupaten"
                    class="form-control @error ('kabupaten') is-invalid @enderror">
                @error ('kabupaten') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col">
                <label for="provinsi">Provinsi:</label>
                <input value="{{ $student->biodata['prov']}}" type="text" name="prov" id="provinsi"
                    class="form-control @error ('provinsi') is-invalid @enderror">
                @error ('provinsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        <!-- *************************************************************************-->
        {{-- Asal Sekolah --}}
        <div class="form-group">
            <label for="asal_sekolah">Asal Sekolah</label>
            <!-- <small class="form-text text-muted">Isi nama Sesuai Akta Kelahiran</small> -->
            <input value="{{ $student->biodata['sekolah']}}" type="text" name="asal_sekolah" id="asal_sekolah"
                class="form-control @error ('asal_sekolah') is-invalid @enderror">
            @error ('asal_sekolah') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <!--*************************************************************************-->
        <div class="form-group">
            <label for="no_hp">No Handphone</label>
            <input value="{{ $student->biodata['no_hp']}}" type="text" name="no_hp" id="no_hp" class="form-control">
            <small class="form-text text-muted">Diisi untuk info dan konfirmasi</small>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@section('costum-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
</script>
<script type="text/javascript">
    $.fn.datepicker.dates['id'] = {
    days: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"],
    daysShort: ["Ming, Sen", "Sel", "Rab", "Kam", "Jum", "Sab"],
    daysMin: ["Mi", "Se", "Sel", "Ra", "Ka", "Ju", "Sa"],
    months: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November",
      "Desember"
    ],
    monthsShort: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
    today: "Today",
    clear: "Clear",
    format: "mm/dd/yyyy",
    titleFormat: "MM yyyy",
    /* Leverages same syntax as 'format' */
    weekStart: 0
  };
  $(function() {
    $(".datepicker").datepicker({
      // format: 'yyyy-mm-dd',
      format: 'dd-mm-yyyy',
      autoclose: true,
      todayHighlight: true,
      language: 'id'
    });
  });
</script>
@endsection
@endsection















@endsection