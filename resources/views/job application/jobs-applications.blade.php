@extends('layouts.dashboardheader')

@section('styles')
<!--Own stylesheet/css for this page.-->
<link rel="stylesheet" href="/css/styles/vendor/font.css" />
<link rel="stylesheet" href="/css/styles/job-application.css" />
@endsection

@section('content')

<!-- Secondary header-->
@include('layouts.header')

<div class="container snt-jb-cont">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="well">
                <table class="table"> 
                    <caption> 
                        <span class="sent-jb-appl">Jobs and Applications</span> 
                        <span class="sent-jb-appl-num">32 job listings</span>
                    </caption> 

                    <thead> 
                        <tr class="trth"> 
                            <th>Application title</th> 
                            <th>Expires</th>
                            <th>Job applications</th>
                            <th></th>
                        </tr> 
                    </thead> 

                    <tbody> 
                        <tr> 
                            <td class="col-md-3"><span class="categ-job">Restaurant Workers</span><br><span class="loc-snt">Tampere, Finland</span></td> 
                            <td class="col-md-3"><span class="exp-date">14 August 2016</span></td> 
                            <td class="col-md-3"><span class="exp-date">12 Jobs applications</span></td> 
                            <td class="col-md-2 jb-applc-2"><button class="btn btn-success btn-block">View</button></td> 
                            <td class="col-md-1"><button class="btn btn-danger" id="Ltrash" data-toggle="modal" data-target="#modalMsg-removejobAppl"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                        </tr>

                        <tr> 
                            <td class="col-md-3"><span class="categ-job">Restaurant Workers</span><br><span class="loc-snt">Tampere, Finland</span></td> 
                            <td class="col-md-3"><span class="exp-date">14 August 2016</span></td> 
                            <td class="col-md-3"><span class="exp-date">12 Jobs applications</span></td> 
                            <td class="col-md-2 jb-applc-2"><button class="btn btn-success btn-block">View</button></td> 
                            <td class="col-md-1"><button class="btn btn-danger" id="Ltrash" data-toggle="modal" data-target="#modalMsg-removejobAppl"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                        </tr>

                        <tr> 
                            <td class="col-md-3"><span class="categ-job">Restaurant Workers</span><br><span class="loc-snt">Tampere, Finland</span></td> 
                            <td class="col-md-3"><span class="exp-date">14 August 2016</span></td> 
                            <td class="col-md-3"><span class="exp-date">12 Jobs applications</span></td> 
                            <td class="col-md-2 jb-applc-2"><button class="btn btn-success btn-block">View</button></td> 
                            <td class="col-md-1"><button class="btn btn-danger" id="Ltrash" data-toggle="modal" data-target="#modalMsg-removejobAppl"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                        </tr>

                        <tr> 
                            <td class="col-md-3"><span class="categ-job">Restaurant Workers</span><br><span class="loc-snt">Tampere, Finland</span></td> 
                            <td class="col-md-3"><span class="exp-date">14 August 2016</span></td> 
                            <td class="col-md-3"><span class="exp-date">12 Jobs applications</span></td> 
                            <td class="col-md-2 jb-applc-2"><button class="btn btn-success btn-block">View</button></td> 
                            <td class="col-md-1"><button class="btn btn-danger" id="Ltrash" data-toggle="modal" data-target="#modalMsg-removejobAppl"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                        </tr>

                        <tr> 
                            <td class="col-md-3"><span class="categ-job">Restaurant Workers</span><br><span class="loc-snt">Tampere, Finland</span></td> 
                            <td class="col-md-3"><span class="exp-date">14 August 2016</span></td> 
                            <td class="col-md-3"><span class="exp-date">12 Jobs applications</span></td> 
                            <td class="col-md-2 jb-applc-2"><button class="btn btn-success btn-block">View</button></td> 
                            <td class="col-md-1"><button class="btn btn-danger" id="Ltrash" data-toggle="modal" data-target="#modalMsg-removejobAppl"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                        </tr>

                        <tr> 
                            <td class="col-md-3"><span class="categ-job">Restaurant Workers</span><br><span class="loc-snt">Tampere, Finland</span></td> 
                            <td class="col-md-3"><span class="exp-date">14 August 2016</span></td> 
                            <td class="col-md-3"><span class="exp-date">12 Jobs applications</span></td> 
                            <td class="col-md-2 jb-applc-2"><button class="btn btn-success btn-block">View</button></td> 
                            <td class="col-md-1"><button class="btn btn-danger" id="Ltrash" data-toggle="modal" data-target="#modalMsg-removejobAppl"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                        </tr>
                    </tbody> 
                </table><!-- /.table-->
            </div><!-- /.well-->
        </div><!-- /.col-md-8 .col-md-offset-2-->

        <div class="modal fade" id="modalMsg-removejobAppl" tabindex="-2" role="dialog" aria-labelledby="modalMsgLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="header-txt">
                            <h4 class="modal-title">Are you sure you want to <b>remove</b> this?</h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-default btn-block" id="no_return">No, Return</button>
                            </div>

                            <div class="col-md-6">
                                <button type="button" class="btn btn-success btn-block" id="yes_rmv_jb">Yes, Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .modal .fade-->
    </div>
</div>
@endsection


