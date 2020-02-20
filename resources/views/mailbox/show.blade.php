@extends('layout')

@section('content')
    <div class="col-lg-9 animated fadeInRight">
        <div class="mail-box-header">
            <div class="float-right tooltip-demo">
                <a href="mail_compose.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Reply"><i class="fa fa-reply"></i> Reply</a>
                <a href="#" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Print email"><i class="fa fa-print"></i> </a>
                <button href="#" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to trash" type="submit"><i class="fa fa-trash-o"></i> </button>
        </div>
        <h2>
        View Message
        </h2>
    <form action="" method="POST">
        <div class="mail-tools tooltip-demo m-t-md">
            <h3>
                <span class="font-normal">Subject: </span>{{$content->title}}
            </h3>
            <h5>
                <span class="float-right font-normal">{{$content->date}}</span>
                <span class="font-normal">From: </span> {{$content->email}}
            </h5>
        </div>
        </div>
        <div class="mail-box">
            <div class="mail-body">
                <p>
                    {{$content->body}}
                </p>
            </div>
                <div class="mail-attachment">
                    <p>
                        <span><i class="fa fa-paperclip"></i> 2 attachments - </span>
                        <a href="#">Download all</a>
                        |
                        <a href="#">View all images</a>
                    </p>

                    <div class="attachment">
                        <div class="file-box">
                            <div class="file">
                                <a href="#">
                                    <span class="corner"></span>

                                    <div class="icon">
                                        <i class="fa fa-file"></i>
                                    </div>
                                    <div class="file-name">
                                        Document_2014.doc
                                        <br/>
                                        <small>Added: Jan 11, 2014</small>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="file-box">
                            <div class="file">
                                <a href="#">
                                    <span class="corner"></span>

                                    <div class="image">
                                        <img alt="image" class="img-fluid" src="img/zc.jpg">
                                    </div>
                                    <div class="file-name">
                                        Italy street.jpg
                                        <br/>
                                        <small>Added: Jan 6, 2014</small>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="file-box">
                            <div class="file">
                                <a href="#">
                                    <span class="corner"></span>

                                    <div class="image">
                                        <img alt="image" class="img-fluid" src="img/like.png">
                                    </div>
                                    <div class="file-name">
                                        My feel.png
                                        <br/>
                                        <small>Added: Jan 7, 2014</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                </div>
                    <div class="mail-body text-right tooltip-demo">
                        <a class="btn btn-sm btn-white" href="/"><i class="fa fa-reply"></i> Reply</a>
                        <a class="btn btn-sm btn-white" href="/"><i class="fa fa-arrow-right"></i> Forward</a>
                        <button title="" data-placement="top" data-toggle="tooltip" type="button" data-original-title="Print" class="btn btn-sm btn-white"><i class="fa fa-print"></i> Print</button>
                        @csrf
                        <button title="" data-placement="top" data-toggle="tooltip" data-original-title="Trash" class="btn btn-sm btn-white" type="submit"><i class="fa fa-trash-o"></i> Remove</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>


@endsection
