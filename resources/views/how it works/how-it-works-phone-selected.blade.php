@extends('layouts.app')

@section('styles')
<!--Own stylesheet/css for this page.-->
<link rel="stylesheet" href="/css/styles/vendor/font.css" />
<link rel="stylesheet" href="/css/styles/how-it-works.css" />
@endsection

@section('content')

<!--Cover Image-->
<div class="row how-it-works-bg-img">
    <div class="container">
    	<!--Header text-->
        <h1>Tell it in a video.</h1>
    </div>
</div><!-- /.row .how-it-works-bg-img-->

<!--Apply for jobs by recording.... SECTION -->
<div class="row apply-jobs-row">
	<div class="container">
		<div class="col-md-7">
			<!--Header text -->
			<h1>Apply for jobs by recording a video introduction.</h1>
			<hr align="left" class="hr-header">

			<p>Don't just focus on your text based resume, that's a little bit old school already. We want to give the job seekers a chance to show the best characteritics that really matter. Now you can show what kind of person you really are by sending job applications in video.</p>

			<!--Browse button-->
			<button type="submit" class="btn btn-success">Browse jobs</button>
		</div><!-- /.col-md-7 -->

		<div class="col-md-5">
			<!--Video image with iphone-->
			<img src="img/How it works/Video Player.png" class="img-responsive">
		</div>
	</div><!-- /.container-->
</div><!-- /.row .apply-jobs-row -->

<!--Horizontal line section-->
<div class="row hr-row-1">
	<div class="container">
		<hr>
	</div>
</div><!-- /.row .hr-row-1-->

<!--Three blurb module-->
<!--SAFE AND SECURE/CREATE A PROFILE/GET TO KNOW YOUR FUTURE EMPLOYER-->
<div class="row blurd-row-3">
	<div class="container">
		<div class="col-md-4">
			<h3>SAFE AND SECURE</h3>

			<p>Your video job application is securely sent directly to the owner of the job listing. We ensure that by using reliable and secure servers.</p>
		</div>

		<div class="col-md-4">
			<h3>CREATE A PROFILE</h3>

			<p>Fill in your profile and resume. Once you have your resume filled, you don't have to focus on it anymore. Just by simply press record and give a good first impression of yourself.</p>
		</div>

		<div class="col-md-4">
			<h3>GET TO KNOW YOUR FUTURE EMPLOYER</h3>

			<p>We're all about transparency, that's why want to give the recruiter also a chance to introduce itself. It's always good to know with whom are you dealing with.</p>
		</div>
	</div><!-- /.container-->
</div><!-- /.row .blurd-row-3-->

<!-- Header text-->
<div class="row stand-out-row">
	<div class="container">
		<div class="col-md-12">
			<h1>Make sure you stand out. <b>Use video.</b></h1>
			<hr>
		</div>
	</div><!-- /.container-->
</div><!-- /.row .stand-out-row-->

<!--Three iPhones: Browse jobs, Press record and..-->
<div class="row mobile-selected-row-1">
	<div class="container mobile-selected-container-1">
		<div class="col-md-4">
			<img src="img/How it works/Phone 1.png" alt="phone 1" class="img-responsive center-block">
			<p>Browse job offers</p>
		</div>

		<!-- 2nd iphone photo-->
		<div class="col-md-4">
			<img src="img/How it works/Phone 2.png" alt="phone 2" class="img-responsive center-block">
			<p>Press record and introduce yourself</p>
		</div>

		<div class="col-md-4">
			<img src="img/How it works/Phone 3.png" alt="phone 3" class="img-responsive center-block">
			<p>Employer will contact you in a message</p>
		</div>
	</div><!-- /.container .mobile-selected-container-1-->
</div><!-- /.row .mobile-selected-row-1-->

<!--Find jobs now and download our app-->
<div class="row bg-img-browse-jobs">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<!--Lokaldo logo-->
			<a href="">
				<img src="img/front-page-image/App icon side.png" class="lokaldo-logo" alt="lokaldo logo">
			</a>
			<h3>Find Jobs Now. <b>Donwload our App.</b></h3>

			<!--donwload icon-->
			<a href="">
				<img src="img/front-page-image/App Store Badge.png" class="download-icon" alt="donwload lokaldo icon">
			</a>
		</div>
	</div><!-- /. conatainer-->
