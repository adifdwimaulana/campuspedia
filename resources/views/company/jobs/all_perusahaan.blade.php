@extends('templates.t_company')
@section('content')
<div class="page">
  <div class="page-header">
    <h1 class="page-title">List Perusahaan</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/company')}}">Home</a></li>
      {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li> --}}
      <li class="breadcrumb-item active">List Perusahaan</li>
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
          <h3 class="panel-title">Data Perusahaan</h3>
        </header>
        <div class="table-responsive">
          <div class="dataTables_wrapper container-fluid dt-bootstrap4" id="DataTables_Table_0_wrapper"> 
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-hover dataTable table-striped dtr-inline collapsed" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1183px;" data-plugin="dataTable">
                  <thead>
                    <tr role="row">
                      <th tabindex="0" class="sorting_asc" aria-controls="DataTables_Table_0" style="width: 202.02px;" aria-label="Name: activate to sort column descending" aria-sort="ascending" rowspan="1" colspan="1">No.</th>
                      <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 253.02px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1">Nama Perusahaan</th>
                      <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 223.02px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Alamat Perusahaan
                      </th>
                      <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 223.02px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Tipe Industri
                      </th>
                      <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 223.02px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Aksi
                      </th>
                    </tr>
                  </thead>
                  {{-- <tfoot>
                    <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Date</th><th rowspan="1" colspan="1">Salary</th></tr>
                  </tfoot> --}}
            <tbody>
              @php
                $no=1;
              @endphp
              @foreach($perusahaan as $perusahaans)
                <tr class="odd" role="row">
                  <td tabindex="1" class="sorting_1">
                    {{ $no }}
                    @php $no++; @endphp
                  </td>
                  <td>{{ $perusahaans->nama_perusahaan }}</td>
                  <td>{{ $perusahaans->alamat_perusahaan }}</td>
                  <td>{{ $perusahaans->tipe_industri }}</td>
                  <td>
                    <span>
                      <button class="btn btn-block btn-success" type="button">Lihat</button>
                      <button class="btn btn-block btn-warning" type="button">Edit</button>
                      <button class="btn btn-block btn-danger" type="button">Hapus</button>
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
  <!-- End Page -->
  @endsection
  @section('moreJS')
  <script>
    
  </script>
  @endsection
