@extends('templates.t_admin')
@section('content')
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Data Fakultas</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
        {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li> --}}
         <li class="breadcrumb-item active">Data Fakultas</li>
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
              <div class="row" style="margin: 20px">
      {{-- Content --}}
      <a href="/admin/faculty/create" class="btn btn-success">Input Data Fakultas</a>
      @if(count($faculties) > 0)
      
        <table style="margin-top: 10px" class="table table-bordered">
            <tr>
                <th>Nama Fakultas</th>
                <th>Deskripsi Fakultas</th>
                <th>Jumlah Jurusan</th>
                <th>Aksi</th>
            </tr>
            @foreach ($faculties as $faculty)
                <tr>
                    <td>{{ $faculty->nama_fakultas }}</td>
                    <td>{{ $faculty->deskripsi_fakultas }}</td>
                    <td>{{ $faculty->jumlah_jurusan }}</td>
                    <td>
                        <a href="/admin/faculty/{{ $faculty->id }}/edit" class="btn btn-primary">Edit</a> | 
                        <a href="/admin/faculty/{{ $faculty->id }}/destroy" class="btn btn-danger">Delete</a>
                    </td>
                </tr>   
            @endforeach
        </table>
      @endif     
        </div>
      </div>
    </div>

    </div>
  </div>
@endsection