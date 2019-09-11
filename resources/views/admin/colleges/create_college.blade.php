@extends('templates.t_admin')
@section('content')
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Input Kampus</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
        {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li> --}}
         <li class="breadcrumb-item active">Input Kampus</li>
      </ol>
    </div>

    <div class="page-content">
      <div class="col-12 mb-2 mt-2">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach  
        @endif
        
        @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                <strong>Sukses! </strong> {{ session()->get('message') }}
            </div>
        @endif
        
      </div>
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-md-12">
              <!-- Example Basic Form (Form grid) -->
              <div class="example-wrap">
                <div class="example">
                    <form action="{{url('/admin/college/store')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                      {{csrf_field()}}
                      <div class="row">
                        <div class="form-group col-md-12">
                          <label for="inputBasicFirstName" class="form-control-label">Nama Kampus</label>
                          <input type="text" name="nama_kampus" class="form-control" placeholder="Nama Fakultas" id="nama_kampus" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-12">
                          <label for="profile_kampus" class="form-control-label">Profile Kampus</label>
                          <textarea name="profile_kampus" id="profile_kampus" class="form-control" placeholder="Profile Kampus" required rows="10"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="alamat_kampus" class="form-control-label">Alamat Kampus</label>
                          <input type="text" id="alamat_kampus" name="alamat_kampus" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="website_kampus" class="form-control-label">Website Kampus</label>
                            <input type="text" id="website_kampus" name="website_kampus" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-4">
                          <label for="tipe_kampus" class="form-control-label">Tipe Kampus</label>
                          <select name="tipe_kampus" id="tipe_kampus" class="form-control" required>
                            <option value="" disable selected>--Pilih Tipe Kampus--</option>
                            <!-- Foreach Tipe Kampus -->
                            @foreach ($tipe_colleges as $tipe_college)
                                <option value="{{ $tipe_college->id }}">{{ $tipe_college->tipe_kampus }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="akreditasi_kampus" class="form-control-label">Akreditasi Kampus</label>
                            <select name="akreditasi_kampus" id="akreditasi_kampus" class="form-control" required>
                              <option value="" disable selected>--Pilih Akreditasi Kampus--</option>
                              <!-- Foreach Akreditasi Kampus -->
                              @foreach ($akreditasis as $akreditasi)
                                <option value="{{ $akreditasi->id }}">{{ $akreditasi->akreditasi }}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="province" class="form-control-label">Provinsi</label>
                            <select name="province" id="province" class="form-control" required>
                              <option value="" disable selected>--Pilih Provinsi--</option>
                              <!-- Foreach Provinsi Kampus -->
                              @foreach ($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->nama_provinsi }}</option>
                              @endforeach
                            </select>
                        </div>
                      </div>
                      <div class="row">
                          <div class="form-group col-md-12">
                            <label class="form-control-label" for="logo_kampus">Upload Logo Kampus</label>
                            <input type="file" id="logo_kampus" name="logo_kampus">
                          </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-12">
                          <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                      </div>
                    </form>
                </div>
              </div>
              <!-- End Example Basic Form (Form grid) -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel Input Grid -->
    </div>
  </div>
  <!-- End Page -->
@endsection
@section('moreJS')
<script src="{{ asset('assets/ckeditor_standard/ckeditor.js') }}"></script>
<script>
  var konten = document.getElementById("profile_kampus");
  CKEDITOR.replace(konten, {
    languague: 'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>
@endsection
