<!doctype html>
<html lang="en">

<head>
@include('students.layouts.common.head')
</head>
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
