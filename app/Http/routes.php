<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Front page*/
    Route::get('/', function () {
        return view('front-page.front-page');
    });

/*How it works mobile selected*/
    Route::get('/how-it-works-phone-selected', function () {
        return view('how it works.how-it-works-phone-selected');
    });

/*How it works mobile selected*/
    Route::get('/how-it-works-web-selected', function () {
        return view('how it works.how-it-works-web-selected');
    });

/*Dashboard*/
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    });

/*browse more jobs*/
    Route::get('/browse-job', function () {
        return view('Browse jobs.browse-job');
    });

/*My Resume*/
    Route::get('/resume', function () {
        return view('Resume.my-resume');
    });

    Route::get('resume-education', function () {
        return view('Resume.my-resume-education');
    });

    Route::get('resume-skills-and-expertise', function () {
        return view('Resume.my-resume-skills-and-expertise');
    });

    Route::get('resume-work-experience', function () {
        return view('Resume.my-resume-work-experience');
    });

    Route::get('resume-languages', function () {
        return view('Resume.my-resume-language');
    });

    Route::get('resume-hobies', function () {
        return view('Resume.my-resume-hobies');
    });

/*Hae tyo¦êpaikkaan*/
    Route::get('hae-tyo-epaikkaan', function () {
        return view('hae tyo.hae-tyo-epaikkaan');
    });

    Route::get('hae-tyo-epaikka', function () {
        return view('hae tyo.hae-tyo-epaikka');
    });

/*Open job*/
    Route::get('full-time', function () {
        return view('open-job.full-time');
    });

    Route::get('part-time', function () {
        return view('open-job.part-time');
    });

/*Job application*/
    Route::get('sent-job-application', function () {
        return view('job application.sent-job');
    });

    Route::get('jobs-applications', function () {
        return view('job application.jobs-applications');
    });

Route::get('opened-job', function () {
    return view('open job appl.opened-job');
});

/*Message*/
    Route::get('messages', function () {
        return view('messages.message');
    });

/*Oma hakemus*/
    Route::get('oma-hakemus', function () {
        return view('oma.oma-hakemus');
    });

    Route::get('oma-hakemus1', function () {
        return view('oma.oma-hakemus1');
    });

// Recording video
    Route::get('record-video', function () {
        return view('Record video.record-video');
    });

Route::auth();
Route::get('/home', 'HomeController@index');


