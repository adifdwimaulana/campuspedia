@extends('templates.t_admin')
@section('content')

  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title font-size-26 font-weight-100">Overview</h1>
    </div>
    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <!-- First Row -->
        <div class="col-lg-3 col-sm-6 col-xs-12 info-panel">
          <div class="widget widget-shadow">
            <div class="widget-content bg-white padding-20">
              <button type="button" class="btn btn-floating btn-sm btn-warning">
                <i class="icon fa-users"></i>
              </button>
              <span class="margin-left-15 font-weight-400">Tentor</span>
              <div class="content-text text-center margin-bottom-0">
                <i class="text-danger icon wb-triangle-up font-size-20">
                          </i>
                <span class="font-size-40 font-weight-100">2</span>
                <p class="blue-grey-400 font-weight-100 margin-0"><a href="{{URL::to('/admin/list_tutor_valid')}}"><button class="btn btn-sm btn-primary">Lihat Tentor</button></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 info-panel">
          <div class="widget widget-shadow">
            <div class="widget-content bg-white padding-20">
              <button type="button" class="btn btn-floating btn-sm btn-danger">
                <i class="icon fa fa-users"></i>
              </button>
              <span class="margin-left-15 font-weight-400">Siswa</span>
              <div class="content-text text-center margin-bottom-0">
                
                <span class="font-size-40 font-weight-100">1</span>
                <p class="blue-grey-400 font-weight-100 margin-0"><a href="{{URL::to('/admin/list_user')}}"><button class="btn btn-sm btn-primary">Lihat Siswa</button></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 info-panel">
          <div class="widget widget-shadow">
            <div class="widget-content bg-white padding-20">
              <button type="button" class="btn btn-floating btn-sm btn-success">
                <i class="icon wb-eye"></i>
              </button>
              <span class="margin-left-15 font-weight-400">Les Aktif</span>
              <div class="content-text text-center margin-bottom-0">
                <i class="text-danger icon wb-triangle-up font-size-20">
                          </i>
                <span class="font-size-40 font-weight-100">23,456</span>
                <p class="blue-grey-400 font-weight-100 margin-0">+25% From previous month</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 info-panel">
          <div class="widget widget-shadow">
            <div class="widget-content bg-white padding-20">
              <button type="button" class="btn btn-floating btn-sm btn-primary">
                <i class="icon wb-user"></i>
              </button>
              <span class="margin-left-15 font-weight-400">Request Les</span>
              <div class="content-text text-center margin-bottom-0">
                <i class="text-danger icon wb-triangle-up font-size-20">
                          </i>
                <span class="font-size-40 font-weight-100">4,367</span>
                <p class="blue-grey-400 font-weight-100 margin-0">+25% From previous month</p>
              </div>
            </div>
          </div>
        </div>
        <!-- End First Row -->

        <!-- second Row -->
        <div class="col-ms-12 col-xs-12 col-md-12" id="ecommerceChartView">
          <div class="widget widget-shadow">
            <div class="widget-header padding-20">
              <div class="btn-group dropdown chart-menu">
                <button type="button" class="btn btn-outline btn-default dropdown-toggle" data-toggle="dropdown">
                  PRODUCTS SALES
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu animate" role="menu">
                  <li role="presentation">
                    <a href="#" role="menuitem">Sales</a>
                  </li>
                  <li role="presentation">
                    <a href="#" role="menuitem">Total sales</a>
                  </li>
                  <li role="presentation">
                    <a href="#" role="menuitem">profit</a>
                  </li>
                </ul>
              </div>
              <ul class="nav nav-pills nav-pills-rounded chart-action" data-plugin="nav-tabs">
                <li class="active"><a data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                <li><a data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                <li><a data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
              </ul>
            </div>
            <div class="widget-content tab-content bg-white padding-20">
              <div class="ct-chart tab-pane active" id="scoreLineToDay"></div>
              <div class="ct-chart tab-pane" id="scoreLineToWeek"></div>
              <div class="ct-chart tab-pane" id="scoreLineToMonth"></div>
            </div>
          </div>
        </div>
        <!-- End Second Row -->

        <!-- Third Row -->
        <!-- End Third Row -->
      </div>
    </div>
  </div>
  <!-- End Page -->

@stop