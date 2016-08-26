@extends('layouts.app')

@section('styles')
<!--Own stylesheet/css for this page.-->
<link rel="stylesheet" href="/css/styles/vendor/font.css" />
<link rel="stylesheet" href="/css/styles/front-page.css" />
@endsection

@section('content')

<!--Background image -->
<div class="container bg-image-front-page">
    <div class="row">
        <div class="cover-image-content">
            <h1>Looking for a Job? <strong>Tell it in a video.</strong></h1>
            <h2>We offer <strong class="restaurant-780">780</strong> restaurant job listings.</h2>

            <!--form-->
            <form class="form-inline form-search-front-page">
                <!--keywords input-->
                <div class="form-group">
                    <div class="icon-addon addon-md">
                        <input type="text" placeholder="Keywords" class="form-control">
                        <label for="Keywords" class="glyphicon glyphicon-search" rel="tooltip" title="keywords"></label>
                    </div>
                </div>

                <!--Location input-->
                <div class="form-group">
                    <div class="icon-addon addon-md">
                        <input type="text" placeholder="Location" class="form-control">
                        <label for="Location" class="glyphicon glyphicon-map-marker" rel="tooltip" title="location"></label>
                    </div>
                </div>

                <!--Any Category input-->
                <div class="form-group">
                    <select class="form-control" id="sel-categ">
                        <option>Any Category</option>
                        <option>Category-1</option>
                        <option>Category-2</option>
                        <option>Category-3</option>
                    </select>
                </div>
                <!--Search button-->
                <button type="submit" class="btn btn-lg btn-success">SEARCH</button>
            </form><!-- /.form-inline-->
        </div><!-- /.cover-image-content-->   
    </div><!-- /.row-->
</div><!-- /.container .bg-image-front-page-->

<!--Most popular section-->
<div class="row most-popular-container">
    <div class="container">

        <h2>Most Popular</h2>

        <!--first three set of images-->
        <div class="most-popular-images">
            <div class="col-md-4">
                <p class="caption-image">Sales</p>
                <!--Sales photo-->
                <img src="img/front-page-image/Sales.png" height="202px" width="318px"/>
            </div>

            <div class="col-md-4">
                <p class="caption-image">Events</p>
                <!--Events photo-->
                <img src="img/front-page-image/Events.png" height="202px" width="318px" />
            </div>

            <div class="col-md-4">
                <p class="caption-image">Chef</p>
                <!--Chef photo-->
                <img src="img/front-page-image/Chef.png" height="202px" width="318px"/>
            </div>
        </div>

        <!--Second three set of images-->
        <div class="most-popular-images-2">
            <div class="col-md-4">
                <p class="caption-image">Executive</p>
                <!--Executive photo-->
                <img src="img/front-page-image/Executive.png" height="202px" width="318px"/>
            </div>

            <div class="col-md-4">
                <p class="caption-image">Service</p>
                <!--Services photo-->
                <img src="img/front-page-image/Service.png" height="202px" width="318px" />
            </div>

            <div class="col-md-4">
                <p class="caption-image">Assistants</p>
                <!--Assistants photo-->
                <img src="img/front-page-image/Assistants.png" height="202px" width="318px"/>
            </div>
        </div>

        <span><button type="button" class="btn btn-md btn-success">Post a Job</button></span>
        <span><button type="button" class="btn btn-md btn-success">Browse Jobs</button></span>
    </div>
</div>

