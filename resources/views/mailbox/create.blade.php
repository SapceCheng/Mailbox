@extends('layout')

@section('head')
<link href="css/plugins/summernote/summernote-bs4.css" rel="stylesheet">
@endsection

@section('content')
<div class="col-lg-9 animated fadeInRight">
<div class="mail-box-header">
<div class="float-right tooltip-demo">
    <a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder"><i class="fa fa-pencil"></i> Draft</a>
    <a href="/welcome" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> Discard</a>
</div>
<h2>
    New mail
</h2>
</div>
<div class="mail-box">


<div class="mail-body">

    <form id="sendForm" method="POST" action="/create">
        @csrf
        <input class="form-control" type="hidden" name="body" id="body" value="" />
        {{-- <input class="form-control" type="hidden" name="body-length" id="body-length" value="" /> --}}

        <div class="form-group row"><label class="col-sm-2 col-form-label">To:</label>

        <div class="col-sm-10">
            <input class="form-control" type="text" name="email" id="email" value="{{old('email')}}">
        @error('email')
        <p class="text-red-500 text-xs">{{$errors->first('email')}}</p>
        @enderror
        </div>
        </div>

        <div class="form-group row"><label class="col-sm-2 col-form-label">Subject:</label>

            <div class="col-sm-10"><input class="form-control input @error('title') is danger @enderror" type="text" name="title" id="title" value="{{old('title')}}">
                @error('title')
                <p class="help is-danger">{{$errors->first('title')}}</p>
                @enderror
            </div>
        </div>

        <div class="mail-text h-200">
            <div class="summernote"></div>
        </div>

{{--
            <input class="form-control input @error('body') is danger @enderror" type="text" name="body" id="body" value="{{old('body')}}">
            @error('body')
            <p class="help is-danger">{{$errors->first('body')}}</p>
            @enderror --}}
            <div class="clearfix"></div>
            <div class="mail-body text-right tooltip-demo">
                <button href="/create" id="send" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="send" type="submit" οnclick="myFunction()"><i class="fa fa-reply"></i>Send</button>
                <a href="/" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> Discard</a>
                <a href="/" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Move to draft folder" type="submit"><i class="fa fa-pencil"></i> Draft</a>
            </div>
            <div class="clearfix"></div>
            @if (session('message'))
            <div>
                {{session('message')}}
            </div>
            @endif
        </form>
</div>
@endsection

@section('script')
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- SUMMERNOTE -->
    <script src="js/plugins/summernote/summernote-bs4.js"></script>

    <script>
    $(document).ready(() => {
        $('.summernote').summernote();

        $("#send").click(() => {
            $("#body").val($('.summernote').summernote('code'));
        })
    });
     </script>
@endsection



