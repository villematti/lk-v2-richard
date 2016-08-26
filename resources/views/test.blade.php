@extends('layouts.dashboardheader')

@section('styles')
<!--Own stylesheet/css for this page.-->
<link rel="stylesheet" href="/css/styles/vendor/font.css" />
<link rel="stylesheet" href="/css/styles/test.css" />

@endsection

@section('content')

<div class="container ">
    <div class="row">
        <div class="col-md-2 drg-foldr">
            <div class="accptd">
                <p>Drag applications to folder</p>
                <div class="well drg-accptd">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    <h3>Accepted</h3>
                </div>
                <div class="send-msg">
                    <a href="#" data-toggle="modal" data-target="#modalMsg-AccptdCand" data-candidates="@accpted-candidates">
                        <div class="media">
                            <div class="media-left">
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                            </div>
                            <div class="media-body">
                                <span>Send a group message to accepted candidates</span>
                            </div><!-- /.media-body-->
                        </div><!-- /.media-->
                    </a>
                </div><!-- /.send-msg-->
            </div>

            <div class="not-accptd">
                <p>Drag applications to folder</p>
                <div class="well drg-not-accptd">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    <h3>Not-Accepted</h3>
                </div>

                <div class="send-msg">
                    <a href="#" data-toggle="modal" data-target="#modalMsg-notAccptdCand" data-candidates="@not-accpted-candidates">
                        <div class="media">
                            <div class="media-left">
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                            </div>
                            <div class="media-body">
                                <span>Send a group message to not-accepted candidates</span>
                            </div><!-- /.media-body-->
                        </div><!-- /.media-->
                    </a>
                </div><!-- /.send-msg-->
            </div>
        </div><!-- /.col-md-2 .side-fix-->

        <!--Group modal message for ACCEPTED candidates-->
        <div class="modal fade" id="modalMsg-AccptdCand" tabindex="-1" role="dialog" aria-labelledby="modalMsgAccptdCandLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Group message <b>Accepted</b> Candidates</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <div class="well">
                                    <div class="drg-photo-vdeo-msg">
                                        <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>
                                        <p>Add or Drag a photo/video where you tell your message. (optional) </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-control-label">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="msgAccepted-candidates" rows="8" placeholder="Write your message for all candidates"></textarea>
                                <p class="info-msg">Message will be sent to all acccepted candidates</p>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">                        
                    <button type="button" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </div>
        </div><!-- .modal .fade-->

        <!--Group modal message for NOT-ACCEPTED candidates-->
        <div class="modal fade" id="modalMsg-notAccptdCand" tabindex="-1" role="dialog" aria-labelledby="modalMsgAccptdCandLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Group message <b>Not-accepted</b> Candidates</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <div class="well">
                                    <div class="drg-photo-vdeo-msg">
                                        <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>
                                        <p>Add or Drag a photo/video where you tell your message. (optional) </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-control-label">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="msgAccepted-candidates" rows="8" placeholder="Write your message for all candidates"></textarea>
                                <p class="info-msg">Message will be sent to all not-acccepted candidates</p>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">                        
                    <button type="button" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </div>
        </div><!-- .modal .fade-->


        <div class="col-md-10 cntnt-wrkrs">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well containr-wll">
                    <div class="bg-covr-img">
                        <a href=""><img src="img/photos/Play btn@3x.png"></a>
                    </div><!-- /.bg-covr-img-->

                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img src="img/front-page-image/Userpic.png" height="70px" width="70px">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Ville-Matti Hakanp&auml;&auml;</h4>
                            <span>
                                Helsinki, Suomi
                            </span>
                        </div><!-- /.media-body-->
                    </div><!-- /.media-->

                    <hr class="hor-line-cntent">
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modalMsg" data-whatever="@mdo">Message</button>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6 some-padd">
                            <a href=""><p class="fav-add"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Added to favourites</p></a>
                        </div>
                    </div><!-- /.row-->
                </div><!-- /.well .containr-wll-->
            </div><!-- /.col-md-4 .col-sm-6 .col-xs-12-->

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well containr-wll">
                    <div class="bg-covr-img">
                        <a href=""><img src="img/photos/Play btn@3x.png"></a>
                    </div><!-- /.bg-covr-img-->

                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img src="img/front-page-image/Userpic.png" height="70px" width="70px">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Ville-Matti Hakanp&auml;&auml;</h4>
                            <span>
                                Helsinki, Suomi
                            </span>
                        </div><!-- /.media-body-->
                    </div><!-- /.media-->

                    <hr class="hor-line-cntent">
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modalMsg" data-whatever="@mdo">Message</button>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6 some-padd">
                            <a href=""><p class="fav-add"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Added to favourites</p></a>
                        </div>
                    </div><!-- /.row-->
                </div><!-- /.well .containr-wll-->
            </div><!-- /.col-md-4 .col-sm-6 .col-xs-12-->

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well containr-wll">
                    <div class="bg-covr-img">
                        <a href=""><img src="img/photos/Play btn@3x.png"></a>
                    </div><!-- /.bg-covr-img-->

                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img src="img/front-page-image/Userpic.png" height="70px" width="70px">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Ville-Matti Hakanp&auml;&auml;</h4>
                            <span>
                                Helsinki, Suomi
                            </span>
                        </div><!-- /.media-body-->
                    </div><!-- /.media-->

                    <hr class="hor-line-cntent">
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modalMsg" data-whatever="@mdo">Message</button>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6 some-padd">
                            <a href=""><p class="fav-add"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Added to favourites</p></a>
                        </div>
                    </div><!-- /.row-->
                </div><!-- /.well .containr-wll-->
            </div><!-- /.col-md-4 .col-sm-6 .col-xs-12--> 

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well containr-wll">
                    <div class="bg-covr-img">
                        <a href=""><img src="img/photos/Play btn@3x.png"></a>
                    </div><!-- /.bg-covr-img-->

                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img src="img/front-page-image/Userpic.png" height="70px" width="70px">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Richard Tumapon</h4>
                            <span>
                                Helsinki, Suomi
                            </span>
                        </div><!-- /.media-body-->
                    </div><!-- /.media-->

                    <hr class="hor-line-cntent">
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modalMsg" data-whatever="@mdo">Message</button>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6 some-padd">
                            <a href=""><p class="fav-add"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Added to favourites</p></a>
                        </div>
                    </div><!-- /.row-->
                </div><!-- /.well .containr-wll-->
            </div><!-- /.col-md-4 .col-sm-6 .col-xs-12--> 

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well containr-wll">
                    <div class="bg-covr-img">
                        <a href=""><img src="img/photos/Play btn@3x.png"></a>
                    </div><!-- /.bg-covr-img-->

                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img src="img/front-page-image/Userpic.png" height="70px" width="70px">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Richard Tumapon</h4>
                            <span>
                                Helsinki, Suomi
                            </span>
                        </div><!-- /.media-body-->
                    </div><!-- /.media-->

                    <hr class="hor-line-cntent">
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modalMsg" data-whatever="@mdo">Message</button>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6 some-padd">
                            <a href=""><p class="fav-add"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Added to favourites</p></a>
                        </div>
                    </div><!-- /.row-->
                </div><!-- /.well .containr-wll-->
            </div><!-- /.col-md-4 .col-sm-6 .col-xs-12-->  

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well containr-wll">
                    <div class="bg-covr-img">
                        <a href=""><img src="img/photos/Play btn@3x.png"></a>
                    </div><!-- /.bg-covr-img-->

                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img src="img/front-page-image/Userpic.png" height="70px" width="70px">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Richard Tumapon</h4>
                            <span>
                                Helsinki, Suomi
                            </span>
                        </div><!-- /.media-body-->
                    </div><!-- /.media-->

                    <hr class="hor-line-cntent">
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modalMsg" data-whatever="@mdo">Message</button>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6 some-padd">
                            <a href=""><p class="fav-add"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Added to favourites</p></a>
                        </div>
                    </div><!-- /.row-->
                </div><!-- /.well .containr-wll-->
            </div><!-- /.col-md-4 .col-sm-6 .col-xs-12-->            
        </div><!-- /.col-md-10 .cntnt-wrkrs-->

        <!-- Modal message for single candidate-->
        <div class="modal fade" id="modalMsg" tabindex="-2" role="dialog" aria-labelledby="modalMsgLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                        <img src="img/front-page-image/Userpic.png" height="80px" width="80px">

                        <div class="header-txt">
                            <h4 class="modal-title" id="exampleModalLabel">Send a message</h4>
                            <p>
                                <span>First name</span> 
                                <span>Last name</span>
                            </p>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <div class="well">
                                <div class="drg-photo-vdeo-msg">
                                    <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>
                                    <p>Add or Drag a photo/video where you tell your message. (optional) </p>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" type="text" rows="6" placeholder="Write your message for the candidates"></textarea>
                            <p class="info-msg">Message will be sent to all acccepted candidates</p>
                        </div>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-success">Send</button>
                    </div>
                </div>
            </div>
        </div><!-- .modal .fade-->
    </div><!-- /.row-->
</div><!-- /.container-->



@endsection




