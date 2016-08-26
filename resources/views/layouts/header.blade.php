
@section('styles')
<!--Own stylesheet/css for this page.-->
<link rel="stylesheet" href="/css/styles/vendor/font.css" />
<link rel="stylesheet" href="/css/styles/dashboard-header.css" />

<link rel="stylesheet" href="/css/bootstrap.min.css" />
 @endsection

<!--Secondary header-->
<div class="secondary-nav">
    <div class="container-fluid">
        <ul class="nav navbar-nav nav2">
            <li><a href="" class="active">Dashboard</a></li>
            <li><a href="">Messages</a></li>
            <li class="dropdown dropdown2">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">My jobs and applications</a>
                <ul class="dropdown-menu dropdown-menu2" role="menu">
                    <li><a href="#">Jobs and Applications</a></li>
                    <li><a href="#">Favorites</a></li>
                </ul>
            </li>
            <li><a href="">Sent job applications</a></li>
            <li><a href="">My resume</a></li>
            <li><a href="" id="Llogout_user">Logout</a></li>
        </ul>
    </div><!-- /.container-fluid-->
</div><!-- /.row .secondary-nav-->
<script src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>