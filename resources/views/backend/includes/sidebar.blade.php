<!-- Main sidebar -->
<div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        <span class="font-weight-semibold">Navigation</span>
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="sidebar-user-material-body">
                <div class="card-body text-center">
                    <a href="#">
                        <img src="{{ $logged_in_user->picture}}"
                             class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
                    </a>
                    <h6 class="mb-0 text-white text-shadow-dark">{{$logged_in_user->name}}</h6>
                    <span class="font-size-sm text-white text-shadow-dark">{{strtoupper($logged_in_user->getRoleNames()[0])}}</span>
                </div>

                <div class="sidebar-user-material-footer">
                    <a href="#user-nav"
                       class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle"
                       data-toggle="collapse"><span>My account</span></a>
                </div>
            </div>

            <div class="collapse" id="user-nav">
                <ul class="nav nav-sidebar">
                    <li class="nav-item">
                        <a href="{{url('account')}}" class="nav-link">
                            <i class="icon-user-plus"></i>
                            <span>My profile</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-switch2"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Main</div>
                    <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}"
                       class="nav-link {{active_class(Active::checkUriPattern('admin/dashboard'))}}">
                        <i class="icon-home4"></i><span>Dashboard</span>
                    </a>
                </li>
                @if ($logged_in_user->isAdmin())
                    <li class="nav-item nav-item-submenu {{
                    active_class(Active::checkUriPattern('admin/auth*'), 'nav-item-open')
                }}">
                        <a href="#" class="nav-link"><i class="icon-lock"></i> <span>Access</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Access" style="display: {{active_class(Active::checkUriPattern('admin/auth*'), 'block')}}; ">
                            <li class="nav-item"><a href="{{route('admin.auth.user.index')}}" class="nav-link {{active_class(Active::checkUriPattern('admin/auth/user'))}}">Users</a>
                            </li>
                            <li class="nav-item"><a href="{{route('admin.auth.role.index')}}" class="nav-link {{active_class(Active::checkUriPattern('admin/auth/role'))}}">Roles</a>
                            </li>
                        </ul>
                    </li>
                @endif

                {{--Destinations Sidebar--}}
                <li class="nav-item nav-item-submenu {{
                    active_class(Active::checkUriPattern('worlddestinations'), 'nav-item-open')}}">
                    <a href="#" class="nav-link"><i class="icon-users2"></i> <span>Destination Details</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Destinations"
                        style="display: {{active_class(Active::checkUriPattern('worlddestinations*'), 'block')}}; ">

                        <li class="nav-item"><a href="{{route('worlddestinations.index')}}"
                                                class="nav-link {{active_class(Active::checkUriPattern('worlddestinations'))}}">
                                <i class="icon-airplane3"></i><span>Destination</span>
                            </a>
                        </li>
                        <li class="nav-item"><a href="{{route('countryitineraries.index')}}"
                                                class="nav-link {{active_class(Active::checkUriPattern('countryitineraries'))}}">
                                <i class="icon-list"></i><span>Itineraries</span>
                            </a>
                        </li>
                        <li class="nav-item"><a href="{{route('blog.index')}}"
                                                class="nav-link {{active_class(Active::checkUriPattern('blog'))}}">
                                <i class="icon-blogger2"></i><span>Blog</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->
