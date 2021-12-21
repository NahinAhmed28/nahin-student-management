<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
                            <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                                </button>
                            </span>
    </div>

    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="{{route('student.index')}}">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                    <a href="{{route('student.user')}}">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        User Info
                    </a>
                </li>
                <li class="app-sidebar__heading">Courses</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        List of Available Courses
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('student.course')}}">
                                <i class="metismenu-icon"></i>
                                List of Available Courses (i)
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>List of Available Courses (ii)
                            </a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-car"></i>
                        List of Available Disciplines
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('student.discipline')}}">
                                <i class="metismenu-icon">
                                </i>Disciplines
                            </a>
                        </li>
                    </ul>
                </li>
                <li  >
                    <a href="{{route('student.institution')}}">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        List of Available institutions
                    </a>
                </li>
                <li class="app-sidebar__heading">Enrollment</li>
                <li>
                    <a href="{{route('student.enrollment')}}" class="mm-active">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Enrolled courses
                    </a>
                </li>

                <li>
                    <a href="{{route('enrollment.create')}}" class="mm-active">
                        <i class="metismenu-icon pe-7s-display2"></i>
                         Enroll for Courses
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
