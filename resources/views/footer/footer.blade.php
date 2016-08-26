@section('styles')
<!--Own stylesheet/css for this page.-->
<link rel="stylesheet" href="/css/styles/vendor/font.css" />

@endsection

<!--Dynamic copyright year-->
<?php function auto_copyright($year = 'auto'){ ?>
   <?php if(intval($year) == 'auto'){ $year = date('Y'); } ?>
   <?php if(intval($year) == date('Y')){ echo intval($year); } ?>
   <?php if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); } ?>
   <?php if(intval($year) > date('Y')){ echo date('Y'); } ?>
<?php } ?>

<style type="text/css">
    footer.navbar-inverse{
        background-color: #222431;
    }

    footer .nav.navbar-nav{
        padding-top: 51.5px;
        padding-bottom: 50px;
    }

    .copyright,
    .reserve{
        font-size: 14px;
        margin-top: 3px;
        color:  #9d9d9d;
    }

    .copyright:hover,
    .reserve:hover{
        color:  #9d9d9d;
    }

    .copyright{
        margin-bottom: 0;
    }

    .reserve{
        margin-top: -3px;
    }

    .footer-logo{
        position: relative;
        top: -20px;
    }

    .social-icons{
        margin-top: 10px;
    }

    .social-icons a {
        color: #9397a3;
    }

    .social-icons .fb, .social-icons .twitter, .social-icons .linkedin {
    width: 35px;
    height: 35px;
    display: inline-block;
    border-radius: 50%;
    border: 1px solid #4e525e;
    text-align: center;
    line-height: 35px;
    float: left;
    margin-right: 10px;
    transition: color .5s ease;
    -webkit-transition: color .5s ease;
    -moz-transition: color .5s ease;
    -ms-transition: color .5s ease;
    -o-transition: color .5s ease;
    }

    .social-icons a .fb:hover, .social-icons a .twitter:hover, .social-icons a .linkedin:hover {
        background-color: #fff;
        color: #9498a4;
        transition: color .5s ease;
    -webkit-transition: color .5s ease;
    -moz-transition: color .5s ease;
    -ms-transition: color .5s ease;
    -o-transition: color .5s ease;
    }

    footer .footer-menu{
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    footer .footer-menu>a{
        color: #ffffff !important;
    }

    footer .footer-menu>a:hover{
        color:  #9d9d9d !important;
        transition: color .5s ease;
        -webkit-transition: color .5s ease;
        -moz-transition: color .5s ease;
        -ms-transition: color .5s ease;
        -o-transition: color .5s ease;
    }

    /*medium devices*/
    @media screen and (min-width:768px){
        .footer-logo{
            padding-right: 100px;
        }

        footer .navbar-nav>li>a {
            padding-top: 15px;
            padding-bottom: 1px;
            padding-right: 35px;
        }
    }
</style>

<footer class="navbar-inverse">
    <div class="container">
        <ul class="nav navbar-nav">
            <li class="footer-logo">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="img/front-page-image/Lokaldo Logo Footer.png" height="30px" width="167px" />
                    <p class="copyright"> &copy; <?php auto_copyright();?> Lokaldo</p> 
                    <p class="reserve">All rights reserved.</p>
                </a>
            </li>
            <li class="footer-menu"><a href="" class="active">Home</a></li>
            <li class="footer-menu"><a href="">Browse jobs</a></li>
            <li class="footer-menu"><a href="">Post a job</a></li>
            <li class="footer-menu"><a href="">FAQ</a></li>
            <li class="footer-menu"><a href="">contact</a></li>
        </ul>

        <div class="nav navbar-nav pull-right social-icons">
            <a href="" target="_blank"><span class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></span></a>
            <a href="" ><span class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
            <a href="" ><span class="twitter"><i class="fa fa-linkedin" aria-hidden="true"></i></span></a>
        </div>
    </div>
</footer>