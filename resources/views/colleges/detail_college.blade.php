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
              <li class="nav-item" id="fakultas" onclick="changeContent(id);"><a href="javascript:;" class="nav-link text-white">Fakultas dan Jurusan</a></li>
              <li class="nav-item" id="prestasi" onclick="changeContent(id);"><a href="javascript:;" class="nav-link text-white">Prestasi</a></li>
              <li class="nav-item" id="pendaftaran" onclick="changeContent(id);" ><a href="javascript:;" class="nav-link text-white">Pendaftaran</a></li>
              <li class="nav-item" id="berita" onclick="changeContent(id);"><a href="javascript:;" class="nav-link text-white">Berita</a></li>
              <li class="nav-item" id="beasiswa" onclick="changeContent(id);"><a href="javascript:;" class="nav-link text-white">Beasiswa</a></li>
            </ul>
          </div>
          <div class="col-md-8">
            <ul class="side-description">
              <h4 class="description-tag" id="title-content">Profile</h4>
              <div class="row side-description-content" id="default-content">
                {!! $college->profile_kampus !!}
              </div>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End Side Menu Section -->

    <script>
      var titleContent = document.getElementById('title-content');
      var defaultContent = document.getElementById('default-content');
      var elementFakultas = document.getElementById('fakultas');
      var elementPrestasi = document.getElementById('prestasi');
      var elementPendaftaran = document.getElementById('pendaftaran');
      var elementBerita = document.getElementById('berita');
      var elementBeasiswa = document.getElementById('beasiswa');
      var elementAll = [elementFakultas, elementPrestasi, elementPendaftaran, elementBerita, elementBeasiswa];
      
      function changeContent(id) {
        if(id == 'fakultas') {
          titleContent.innerHTML = "FAKULTAS DAN JURUSAN";
          // defaultContent.innerHTML = "<h1 class='myContent'>HAHAHHA</h1>";
          for(var i = 0; i < elementAll.length; i++){
            if(elementAll[i].classList.contains('active')) {
              elementAll[i].classList.remove('active');
            }
            elementFakultas.classList.add('active');
          }
        } else if(id == 'prestasi') {
          titleContent.innerHTML = "PRESTASI";
          for(var i = 0; i < elementAll.length; i++){
            if(elementAll[i].classList.contains('active')) {
              elementAll[i].classList.remove('active');
            }
            elementPrestasi.classList.add('active');
          }
        } else if(id == 'pendaftaran') {
          titleContent.innerHTML = "PENDAFTARAN";
          for(var i = 0; i < elementAll.length; i++){
            if(elementAll[i].classList.contains('active')) {
              elementAll[i].classList.remove('active');
            }
            elementPendaftaran.classList.add('active');
          }
        } else if(id == 'berita') {
          titleContent.innerHTML = "BERITA";
          for(var i = 0; i < elementAll.length; i++){
            if(elementAll[i].classList.contains('active')) {
              elementAll[i].classList.remove('active');
            }
            elementBerita.classList.add('active');
          }
        } else if(id == 'beasiswa') {
          titleContent.innerHTML = "BEASISWA";
          for(var i = 0; i < elementAll.length; i++){
            if(elementAll[i].classList.contains('active')) {
              elementAll[i].classList.remove('active');
            }
            elementBeasiswa.classList.add('active');
          }
        }
      }

    </script>

@endsection