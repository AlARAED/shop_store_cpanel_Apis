<!DOCTYPE html>
<html lang="en">

<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>BRAND_SHOP</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     @include('superadmin.cpanel.layout.css')



</head>
<!-- END HEAD -->

<body class="ks-navbar-fixed ks-sidebar-sections ks-sidebar-position-fixed ks-page-header-fixed ks-theme-primary ks-page-loading"> <!-- remove ks-page-header-fixed to unfix header -->

<!-- BEGIN HEADER -->
<nav class="navbar ks-navbar">
    <!-- BEGIN HEADER INNER -->
    <!-- BEGIN LOGO -->
    <div href="index.html" class="navbar-brand">
        <!-- BEGIN RESPONSIVE SIDEBAR TOGGLER -->
        <a href="#" class="ks-sidebar-toggle"><i class="ks-icon la la-bars" aria-hidden="true"></i></a>
        <a href="#" class="ks-sidebar-mobile-toggle"><i class="ks-icon la la-bars" aria-hidden="true"></i></a>
        <!-- END RESPONSIVE SIDEBAR TOGGLER -->

        <div class="ks-navbar-logo">
            <a href="{{ url('superadmin/index') }}" class="ks-logo">BRAND SHOP ADMIN</a>

            <!-- BEGIN GRID NAVIGATION -->
            <!--<span class="nav-item dropdown ks-dropdown-grid">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"></a>
                <div class="dropdown-menu ks-info ks-scrollable" aria-labelledby="Preview" data-height="260">
                    <div class="ks-scroll-wrapper">
                        <a href="#" class="ks-grid-item">
                            <span class="ks-icon la la-dashboard"></span>
                            <span class="ks-text">Dashboard</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <span class="ks-icon la la-flask"></span>
                            <span class="ks-text">Projects</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <span class="ks-icon la la-globe"></span>
                            <span class="ks-text">Form</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <span class="ks-icon la la-calendar-o"></span>
                            <span class="ks-text">Calendar</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <span class="ks-icon la la-ticket"></span>
                            <span class="ks-text">Tickets</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <span class="ks-icon la la-dashboard"></span>
                            <span class="ks-text">Profile</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <span class="ks-icon la la-dashboard"></span>
                            <span class="ks-text">Documentation</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <span class="ks-icon la la-dashboard"></span>
                            <span class="ks-text">FAQ</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <span class="ks-icon la la-dashboard"></span>
                            <span class="ks-text">Components</span>
                        </a>
                    </div>
                </div>
            </span>-->

            {{--<span class="nav-item dropdown ks-dropdown-grid-images">--}}
                {{--<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"></a>--}}
                {{--<div class="dropdown-menu ks-info ks-scrollable" aria-labelledby="Preview" data-height="260">--}}
                    {{--<div class="ks-scroll-wrapper">--}}
                        {{--<a href="#" class="ks-grid-item">--}}
                            {{--<img class="ks-icon" src="{{url('admin/')}}/assets/img/menu-grid/dashboard.png">--}}
                            {{--<span class="ks-text">الرئيسية</span>--}}
                        {{--</a>--}}
                        {{--<a href="#" class="ks-grid-item">--}}
                            {{--<img class="ks-icon" src="assets/img/menu-grid/flask.png">--}}
                            {{--<span class="ks-text">Projects</span>--}}
                        {{--</a>--}}
                        {{--<a href="#" class="ks-grid-item">--}}
                            {{--<img class="ks-icon" src="assets/img/menu-grid/calendar.png">--}}
                            {{--<span class="ks-text">Calendar</span>--}}
                        {{--</a>--}}
                        {{--<a href="#" class="ks-grid-item">--}}
                            {{--<img class="ks-icon" src="assets/img/menu-grid/profile.png">--}}
                            {{--<span class="ks-text">Profile</span>--}}
                        {{--</a>--}}
                        {{--<a href="#" class="ks-grid-item">--}}
                            {{--<img class="ks-icon" src="assets/img/menu-grid/ticket.png">--}}
                            {{--<span class="ks-text">Tickets</span>--}}
                        {{--</a>--}}
                        {{--<a href="#" class="ks-grid-item">--}}
                            {{--<img class="ks-icon" src="assets/img/menu-grid/settings.png">--}}
                            {{--<span class="ks-text">Settings</span>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</span>--}}

            <!-- END GRID NAVIGATION -->
        </div>
    </div>
    <!-- END LOGO -->

    <!-- BEGIN MENUS -->
    <div class="ks-wrapper">

        @include('superadmin.cpanel.layout.navbar')



        <!-- BEGIN NAVBAR ACTIONS TOGGLER -->
        <nav class="nav navbar-nav ks-navbar-actions-toggle">
            <a class="nav-item nav-link" href="#">
                <span class="la la-ellipsis-h ks-icon ks-open"></span>
                <span class="la la-close ks-icon ks-close"></span>
            </a>
        </nav>
        <!-- END NAVBAR ACTIONS TOGGLER -->

        <!-- BEGIN NAVBAR MENU TOGGLER -->
        <nav class="nav navbar-nav ks-navbar-menu-toggle">
            <a class="nav-item nav-link" href="#">
                <span class="la la-th ks-icon ks-open"></span>
                <span class="la la-close ks-icon ks-close"></span>
            </a>
        </nav>
        <!-- END NAVBAR MENU TOGGLER -->
    </div>
    <!-- END MENUS -->
    <!-- END HEADER INNER -->
</nav>
<!-- END HEADER -->






<div class="ks-page-container ks-dashboard-tabbed-sidebar-fixed-tabs">


    @include('superadmin.cpanel.layout.sidebar')


    <div class="ks-column ks-page">



        @yield('content')
    </div>
</div>



<script src="{{url('admin/')}}/libs/jquery/jquery.min.js"></script>
<script src="{{url('admin/')}}/libs/responsejs/response.min.js"></script>
<script src="{{url('admin/')}}/libs/loading-overlay/loadingoverlay.min.js"></script>
<script src="{{url('admin/')}}/libs/tether/js/tether.min.js"></script>
<script src="{{url('admin/')}}/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="{{url('admin/')}}/libs/jscrollpane/jquery.jscrollpane.min.js"></script>
<script src="{{url('admin/')}}/libs/jscrollpane/jquery.mousewheel.js"></script>
<script src="{{url('admin/')}}/libs/flexibility/flexibility.js"></script>
<script src="{{url('admin/')}}/libs/noty/noty.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{url('admin/')}}/assets/scripts/common.min.js"></script>
<!-- END THEME LAYOUT SCRIPTS -->

<script src="{{url('admin/')}}/libs/izi-modal/js/iziModal.min.js"></script>


<script src="{{url('admin/')}}/libs/d3/d3.min.js"></script>
<script src="{{url('admin/')}}/libs/c3js/c3.min.js"></script>
<script src="{{url('admin/')}}/libs/noty/noty.min.js"></script>
<script src="{{url('admin/')}}/libs/maplace/maplace.min.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
@yield('js')
<script type="application/javascript">

    (function ($) {
        $(document).ready(function () {
            c3.generate({
                bindto: '#ks-next-payout-chart',
                data: {
                    columns: [
                        ['data1', 6, 5, 6, 5, 7, 8, 7]
                    ],
                    types: {
                        data1: 'area'
                    },
                    colors: {
                        data1: '#81c159'
                    }
                },
                legend: {
                    show: false
                },
                tooltip: {
                    show: false
                },
                point: {
                    show: false
                },
                axis: {
                    x: {show:false},
                    y: {show:false}
                }
            });

            c3.generate({
                bindto: '#ks-total-earning-chart',
                data: {
                    columns: [
                        ['data1', 6, 5, 6, 5, 7, 8, 7]
                    ],
                    types: {
                        data1: 'area'
                    },
                    colors: {
                        data1: '#4e54a8'
                    }
                },
                legend: {
                    show: false
                },
                tooltip: {
                    show: false
                },
                point: {
                    show: false
                },
                axis: {
                    x: {show:false},
                    y: {show:false}
                }
            });

            c3.generate({
                bindto: '.ks-chart-orders-block',
                data: {
                    columns: [
                        ['Revenue', 150, 200, 220, 280, 400, 160, 260, 400, 300, 400, 500, 420, 500, 300, 200, 100, 400, 600, 300, 360, 600],
                        ['Profit', 350, 300,  200, 140, 200, 30, 200, 100, 400, 600, 300, 200, 100, 50, 200, 600, 300, 500, 30, 200, 320]
                    ],
                    colors: {
                        'Revenue': '#f88528',
                        'Profit': '#81c159'
                    }
                },
                point: {
                    r: 5
                },
                grid: {
                    y: {
                        show: true
                    }
                }
            });

            @if (session()->has('flash_notification.success'))
                setTimeout(function () {
                new Noty({
                    {{--                        text: '<strong>مرحباً بك يا {{Auth::user()->name}} في لوحة التحكم </strong>! <br> تم دخولك بنجاح.',--}}
                    text: '{{$notification['']}}<br>{{__('Welcome, :Name, to the control panel', ['Name' => Auth::user()->name])}}',
                    type: 'success',
                    theme: 'mint',
                    @if(App::getLocale() == 'ar')
                    layout: 'topLeft', @else layout: 'topRight',
                    @endif
                    timeout: 3000
                }).show();
            }, 1500);
                    @endif


            var maplace = new Maplace({
                map_div: '#ks-payment-widget-table-and-map-map',
                controls_on_map: false
            });
            maplace.Load();

            $('#ks-izi-modal-danger').iziModal();
            $('.ks-izi-modal-trigger').on('click', function (e) {
                $($(this).data('target')).iziModal('open');
            });
        });
    })(jQuery);
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.all.min.js"></script>

<script>
    var locale = '{{ config('app.locale') }}';
    if(locale == 'ar'){
        $('input[required],textarea[required],Select[required]').attr("oninvalid" , "this.setCustomValidity('يرجى ملء الحقل')");
        $('input[required],textarea[required],Select[required]').attr("oninput", "setCustomValidity('')");
    }
    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );
</script>
<div class="ks-mobile-overlay"></div>


<!-- END SETTINGS BLOCK -->
</body>
</html>