@extends('templates.t_company')
@section('content')
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Edit Pekerjaan</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/company/dashboard')}}">Home</a></li>
        {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li> --}}
         <li class="breadcrumb-item active">Edit Pekerjaan</li>
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
                  <form action="{{url('/company/simpan_pekerjaan')}}" method="post" enctype="multipart/form-data" id="add_trans" autocomplete="off">
                    {{csrf_field()}}
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicFirstName">Job Title</label>
                        <input name="nama_pekerjaan" class="form-control" id="job_title" type="text" placeholder="Job Title" autocomplete="off" required value="{{ $perusahaan->job_title }}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold" for="negara">Kota</label>
                            <select id="kota" name="kota" class="form-control" required>
                                <option value="" disabled selected>-- Pilih Kota--</option>
                                @foreach($kota as $kotas)
                                  <option value="{{$kotas->id}}">{{$kotas->nama_kota}} - {{$kotas->nama_negara}}</option>
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
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold" for="negara">Minimal Education</label>
                            <select id="minimal_education" name="minimal_education" class="form-control" required>
                                <option value="" disabled selected>-- Pilih Tipe Industri--</option>
                                @foreach($pendidikan as $pendidikans)
                                  <option value="{{$pendidikans->tingkat_pendidikan}}">{{$pendidikans->tingkat_pendidikan}}</option>
                                @endforeach
                            </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold" for="negara">Job Role</label>
                            <select id="jobs_role" name="jobs_role" class="form-control" required>
                                <option value="" disabled selected>-- Pilih Tipe Industri--</option>
                                @foreach($jobs_role as $jobs)
                                  <option value="{{$jobs->id}}">{{$jobs->jobs_role}} - {{$jobs->jobs_functions}}</option>
                                @endforeach
                            </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Job Description</label>
                        <textarea class="form-control" placeholder="deskripsi" name="deskripsi" id="deskripsi" required>{{ $perusahaan->jobs_description }}</textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-control-label font-weight-bold" for="inputBasicEmail">Jumlah Loker</label>
                      <input name="jumlah_loker" class="form-control" id="jumlah_loker" type="text" placeholder="Jumlah Loker" autocomplete="off" required value="{{ $perusahaan->jumlah_loker }}">
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicFirstName">Work Experience</label>
                        <textarea class="form-control" placeholder="deskripsi" name="work_experience" id="work_experience" required>{{ $perusahaan->work_experience }}</textarea>
                        {{-- <input name="work_experience" class="form-control" id="work_experience" type="text" placeholder="Work Experience" autocomplete="off" required> --}}
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Benefit</label>
                        <textarea class="form-control" placeholder="Benefit" name="benefit" id="benefit" required>{{ $perusahaan->benefit }}</textarea>
                      </div>
                    </div>
                    {{-- <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Job Description</label>
                        <textarea class="form-control" placeholder="Job Description" name="deskripsi" id="deskripsi" required></textarea>
                      </div>
                    </div> --}}
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Skill</label>
                        <textarea class="form-control" placeholder="Skill" name="skill" id="skill" required>{{ $perusahaan->skill }}</textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold">Remote</label>
                        <div>
                          <div class="radio-custom radio-default radio-inline">
                            <input name="remote" id="" type="radio" value="1" @if( $perusahaan->remote==1 ) checked @endif>
                            <label for="ya">Ya</label>
                          </div>
                          <div class="radio-custom radio-default radio-inline" @if( $perusahaan->remote==0 ) checked @endif>
                            <input name="remote" id="" type="radio" value="0">
                            <label for="tidak">Tidak</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold">Gaji Tampil</label>
                        <div>
                          <div class="radio-custom radio-default radio-inline">
                            <input name="gaji_tampil" id="" type="radio" value="1" @if( $perusahaan->gaji_tampil==1 ) checked @endif>
                            <label for="ya">Ya</label>
                          </div>
                          <div class="radio-custom radio-default radio-inline">
                            <input name="gaji_tampil" id="" type="radio" value="0" @if( $perusahaan->gaji_tampil==0 ) checked @endif>
                            <label for="tidak">Tidak</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold" for="inputBasicFirstName">Gaji</label>
                        <input name="gaji" class="form-control" id="gaji" type="text" placeholder="Gaji" autocomplete="off" required value="{{ $perusahaan->gaji }}">
                      </div>
                      <div class="form-group col-md-6">
                        <label class="form-control-label font-weight-bold" for="inputBasicLastName">Bonus Salary</label>
                        <input name="bonus_salary" class="form-control" id="bonus_salary" type="text" placeholder="Bonus Salary" autocomplete="off" required value="{{ $perusahaan->bonus_salary }}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label class="form-control-label font-weight-bold" for="example-file-input">File attachment</label>
                        <input type="file" id="file_attachment" name="file_attachment" required>
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

<script src="{{asset('assets/ckeditor_standard/ckeditor.js')}}"></script>
<script>
  var konten = document.getElementById("skill");
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
</script>
<script>
  var konten = document.getElementById("benefit");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>
<script>
  var konten = document.getElementById("work_experience");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>

<script>
    $(document).ready(function () {
        $("#kota").select2({
            placeholder: "Pilih Nama Kota"
        });
    });
    $(document).ready(function () {
        $("#tipe_industri").select2({
            placeholder: "Pilih Tipe Industri"
        });
    });
    $(document).ready(function () {
        $("#jobs_role").select2({
            placeholder: "Pilih Jobs Role"
        });
    });
    $(document).ready(function () {
        $("#minimal_education").select2({
            placeholder: "Pilih Jobs Role"
        });
    });
</script>
@endsection
