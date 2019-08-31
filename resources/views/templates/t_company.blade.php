<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/base/dashboard/ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Sep 2017 04:28:31 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Admin Dashboard | Campuspedia</title>

  <link rel="apple-touch-icon" href="{{asset('assets/back/images/apple-touch-icon.png')}}">
  <link rel="shortcut icon" href="{{asset('assets/back/images/favicon.ico')}}">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{asset('assets/back/global/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/global/css/bootstrap-extend.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/global/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/css/site.min3f0d.css')}}">

  <!-- Skin tools (demo site only) -->
  <link rel="stylesheet" href="{{asset('assets/back/global/css/skintools.min.css')}}">
  <script src="{{asset('assets/back/js/sections/skintools.min.js')}}"></script>

  <!-- Plugins -->
  <link rel="stylesheet" href="{{asset('assets/back/global/vendor/animsition/animsition.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/global/vendor/asscrollable/asScrollable.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/global/vendor/switchery/switchery.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/global/vendor/intro-js/introjs.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/global/vendor/slidepanel/slidePanel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/global/vendor/flag-icon-css/flag-icon.min.css')}}">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="{{asset('assets/back/global/vendor/chartist-js/chartist.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/global/vendor/aspieprogress/asPieProgress.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.css')}}">

  <link rel="stylesheet" href="{{asset('assets/back/global/vendor/datatables-bootstrap/dataTables.bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/global/vendor/datatables-fixedheader/dataTables.fixedHeader.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/global/vendor/datatables-responsive/dataTables.responsive.min.css')}}">

  <!-- Page -->
  <link rel="stylesheet" href="{{asset('assets/back/examples/css/tables/datatable.min.css')}}">

  <!-- Page -->
  <link rel="stylesheet" href="{{asset('assets/back/assets/examples/css/dashboard/ecommerce.min.css')}}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{asset('assets/back/global/fonts/web-icons/css/web-icons.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/back/global/fonts/brand-icons/brand-icons.min.css')}}">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <link rel="stylesheet" href="{{asset('assets/back/global/fonts/font-awesome/css/font-awesome.min.css')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />

  <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="{{asset('assets/back/global/vendor/modernizr/modernizr.min.js')}}"></script>
  <script src="{{asset('assets/back/global/vendor/breakpoints/breakpoints.min.js')}}"></script>
  <script>
    Breakpoints();
  </script>
  <script src="{{asset('assets/back/global/vendor/jquery/jquery.min.js')}}"></script>
</head>

