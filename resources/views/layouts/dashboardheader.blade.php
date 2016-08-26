<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lokaldo</title>

    <!-- Fonts -->
    <!-- <link rel="stylesheet" href="/css/google-font.css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css" /> -->

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="/css/bootstrap.min.css" /> -->


    <link rel="stylesheet" href="/css/styles/vendor/font.css" />

     <!-- Latest compiled and minified CSS  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/layout/dashboard-header.css" />

    <script src="https://use.fontawesome.com/287c210782.js"></script>

    @yield('styles')

</head>
<body id="dashboard-layout">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
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

    <!-- latest compiled JavaScripts -->
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/dropdown-menu/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/enscroll-0.6.2.min.js"></script>

     <script type="text/javascript">

        // Modal 
        $('#myModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget)
          var recipient = button.data('candidates')
          var modal = $(this)
          modal.find('.modal-title').text('New message to ' + recipient)
          modal.find('.modal-body input').val(recipient)
        });

        $('#lmsg-content').enscroll({
            showOnHover: true,
            verticalTrackClass: 'track3',
            verticalHandleClass: 'handle3'
        });

        $('#lmsg-inbox').enscroll({
            showOnHover: true,
            verticalTrackClass: 'track3',
            verticalHandleClass: 'handle3'
        });

        $(document).ready(function() {  
          /* google, safari */ 
          function setHeightMsginbox() {
            windowHeight = $(window).innerHeight();
                $('#lmsg-inbox').css({
              "max-height":  "-webkit-calc("+windowHeight+"px - 206px)",
              "min-height":  "-webkit-calc("+windowHeight+"px - 206px)"
            });     
          };

          function setHeightMsgcontent() {
            windowHeight = $(window).innerHeight();
                $('#lmsg-content').css({
              "max-height":  "-webkit-calc("+windowHeight+"px - 206px)",
              "min-height":  "-webkit-calc("+windowHeight+"px - 206px)"
            });     
          };

          setHeightMsginbox();
            $(window).resize(function() {
            setHeightMsginbox();   
          });

            setHeightMsgcontent();
            $(window).resize(function() {
            setHeightMsgcontent();   
          });
        });

        // customizing srcoll bar
        // $('#inbaks').enscroll({
        //     showOnHover: true,
        //     verticalTrackClass: 'track3',
        //     verticalHandleClass: 'handle3'
        // });

        // $('#shw-msg').enscroll({
        //     showOnHover: true,
        //     verticalTrackClass: 'track3',
        //     verticalHandleClass: 'handle3'
        // });

        // $(document).ready(function() {  
        //     /* google, safari */ 
        //     function setHeight() {
        //          windowHeight = $(window).innerHeight();
        //              $('.contct-inbaks').css({
        //           "max-height":  "-webkit-calc("+windowHeight+"px - 142px)",
        //           "min-height":  "-webkit-calc("+windowHeight+"px - 142px)"
        //         });     
        //     };

        //     function setHeightShowmsg() {
        //          windowHeight = $(window).innerHeight();
        //              $('.shw-msgs').css({
        //           "max-height":  "-webkit-calc("+windowHeight+"px - 142px)",
        //           "min-height":  "-webkit-calc("+windowHeight+"px - 142px)"
        //         });     
        //     };

        //     /* Opera */
        //     function setHeight1() {
        //          windowHeight = $(window).innerHeight();
        //              $('.contct-inbaks').css({
        //           "max-height":  "-o-calc("+windowHeight+"px - 142px)",
        //           "min-height":  "-o-calc("+windowHeight+"px - 142px)"
        //         });     
        //     };

        //     function setHeightShowmsg1() {
        //          windowHeight = $(window).innerHeight();
        //              $('.shw-msgs').css({
        //           "max-height":  "-o-calc("+windowHeight+"px - 142px)",
        //           "min-height":  "-o-calc("+windowHeight+"px - 142px)"
        //         });     
        //     };

        //     /* firefox */
        //     function setHeight2() {
        //          windowHeight = $(window).innerHeight();
        //              $('.contct-inbaks').css({
        //           "max-height":  "-moz-calc("+windowHeight+"px - 142px)",
        //           "min-height":  "-moz-calc("+windowHeight+"px - 142px)",
        //         });     
        //     };

        //     function setHeightShow() {
        //          windowHeight = $(window).innerHeight();
        //              $('.show-msgs').css({
        //           "max-height":  "-moz-calc("+windowHeight+"px - 142px)",
        //           "min-height":  "-moz-calc("+windowHeight+"px - 142px)",
        //         });     
        //     };

        //    setHeight();
        //    $(window).resize(function() {
        //        setHeight();   
        //    });

        //    setHeightShow();
        //    $(window).resize(function() {
        //        setHeightShow();   
        //    });

        //    setHeight1();
        //    $(window).resize(function() {
        //        setHeight1();   
        //    });

        //    setHeight2();
        //    $(window).resize(function() {
        //        setHeight2();   
        //    }); 

        //    setHeightShowmsg();
        //    $(window).resize(function() {
        //        setHeightShowmsg();   
        //    }); 

        //    setHeightShowmsg1();
        //    $(window).resize(function() {
        //        setHeightShowmsg1();   
        //    }); 

        //    setHeightShowmsg2();
        //    $(window).resize(function() {
        //        setHeightShowmsg2();   
        //    }); 
        // });
    </script>
    
</body>
</html>
