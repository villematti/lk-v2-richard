@extends('layouts.app')

@section('styles')
<!--Own stylesheet/css for this page.-->
<link rel="stylesheet" href="/css/styles/vendor/font.css" />
<link rel="stylesheet" href="/css/styles/browse-job.css" />
@endsection

@section('content')
<!--Cover Image-->
<div class="row bg-img">
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<h1>Browse <strong>Jobs.</strong></h1>
		</div>
	</div><!-- /.container-->
</div><!-- /.row .bg-img-->

<!--SEARCH form-->
<div class="row search-form-row">
	<div class="container">
		<div class="well">
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
		</div><!-- /.well-->
	</div><!-- /.container-->
</div><!-- /.row .search-form-row-->

<!--full time/Part time section-->
<div class="row category-job-row">
	<div class="container">
		<div class="well">
			<!--Checkbox for full time job-->
			<span class="full-time">
				<input class="checkboxx" type="checkbox" checked><label>Full time jobs</label>
			</span>
			<!--Checkbox for part time job-->
			<span class="part-time">
				<input class="checkboxx" type="checkbox"><label>Part time jobs</label>
			</span>

			<!--Sort by latest and oldest-->
			<span class="pull-right">
				<span class="sort-by">Sort by:</span>
					<!--Latest-->
					<span class="latest"><a href="">Latest</a></span>
					<span>/</span>
					<!--Oldest-->
					<span class="oldest"><a href="">Oldest</a></span>
				<!--RSS feed-->
				<span class="rss"><a href=""><img src="img/photos/rss.png" alt="RSS feed"> RSS</a></span>
			</span>	<!-- /.pull-right-->	
		</div><!-- /.well-->
	</div><!-- /.container-->
</div><!-- /.row .category-job-row-->

<!--Showing Jobs Tampere, Executive-->
<div class="row latest-job-row">
	<div class="container">
		<p class="showing-p">Showing Jobs <b>Tampere, Executive</b></p>
		<div class="row">
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

	                <!--4th item-->
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

	                <!--5th item-->
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

	                <!--6th item-->
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

	                <!--7th item-->
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

	                <!--8th item-->
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
	                    </div><!-- /.row .list-of -latest-jobs-row-->
	                </li><!-- /.list-group-item .list-of-latest-jobs-->
	            </div><!-- /.list-group-->

	            <!--Load more jobs button-->
	            <div class="div-load-more">
	            	<button type="submit" class="btn btn-success load-more-job-btn">Load more jobs</button>
	            </div>
	        </div><!-- /.col-md-s8-->

	        <!--DOWNLOAD APP SECTION-->
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
		</div><!-- /.row-->
	</div><!-- /.container-->
</div><!-- /.row latest-job-row-->

<!--QUESTIONS? send mail to....-->
<div class="row inquiry-row">
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<h1>Questions?</h1>
			<p>Send email to <span id="L-mail"><a href="">info@lokaldo.com</a></span></p>
		</div>
	</div>
</div><!-- /.row .inquiry-row-->

<!--Footer section-->
@include('footer.footer')
@endsection