<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} | Ruang Internasional</title>

    <link rel="icon" href="{{ asset('assets/user') }}/images/logo/Ruang Internasional.png" />
    <!-- Bootstrap -->
    <link href="{{ asset('assets/admin') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/admin') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    {{-- <link href="{{ asset('assets/admin') }}/vendors/nprogress/nprogress.css" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{ asset('assets/trixeditor/trix.css') }}">
    @yield('dataTable-css')

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/admin') }}/build/css/custom.min.css" rel="stylesheet">
    <style>
        .trix-button-group--file-tools {
            display: none !important;
        }

    </style>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{ asset('assets/admin') }}/images/profile/{{ session()->get('akun-admin.gambar') }}"
                                alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{ session()->get('akun-admin.nama') }}</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li class="{{ request()->is('admin') ? 'active' : '' }}"><a
                                        href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a>
                                </li>
                                <li
                                    class="{{ request()->is('admin/galleries') ||request()->is('admin/posts/*') ||$var == 'category_post' ||request()->is('admin/subgallery/*') ||$var == 'team'? 'active': '' }}">
                                    <a><i class="fa fa-edit"></i> Master<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li
                                            class="{{ $var == 'post' || $var == 'createpost' ? 'current-page active' : '' }}">
                                            <a href="{{ route('posts.index') }}">Post</a>
                                        </li>
                                        <li class="{{ $var == 'category_post' ? 'current-page active' : '' }}"><a
                                                href="{{ route('categorypost.index') }}">Category Post</a></li>
                                        <li class="{{ $var == 'gallery' ? 'current-page active' : '' }}"><a
                                                href="{{ route('admin.galleries') }}">Gallery</a></li>
                                        <li class="{{ $var == 'team' ? 'current-page active' : '' }}"><a
                                                href="{{ route('admin.team.list') }}">Team</a></li>
                                    </ul>
                                </li>
                                <li class="{{ $var == 'contact' ? 'active' : '' }}"><a
                                        href="{{ route('list-contact') }}"><i class="fa fa-envelope"></i>
                                        Comments</a>
                                </li>
                                <li class="{{ request()->is('admin/users/*') ? 'active' : '' }}">
                                    <a><i class="fa fa-gears"></i>Settings <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="{{ $var == 'myprofile' ? 'current-page active' : '' }}"><a
                                                href="{{ route('users.changePassword') }}">Change Password</a></li>
                                        <li class="{{ $var == 'password_change' ? 'current-page active' : '' }}"><a
                                                href="{{ route('users.profile') }}">My Profile</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Administrator</h3>
                            <ul class="nav side-menu">
                                <li class="{{ $var == 'users' ? 'active' : '' }}"><a><i class="fa fa-windows"></i>
                                        Extras <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="{{ $var == 'users' ? 'current-page' : '' }}"><a
                                                href="{{ route('users.list') }}">Users</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/admin') }}/images/profile/{{ session()->get('akun-admin.gambar') }}"
                                        alt="">{{ session()->get('akun-admin.nama') }}
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('users.profile') }}"><i
                                            class="fa fa-user pull-right"></i> Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"><i
                                            class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <div class="clearfix"></div>

                <div class="row">
                    @yield('admin-content')
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Monitoring Administrator <a href="https://github.com/jregex">JRegex</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/admin') }}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/admin') }}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/admin') }}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    {{-- <script src="{{ asset('assets/admin') }}/vendors/nprogress/nprogress.js"></script> --}}
    <script src="{{ asset('assets/trixeditor/trix.js') }}"></script>

    @yield('dataTable-js')

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/admin') }}/build/js/custom.min.js"></script>
    <script src="{{ asset('assets/admin') }}/build/js/custom-admin.js"></script>
</body>

</html>
