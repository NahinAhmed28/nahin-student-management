<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Student Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Highly configurable boxes best used for showing numbers in an user friendly way.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="{{asset('frontend/main.css')}}" rel="stylesheet"></head>
<body>

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('students.layouts.common.header')

        <div class="app-main">
            @include('students.layouts.common.sidebar')

            <div class="app-main__outer">
            @yield('content')
            </div>
        </div>
        @include('students.layouts.common.footer')
    </div>



</body>
<script type="text/javascript" src="{{asset('frontend/assets/scripts/main.js')}}"></script>
@stack('scripts')
</html>
