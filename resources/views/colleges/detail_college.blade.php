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
    <!-- Start Side Menu Section -->
    <section class="sidebar">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-2">
            <ul class="side-menu">
              <h4 class="menu-tag">Menu</h4>
              <li class="nav-item"><a href="" class="nav-link text-white active">Fakultas dan Jurusan</a></li>
              <li class="nav-item"><a href="" class="nav-link text-white">Prestasi</a></li>
              <li class="nav-item"><a href="" class="nav-link text-white">Pendaftaran</a></li>
              <li class="nav-item"><a href="" class="nav-link text-white">Berita</a></li>
              <li class="nav-item"><a href="" class="nav-link text-white">Beasiswa</a></li>
            </ul>
          </div>
          <div class="col-md-8">
            <ul class="side-description">
              <h4 class="description-tag">Profile</h4>
              <div class="row side-description-content">
                <p class="default-content">{!! $college->profile_kampus !!}</p>
              </div>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End Side Menu Section -->

@endsection