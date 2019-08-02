@extends('templates.t_admin')
@section('content')
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Input Pekerjaan</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
      {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li> --}}
      <li class="breadcrumb-item active">Input Pekerjaan</li>
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
    
  </div>
  <!-- End Page -->
  @endsection
  @section('moreJS')
  <script>
    
  </script>
  @endsection
