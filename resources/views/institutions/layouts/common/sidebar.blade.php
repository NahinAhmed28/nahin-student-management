<div class="sidebar" data-image="{{asset('backend/assets/img/sidebar-5.jpg')}}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{route('institution.list')}}" class="simple-text">
                Institution Panel
            </a>
        </div>
        <ul class="nav">
            <li>
                <a class="nav-link" href="{{route(('institution.index'))}}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('institution.user')}}">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('institution.enrollment')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>Enrollment List</p>
                </a>
            </li>

            <li>
                <a class="nav-link" href="{{route('course.index')}}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Manage Course</p>
                </a>
            </li>

            <li>
                <a class="nav-link" href="{{route('discipline.index')}}">
                    <i class="nc-icon nc-atom"></i>
                    <p> Course Disciplines</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('institution.list')}}">
                    <i class="nc-icon nc-bullet-list-67"></i>
                    <p>Institution List</p>
                </a>
            </li>

            <li>
                <a class="nav-link" href="{{route('institution.notification')}}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Notifications</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('user.home')}}">
                    <i class="nc-icon nc-satisfied"></i>
                    <p>Registered User</p>
                </a>
            </li>
        </ul>
    </div>
</div>
