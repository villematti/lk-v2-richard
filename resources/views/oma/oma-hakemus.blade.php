@extends('layouts.app')

@section('styles')
<!--Own stylesheet/css for this page.-->
<link rel="stylesheet" href="/css/styles/vendor/font.css" />
<link rel="stylesheet" href="/css/styles/oma.css" />
@endsection

@section('content')
<!--Cover Image-->
<div class="bg-img">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1>My <strong>Job Application.</strong></h1>
			</div>
		</div>
	</div><!-- /.container-->
</div><!-- /.row .bg-img-->

<div class="Lreturn-oma">
	<div class="row">
		<p><a href=""><i class="fa fa-angle-left" aria-hidden="true"></i>Return</a></p>
	</div>
</div>

<div class="container bidyo-cont">
	<div class="row">
		<div class="col-md-9 video-contr-9">
			<video controls="" id="rcrd-v" src="videos/Meknia revision - Richard - 7.8.2016.mp4" type="video/mp4"></video>
		</div>

		<div class="col-md-3">
			<div class="well">
                <img src="img/front-page-image/Userpic.png" height="55px" width="55px">
                <span id="Lname-bidyo">Markus James</span>
            </div>

            <div class="well info-well">
            	<p><i class="fa fa-birthday-cake" aria-hidden="true"></i> 14.08.1992</p>
            	<p><i class="fa fa-venus-mars" aria-hidden="true"></i> Male</p>
            	<p><i class="fa fa-map-marker" aria-hidden="true"></i> New York</p>
            	<p><i class="fa fa-envelope-o" aria-hidden="true"></i> markus@icloud.com</p>
            	<p><i class="fa fa-phone" aria-hidden="true"></i> 050 123 456</p>
            </div>
		</div>
	</div>

	<div class="row">
		<h3 class="Ltaytol-1">TITLE</h3>
		<p class="title-descrp">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<hr class="line-separator">
	</div>

	<div class="row">
		<h3 class="Ltaytol-2">Work experience</h3>

		<div class="Lwork-exp">
			<span class="comp-name-wrkexp">Company name</span> <span class="comp-name-wrkexp-plce">New York</span>
			<p class="job-posisyon">Waitress</p>
			<p class="lspan-date">24.06.11 - 11.11.2013</p>
			<p class="Lwrk-diskripsyon">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<div class="Lwork-exp">
			<span class="comp-name-wrkexp">Restamax Oy</span> <span class="comp-name-wrkexp-plce">Tampere</span>
			<p class="job-posisyon">Tarjoilija</p>
			<p class="lspan-date">24.06.11 - 11.11.2013</p>
			<p class="Lwrk-diskripsyon">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<hr class="line-separator">
	</div>

	<div class="row">
		<h3 class="Ltaytol-2">Education</h3>

		<div class="Lwork-exp">
			<span class="comp-name-wrkexp">Tampereen ammattikorkeakoulu</span> <span class="comp-name-wrkexp-plce">Tampere</span>
			<p class="job-posisyon">Surrtalouskokki</p>
			<p class="lspan-date">24.06.11 - 11.11.2013</p>
			<p class="Lwrk-diskripsyon">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<div class="Lwork-exp">
			<span class="comp-name-wrkexp">Tampereen ammattikorkeakoulu</span> <span class="comp-name-wrkexp-plce">Tampere</span>
			<p class="job-posisyon">Surrtalouskokki</p>
			<p class="lspan-date">24.06.11 - 11.11.2013</p>
			<p class="Lwrk-diskripsyon">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<hr class="line-separator">
	</div>

	<div class="row">
		<h3 class="Ltaytol-2">About me</h3>

		<div class="Lwork-exp">

			<p class="LaboutMe">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<hr class="line-separator">
	</div>

	<div class="row">
		<h3 class="Ltaytol-2">Languages</h3>

		<div class="Lwork-exp">
			<div class="langauges-rw">
				<p class="Llanguages">Soumi</p>
				<p class="Llanguages">Englanti</p>
				<p class="Llanguages">Saksa</p>
			</div>
		</div>

		<hr class="line-separator">
	</div>

	<div class="row">
		<h3 class="Ltaytol-2">Skills and Expertise</h3>

		<div class="Lwork-exp">
			<div class="langauges-rw">
				<p class="Llanguages">Asiakaspalvelu</p>
				<p class="Llanguages">Microsoft Office</p>
				<p class="Llanguages">Kirjanpito</p>
			</div>
		</div>

		<hr class="line-separator">
	</div>

	<div class="row">
		<h3 class="Ltaytol-2">Hobbies and Interests</h3>

		<div class="Lwork-exp">
			<p class="habis-interis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>

		<hr class="line-separator">
	</div>
</div><!-- /.container-->

<div class="bg2-img">
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