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
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
              aria-controls="nav-home" aria-selected="true">Home</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
              aria-controls="nav-profile" aria-selected="false">Profile</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
              aria-controls="nav-contact" aria-selected="false">Contact</a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            home
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            @include('contents.data-ibu')
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            contact
          </div>
        </div>
        {{-- <div class="card-header">
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
        <div class="card-body"> --}}
        {{-- <form method="post" action="{{ route ('update_profile_home', auth()->user()->id)}}">
        @method('patch')
        @csrf --}}
        {{-- <div class="tab-content" id="myTabContent">
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
        </div> --}}
        {{-- </form> --}}
        {{-- </div> --}}
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