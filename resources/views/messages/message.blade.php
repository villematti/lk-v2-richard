@extends('layouts.dashboardheader')

@section('styles')
<!--Own stylesheet/css for this page.-->
<link rel="stylesheet" href="/css/styles/vendor/font.css" />
<link rel="stylesheet" href="/css/styles/message.css" />
@endsection

@section('content')

<!-- Secondary header-->
@include('layouts.header')

<div class="container msg-fluid">
    <div class="row">  
        <div class="col-md-2">
            <p class="active">
                <a href="">Full time jobs</a>
            </p>
            <p>
                <a href="">Part time jobs</a>
            </p>
        </div>

        <div class="col-md-4 no-padd">
            <div class="list-group no-borderR">
                <li class="list-group-item">
                    <input type="text" name="" class="form-control">
                </li>
            </div>

            <div class="Lmsg-inbox" id="lmsg-inbox">
                <div class="list-group">
                    <a href="">
                        <li class="list-group-item active">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading inbox-prof-name">Bessie Berry</p>
                                    <span class="pull-right Ldate-active">13 Jan</span>
                                </div><!-- /.media-body-->
                            </div><!-- /.media-->

                            <div class="msg-cntnt-bgd">
                                <span class="msg-content">
                                    Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt labore tempor...
                                </span>
                                <span class="badge pull-right">
                                    1
                                </span> 
                            </div> 
                        </li>
                    </a>

                    <a href="">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading inbox-prof-name">Ville-Matti Hakanpaa</p>
                                    <span class="pull-right Ldate-active">13 Jan</span>
                                </div><!-- /.media-body-->
                            </div><!-- /.media-->

                            <div class="msg-cntnt-bgd">
                                <span class="msg-content">
                                    Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod
                                </span>
                                <span class="badge pull-right">
                                    5
                                </span> 
                            </div> 
                        </li>
                    </a>

                    <a href="">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading inbox-prof-name">Richard Tumapon</p>
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
                    </a>

                    <a href="">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading inbox-prof-name">Ville-Matti Hakanpaa</p>
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
                    </a>

                    <a href="">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading inbox-prof-name">Ville-Matti Hakanpaa</p>
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
                    </a>

                    <a href="">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading inbox-prof-name">Ville-Matti Hakanpaa</p>
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
                    </a>

                    <a href="">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading inbox-prof-name">Ville-Matti Hakanpaa</p>
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
                    </a>

                    <a href="">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading inbox-prof-name">Ville-Matti Hakanpaa</p>
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
                    </a>

                    <a href="">
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                </div>
                                <div class="media-body">
                                    <p class="media-heading inbox-prof-name">Ville-Matti Hakanpaa</p>
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
                    </a>
                </div> <!-- /.list-group-item-->
            </div>
        </div>
            
        <div class="col-md-6 no-padd">
            <div class="list-group no-borderR">
                <li class="list-group-item">
                    <p class="Lname-msg">Bessie Berry</p>
                </li>
            </div>

            <div class="Lmsg-content" id="lmsg-content" tabindex="0">
                <div class="list-group sample">
                    <li class="list-group-item">
                        <div class="Lconvo-date">
                            <div class="convo-repz">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">Bessie Berry<span class="conv-time">8:41</span></p>

                                        <div class="Lconvo-text">
                                             <p>
                                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                 consequat.
                                             </p>                                      
                                        </div>
                                    </div><!-- /.media-body-->
                                </div><!-- /.media-->
                            </div><!-- /.convo-repz-->

                            <div class="convo-repz">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">Jordan Clarkson<span class="conv-time">8:41</span></p>

                                        <div class="Lconvo-text">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </span>
                                    </div><!-- /.media-body-->
                                </div><!-- /.media-->
                            </div><!-- /.convo-repz-->
                        </div><!-- /.convo-date-->
                        <input type="text" name="message" class="form-control">
                        <hr> <!--horizontal-line -->
                    </li><!-- /.list-group-item-->
                        
                    <li class="list-group-item">
                        <div class="Lconvo-date">
                            <div class="convo-repz">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">Bessie Berry<span class="conv-time">8:41</span></p>

                                        <div class="Lconvo-text">
                                             <p>
                                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                 consequat.
                                             </p>                                      
                                        </div>
                                    </div><!-- /.media-body-->
                                </div><!-- /.media-->
                            </div><!-- /.convo-repz-->

                            <div class="convo-repz">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">Jordan Clarkson<span class="conv-time">8:41</span></p>

                                        <div class="Lconvo-text">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </span>
                                    </div><!-- /.media-body-->
                                </div><!-- /.media-->
                            </div><!-- /.convo-repz-->
                        </div><!-- /.convo-date-->
                        <input type="text" name="message" class="form-control">
                        <hr> <!--horizontal-line -->
                    </li><!-- /.list-group-item-->

                    <li class="list-group-item">
                        <div class="Lconvo-date">
                            <div class="convo-repz">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/front-page-image/Userpic.png" height="40px" width="40px">
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading">Bessie Berry<span class="conv-time">8:41</span></p>

                                        <div class="Lconvo-text">
                                             <p>
                                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                 consequat.
                                             </p>                                      
                                        </div>
                                    </div><!-- /.media-body-->
                                </div><!-- /.media-->
                            </div><!-- /.convo-repz-->
                        </div><!-- /.convo-date-->

                        <div class="input-group type-txt-msg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </span>
                            <input type="text" class="form-control" aria-label="...">
                        </div><!-- /input-group -->
                        <hr> <!--horizontal-line -->
                    </li><!-- /.list-group-item-->
                </div>
            </div>
        </div>
    </div><!-- /.row-->
</div><!-- /.container-->
@endsection


