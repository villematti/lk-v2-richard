@extends('layouts.dashboardheader')

@section('styles')
<!--Own stylesheet/css for this page.-->
<link rel="stylesheet" href="/css/styles/vendor/font.css" />
<link rel="stylesheet" href="/css/styles/open-job.css" />
@endsection

@section('content')
    
<div class="gry-rest-wrk">
    <div class="container">
        <div class="row">
            <h1>Restaurant Worker</h1>
            <ul class="lst-ul center-block ">
                <li><img src="img/front-page-image/location icon @3x.png" alt="location" id="loc"> City</li>
                <li><img src="img/front-page-image/Category Button Copy 3@3x.png" alt="category"> Job Category</li>
                <li><img src="img/front-page-image/Clock icon@3x.png" alt="clock">14.August 2016</li>
            </ul>
        </div>
    </div>
</div>

<div class="container cont-vid">
    <div class="row">
        <div class="col-md-9">
            <video controls id="rcrd-v" src="videos/Meknia revision - Richard - 7.8.2016.mp4" type="video/mp4"></video>
        </div>

        <div class="col-md-3">
            <div class="well">
                <img src="img/front-page-image/Userpic.png" height="50px" width="50px"> <span>Company name</span>
            </div>
            <hr>
            <button class="btn btn-primary btn-block" id="part-tm-btn">Part time job</button>
            <hr>
            <button class="btn btn-lg btn-success btn-block" id="appl-btn">APPLY FOR JOB</button>
        </div>
    </div>
</div>

<div class="container jb-descr-con">
    <div class="row">
        <h3>Job Description</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>

