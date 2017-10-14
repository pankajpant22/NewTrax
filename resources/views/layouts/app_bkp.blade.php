<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Vinay</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar-fixed-side.css') }}" rel="stylesheet">
    <style>
      .margin-down-zero {
        margin-bottom: 0 !important;
      }
      .navbar-default {
        background-color: turquoise;
        border-color: #d3e0e9;
      }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top margin-down-zero">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Vinay Panel
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @if (Auth::check())
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-3 col-lg-2">
                  <nav class="navbar navbar-default navbar-fixed-side">
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a href="{{ route('admin') }}">Home</a></li>
                            <li><a href="{{ route('social')}}">Social Contacts</a></li>
                            <li><a href="{{ route('material')}}">Resources</a></li>
                            <li><a href="{{ route('link')}}">Resource Links</a></li>
                            <li><a href="{{ route('profile')}}">Profile</a></li>
                            <li><a href="{{ route('education')}}">Education</a></li>
                            <li><a href="{{ route('career')}}">Career</a></li>
                            <li><a href="{{ route('lang')}}">Languages</a></li>
                            <li><a href="{{ route('portProject')}}">Projects</a></li>
                            <li><a href="{{ route('portSkill')}}">Skills</a></li>
                            <li><a href="{{ route('portTool')}}">Tools</a></li>
                            <li><a href="{{ route('portVolunteering')}}">Volunteering</a></li>
                            <li><a href="{{ route('blog')}}">Blog</a></li>
                            <li><a href="{{ route('Tag')}}">Tag</a></li>
                        </ul>
                    </div>
                  </nav>
                </div>
            @endif
            <div class="col-sm-9 col-lg-10">
              @yield('content')
            </div>
          </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
