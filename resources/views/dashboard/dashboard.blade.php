@extends('layouts.dashboardheader')

@section('styles')
<!--Own stylesheet/css for this page.-->
<link rel="stylesheet" href="/css/styles/vendor/font.css" />
<link rel="stylesheet" href="/css/styles/dashboard.css" />
@endsection

@section('content')

<!-- Secondary header-->
@include('layouts.header')

<!--Welcome/Grweetings-->
<div class="row greetings-row">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h3>Hello Richard! Welcome to Lokaldo.</h3>
			<p>Control your whole recruiting and job seeking process.</p>
		</div><!-- /.col-md-8-->
	</div> <!-- /.container-->
</div><!-- /.row .greetings-row-->

<!--Category options-->
<div class="row category-options-row">
	<div class="container">
		<!--Are you a recruiter?-->
		<div class="col-md-4">
			<div class="well">
				<img src="img/dashboard-photo-icon/Shape2.png">
				<p>Are you a Recruiter? <br>View your job listing and applications</p>
				<button type="button" class="btn btn-success">Jobs and applications</button>
			</div><!-- /.well -->	
		</div>

		<!--Are you a job Seeker?-->
		<div class="col-md-4">
			<div class="well">
				<img src="img/dashboard-photo-icon/Shape3.png">
				<p>Are you a Job Seeker?<br>Control your job applications</p>
				<button type="button" class="btn btn-success">Sent jobs applications</button>
			</div><!-- /.well -->
		</div>

		<!--Fill in your resume details-->
		<div class="col-md-4">
			<div class="well">
				<img src="img/dashboard-photo-icon/Shape.png">
				<p>Fill in your resume details<br>for the recruiters</p>
				<button type="button" class="btn btn-success">My resume</button>
			</div><!-- /.well -->
		</div>
	</div><!-- /.container-->
</div><!-- /.row .category-options-row -->

<!--Messages and News Section-->
<div class="row messages-row">
	<div class="container">
		<!--Messages-->
		<div class="col-md-6">
			<h3>Messages</h3>
			<div class="list-item">
				<li class="list-group-item">
					<a href=""><img src="img/dashboard-photo-icon/Userpic Copy 2.png" alt="User photo">
					<!--Name-->
					<span class="msg-user-name">Jenna James</span></a>
					<!--Date of last message-->
					<span class="last-msg-date">Last message 09.01.2016</span>
					<hr class="hr-msg">
				</li><!--/.list-group-item-->

				<li class="list-group-item">
					<a href=""><img src="img/dashboard-photo-icon/Userpic.png" alt="User photo">
					<!--Name-->
					<span class="msg-user-name">Hanna Smith</span></a>
					<!--Date of last message-->
					<span class="last-msg-date">Last message 09.01.2016</span>
					<hr class="hr-msg">
				</li><!--/.list-group-item-->

				<li class="list-group-item">
					<a href=""><img src="img/dashboard-photo-icon/user-pic.png" alt="User photo">
					<!--Name-->
					<span class="msg-user-name">Richard Tumapon</span></a>
					<!--Date of last message-->
					<span class="last-msg-date">Last message 09.01.2016</span>
					<hr class="hr-msg">
				</li><!--/.list-group-item-->

				<li class="list-group-item">
					<a href=""><img src="img/dashboard-photo-icon/Userpic.png" alt="User photo">
					<!--Name-->
					<span class="msg-user-name">Hanna Smith</span></a>
					<!--Date of last message-->
					<span class="last-msg-date">Last message 09.01.2016</span>
					<hr class="hr-msg">
				</li><!--/.list-group-item-->

				<li class="list-group-item">
					<a href=""><img src="img/dashboard-photo-icon/Userpic.png" alt="User photo">
					<!--Name-->
					<span class="msg-user-name">Hanna Smith</span></a>
					<!--Date of last message-->
					<span class="last-msg-date">Last message 09.01.2016</span>
					<hr class="hr-msg">
				</li><!--/.list-group-item-->
			</div><!-- /.list-item-->

			<button type="button" class="btn btn-success">View all messages</button>
		</div><!-- .col-md-6-->

		<!--News section-->
		<div class="col-md-6">
			<h3>News</h3>
			<div class="well">
				<p class="news-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor <span class="date">03.08.2016</span></p>
			</div>
		</div><!-- /.col-md-6-->
	</div><!-- /.container-->
</div><!-- /.row .messages-row-->

@endsection