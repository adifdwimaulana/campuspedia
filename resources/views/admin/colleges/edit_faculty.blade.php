@extends('templates.t_admin')
@section('content')
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Edit Fakultas</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
        {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li> --}}
         <li class="breadcrumb-item active">Edit Fakultas</li>
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
                  <form action="{{url('/admin/faculty/'.$faculty->id.'')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="form-group col-md-12">
                        <input type="hidden" name="id" id="id" autocomplete="off" required value="{{ $faculty->id }}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label for="inputBasicFirstName" class="form-control-label">Nama Fakultas</label>
                        <input type="text" name="nama_fakultas" class="form-control" placeholder="Nama Fakultas" id="nama_fakultas" required value="{{ $faculty->nama_fakultas }}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label for="deskripsi_fakultas" class="form-control-label">Deskripsi Fakultas</label>
                        <textarea name="deskripsi_fakultas" id="deskripsi_fakultas" class="form-control" placeholder="Deskripsi Fakultas" required rows="10" value="{{ $faculty->deskripsi_fakultas }}">{{ $faculty->deskripsi_fakultas }}</textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="jumlah_jurusan" class="form-control-label">Jumlah Jurusan</label>
                        <input type="number" id="jumlah_jurusan" name="jumlah_jurusan" class="form-control" required value="{{ $faculty->jumlah_jurusan }}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="nama_kampus" class="form-control-label">Pilih Kampus</label>
                        <select name="nama_kampus" id="nama_kampus" class="form-control" required>
                        <option value="{{ $faculty->college_id }}" disable selected>{{ $faculty->college->nama_kampus }}</option>
                            @foreach ($colleges as $college)
                                <option value="{{ $college->id }}">{{ $college->nama_kampus }}</option>
                            @endforeach
                        </select>
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
  var editor = document.getElementById('deskripsi_fakultas');
  CKEDITOR.replace(editor, {
    languague: 'en-gb',
  });
  CKEDITOR.config.allowedContent = true;
</script>
@endsection
