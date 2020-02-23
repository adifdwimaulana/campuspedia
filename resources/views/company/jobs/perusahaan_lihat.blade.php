@extends('templates.t_company')
@section('content')
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Lihat Perusahaan</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/company/dashboard')}}">Home</a></li>
        {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li> --}}
         <li class="breadcrumb-item active">Lihat Perusahaan</li>
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
                  <div style="margin-bottom: 10px;">
                    <a class="mb-2" href="{{url('/company/edit_perusahaan/'.$perusahaan->id)}}"><button class="btn btn-primary mb-2" type="button">Edit Perusahaan</button></a> 
                  </div>
                  <br>
                  <form action="{{url('/company/edit_perusahaan')}}" method="post" enctype="multipart/form-data" id="add_trans" autocomplete="off">
                    {{csrf_field()}}
                    {{-- <div class="row">
                      <div class="form-group col-md-12">
                        <input name="id" class="form-control" id="id" type="hidden" disabled placeholder="ID" autocomplete="off" required value="{{ $perusahaan->id }}">
                      </div>
                    </div> --}}
                    <div class="row items-push js-gallery img-fluid-100">
                        <div class="col-md animated fadeIn" style="text-align:center;">
                            <a class="" href="{{ asset('/storage/'.$perusahaan->logo_perusahaan) }}" target="_blank">
                                <img class="img-fluid text" style="max-height:300px; width:auto;" src="{{ asset('/storage/'.$perusahaan->logo_perusahaan) }}" alt="">
                            </a>
                        </div>
                    </div><br><br>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicFirstName">Nama Perusahaan</label>
                        <input name="nama_perusahaan" class="form-control" id="nama_perusahaan" type="text" placeholder="Nama Perusahaan" autocomplete="off" required value="{{ $perusahaan->nama_perusahaan }}" disabled>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold" for="negara">Negara</label>
                        <select id="negara" name="negara" class="form-control" required>
                            <option value="{{ $perusahaan->negara }}" selected disabled>{{ $perusahaan->negara }}</option>
                            {{-- @foreach($negara as $negaras)
                              <option value="{{$negaras->nama_negara}}">{{$negaras->nama_negara}}</option>
                            @endforeach --}}
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold" for="negara">Tipe Industri</label>
                        <select id="tipe_industri" name="tipe_industri" class="form-control" required>
                            <option value="{{ $perusahaan->tipe_industri }}" selected disabled>{{ $perusahaan->tipe_industri }}</option>
                            {{-- @foreach($tipe_industri as $tipe_industris)
                              <option value="{{$tipe_industris->nama_industri}}">{{$tipe_industris->nama_industri}}</option>
                            @endforeach --}}
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Visi dan Misi Perusahaan</label>
                        {{-- <textarea class="form-control" placeholder="Visi dan Misi" name="visi_misi" id="visi_misi" required>{{ $perusahaan->visi_misi }}</textarea> --}}
                        {!! $perusahaan->visi_misi !!}
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Deskripsi Perusahaan</label>
                        {{-- <textarea class="form-control" placeholder="Deskripsi Perusahaan" name="deskripsi" id="deskripsi" required>{{ $perusahaan->deskripsi_perusahaan }}</textarea> --}}
                        {!! $perusahaan->deskripsi_perusahaan !!}
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-control-label font-weight-bold" for="inputBasicEmail">Alamat Perusahaan</label>
                      <input name="alamat" class="form-control" id="alamat" type="text" placeholder="Alamat Perusahaan" autocomplete="off" required value="{{ $perusahaan->alamat_perusahaan }}" disabled>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicFirstName">Link Website</label>
                        <input name="website" class="form-control" id="website" type="text" placeholder="Link Website" autocomplete="off" required value="{{ $perusahaan->link_website }}" disabled>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold" for="inputBasicFirstName">Link Twitter</label>
                        <input name="twitter" class="form-control" id="twitter" type="text" placeholder="Link Twitter" autocomplete="off" required value="{{ $perusahaan->link_twitter }}" disabled>
                      </div>
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Link LinkedIn</label>
                        <input name="LinkedIn" class="form-control" id="LinkedIn" type="text" placeholder="Link LinkedIn" autocomplete="off" required value="{{ $perusahaan->link_linkedin }}" disabled>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold" for="inputBasicFirstName">Link Facebook</label>
                        <input name="facebook" class="form-control" id="facebook" type="text" placeholder="Link Facebook" autocomplete="off" required value="{{ $perusahaan->link_facebook }}" disabled>
                      </div>
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Link Instagram</label>
                        <input name="instagram" class="form-control" id="instagram" type="text" placeholder="Link Instagram" autocomplete="off" required value="{{ $perusahaan->link_instagram }}" disabled>
                      </div>
                    </div>
                    {{-- <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="example-file-input">Upload Logo Perusahaan</label>
                        <input type="file" id="logo" name="logo">
                      </div>
                    </div> --}}
                    {{-- <div class="form-group">
                      <button class="btn btn-primary" type="submit">Simpan</button>
                    </div> --}}
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
<script src="{{asset('assets/ckeditor_standard/ckeditor.js')}}"></script>
{{-- <script>
  var konten = document.getElementById("visi_misi");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>
<script>
  var konten = document.getElementById("deskripsi");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script> --}}

{{-- <script>
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
</script> --}}
@endsection
