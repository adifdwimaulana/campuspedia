@extends('templates.t_admin')
@section('content')
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Input Karir</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
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
                <strong>Sukses!</strong> {{ session()->get('message') }}
            </div>
        @endif
      </div>
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-md-12">
              <!-- Example Basic Form (Form grid) -->
              <div class="example-wrap">
                {{-- <h4 class="example-title">Basic Form (Form grid)</h4> --}}
                <div class="example">
                  <form action="{{url('/admin/karir/store')}}" method="post" enctype="multipart/form-data" id="add_trans" autocomplete="off">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicFirstName">Nama Karir</label>
                        <input name="nama_karir" class="form-control" id="nama_karir" type="text" placeholder="Nama Karir" autocomplete="off" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Profesi Terkait</label>
                        <textarea class="form-control" placeholder="Profesi Terkait" name="profesi" required></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Kisaran Pendapatan</label>
                        <textarea class="form-control" placeholder="Kisaran Pendapatan" name="kisaran" required></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Kualifikasi</label>
                        <textarea class="form-control" placeholder="Kualifikasi" name="kualifikasi" required></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Keahlian yang Dibutuhkan</label>
                        <textarea class="form-control" placeholder="Keahlian yang Dibutuhkan" name="keahlian" required></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Instansi Pekerjaan</label>
                        <textarea class="form-control" placeholder="Instansi Pekerjaan" name="instansi" required></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Deskripsi Karir</label>
                        <textarea class="form-control" placeholder="Deskripsi Karir" name="deskripsi" required></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="example-file-input">Upload Gambar Karir</label>
                        <input type="file" id="gambar" name="gambar" required>
                      </div>
                    </div>
                    
                    
                    {{-- <div class="form-group">
                      <div class="checkbox-custom checkbox-default">
                        <input name="inputCheckbox" id="inputBasicRemember" type="checkbox" checked="" autocomplete="off">
                        <label for="inputBasicRemember">Remember Me</label>
                      </div>
                    </div> --}}
                    <div class="form-group">
                      <button class="btn btn-primary" type="submit">Save</button>
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