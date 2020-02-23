@extends('templates.t_college')
@section('content')
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Input Jurusan</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
        {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li> --}}
         <li class="breadcrumb-item active">Input Jurusan</li>
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
                {{-- <h4 class="example-title">Basic Form (Form grid)</h4> --}}
                <div class="example">
                  <form action="{{url('/admin/major/store')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="hidden" name="id" id="id" autocomplete="off" required value="{{ $major->id }}">
                        </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label for="inputBasicFirstName" class="form-control-label">Nama Jurusan</label>
                        <input type="text" name="nama_jurusan" class="form-control" placeholder="Nama Jurusan" id="nama_jurusan" required value="{{ $major->nama_jurusan }}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label for="deskripsi_jurusan" class="form-control-label">Deskripsi Jurusan</label>
                        <textarea name="deskripsi_jurusan" id="deskripsi_jurusan" class="form-control" placeholder="Deskripsi Jurusan" required rows="10" value="{{ $major->deskripsi_jurusan }}">{{ $major->deskripsi_jurusan }}</textarea>
                      </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-md-4">
                        <label for="daya_tampung" class="form-control-label">Daya Tampung</label>
                        <input type="number" id="daya_tampung" name="daya_tampung" class="form-control" required value="{{ $major->daya_tampung }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nama_kampus" class="form-control-label">Nama Kampus</label>
                        <select name="nama_kampus" id="nama_kampus" class="form-control" required>
                            <option value="{{ $major->college_id }}" disable selected>{{ $major->college->nama_kampus }}</option>
                              @foreach($colleges as $college)
                                  <option value="{{ $college->id }}">{{ $college->nama_kampus }}</option>
                              @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nama_fakultas" class="form-control-label">Fakultas</label>
                        <select name="nama_fakultas" id="nama_fakultas" class="form-control" required>
                            <option value="{{ $major->faculty_id }}" disable selected>{{ $major->faculty->nama_fakultas }}</option>
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
  var editor = document.getElementById("deskripsi_jurusan");
  CKEDITOR.replace(editor, {
    languague: 'en-gb'
  });
  CKEDITOR.config.allowedContent = true;

  $('#nama_kampus').on('change', function() {
    var collegeId = $(this).val();
    if(collegeId) {
        $.ajax({
            type: "GET",
            url: "{{url('/admin/major/faculty-list')}}?college_id="+collegeId,
            success: function(res) {
                if(res) {
                    $("#nama_fakultas").empty();
                    $.each(res, function(key, value) {
                        console.log(value);
                        var faculty_id = value["id"];
                        var nama_fakultas = value["nama_fakultas"];
                        $("#nama_fakultas").append('<option value="'+faculty_id+'" >'+nama_fakultas+'</option>');
                    });
                } else {
                    $("#nama_fakultas").empty();
                }
            }
        });
    } else {
        $("#nama_fakultas").empty();
    }
  });

</script>
@endsection
