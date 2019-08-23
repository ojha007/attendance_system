@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet"
          href="{{ asset('vendor/adminlte/dist/css/skins/skin-' . config('adminlte.skin', 'blue') . '.min.css')}} ">
    @stack('css')
    @yield('css')
@stop

@section('body_class', 'skin-' . config('adminlte.skin', 'blue') . ' sidebar-mini ' . (config('adminlte.layout') ? [
    'boxed' => 'layout-boxed',
    'fixed' => 'fixed',
    'top-nav' => 'layout-top-nav'
][config('adminlte.layout')] : '') . (config('adminlte.collapse_sidebar') ? ' sidebar-collapse ' : ''))

@section('body')
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">
            @if(config('adminlte.layout') == 'top-nav')
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="navbar-brand">
                                {!! config('adminlte.logo', '<b>Admin</b>LTE') !!}
                            </a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <!-- /.navbar-collapse -->
                    @else
                        <!-- Logo -->
                            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="logo">
                                <!-- mini logo for sidebar mini 50x50 pixels -->
                                <span class="logo-mini">{!! config('adminlte.logo_mini', '<b>A</b>LT') !!}</span>
                                <!-- logo for regular state and mobile devices -->
                                <span class="logo-lg">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</span>
                            </a>

                            <!-- Header Navbar -->
                            <nav class="navbar navbar-static-top" role="navigation">
                                <!-- Sidebar toggle button-->
                                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                                    <span class="sr-only">{{ trans('adminlte::adminlte.toggle_navigation') }}</span>
                                </a>
                            @endif
                            <!-- Navbar Right Menu -->
                                <div class="navbar-custom-menu">

                                    <ul class="nav navbar-nav">
                                        <li>
                                            @if(config('adminlte.logout_method') == 'GET' || !config('adminlte.logout_method') && version_compare(\Illuminate\Foundation\Application::VERSION, '5.3.0', '<'))
                                                <a href="{{ url(config('adminlte.logout_url', 'auth/logout')) }}">
                                                    <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                                                </a>
                                            @else
                                                <a href="#"
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                >
                                                    <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                                                </a>
                                                <form id="logout-form"
                                                      action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}"
                                                      method="POST" style="display: none;">
                                                    @if(config('adminlte.logout_method'))
                                                        {{ method_field(config('adminlte.logout_method')) }}
                                                    @endif
                                                    {{ csrf_field() }}
                                                </form>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            @if(config('adminlte.layout') == 'top-nav')
                    </div>
                    @endif
                </nav>
        </header>

        @if(config('adminlte.layout') != 'top-nav')
            <aside class="main-sidebar">

                <section class="sidebar">
                    <ul class="sidebar-menu" data-widget="tree">
                        <li>

                        </li>
                        <li class="header text-center"><h5>Account Setting</h5></li>
                        @if(  ! auth()->user()->is('admin'))
                            <li>
                                <a href="{{route('profile')}}">
                                    <span class="fa fa-user-circle "></span>
                                    <span class="headline">My Profile</span>
                                </a>
                            </li>
                        @endif
                        <li>

                            <a href="{{route('show.change.password.form')}}">
                                <i class="fa fa-lock"></i>
                                <span class="headline">Change Password</span>
                            </a>
                        </li>
                        @if(auth()->user()->is('student'))
                            <li class="header text-center skin-blue"><h5>My Attendance</h5></li>
                        @endif

                        @if(auth()->user()->is('admin'))
                            <li class="header text-center skin-blue"><h5>Verify</h5></li>
                            <li>
                                <a href="{{route('verify.student')}}">
                                    <span class="fa fa-user-circle"></span>
                                    <span class="headline">Teacher</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('verify.teacher')}}">
                                    <span class="fa fa-user-circle"></span>
                                    <span class="headline">Student</span>
                                </a>
                            </li>
                            <li class="header text-center skin-blue"><h5>Subjects</h5></li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-book"></span>
                                    <span class="headline"> Add Subjects</span>

                                </a>
                            </li>
                        @endif
                    </ul>

                </section>
            </aside>

        @endif

        <div class="content-wrapper">
            @if(config('adminlte.layout') == 'top-nav')
                <div class="container">
                @endif

                    <section class="content-header">
                        @yield('content_header')
                    </section>

                    <section class="content">

                        @yield('content')

                    </section>
                    @if(config('adminlte.layout') == 'top-nav')
                </div>
                <!-- /.container -->
            @endif
        </div>
    </div>
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    @stack('js')

    @yield('js')
@stop
