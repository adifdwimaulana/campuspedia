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
          <header class="panel-heading">
            <div class="panel-actions"></div>
            <h3 class="panel-title">Data Fakultas</h3>
          </header>
          <div class="table-responsive">
            <div class="dataTables_wrapper container-fluid dt-bootstrap4" id="DataTables_Table_0_wrapper"> 
              <div class="row">
                
                <div class="col-sm-12">
                    <a href="{{ url('/admin/faculty/create') }}" class="btn btn-primary" style="margin-bottom: 1.5rem;">Input Data Fakultas</a>
                  <table class="table table-hover dataTable table-striped dtr-inline collapsed" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1183px;" data-plugin="dataTable">
                    <thead>
                      <tr role="row">
                        <th tabindex="0" class="sorting_asc" aria-controls="DataTables_Table_0" style="width: 202.02px;" aria-label="Name: activate to sort column descending" aria-sort="ascending" rowspan="1" colspan="1">No.</th>
                        <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1">Nama Fakultas</th>
                        <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Deskripsi Fakultas</th>
                        <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Jumlah Jurusan</th>
                        <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Aksi</th>
                      </tr>
                    </thead>
                    {{-- <tfoot>
                      <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Date</th><th rowspan="1" colspan="1">Salary</th></tr>
                    </tfoot> --}}
              <tbody>
                @php
                  $no=1;
                @endphp
                @foreach($faculties as $faculty)
                  <tr class="odd" role="row">
                    <td tabindex="1" class="sorting_1">
                      {{ $no }}
                      @php $no++; @endphp
                    </td>
                    <td>{{ $faculty->nama_fakultas }}</td>
                    <td>{!! $faculty->deskripsi_fakultas !!}</td>
                    <td>{{ $faculty->jumlah_jurusan }}</td>
                    <td>
                      <span>
                        <a class="mb-2" href="{{url('')}}"><button class="btn btn-success" type="button">Lihat</button></a>
                        <a class="mb-2" href="{{ url('/admin/faculty/edit/'.$faculty->id.'') }}"><button class="btn btn-warning" type="button">Edit</button></a>
                        <a class="mb-2" href="{{ url('/admin/faculty/destroy/'.$faculty->id.'') }}"><button class="btn btn-danger" type="button">Hapus</button></a>
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