<!--Latest Jobs section-->
<div class="row latest-job-row">
    <div class="container">

        <h2 class="latest-job-header">Latest Jobs</h2>

        <div class="col-md-8">
            <div class="list-group">
                <li class="list-group-item list-of-latest-jobs">
                    <div class="row list-of-latest-jobs-row">
                        <div class="col-md-5 form-inline-latest-job">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <!--User profile for latest job section-->
                                        <img src="img/front-page-image/Userpic.png"/>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <!--Title-->
                                    <h4 class="media-heading">Service Specialist</h4>
                                    <!--Subtitle-->
                                    <p class="title-media-heading"><i>Staffpoint</i></p>
                                </div>
                            </div>                  
                        </div>

                        <div class="col-md-4 location-title">
                            <!--Location-->
                            <span><img src="img/front-page-image/location icon @3x.png" id="img-1-location"> &nbsp;Helsinki</span> 
                            <br \>
                            <!--Category-->
                            <span class="second-category-button"><img src="img/front-page-image/Category Button Copy 3@3x.png" id="img-2-location"> &nbsp;Executive</span>
                        </div>

                        <div class="col-md-3 date-apply-btn">
                            <!--Date-->
                            <span><img src="img/front-page-image/Clock icon@3x.png" id="icon-clock-date"> 12.November 2016</span>
                            <br \>
                            <!--apply for job button-->
                            <span><button type="button" class="btn btn-success latest-job-apply-for-job-btn">Apply for job</button></span>
                        </div>
                    </div>
                </li>

                <!--2nd list item-->
                <li class="list-group-item list-of-latest-jobs">
                    <div class="row list-of-latest-jobs-row">
                        <div class="col-md-5 form-inline-latest-job">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <!--User profile for latest job section-->
                                        <img src="img/front-page-image/Userpic Copy.png"/>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <!--Title-->
                                    <h4 class="media-heading">Palveluvastaava</h4>
                                    <!--Subtitle-->
                                    <p class="title-media-heading"><i>Staffpoint</i></p>
                                </div>
                            </div>                  
                        </div>

                        <div class="col-md-4 location-title">
                            <!--Location-->
                            <span><img src="img/front-page-image/location icon @3x.png" id="img-1-location"> &nbsp;Tampere</span> 
                            <br \>
                            <!--Category-->
                            <span class="second-category-button"><img src="img/front-page-image/Category Button Copy 3@3x.png" id="img-2-location"> &nbsp;Esimiesteht&auml;v&auml;t</span>
                        </div>

                        <div class="col-md-3 date-apply-btn">
                            <!--Date-->
                            <span><img src="img/front-page-image/Clock icon@3x.png" id="icon-clock-date"> 12.January 2016</span>
                            <br \>
                            <!--apply for job button-->
                            <span><button type="button" class="btn btn-success latest-job-apply-for-job-btn">Apply for job</button></span>
                        </div>
                    </div>
                </li>

                <!--2nd list item-->
                <li class="list-group-item list-of-latest-jobs">
                    <div class="row list-of-latest-jobs-row">
                        <div class="col-md-5 form-inline-latest-job">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <!--User profile for latest job section-->
                                        <img src="img/front-page-image/Userpic Copy.png"/>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <!--Title-->
                                    <h4 class="media-heading">Palveluvastaava</h4>
                                    <!--Subtitle-->
                                    <p class="title-media-heading"><i>Staffpoint</i></p>
                                </div>
                            </div>                  
                        </div>

                        <div class="col-md-4 location-title">
                            <!--Location-->
                            <span><img src="img/front-page-image/location icon @3x.png" id="img-1-location"> &nbsp;Tampere</span> 
                            <br \>
                            <!--Category-->
                            <span class="second-category-button"><img src="img/front-page-image/Category Button Copy 3@3x.png" id="img-2-location"> &nbsp;Esimiesteht&auml;v&auml;t</span>
                        </div>

                        <div class="col-md-3 date-apply-btn">
                            <!--Date-->
                            <span><img src="img/front-page-image/Clock icon@3x.png" id="icon-clock-date"> 12.January 2016</span>
                            <br \>
                            <!--apply for job button-->
                            <span><button type="button" class="btn btn-success latest-job-apply-for-job-btn">Apply for job</button></span>
                        </div>
                    </div>
                </li>

                <!--2nd list item-->
                <li class="list-group-item list-of-latest-jobs">
                    <div class="row list-of-latest-jobs-row">
                        <div class="col-md-5 form-inline-latest-job">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <!--User profile for latest job section-->
                                        <img src="img/front-page-image/Userpic Copy.png"/>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <!--Title-->
                                    <h4 class="media-heading">Palveluvastaava</h4>
                                    <!--Subtitle-->
                                    <p class="title-media-heading"><i>Staffpoint</i></p>
                                </div>
                            </div>                  
                        </div>

                        <div class="col-md-4 location-title">
                            <!--Location-->
                            <span><img src="img/front-page-image/location icon @3x.png" id="img-1-location"> &nbsp;Tampere</span> 
                            <br \>
                            <!--Category-->
                            <span class="second-category-button"><img src="img/front-page-image/Category Button Copy 3@3x.png" id="img-2-location"> &nbsp;Esimiesteht&auml;v&auml;t</span>
                        </div>

                        <div class="col-md-3 date-apply-btn">
                            <!--Date-->
                            <span><img src="img/front-page-image/Clock icon@3x.png" id="icon-clock-date"> 12.January 2016</span>
                            <br \>
                            <!--apply for job button-->
                            <span><button type="button" class="btn btn-success latest-job-apply-for-job-btn">Apply for job</button></span>
                        </div>
                    </div>
                </li>

                <!--2nd list item-->
                <li class="list-group-item list-of-latest-jobs">
                    <div class="row list-of-latest-jobs-row">
                        <div class="col-md-5 form-inline-latest-job">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <!--User profile for latest job section-->
                                        <img src="img/front-page-image/Userpic Copy.png"/>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <!--Title-->
                                    <h4 class="media-heading">Palveluvastaava</h4>
                                    <!--Subtitle-->
                                    <p class="title-media-heading"><i>Staffpoint</i></p>
                                </div>
                            </div>                  
                        </div>

                        <div class="col-md-4 location-title">
                            <!--Location-->
                            <span><img src="img/front-page-image/location icon @3x.png" id="img-1-location"> &nbsp;Tampere</span> 
                            <br \>
                            <!--Category-->
                            <span class="second-category-button"><img src="img/front-page-image/Category Button Copy 3@3x.png" id="img-2-location"> &nbsp;Esimiesteht&auml;v&auml;t</span>
                        </div>

                        <div class="col-md-3 date-apply-btn">
                            <!--Date-->
                            <span><img src="img/front-page-image/Clock icon@3x.png" id="icon-clock-date"> 12.January 2016</span>
                            <br \>
                            <!--apply for job button-->
                            <span><button type="button" class="btn btn-success latest-job-apply-for-job-btn">Apply for job</button></span>
                        </div>
                    </div>
                </li>

                <!--2nd list item-->
                <li class="list-group-item list-of-latest-jobs">
                    <div class="row list-of-latest-jobs-row">
                        <div class="col-md-5 form-inline-latest-job">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <!--User profile for latest job section-->
                                        <img src="img/front-page-image/Userpic Copy.png"/>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <!--Title-->
                                    <h4 class="media-heading">Palveluvastaava</h4>
                                    <!--Subtitle-->
                                    <p class="title-media-heading"><i>Staffpoint</i></p>
                                </div>
                            </div>                  
                        </div>

                        <div class="col-md-4 location-title">
                            <!--Location-->
                            <span><img src="img/front-page-image/location icon @3x.png" id="img-1-location"> &nbsp;Tampere</span> 
                            <br \>
                            <!--Category-->
                            <span class="second-category-button"><img src="img/front-page-image/Category Button Copy 3@3x.png" id="img-2-location"> &nbsp;Esimiesteht&auml;v&auml;t</span>
                        </div>

                        <div class="col-md-3 date-apply-btn">
                            <!--Date-->
                            <span><img src="img/front-page-image/Clock icon@3x.png" id="icon-clock-date"> 12.January 2016</span>
                            <br \>
                            <!--apply for job button-->
                            <span><button type="button" class="btn btn-success latest-job-apply-for-job-btn">Apply for job</button></span>
                        </div>
                    </div>
                </li>

                <!--2nd list item-->
                <li class="list-group-item list-of-latest-jobs">
                    <div class="row list-of-latest-jobs-row">
                        <div class="col-md-5 form-inline-latest-job">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <!--User profile for latest job section-->
                                        <img src="img/front-page-image/Userpic Copy.png"/>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <!--Title-->
                                    <h4 class="media-heading">Palveluvastaava</h4>
                                    <!--Subtitle-->
                                    <p class="title-media-heading"><i>Staffpoint</i></p>
                                </div>
                            </div>                  
                        </div>

                        <div class="col-md-4 location-title">
                            <!--Location-->
                            <span><img src="img/front-page-image/location icon @3x.png" id="img-1-location"> &nbsp;Tampere</span> 
                            <br \>
                            <!--Category-->
                            <span class="second-category-button"><img src="img/front-page-image/Category Button Copy 3@3x.png" id="img-2-location"> &nbsp;Esimiesteht&auml;v&auml;t</span>
                        </div>

                        <div class="col-md-3 date-apply-btn">
                            <!--Date-->
                            <span><img src="img/front-page-image/Clock icon@3x.png" id="icon-clock-date"> 12.January 2016</span>
                            <br \>
                            <!--apply for job button-->
                            <span><button type="button" class="btn btn-success latest-job-apply-for-job-btn">Apply for job</button></span>
                        </div>
                    </div>
                </li>

                <!--2nd list item-->
                <li class="list-group-item list-of-latest-jobs">
                    <div class="row list-of-latest-jobs-row">
                        <div class="col-md-5 form-inline-latest-job">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <a href="#">
                                        <!--User profile for latest job section-->
                                        <img src="img/front-page-image/Userpic Copy.png"/>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <!--Title-->
                                    <h4 class="media-heading">Palveluvastaava</h4>
                                    <!--Subtitle-->
                                    <p class="title-media-heading"><i>Staffpoint</i></p>
                                </div>
                            </div>                  
                        </div>

                        <div class="col-md-4 location-title">
                            <!--Location-->
                            <span><img src="img/front-page-image/location icon @3x.png" id="img-1-location"> &nbsp;Tampere</span> 
                            <br \>
                            <!--Category-->
                            <span class="second-category-button"><img src="img/front-page-image/Category Button Copy 3@3x.png" id="img-2-location"> &nbsp;Esimiesteht&auml;v&auml;t</span>
                        </div>

                        <div class="col-md-3 date-apply-btn">
                            <!--Date-->
                            <span><img src="img/front-page-image/Clock icon@3x.png" id="icon-clock-date"> 12.January 2016</span>
                            <br \>
                            <!--apply for job button-->
                            <span><button type="button" class="btn btn-success latest-job-apply-for-job-btn">Apply for job</button></span>
                        </div>
                    </div>
                </li>
                <a href=""><button type="button" class="btn btn-md btn-success browse-btn-latest-jobs">Browse Jobs</button></a>
            </div><!-- /.list-group-->
        </div><!-- /.col-md-8-->

        <div class="col-md-4 well-download-app">
            <div class="well">
                <h2>Download App</h2>
                <hr class="hr-header">

                <p>We made the whole process simple and fast for job seekers and recruiters. You can now easily post jobs and apply for jobs in our App.</p>
                <br/>
                <p class="simply-download">Simply download Lokaldo from your Itunes store and use your iPhone built in camera and introduce yourself.</p>

                <!--Lokaldo logo-->
                <img src="img/front-page-image/App icon side.png" alt="Lokaldo Download App"><br>

                <!--Download App store icon-->
                <a href=""> <img src="img/front-page-image/App Store Badge.png" alt="Lokaldo in App Store" class="download-btn-app"></a>
            </div><!-- /.well-->      
        </div><!-- /.col-md-4 .well-download-app-->
    </div>
