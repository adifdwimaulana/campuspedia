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
                  
                  {!! Form::open(['action' => 'CollegesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'autocomplete' => 'off']) !!}
                  <div class="form-group col-md-12">
                    {{ Form::label('nama_kampus', 'Nama Kampus') }}
                    {{ Form::text('nama_kampus', '', ['class' => 'form-control', 'placeholder' => 'Nama Kampus']) }}
                  </div>
                  <div class="form-group col-md-12">
                    {{ Form::label('profile_kampus', 'Profile Kampus') }}
                    {{ Form::textarea('profile_kampus', '', ['class' => 'form-control', 'placeholder' => 'Profile Kampus']) }}
                  </div>
                  <div class="form-group col-md-6">
                    {{ Form::label('alamat_kampus', 'Alamat Kampus') }}
                    {{ Form::text('alamat_kampus', '', ['class' => 'form-control', 'placeholder' => 'Alamat Kampus']) }}
                  </div>
                  <div class="form-group col-md-6">
                    {{ Form::label('website_kampus', 'Website Kampus') }}
                    {{ Form::text('website_kampus', '', ['class' => 'form-control', 'placeholder' => 'Website Kampus']) }}
                  </div>
                  <div class="form-group col-md-6">
                    {{ Form::label('tipe_kampus', 'Tipe Kampus') }}
                    {{ Form::select('tipe_kampus', ['Negeri' => 'Negeri', 'Swasta' => 'Swasta', 'Kedinasan' => 'Kedinasan'], null, ['class' => 'form-control', 'placeholder' => 'Tipe Kampus']) }}
                  </div>
                  <div class="form-group col-md-6">
                    {{ Form::label('akreditasi_kampus', 'Akreditasi Kampus') }}
                    {{ Form::select('akreditasi_kampus', ['A' => 'A', 'B' => 'B', 'C' => 'C'], null, ['class' => 'form-control', 'placeholder' => 'Akreditasi Kampus']) }}
                  </div>
                  <div class="form-group col-md-12">
                    {{ Form::label('logo_kampus', 'Upload Logo Kampus') }}
                    {{ Form::file('logo_kampus', ['class' => 'form-group']) }}
                  </div>
                  <div class="form-group col-md-12">
                    {{ Form::submit('Simpan', ['class' => 'btn btn-primary form-group']) }}
                  </div>
                  {!! Form::close() !!}
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
