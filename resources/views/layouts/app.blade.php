<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lokaldo</title>

    <link rel="stylesheet" href="/css/styles/vendor/font.css" />

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="/css/bootstrap.min.css" /> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/layout/app.css" />

    <link rel="stylesheet" href="/assets/css/datepicker.css">

    <script src="https://use.fontawesome.com/287c210782.js"></script>

    @yield('styles')

</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="img/front-page-image/Lokaldo Header Logo.png" height="30px" width="167px" />
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/') }}">Browse Jobs</a></li>
                        <li><a href="{{ url('/') }}">Post a Job</a></li>
                        <li><a href="{{ url('/') }}">How it works?</a></li>
                        <li><a href="{{ url('/login') }}"><button class="btn btn-success" id="L_login"><span>
                            <i class="fa fa-facebook" aria-hidden="true"></i>Login
                        </span></button></a></li>
                    @else
                        <li><a href="{{ url('/') }}">Browse Jobs</a></li>
                        <li><a href="{{ url('/') }}">Post a Job</a></li>
                        <li><a href="{{ url('/') }}">How it works?</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="img/front-page-image/Userpic.png" height="35px" width="35px" id="Luser_prof">
                                {{ Auth::user()->name }} <span class="glyphicon glyphicon-menu-down"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/') }}">Dashboard</a></li>
                                <li><a href="{{ url('/') }}">Messages <span class="badge" id="Lnew_msg">2</span></a></li>
                                <li><a href="{{ url('/') }}">My jobs and applications</a></li>
                                <li><a href="{{ url('/') }}">Sent jobs applications</a></li>
                                <li><a href="{{ url('/logout') }}"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script type="text/javascript" src="/js/dropdown-menu/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
    <script>
        $(function(){
          $('.datepicker').datepicker();
        });
    </script>
</body>
</html>