<body class="ecommerce_dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided" data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="{{asset('assets/back/images/logo_putih.png')}}" title="Remark">


      </div>

    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                <span class="sr-only">Toggle menubar</span>
                <span class="hamburger-bar"></span>
              </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>


        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="{{asset('assets/back/global/portraits/5.jpg')}}" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false" data-animation="scale-up" role="button">
              <i class="icon wb-bell" aria-hidden="true"></i>
              <span class="badge badge-danger up">5</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>NOTIFICATIONS</h5>
                <span class="label label-round label-danger">New 5</span>
              </li>

              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">A new order has been placed</h6>
                          <time class="media-meta" datetime="2016-06-12T20:50:48+08:00">5 hours ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Completed the task</h6>
                          <time class="media-meta" datetime="2016-06-11T18:29:20+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Settings updated</h6>
                          <time class="media-meta" datetime="2016-06-11T14:05:00+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Event started</h6>
                          <time class="media-meta" datetime="2016-06-10T13:50:18+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Message received</h6>
                          <time class="media-meta" datetime="2016-06-10T12:34:48+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                  All notifications
                </a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Messages" aria-expanded="false" data-animation="scale-up" role="button">
              <i class="icon wb-envelope" aria-hidden="true"></i>
              <span class="badge badge-info up">3</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>MESSAGES</h5>
                <span class="label label-round label-info">New 3</span>
              </li>

              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-online">
                            <img src="../../global/portraits/2.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Mary Adams</h6>
                          <div class="media-meta">
                            <time datetime="2016-06-17T20:22:05+08:00">30 minutes ago</time>
                          </div>
                          <div class="media-detail">Anyways, i would like just do it</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-off">
                            <img src="../../global/portraits/3.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Caleb Richards</h6>
                          <div class="media-meta">
                            <time datetime="2016-06-17T12:30:30+08:00">12 hours ago</time>
                          </div>
                          <div class="media-detail">I checheck the document. But there seems</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-busy">
                            <img src="../../global/portraits/4.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">June Lane</h6>
                          <div class="media-meta">
                            <time datetime="2016-06-16T18:38:40+08:00">2 days ago</time>
                          </div>
                          <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-away">
                            <img src="../../global/portraits/5.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Edward Fletcher</h6>
                          <div class="media-meta">
                            <time datetime="2016-06-15T20:34:48+08:00">3 days ago</time>
                          </div>
                          <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                  See all messages
                </a>
              </li>
            </ul>
          </li>
          <li id="toggleChat">
            <a data-toggle="site-sidebar" href="javascript:void(0)" title="Chat" data-url="../site-sidebar.tpl">
              <i class="icon wb-chat" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search" data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar site-menubar-light">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
              
            <li class="site-menu-category">MASTER</li>
            
            <li class="site-menu-item">
              <a href="{{URL::to('/company/job')}}">
                <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
              </a>
            </li>

            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon wb-extension" aria-hidden="true"></i>
                <span class="site-menu-title">Perusahaan</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{URL::to('/company/perusahaan')}}">
                    <span class="site-menu-title">Input Perusahaan</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{URL::to('/company/view_all_perusahaan')}}">
                    <span class="site-menu-title">List Perusahaan</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{URL::to('/admin/list_group')}}">
                    <span class="site-menu-title">Group Aktif</span>
                  </a>
                </li>

              </ul>
            </li>

            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                <span class="site-menu-title">Pekerjaan</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{URL::to('/company/job')}}">
                    <span class="site-menu-title">Input Pekerjaan</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{URL::to('/company/view_all_perusahaan')}}">
                    <span class="site-menu-title">List Pekerjaan</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{URL::to('/admin/list_private')}}">
                    <span class="site-menu-title">Private Aktif</span>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </div>

    <div class="site-menubar-footer">
      <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip" data-original-title="Settings">
        <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
        <span class="icon wb-eye-close" aria-hidden="true"></span>
      </a>
      <a href="{{URL::to('/admin/logout')}}" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon wb-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>


  @yield('content')


  <!-- Footer -->
  <footer class="site-footer">
    <div class="site-footer-legal">© 2019 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
    <div class="site-footer-right">
      Crafted with <i class="red-600 wb wb-heart"></i> by <a href="http://themeforest.net/user/amazingSurge">amazingSurge</a>
    </div>
  </footer>
  <!-- Core  -->

    <script src="{{asset('assets/back/global/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/back/global/vendor/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/back/global/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('assets/back/global/vendor/asscroll/jquery-asScroll.min.js')}}"></script>
    <script src="{{asset('assets/back/global/vendor/mousewheel/jquery.mousewheel.min.js')}}"></script>
    <script src="{{asset('assets/back/global/vendor/asscrollable/jquery.asScrollable.all.min.js')}}"></script>
    <script src="{{asset('assets/back/global/vendor/ashoverscroll/jquery-asHoverScroll.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('assets/back/global/vendor/switchery/switchery.min.js')}}"></script>
    <script src="{{asset('assets/back/global/vendor/intro-js/intro.min.js')}}"></script>
    <script src="{{asset('assets/back/global/vendor/screenfull/screenfull.min.js')}}"></script>
    <script src="{{asset('assets/back/global/vendor/slidepanel/jquery-slidePanel.min.js')}}"></script>

    <!-- Plugins For This Page -->
    <script src="{{asset('assets/back/global/vendor/chartist-js/chartist.min.js')}}"></script>
    <script src="{{asset('assets/back/global/vendor/aspieprogress/jquery-asPieProgress.min.js')}}"></script>
    <script src="{{asset('assets/back/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js')}}"></script>
    <!-- Plugins For This Page -->
    <script src="{{asset('assets/back/global/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/back/global/vendor/datatables-fixedheader/dataTables.fixedHeader.js')}}"></script>
    <script src="{{asset('assets/back/global/vendor/datatables-bootstrap/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/back/global/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>
    <script src="{{asset('assets/back/global/vendor/datatables-tabletools/dataTables.tableTools.js')}}"></script>
    <script src="{{asset('assets/back/global/vendor/asrange/jquery-asRange.min.js')}}"></script>
    <script src="{{asset('assets/back/global/vendor/bootbox/bootbox.js')}}"></script>



    <!-- Scripts -->
    <script src="{{asset('assets/back/global/js/core.min.js')}}"></script>
    <script src="{{asset('assets/back/js/site.min.js')}}"></script>

    <script src="{{asset('assets/back/js/sections/menu.min.js')}}"></script>
    <script src="{{asset('assets/back/js/sections/menubar.min.js')}}"></script>
    <script src="{{asset('assets/back/js/sections/gridmenu.min.js')}}"></script>
    <script src="{{asset('assets/back/js/sections/sidebar.min.js')}}"></script>

    <script src="{{asset('assets/back/global/js/configs/config-colors.min.js')}}"></script>
    <script src="{{asset('assets/back/js/configs/config-tour.min.js')}}"></script>

    <script src="{{asset('assets/back/global/js/components/asscrollable.min.js')}}"></script>
    <script src="{{asset('assets/back/global/js/components/animsition.min.js')}}"></script>
    <script src="{{asset('assets/back/global/js/components/slidepanel.min.js')}}"></script>
    <script src="{{asset('assets/back/global/js/components/switchery.min.js')}}"></script>

    <script src="{{asset('assets/back/global/js/components/aspieprogress.min.js')}}"></script>


    <script src="{{asset('assets/back/examples/js/dashboard/ecommerce.min.js')}}"></script>
    <script src="{{asset('assets/back/global/js/components/datatables.min.js')}}"></script>


    <script src="{{asset('assets/back/examples/js/tables/datatable.min.js')}}"></script>
    <script src="{{asset('assets/back/examples/js/uikit/icon.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

    <!-- Google Analytics -->
    <script>
      (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js',
        'ga');

      ga('create', 'UA-65522665-1', 'auto');
      ga('send', 'pageview');
    </script>

    @yield('moreJS')
</body>

</html>
