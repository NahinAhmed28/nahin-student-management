<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('backend/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('backend/assets/img/favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Institution PANEL</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous"
          referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">--}}
    <!-- CSS Files -->
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/assets/css/light-bootstrap-dashboard.css?v=2.0.0 ')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('backend/assets/css/demo.css')}}" rel="stylesheet" />


</head>

<body>
<div class="wrapper">
    @include('institutions.layouts.common.sidebar')

    <div class="main-panel">
        <!-- Navbar -->

    @include('institutions.layouts.common.navbar')


        <!-- End Navbar -->

                {{--page item start--}}
        <div class="content">
            <div class="container-fluid">

             @yield('content')   {{--yield page item here--}}

            </div>

        </div>
            {{--page item end--}}


            {{--footer--}}
        @include('institutions.layouts.common.footer')
                {{--end footer--}}
    </div>
</div>
<!--   -->
 <div class="fixed-plugin">
<div class="dropdown show-dropdown">
    <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
    </a>

    <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Style</li>
        <li class="adjustments-line">
            <a href="javascript:void(0)" class="switch-trigger">
                <p>Background Image</p>
                <label class="switch">
                    <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                </label>
                <div class="clearfix"></div>
            </a>
        </li>
        <li class="adjustments-line">
            <a href="javascript:void(0)" class="switch-trigger background-color">
                <p>Filters</p>
                <div class="pull-right">
                    <span class="badge filter badge-black" data-color="black"></span>
                    <span class="badge filter badge-azure" data-color="azure"></span>
                    <span class="badge filter badge-green" data-color="green"></span>
                    <span class="badge filter badge-orange" data-color="orange"></span>
                    <span class="badge filter badge-red" data-color="red"></span>
                    <span class="badge filter badge-purple active" data-color="purple"></span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <li class="header-title">Sidebar Images</li>

        <li class="active">
            <a class="img-holder switch-trigger" href="javascript:void(0)">
                <img src="{{asset('backend/assets/img/sidebar-1.jpg')}}" alt="" />
            </a>
        </li>
        <li>
            <a class="img-holder switch-trigger" href="javascript:void(0)">
                <img src="{{asset('backend/assets/img/sidebar-3.jpg')}}" alt="" />
            </a>
        </li>

        <li>
            <a class="img-holder switch-trigger" href="javascript:void(0)">
                <img src="{{asset('backend/assets/img/sidebar-4.jpg')}}" alt="" />
            </a>
        </li>

        <li>
            <a class="img-holder switch-trigger" href="javascript:void(0)">
                <img src="{{asset('backend/assets/img/sidebar-5.jpg')}}" alt="" />
            </a>
        </li>



        <li class="button-container">
            <button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · nahin</button>
            <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · nahin </button>
        </li>
    </ul>
</div>
</div>

</body>
<!--   Core JS Files   -->
{{--<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>--}}
<script src="{{asset('backend/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('backend/assets/js/plugins/bootstrap-switch.js')}}"></script>
<!--  Google Maps Plugin    -->
{{--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}
<!--  Chartist Plugin  -->
<script src="{{asset('backend/assets/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('backend/assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{asset('backend/assets/js/light-bootstrap-dashboard.js?v=2.0.0')}}" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('backend/assets/js/demo.js')}}"></script>
{{--<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>--}}

{{--multiple select bootstrap--}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>
