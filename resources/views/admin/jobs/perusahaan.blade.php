@extends('templates.t_admin')
@section('content')
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Input Perusahaan</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
        {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li> --}}
         <li class="breadcrumb-item active">Input Perusahaan</li>
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
                  <form action="{{url('/admin/simpan_perusahaan')}}" method="post" enctype="multipart/form-data" id="add_trans" autocomplete="off">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicFirstName">Nama Perusahaan</label>
                        <input name="nama_perusahaan" class="form-control" id="nama_perusahaan" type="text" placeholder="Nama Perusahaan" autocomplete="off" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold" for="negara">Negara</label>
                            <select id="negara" name="negara" class="form-control" required>
                                <option value="" disabled selected>-- Pilih Negara--</option>
                                @foreach($negara as $negaras)
                                  <option value="{{$negaras->nama_negara}}">{{$negaras->nama_negara}}</option>
                                @endforeach
                            </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold" for="negara">Tipe Industri</label>
                            <select id="tipe_industri" name="tipe_industri" class="form-control" required>
                                <option value="" disabled selected>-- Pilih Tipe Industri--</option>
                                @foreach($tipe_industri as $tipe_industris)
                                  <option value="{{$tipe_industris->nama_industri}}">{{$tipe_industris->nama_industri}}</option>
                                @endforeach
                            </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Visi dan Misi Perusahaan</label>
                        <textarea class="form-control" placeholder="Visi dan Misi" name="visi_misi" required></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Deskripsi Perusahaan</label>
                        <textarea class="form-control" placeholder="Deskripsi Perusahaan" name="deskripsi" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-control-label font-weight-bold" for="inputBasicEmail">Alamat Perusahaan</label>
                      <input name="alamat" class="form-control" id="alamat" type="text" placeholder="Alamat Perusahaan" autocomplete="off" required>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicFirstName">Link Website</label>
                        <input name="website" class="form-control" id="website" type="text" placeholder="Link Website" autocomplete="off" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold" for="inputBasicFirstName">Link Twitter</label>
                        <input name="twitter" class="form-control" id="twitter" type="text" placeholder="Link Twitter" autocomplete="off" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Link LinkedIn</label>
                        <input name="LinkedIn" class="form-control" id="LinkedIn" type="text" placeholder="Link LinkedIn" autocomplete="off" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold" for="inputBasicFirstName">Link Facebook</label>
                        <input name="facebook" class="form-control" id="facebook" type="text" placeholder="Link Facebook" autocomplete="off" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Link Instagram</label>
                        <input name="instagram" class="form-control" id="instagram" type="text" placeholder="Link Instagram" autocomplete="off" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="example-file-input">Upload Logo Perusahaan</label>
                        <input type="file" id="logo" name="logo" required>
                      </div>
                    </div>
                    
                    
                    {{-- <div class="form-group">
                      <div class="checkbox-custom checkbox-default">
                        <input name="inputCheckbox" id="inputBasicRemember" type="checkbox" checked="" autocomplete="off">
                        <label for="inputBasicRemember">Remember Me</label>
                      </div>
                    </div> --}}
                    <div class="form-group">
                      <button class="btn btn-primary" type="submit">Simpan</button>
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
<script>
    $(document).ready(function () {
        $("#negara").select2({
            placeholder: "Pilih Nama Negara"
        });
    });
    $(document).ready(function () {
        $("#tipe_industri").select2({
            placeholder: "Pilih Tipe Industri"
        });
    });
</script>
@endsection
