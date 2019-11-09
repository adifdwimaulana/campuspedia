@extends('templates.t_home')
@section('content')
  <!-- Start Banner Section -->
  <header class="masthead">
    <div class="container">
      <div class="row">
        <div class="float-left detail-content">
        </div>
      </div>
      <div class="college-tag">
        <h1 class="font-weight-heavy text-white">{{ $college->nama_kampus }}</h1>
      </div>
    </div>
  </header>
  <!-- End Banner Section -->
  <!-- Start Detail Section -->
  <section class="college-image">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="content">
            <h3 class="top-detail">ALAMAT</h3>
            <h5 class="pt-5">{{ $college->alamat_kampus }}</h5>
          </div>
        </div>
        <div class="col-md-4">
          <div class="content">
            <img src="{{ asset('storage/public/logo_kampus/'.$college->logo_kampus.'') }}" alt="logo_kampus" class="logo-kampus">
          </div>
        </div>
        <div class="col-md-4">
          <div class="content">
            <h3 class="top-detail">WEBSITE</h3>
            <h5 class="pt-5">{{ $college->website_kampus }}</h5>
          </div>
        </div>
      </div>
    </section>
    <!-- End Detail Section -->

@endsection