</div><!-- /.row .bg-img-browse-jobs-->

<!--Get to know your future employee-->
<div class="row know-future-employee-row">
	<div class="container">
		<div class="col-md-5">
			<img src="img/How it works/Video Player Copy.png" class="img-responsive">
		</div>

		<div class="col-md-7">
			<h1>Get to know your future employee.</h1>
			<hr align="left" class="hr-header">

			<p>You can now actually see the persons even before you meet them in person. Stop wasting your time and interviewing large amounts of candidates, when you can directly choose the ones you like. When the candidates personality and characteristcs matter, we're here to help you.</p>

			<button type="submit" class="btn btn-success">Post a job</button>
		</div>
		<hr>
	</div><!-- /.container-->
</div><!-- /.row .know-future-employee-row -->

<!--Horizontal line-->
<div class="row get-row-hr">
	<div class="container">
		<hr>
	</div>
</dir><!-- /.row .get-row-hr-->

<!--Three blurd module-->
<div class="row blurb-row-32">
	<div class="container">
		<div class="col-md-4">
			<h3>POST A JOB FOR FREE</h3>

			<P>All we ned is your feedback about the quality of our service. We want to become as good as possible in the field of recruiting</P>
		</div>

		<div class="col-md-4">
			<h3>INTRODUCE YOURSELF</h3>

			<P>If you want to improve your image as a recruiter you can also use our service to send your job listing in video</P>
		</div>

		<div class="col-md-4">
			<h3>ALL APPLICANTS IN THE SAME PLACE</h3>

			<P>Take control of your large amount of job applications directly in our website and mobile app. We want to make recruiting as efficient as possible.</P>
		</div>
	</div><!-- /.container-->
</div><!-- /.row .blurb-row-32-->

<!-- buttong group: Web or Mobile -->
<div class="container btn-web-mobile">
	<div class="col-md-6 col-md-offset-3">
		<div class="btn-group" role="group" aria-label="Web/Mobile">
		  	<button type="button" class="btn btn-success active">Web</button>
		  	<button type="button" class="btn btn-success">Mobile</button>
		</div>
	</div><!-- /.col-md-6 .col-md-offset-3-->
</div><!-- /.container btn-web-mobile-->

<!--Lokaldo mobile version-->
<!--3 iPhone-->
<div class="row mobile-selected-row">
	<div class="container mobile-selected-container">
		<div class="col-md-4">
			<img src="img/How it works/Phone 1.png" alt="phone 1" class="img-responsive center-block">
			<p>Post a job</p>
		</div>

		<div class="col-md-4">
			<img src="img/How it works/Phone 2.png" alt="phone 2" class="img-responsive center-block">
			<p>Describe it in a video or add a photo with information</p>
		</div>

		<div class="col-md-4">
			<img src="img/How it works/Phone 3.png" alt="phone 3" class="img-responsive center-block">
			<p>Get video job applications and select your favorite candidates</p>
		</div>
	</div><!-- /.container-->
</div><!-- /.row .mobile-selected-row-->

<!--Minimum time maximum effort-->
<div class="row bg-img-browse-jobs-2">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">

			<h1>Minimum time. <b>Maximum effort.</b></h1>

			<p>Now the recruiter can actually see the candidates even before they meet in person. Our mission is to save recruiters time by showing who's the person behind the job application.</p>

			<!--Post a job button-->
			<button type="submit" class="btn btn-success">Post a job</button>
		</div>
	</div><!-- /.container-->
</div><!-- /.row .bg-img-browse-jobs-2 -->

<!--Got a question?-->
<div class="row got-questions-row">
	<div class="container">
		<h1>Got a Question?</h1>
		<p>Contact us at <a href=""><span class="lokaldo-email" id="L-mail">info@lokaldo.com </span></a> and ask more questions.</p>
	</div><!-- /.container-->
</div><!-- /.row .got-questions-row-->

<!--Footer section-->
@include('footer.footer')

@endsection