</div>

<!--POST A JOB LISTING SECTION-->
<div class="row post-job-listing-row">
    <div class="container post-job-listing-container">
        <div class="col-md-7 col-6-post-job-listing">
            <h1>POST A JOB LISTING,</h1>
            <hr class="hr-post-job-listing" align="left">
            <h2>It's Free!</h2>
        </div>
        <div class="col-md-5"> 
            <a href=""><button type="button" class="btn btn-md btn-success browse-btn-post-job-listing">Post a Job</button></a>
        </div>
    </div><!-- /.container .post-job-listing-container-->
</div><!-- /.row .post-job-listing-row-->

<!--Forget CV's and Resume Section-->
<div class="row forget-cvs-row">
    <div class="container">
        <!--Photo for forget CV's and resumes.-->
        <div class="col-md-6 img-col-6">
            <img src="img/front-page-image/Image2.png"/>
        </div>
        <div class="col-md-6 forgetCVs-col-6">
            <h1>Forget CV's and Resumes.<br>Apply with video.</h1>
            <hr align="left">
            <p>We offer various different job offers that match your expertise. Now you can easily apply for jobs faster than ever without any hassle. Simply introduce yourself in a video and explain why you would be perfect candidate.</p>
            <!-- read more button-->
            <a href=""><button type="button" class="btn btn-md btn-success">Read more</button></a>
        </div>
    </div><!-- /.container-->
