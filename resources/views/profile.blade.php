@extends('administrasi.template')
@section('title_section', 'My Profile')
{{-- @section('costum-css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection --}}
@section('main-content')
<div class="col">

  <!-- Profile Image -->
  <div class="card card-primary card-outline costum-card">
    <div class="card-body box-profile">
      <div class="text-center">
        <img class="profile-user-img img-fluid img-circle" src="{{ asset($student->biodata->foto) }}"
          alt="User profile picture" style="max-width: 150px">
      </div>
      <div class="card">
        @include('utilities.progressbar')
      </div>
      <div class="card">
        <div class="card-header">
          <div id="costum-tab">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="data-diri-tab" data-bs-toggle="tab" href="#data-diri" role="tab"
                  aria-controls="data-diri" aria-selected="true">Data Diri</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="data-ayah-tab" data-bs-toggle="tab" href="#data-ayah" role="tab"
                  aria-controls="data-ayah" aria-selected="false">Data Ayah</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="data-ibu-tab" data-bs-toggle="tab" href="#data-ibu" role="tab"
                  aria-controls="data-ibu" aria-selected="false">Data Ibu</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="data-wali-tab" data-bs-toggle="tab" href="#data-wali" role="tab"
                  aria-controls="data-wali" aria-selected="false">Data Wali</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <form method="post" action="">
            @method('patch')
            @csrf
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="data-diri" role="tabpanel" aria-labelledby="data-diri-tab">
                @include('contents.data-diri')
              </div>
              <div class="tab-pane fade" id="data-ayah" role="tabpanel" aria-labelledby="data-ayah-tab">
                @include('contents.data-ayah')
              </div>
              <div class="tab-pane fade" id="data-ibu" role="tabpanel" aria-labelledby="data-ibu-tab">
                @include('contents.data-ibu')
              </div>
            </div>
        </div>
        <div>
          <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan Perubahan</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

@section('costum-script')
<script>
  var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
      triggerTabList.forEach(function (triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl)

        triggerEl.addEventListener('click', function (event) {
          // console.log (event.target)
          event.preventDefault()
          tabTrigger.show()
        })
      })
  
  let prgBar = document.querySelector('.progress-bar');
  // console.log(prgBar)
  prgBar.addEventListener('click', function(){
    let width = Number(this.innerText.replace("%",""))
    console.log (width)
    let interval = setInterval(frame,10)
    function frame(){
      if (width >= 100 ) {
        clearInterval(interval)
      } else {
        width++
        this.style.width = width + '%'
        this.innerHTML = width * 1 + '%'
      }
    }
  })
</script>
@endsection
@endsection