@extends('templates.t_admin')
@section('content')
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Input Kategori Karir</h1>
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
                  <form action="{{url('/admin/kategori/store')}}" method="post" enctype="multipart/form-data" id="add_trans" autocomplete="off">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicFirstName">Nama Kategori Karir</label>
                        <input name="nama_kategori" class="form-control" id="nama_kategori" type="text" placeholder="Nama Kategori" autocomplete="off" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="example-file-input">Upload Gambar Kategori</label>
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