@extends('templates.t_college')
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
          <div class="panel">
          <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title">Data Kampus</h3>
          </header>
          <div class="table-responsive">
            <div class="dataTables_wrapper container-fluid dt-bootstrap4" id="DataTables_Table_0_wrapper"> 
              <div class="row">
                
                <div class="col-sm-12">
                    <a href="{{ url('/admin/college/create') }}" class="btn btn-primary" style="margin-bottom: 1.5rem;">Input Data Kampus</a>
                  <table class="table table-hover dataTable table-striped dtr-inline collapsed" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1183px;" data-plugin="dataTable">
                    <thead>
                      <tr role="row">
                        <th tabindex="0" class="sorting_asc" aria-controls="DataTables_Table_0" style="width: 202.02px;" aria-label="Name: activate to sort column descending" aria-sort="ascending" rowspan="1" colspan="1">No.</th>
                        <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1">Nama Kampus</th>
                        <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Alamat Kampus</th>
                        <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Website Kampus</th>
                        <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Logo Kampus</th>
                        <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Aksi</th>
                      </tr>
                    </thead>
              <tbody>
                @php
                  $no=1;
                @endphp
                @foreach($colleges as $college)
                  <tr class="odd" role="row">
                    <td tabindex="1" class="sorting_1">
                      {{ $no }}
                      @php $no++; @endphp
                    </td>
                    <td>{{ $college->nama_kampus }}</td>
                    <td>{{ $college->alamat_kampus }}</td>
                    <td>{{ $college->website_kampus }}</td>
                    <td>
                      <img src="{{ asset('/storage/public/logo_kampus/'.$college->logo_kampus.'') }}" alt="logo kampus" style="width: 40px;">
                    </td>
                    <td>
                      <span>
                        <a class="mb-2" href="{{url('')}}"><button class="btn btn-success" type="button">Lihat</button></a>
                        <a class="mb-2" href="{{ url('/admin/college/edit/'.$college->id.'') }}"><button class="btn btn-warning" type="button">Edit</button></a>
                        <a class="mb-2" href="{{ url('/admin/college/destroy/'.$college->id.'') }}"><button class="btn btn-danger" type="button">Hapus</button></a>
                      </span>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
            </div>
          </div>
        </div>

    </div>
  </div>
@endsection