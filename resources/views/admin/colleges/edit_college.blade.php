@extends('templates.t_college')
@section('content')
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Edit Kampus</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
        {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li> --}}
         <li class="breadcrumb-item active">Edit Kampus</li>
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
                  <form action="{{url('/admin/college/'.$college->id.'')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="form-group col-md-12">
                        <input type="hidden" name="id" id="id" autocomplete="off" required value="{{ $college->id }}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label for="inputBasicFirstName" class="form-control-label">Nama Kampus</label>
                        <input type="text" name="nama_kampus" class="form-control" id="nama_kampus" required value="{{ $college->nama_kampus }}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label for="profile_kampus" class="form-control-label">Profile Kampus</label>
                        <textarea name="profile_kampus" id="profile_kampus" class="form-control" placeholder="Profile Kampus" required rows="10" value="{{ $college->profile_kampus }}">{{ $college->profile_kampus }}</textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="alamat_kampus" class="form-control-label">Alamat Kampus</label>
                        <input type="text" id="alamat_kampus" name="alamat_kampus" class="form-control" required value="{{ $college->alamat_kampus }}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="website_kampus" class="form-control-label">Website Kampus</label>
                        <input type="text" id="website_kampus" name="website_kampus" class="form-control" required value="{{ $college->website_kampus }}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-4">
                          <label for="tipe_kampus" class="form-control-label">Tipe Kampus</label>
                          <select name="tipe_kampus" id="tipe_kampus" class="form-control" required>
                            <option value="{{ $college->tipe_kampus_id }}" disable selected>{{ $college->tipe_college->tipe_kampus }}</option>
                            <!-- Foreach Tipe Kampus -->
                            @foreach ($tipe_colleges as $tipe_college)
                                <option value="{{ $tipe_college->id }}">{{ $tipe_college->tipe_kampus }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="form-group col-md-4">
                          <label for="akreditasi_kampus" class="form-control-label">Akreditasi Kampus</label>
                          <select name="akreditasi_kampus" id="akreditasi_kampus" class="form-control" required>
                            <option value="{{ $college->akreditasi_id }}" disable selected>{{ $college->akreditasi->akreditasi }}</option>
                            <!-- Foreach Akreditasi Kampus -->
                            @foreach ($akreditasis as $akreditasi)
                              <option value="{{ $akreditasi->id }}">{{ $akreditasi->akreditasi }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="form-group col-md-4">
                          <label for="province" class="form-control-label">Provinsi</label>
                          <select name="province" id="province" class="form-control" required>
                            <option value="{{ $college->province_id }}" disable selected>{{ $college->province->nama_provinsi }}</option>
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
                          <input type="file" id="logo_kampus" name="logo_kampus" value="{{ $college->logo_kampus }}">
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
  var editor = document.getElementById("profile_kampus");
  CKEDITOR.replace(editor, {
    languague: 'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>
@endsection
