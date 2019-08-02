@extends('templates.t_admin')
@section('content')
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Data Kampus</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
        {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li> --}}
         <li class="breadcrumb-item active">Data Kampus</li>
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
      {{-- Content --}}
      @if(count($colleges) > 0)
        <table class="table table-bordered">
            <tr>
                <th>Nama Kampus</th>
                <th>Alamat Kampus</th>
                <th>Website Kampus</th>
                <th>Logo Kampus</th>
                <th>Aksi</th>
            </tr>
            @foreach ($colleges as $college)
                <tr>
                    <td>{{ $college->nama_kampus }}</td>
                    <td>{{ $college->alamat_kampus }}</td>
                    <td>{{ $college->website_kampus }}</td>
                    <td>
                        <img style="width: 40px; height: 40px;" src="/storage/public/logo_kampus/{{ $college->logo_kampus }}">
                    </td>
                    <td>
                        <a href="/admin/college/{{ $college->id }}/edit" class="btn btn-primary">Edit</a> | 
                        <a href="/admin/college/{{ $college->id }}/destroy" class="btn btn-danger">Delete</a>
                    </td>
                </tr>   
            @endforeach
        </table>
      @endif
    </div>
  </div>
@endsection