</div><!-- /.row .forget-cvs-row-->

<!--Complete toolset for recruiter - for free Section-->
<div class="row complete-toolset-row">
    <div class="container">
        <div class="col-md-6 complete-toolset-col-6">
            <h1>Complete toolset for recruiter - for free.</h1>
            <hr align="left">
            <p>We've made the recruiting process fast and easy for the recruiters. Recruitesrs can handle the whole process from start to finish in our website and mobile application. Recruiting has never been this efficient.</p>
            <!-- read more button-->
            <a href=""><button type="button" class="btn btn-md btn-success">Read more</button></a>
        </div>
        <!--Photo for forget CV's and resumes.-->
        <div class="col-md-6 complete-toolset-img">
            <img src="img/front-page-image/Image.png"/>
        </div>
    </div><!-- /.container-->
</div><!-- /.row .forget-cvs-row-->

<!--Footer Photo-->
<div class="row photo-footer-bg">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <a href="#"><img src="img/front-page-image/App icon side.png" alt="Lokaldo logo" class="lokaldo-logo" /></a>
            <p>See more<br> and <br> Download our App</p>

            <a href="#"><img src="img/front-page-image/App Store badge white.png" alt="Lokaldo logo" class="lataa-app-store"/></a>
        </div><!-- /.col-md-8-->
    </div><!-- /.cotainer-->
