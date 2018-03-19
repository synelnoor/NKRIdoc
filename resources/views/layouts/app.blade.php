<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Saung Cisadane Administrator</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

   {{-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">--}}

<!-- local Css -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/skins/_all-skins.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Date Picker -->
    <link href="{{ asset('vendor/adminlte/plugins/datepicker/datepicker3.css') }}" rel="stylesheet">
    <!-- Tags Input -->
    <link href="{{ asset('vendor/adminlte/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <!-- include Summernote -->
    <link href="{{ asset('vendor/adminlte/plugins/summernote/summernote.css') }}" rel="stylesheet">
    <!-- Date Time Picker -->
    <link href="{{ asset('vendor/adminlte/plugins/datetimepicker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet">
    <!-- include Fancybox -->
    <link href="{{ asset('vendor/adminlte/plugins/fancybox/jquery.fancybox.min.css') }}" rel="stylesheet">
    <!-- include Fileuploader -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/fileuploader/jquery.fileuploader.css') }}">
    <!-- include Multi-select -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/multi-select/css/multi-select.css') }}">

    
    
    @yield('css')
</head>

<body class="skin-black sidebar-mini">
@if (!Auth::guest())
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="{{URL('home')}}" class="logo" >
                <b>Saung Cisadane</b>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation" >
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg"
                                     class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{!! Auth::user()->name !!}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg"
                                         class="img-circle" alt="User Image"/>
                                    <p>
                                        {!! Auth::user()->name !!}
                                        <small>Member since {!! Auth::user()->created_at->format('M. Y') !!}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{!! url('/logout') !!}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Sign out
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2016 <a href="#">Company</a>.</strong> All rights reserved.
        </footer>

    </div>
@else
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{!! url('/') !!}">
                   Saung Cisadane
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{!! url('/home') !!}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{!! url('/login') !!}">Login</a></li>
                    <li><a href="{!! url('/register') !!}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    
    @endif

    <!-- jQuery 3.1.1 -->
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/js/app.min.js"></script>--}}
    

    <!-- script autocomplete -->
    <script src="{{asset('js/autoComplete.js')}}"></script>
      <!-- Javascript -->
    <!-- jQuery 2.2.3 -->
    <script src="{{ asset('vendor/adminlte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('vendor/adminlte/plugins//bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Date Picker App -->
    <script src="{{ asset('vendor/adminlte/plugins/datepicker/bootstrap-datepicker.js') }}"></script>

    <!-- Date Time Picker -->
    <script src="{{ asset('vendor/adminlte/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- Tags Input -->
    <script src="{{ asset('vendor/adminlte/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('vendor/adminlte/plugins/select2/select2.min.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ asset('vendor/adminlte/plugins/summernote/summernote.min.js') }}"></script>

    <!-- Fancybox -->
    <script src="{{ asset('vendor/adminlte/plugins/fancybox/jquery.fancybox.min.js') }}"></script>

    <!-- Fileuploader -->
    <script src="{{ asset('vendor/adminlte/plugins/fileuploader/jquery.fileuploader.min.js') }}"></script>

    <!-- Multi-select -->
    <script src="{{ asset('vendor/adminlte/plugins/multi-select/js/jquery.multi-select.js') }}"></script>

    <!-- Quicksearch -->
    <script src="{{ asset('vendor/adminlte/plugins/quicksearch/jquery.quicksearch.min.js') }}"></script>
 
    @yield('scripts')
    
</body>
</html>