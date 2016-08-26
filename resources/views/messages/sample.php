@extends('layouts.dashboardheader')

@section('styles')
<!--Own stylesheet/css for this page.-->
<link rel="stylesheet" href="/css/styles/vendor/font.css" />
<link rel="stylesheet" href="/css/styles/message.css" />
@endsection

@section('content')

<!-- Secondary header-->
@include('layouts.header')

<div class="container-fluid msg-fluid">
    <div class="row">  

        <div class="col-md-2 job-tayp">
            <div class="form-group">
                <a href=""><h4>Full time jobs</h4></a>
            </div>

            <div class="form-group">
                <a href=""><h4>Part time jobs</h4></a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group srch-frm">
                <li class="srch-li">
                    <input type="" name="" class="form-control">
                </li>
            </div>
            <div class="contct-inbaks" id="inbaks">
                <div class="list-group">
                    <a href="#">
                        <li class="list-group-item active">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading">Ville-Matti Hakanpaa</p>
                                    <span class="pull-right Ldate-active">13 Jan</span>
                                </div><!-- /.media-body-->
                            </div><!-- /.media-->

                            <div class="msg-cntnt-bgd">
                                <span class="msg-content">
                                    Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod
                                </span>
                                <span class="badge pull-right">
                                    8
                                </span> 
                            </div>
                        </li>
                    </a><!-- /a-END-->

                    <a href="#">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading">Richard Tumapon</p>
                                    <span class="pull-right Ldate-active">13 Jan</span>
                                </div><!-- /.media-body-->
                            </div><!-- /.media-->

                            <div class="msg-cntnt-bgd">
                                <span class="msg-content">
                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt anim id mollit anim id...
                                </span>
                                <span class="badge pull-right">
                                    8
                                </span> 
                            </div>
                        </li>
                    </a><!-- /a-END-->

                    <a href="#">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading">Ville-Matti Hakanpaa</p>
                                    <span class="pull-right Ldate-active">13 Jan</span>
                                </div><!-- /.media-body-->
                            </div><!-- /.media-->

                            <div class="msg-cntnt-bgd">
                                <span class="msg-content">
                                    Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod
                                </span>
                                <span class="badge pull-right">
                                    8
                                </span> 
                            </div>
                        </li>
                    </a><!-- /a-END-->

                    <a href="#">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading">Ville-Matti Hakanpaa</p>
                                    <span class="pull-right Ldate-active">13 Jan</span>
                                </div><!-- /.media-body-->
                            </div><!-- /.media-->

                            <div class="msg-cntnt-bgd">
                                <span class="msg-content">
                                    Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod
                                </span>
                                <span class="badge pull-right">
                                    8
                                </span> 
                            </div>
                        </li>
                    </a><!-- /a-END-->

                    <a href="#">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading">Ville-Matti Hakanpaa</p>
                                    <span class="pull-right Ldate-active">13 Jan</span>
                                </div><!-- /.media-body-->
                            </div><!-- /.media-->

                            <div class="msg-cntnt-bgd">
                                <span class="msg-content">
                                    Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod
                                </span>
                                <span class="badge pull-right">
                                    8
                                </span> 
                            </div>
                        </li>
                    </a><!-- /a-END-->

                    <a href="#">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading">Ville-Matti Hakanpaa</p>
                                    <span class="pull-right Ldate-active">13 Jan</span>
                                </div><!-- /.media-body-->
                            </div><!-- /.media-->

                            <div class="msg-cntnt-bgd">
                                <span class="msg-content">
                                    Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod
                                </span>
                                <span class="badge pull-right">
                                    8
                                </span> 
                            </div>
                        </li>
                    </a><!-- /a-END-->

                    <a href="#">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading">Ville-Matti Hakanpaa</p>
                                    <span class="pull-right Ldate-active">13 Jan</span>
                                </div><!-- /.media-body-->
                            </div><!-- /.media-->

                            <div class="msg-cntnt-bgd">
                                <span class="msg-content">
                                    Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod
                                </span>
                                <span class="badge pull-right">
                                    8
                                </span> 
                            </div>
                        </li>
                    </a><!-- /a-END-->

                    <a href="#">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading">Ville-Matti Hakanpaa</p>
                                    <span class="pull-right Ldate-active">13 Jan</span>
                                </div><!-- /.media-body-->
                            </div><!-- /.media-->

                            <div class="msg-cntnt-bgd">
                                <span class="msg-content">
                                    Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod
                                </span>
                                <span class="badge pull-right">
                                    8
                                </span> 
                            </div>
                        </li>
                    </a><!-- /a-END-->
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                trrtrwet
                
            </div>
            <div class="shw-msgs" id="shw-msg">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
        </div>
    </div><!-- /.row-->
</div><!-- /.container-->
@endsection