</div><!-- /.row .photo-footer-bg-->

<div class="row faqs-row">
    <div class="container">
        <div class="col-md-6">
            <h3>WHY WOULD I SEND A VIDEO JOB APPLICATION?</h3>
            <P>Pretty much in all the cases the employer and the job seeker will have to meet in person some day. That is why we want to save time for both sides of the transaction, so there won't be anyore useless sit downs. Now the job seekers can actually show who they are and tell the same thnig as they would in a face-to-face meeting.</P>
        </div>

        <div class="col-md-6">
            <h3>DO I NEED AN IPHONE TO USE LOKALDO?</h3>
            <P>The fastest way to post a jobs or apply for jobs is made by using our mobile application. We offer pertty much the same functions in our mobile apps as we do in our website. We are currently developing our Android-app which will be arriving as soon as possible.</P>
        </div>
    </div>
</div>

<div class="row faqs-row-2">
    <div class="container">
        <div class="col-md-6">
            <h3>WHO WILL SEE MY VIDEO APPLICATION?</h3>
            <P>Your job application will be securely sent only to the administrator that posted the job position. All of this will be done by using our secure servers, so you don't have to worry about any misconceptions.</P>
        </div>

        <div class="col-md-6">
            <h3>ARE YOU COMPLETELY FREE TO USE?</h3>
            <P>We're trying to offer something new and completely different. We want to ensure our service will offer the best quality and efficiency, so we decided not to charge recruiters with heavy cost structures. For now your feedback is the most important payment we need.</P>
        </div>
    </div>
</div>

<div class="row more-questions-tweet-row">
    <div class="container">
        <div class="col-md-12">
            <h2>More questions? Tweet <a href=""><span class="lokaldoapp-tweet">@lokaldoapp</span></a> and ask a question.</h2>
        </div>
    </div>
</div>

<div class="row join-more-row">
    <div class="container">
        <form class="form-inline" method="POST">
            <div class="form-group">
                <p>Join for more!</p>
            </div>
            <div class="form-group input-form-group">
                <input type="email" placeholder="Enter your email" class="form-control" name="email">
            </div>
            <button type="submit" class="btn btn-lg btn-success">Join</button>
        </form>
    </div>
</div>

<!--Footer section-->
@include('footer.footer')

@endsection
