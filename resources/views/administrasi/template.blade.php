@extends('layouts.app')

@section('title', 'Administrasi')
@section('costum-css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('content')

@include('components.main-navbar')

<main class="py-4">

  <div id="wrapper">

    @section('sidebar')

    @include('components.sidebar')

    @show

    {{-- @show --}}

    <!-- Content Wrapper -->

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <div class="container-fluid">

          <!-- Page Heading -->

          <div class="d-sm-flex align-items-center justify-content-between mb-4">

            <h1 class="h3 mb-0 text-gray-800">@yield('title_section', 'Dashboard')</h1>

          </div>

          @yield('main-content')

        </div>

      </div>



    </div>

    {{-- <!-- Scroll to Top Button-->

    <a class="scroll-to-top rounded" href="#page-top" style="display: inline;">

      <i class="fas fa-angle-up"></i>

    </a> --}}

  </div>

</main>

@include('sweetalert::alert')



@section('costum-script')

<script src="{{ asset('js/home.js') }}"></script>

@endsection

@endsection