<div class="container sim-jb-con">
    <div class="row">
        <h3>More similar jobs</h3>
        <div class="col-md-8">
            <!--Latest job section-->
            <div class="list-group">
                <!--1st item-->
                <li class="list-group-item list-of-latest-jobs">
                    <div class="row list-of-latest-jobs-row">
                        <div class="col-md-5 form-inline-latest-job">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <!--User profile for latest job section-->
                                        <img src="img/front-page-image/Userpic.png"/>
                                    </a>
                                </div><!-- /.media-left .media-middle--> 
                                <div class="media-body">
                                    <!--Title-->
                                    <h4 class="media-heading">Service Specialist</h4>
                                    <!--Subtitle-->
                                    <p class="title-media-heading"><i>Staffpoint</i></p>
                                </div><!-- /.media-body--> 
                            </div><!-- /.media-->              
                        </div><!-- /.col-md-5 .form-inline-latest-job-->

                        <div class="col-md-4 location-title">
                            <!--Location-->
                            <span><img src="img/front-page-image/location icon @3x.png" id="img-1-location"> &nbsp;Helsinki</span> 
                            <br \>
                            <!--Category-->
                            <span class="second-category-button"><img src="img/front-page-image/Category Button Copy 3@3x.png" id="img-2-location"> &nbsp;Executive</span>
                        </div><!-- /.col-md-4 .location-title-->

                        <div class="col-md-3 date-apply-btn">
                            <!--Date-->
                            <span><img src="img/front-page-image/Clock icon@3x.png" id="icon-clock-date"> 12.November 2016</span>
                            <br \>
                            <!--apply for job button-->
                            <span><button type="button" class="btn btn-success latest-job-apply-for-job-btn">Apply for job</button></span>
                        </div><!-- /.col-md-3 .date-apply-btn-->
                    </div><!-- /.row .list-of-latest-jobs-row-->
                </li><!-- /.list-group-item .list-of-latest-jobs-->

                <!--2nd item-->
                <li class="list-group-item list-of-latest-jobs">
                    <div class="row list-of-latest-jobs-row">
                        <div class="col-md-5 form-inline-latest-job">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <!--User profile for latest job section-->
                                        <img src="img/front-page-image/Userpic.png"/>
                                    </a>
                                </div><!-- /.media-left .media-middle--> 
                                <div class="media-body">
                                    <!--Title-->
                                    <h4 class="media-heading">Service Specialist</h4>
                                    <!--Subtitle-->
                                    <p class="title-media-heading"><i>Staffpoint</i></p>
                                </div><!-- /.media-body--> 
                            </div><!-- /.media-->              
                        </div><!-- /.col-md-5 .form-inline-latest-job-->

                        <div class="col-md-4 location-title">
                            <!--Location-->
                            <span><img src="img/front-page-image/location icon @3x.png" id="img-1-location"> &nbsp;Helsinki</span> 
                            <br \>
                            <!--Category-->
                            <span class="second-category-button"><img src="img/front-page-image/Category Button Copy 3@3x.png" id="img-2-location"> &nbsp;Executive</span>
                        </div><!-- /.col-md-4 .location-title-->

                        <div class="col-md-3 date-apply-btn">
                            <!--Date-->
                            <span><img src="img/front-page-image/Clock icon@3x.png" id="icon-clock-date"> 12.November 2016</span>
                            <br \>
                            <!--apply for job button-->
                            <span><button type="button" class="btn btn-success latest-job-apply-for-job-btn">Apply for job</button></span>
                        </div><!-- /.col-md-3 .date-apply-btn-->
                    </div><!-- /.row .list-of-latest-jobs-row-->
                </li><!-- /.list-group-item .list-of-latest-jobs-->

                <!--3rd item-->
                <li class="list-group-item list-of-latest-jobs">
                    <div class="row list-of-latest-jobs-row">
                        <div class="col-md-5 form-inline-latest-job">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <!--User profile for latest job section-->
                                        <img src="img/front-page-image/Userpic.png"/>
                                    </a>
                                </div><!-- /.media-left .media-middle--> 
                                <div class="media-body">
                                    <!--Title-->
                                    <h4 class="media-heading">Service Specialist</h4>
                                    <!--Subtitle-->
                                    <p class="title-media-heading"><i>Staffpoint</i></p>
                                </div><!-- /.media-body--> 
                            </div><!-- /.media-->              
                        </div><!-- /.col-md-5 .form-inline-latest-job-->

                        <div class="col-md-4 location-title">
                            <!--Location-->
                            <span><img src="img/front-page-image/location icon @3x.png" id="img-1-location"> &nbsp;Helsinki</span> 
                            <br \>
                            <!--Category-->
                            <span class="second-category-button"><img src="img/front-page-image/Category Button Copy 3@3x.png" id="img-2-location"> &nbsp;Executive</span>
                        </div><!-- /.col-md-4 .location-title-->

                        <div class="col-md-3 date-apply-btn">
                            <!--Date-->
                            <span><img src="img/front-page-image/Clock icon@3x.png" id="icon-clock-date"> 12.November 2016</span>
                            <br \>
                            <!--apply for job button-->
                            <span><button type="button" class="btn btn-success latest-job-apply-for-job-btn">Apply for job</button></span>
                        </div><!-- /.col-md-3 .date-apply-btn-->
                    </div><!-- /.row .list-of-latest-jobs-row-->
                </li><!-- /.list-group-item .list-of-latest-jobs-->
            </div><!-- /.list-group-->
        </div><!-- /.col-md-s8-->
    </div><!-- /.row-->
</div><!-- /.container-->

<div class="bg-img-nae">
    <div class="container">
        <div class="row">
            <!--Lokaldo logo-->
            <a href=""><img src="img/front-page-image/App icon side.png" class="lokaldo-logo" alt="lokaldo logo"></a>
            <h3>Apply for jobs in our <b>App.</b></h3>

            <!--donwload icon-->
            <a href=""><img src="img/front-page-image/App Store Badge.png" class="download-icon" alt="donwload lokaldo icon"></a>
        </div>
    </div>
</div>

<!--Footer section-->
@include('footer.footer')
@endsection


