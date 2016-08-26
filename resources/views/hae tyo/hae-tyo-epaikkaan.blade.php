@extends('layouts.app')

@section('styles')
<!--Own stylesheet/css for this page.-->
<link rel="stylesheet" href="/css/styles/vendor/font.css" />
<link rel="stylesheet" href="/css/styles/hae-tyo.css" />
@endsection

@section('content')

<!--Cover Image-->
<div class="row bg-img">
    <div class="container">
        <h1>Apply for <strong>Job.</strong></h1>
    </div><!-- /.container-->
</div><!-- /.row .-bg-img-->

<div class="row acct-rw">
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <!--Email-->
            <div class="have-acc">
                <label>HAVE AN ACCOUNT?</label>
                <div class="well">
                    <div class="row">
                        <div class="col-md-8">
                            <p>If you want to send a job application, you must be logged in. You can easily log in with your Facebook details. Make sure you fill in your resume in your dashboard.</p>
                        </div>

                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary" id="L_Flogin"><i class="fa fa-facebook" id="peysbuk-lagin" aria-hidden="true"></i> Log in with facebook</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="each-dv job-title">
                <label>JOB TITLE</label>
                <input type="text" class="form-control" aria-label="birth-date" placeholder="RESTAURANT WORKER, STAFF POINT">
            </div>

            <div class="each-dv title-job-appl">
                <label>TITLE FOR YOUR JOB APPLICATION</label>
                <input type="text" class="form-control" aria-label="birth-date" placeholder="">
            </div>

            <div class="each-dv short-desc">
                <label>SHORT DESCRIPTION</label>
                <textarea class="form-control" rows="3" placeholder="Why would you be qualified for the job?"></textarea>
            </div>

            <div class="each-dv chs-fl-btn">
                <label>ATTACH A VIDEO JOB APPLICATION</label>
                <button type="submit" class="btn btn-success" id="chs-fl">CHOOSE FILE</button>
                <p class="max-lmt">Maximum file size 10 MB</p>
            </div>

            <div class="each-dv or">
                <label>OR</label>
            </div>

            <div class="each-dv chs-fl-btn">
                <label>RECORD A VIDEO JOB APPLICATION</label>
                <button type="submit" class="btn btn-danger" id="rcrd-nw">RECORD NOW</button>
                <p class="max-lmt">Maximum length 40 sec.</p>
            </div>

            <button type="submit" class="btn btn-success btn-block" id="btn-prevw">PREVIEW</button>
        </div>
    </div>
</div>

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


