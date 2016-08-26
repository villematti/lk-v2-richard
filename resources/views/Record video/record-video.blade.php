@extends('layouts.app')

@section('styles')
<!--Own stylesheet/css for this page.-->
<link rel="stylesheet" href="/css/styles/record.css" />
@endsection

@section('content')
<!--Cover Image-->
<div class="bg-img">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1>Apply for <strong>Job.</strong></h1>
			</div>
		</div>
	</div><!-- /.container-->
</div><!-- /.row .bg-img-->

<div class="container rcord-bidyo-cont">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="row">

				<h3 class="heading-rcord">Record your video job application</h3>
				<div class="col-md-12">
					<video controls="" id="rcrd-vj" src="videos/Meknia revision - Richard - 7.8.2016.mp4" type="video/mp4"></video>
				</div>

				<div class="col-md-4">
					<button class="btn btn-success btn-block" id="record-return-btn">Return</button>
				</div>

				<div class="col-md-4">
					<button class="btn btn-danger btn-block" id="record-bidyo-rd">Record a new video</button>
				</div>

				<div class="col-md-4">
					<button class="btn btn-success btn-block" id="record-accept-bidyo">Accept video</button>
				</div>
			</div>
		</div>
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