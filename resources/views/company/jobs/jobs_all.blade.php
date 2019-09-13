@extends('templates.t_company')
@section('content')
<div class="page">
  <div class="page-header">
    <h1 class="page-title">List Pekerjaan</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/company/dashboard')}}">Home</a></li>
      {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li> --}}
      <li class="breadcrumb-item active">List Pekerjaan</li>
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
          <h3 class="panel-title">Data Pekerjaan</h3>
        </header>
        <div class="table-responsive">
          <div class="dataTables_wrapper container-fluid dt-bootstrap4" id="DataTables_Table_0_wrapper">
            <div class="row">
              <div class="col-sm-12">
                <div style="margin-bottom: 10px;">
                  <a class="mb-2" href="{{url('/company/pekerjaan/')}}"><button class="btn btn-primary mb-2" type="button">Input Pekerjaan</button></a> 
                </div>
                
                <table class="table table-hover dataTable table-striped dtr-inline collapsed" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1183px;" data-plugin="dataTable">
                  <thead>
                    <tr role="row">
                      <th tabindex="0" class="sorting_asc" aria-controls="DataTables_Table_0" style="width: 202.02px;" aria-label="Name: activate to sort column descending" aria-sort="ascending" rowspan="1" colspan="1">No.</th>
                      <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 253.02px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1">Nama Pekerjaan</th>
                      <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 223.02px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Tipe  Pekerjaan
                      </th>
                      <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 223.02px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Jobs Function
                      </th>
                      <th tabindex="0" class="sorting" aria-controls="DataTables_Table_0" style="width: 223.02px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Jobs Role
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
                  <td>{{ $perusahaans->job_title }}</td>
                  <td>{{ $perusahaans->tipe_pekerjaan }}</td>
                  <td>{{ $perusahaans->jobs_functions }}</td>
                  <td>{{ $perusahaans->jobs_roles }}</td>
                  <td>
                    <span>
                      <a class="mb-2" href="{{url('/company/lihat_detail_pekerjaan/'.$perusahaans->id)}}"><button class="btn btn-success" type="button">Lihat</button></a>
                      <a class="mb-2" href="{{url('/company/edit_pekerjaan/'.$perusahaans->id)}}"><button class="btn btn-warning" type="button">Edit</button></a>  
                      <a class="mb-2 hapus" href="{{url('/company/hapus_pekerjaan/'.$perusahaans->id)}}">
                        <button class="btn btn-danger hapus" type="button">Hapus</button>
                      </a> 
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
  {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>
  <script>
    $( ".hapus" ).click(function( event ) {
      event.preventDefault();
      const href = $(this).data('edit-url');
      console.log(href);
      Swal({
        title: 'Apakah Anda yakin',
        text: "melakukan pembatalan sesi ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, batalkan!',
        cancelButtonText: 'Kembali',
      }).then((result) => {
      if (result.value) {
        document.location.href = href;
      }
    })
  });
  </script> --}}
  @endsection
