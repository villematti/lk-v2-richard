@extends('layouts.dashboardheader')

@section('styles')
<!--Own stylesheet/css for this page.-->
<link rel="stylesheet" href="/css/styles/vendor/font.css" />
<link rel="stylesheet" href="/css/styles/my-resume.css" />
@endsection

@section('content')

<!-- Secondary header-->
@include('layouts.header')

<!--Contents-->
<div class="row personal-info-row">
    <div class="container">
        <div class="col-md-5">

            <!--List item category-->
            <div class="list-item">
                <!--Personal Data-->
                <li class="list-group-item">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                              <img src="img/My resume/Personal data.png">
                            </a>
                        </div>
                        <div class="media-body">

                            <h4 class="media-heading">
                                <a href="">Personal data</a>
                            </h4>

                            <!--description-->
                            <span>Date of birth and contact information here</span>
                        </div><!-- /.media-body-->
                    </div><!-- /.media-->
                </li><!-- /.list-group-item-->

                <!--Work Experience-->
                <li class="list-group-item">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                              <img src="img/My resume/ilmoita tyopaikka -icon@3x.png">
                            </a>
                        </div>
                        <div class="media-body">

                            <h4 class="media-heading">
                                <a href="">Work experience</a>
                            </h4>

                            <!--description-->
                            <span>Your past work history</span>
                        </div><!-- /.media-body-->
                    </div><!-- /.media-->
                </li><!-- /.list-group-item-->

                <!--Education-->
                <li class="list-group-item">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                              <img src="img/My resume/Education icon.png">
                            </a>
                        </div>
                        <div class="media-body">

                            <h4 class="media-heading">
                                <a href="">Education</a>
                            </h4>

                            <!--description-->
                            <span>Your past work history</span>
                        </div><!-- /.media-body-->
                    </div><!-- /.media-->
                </li><!-- /.list-group-item-->

                <!--Hobbies and interest-->
                <li class="list-group-item">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                              <img src="img/My resume/hobbies Icon.png">
                            </a>
                        </div>
                        <div class="media-body">

                            <h4 class="media-heading">
                                <a href="">Hobbies and interests</a>
                            </h4>

                            <!--description-->
                            <span>Activities you do in spare time</span>
                        </div><!-- /.media-body-->
                    </div><!-- /.media-->
                </li><!-- /.list-group-item-->

                <!--Skills and expertise-->
                <li class="list-group-item">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                              <img src="img/My resume/skills grey bg.png">
                            </a>
                        </div>
                        <div class="media-body">

                            <h4 class="media-heading">
                                <a href="">Skills and expertise</a>
                            </h4>

                            <!--description-->
                            <span>List of your talents</span>
                        </div><!-- /.media-body-->
                    </div><!-- /.media-->
                </li><!-- /.list-group-item-->

                <!--Languages-->
                <li class="list-group-item">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                              <img src="img/My resume/languages icon.png">
                            </a>
                        </div>

                        <div class="media-body">
                            <h4 class="media-heading">
                                <a href="">Languages</a>
                            </h4>

                            <!--description-->
                            <span>Communicating skills</span>
                        </div><!-- /.media-body-->
                    </div><!-- /.media-->
                </li><!-- /.list-group-item-->
            </div><!-- /.list-item-->
        </div><!-- /.col-md-5-->

        <!--PERSONAL DATA-->
        <div class="col-md-7 personal-data-col-7">
            <div class="well">
                <h3>Personal Data</h3>
                <div class="media">
                    <div class="media-left media-middle">

                        <!--User profile-->
                        <a href="#">
                          <img src="img/dashboard-photo-icon/user-pic.png" alt="user photo" class="user-pic">
                        </a>
                        
                        <!--Change photo-->
                        <p class="change-photo"><a href="">change photo</a></p>
                    </div><!-- /.media-left .media-middle-->

                    <div class="media-body">
                        <label>Name</label>
                        <input type="text" class="form-control" aria-label="name" placeholder=""> 
                    </div><!-- /.media-body-->
                </div><!-- /.media -->

                <!--About me-->
                <div class="per-info per-info-first-child">
                    <label>About me</label>
                    <textarea class="form-control" rows="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</textarea>
                </div>

                <!--Personal data to be modify-->
                <div class="row">
                    <div class="col-md-10">

                        <!--Email-->
                        <div class="per-info">
                            <label>Email</label>
                            <input type="email" class="form-control" aria-label="email" placeholder="">
                        </div>

                        <!--Phone-->
                        <div class="per-info">
                            <label>Phone</label>
                            <input type="text" class="form-control" aria-label="phone" placeholder="">
                        </div>

                        <!--Date of birth-->
                        <div class="per-info">
                            <label>Date of Birth</label>
                            <input type="text" class="form-control" aria-label="birth-date" placeholder="">
                        </div>
                    </div><!-- /.col0-md-10 -->
                </div><!-- /.row -->
            </div><!-- /.well -->

            <!--Save button-->
            <button type="submit" class="btn btn-md btn-success pull-right">Save</button>
        </div><!-- /.col-md-7 .personal-data-col-7-->
    </div><!-- /.container-->
</div><!-- /.row .personal-info-row-->
@endsection


