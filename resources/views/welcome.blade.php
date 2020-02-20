<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mailbox</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    @yield('head')

</head>

<body>
{{-- Nagigation Part of Profile--}}
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="/img/like.png" style="width:40px;height:40px";/>
                        <a data-toggle= "dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">Zhi Cheng</span>
                            <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="/">Profile</a></li>
                            <li><a class="dropdown-item" href="/">Contacts</a></li>
                            <li><a class="dropdown-item" href="/">Mailbox</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                    IN+
                    </div>
                </li>
                <li class="active">
                    <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label"> Mailbox </span><span class="label label-warning float-right">16/24</span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="/email">Inbox</a></li>
                            <li><a href="/email">Email view</a></li>
                            <li><a href="/create">Compose email</a></li>
                        </ul>
                </li>

                <li class="landing_link">
                    <a target="_blank" href="/"><i class="fa fa-star"></i> <span class="nav-label">Calendar</span> <span class="label label-warning float-right">NEW</span></a>
                </li>
                <li class="special_link">
                    <a href="/"><i class="fa fa-database"></i> <span class="nav-label">Chat</span></a>
                </li>
            </ul>

            </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom" action="search_results.html">
                    <div class="form-group">
                        <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                    </div>
                </form>
        </div>
    {{-- Header Part --}}
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Welcome to the Demonstration</span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages"></ul>
                    </li>

                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-content mailbox-content">
                        <div class="file-manager">
                            <a class="btn btn-block btn-primary compose-mail" href="/create">Compose Mail</a>
                            <div class="space-25"></div>
                            <h5>Folders</h5>
                            <ul class="folder-list m-b-md" style="padding: 0">
                                <li><a href="/email"> <i class="fa fa-inbox "></i> Inbox <span class="label label-warning float-right">16</span> </a></li>
                                <li><a href="/sent"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
                                <li><a href="/"> <i class="fa fa-certificate"></i> Important</a></li>
                                <li><a href="/"> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-danger float-right">2</span></a></li>
                                <li><a href="/"> <i class="fa fa-trash-o"></i> Trash</a></li>
                            </ul>
                            <h5>Categories</h5>
                            <ul class="category-list" style="padding: 0">
                                <li><a href="#"> <i class="fa fa-circle text-navy"></i> Complete</a></li>
                                <li><a href="#"> <i class="fa fa-circle text-danger"></i> Urgent</a></li>
                                <li><a href="#"> <i class="fa fa-circle text-primary"></i> Process</a></li>
                                <li><a href="#"> <i class="fa fa-circle text-info"></i> Read</a></li>
                                <li><a href="#"> <i class="fa fa-circle text-warning"></i> Unread</a></li>
                            </ul>

                            <h5 class="tag-title">Labels</h5>
                            <ul class="tag-list" style="padding: 0">
                                <li><a href=""><i class="fa fa-tag"></i> Family</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Work</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Home</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Children</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Holidays</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Music</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Photography</a></li>
                                <li><a href=""><i class="fa fa-tag"></i> Film</a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                </div>

    @yield('content')

        </div>
    </div>
<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a>Designed by Zhi Cheng</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
    <!-- Mainly scripts -->
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/js/inspinia.js"></script>
    <script src="/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
    @yield('script')
</body>

</html>
