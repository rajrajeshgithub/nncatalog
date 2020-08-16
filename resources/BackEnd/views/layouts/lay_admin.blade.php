<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- START @HEAD -->
<head>
    <!-- START @META SECTION -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.">
    <meta name="keywords" content="admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp">
    <meta name="author" content="Djava UI">
    <title>DASHBOARD | BLANKON - Fullpack Admin Theme</title>
    <!--/ END META SECTION -->

    <!-- START @FAVICONS -->
    <link href="http://themes.djavaui.com/blankon-fullpack-admin-theme/img/ico/html/apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="http://themes.djavaui.com/blankon-fullpack-admin-theme/img/ico/html/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="http://themes.djavaui.com/blankon-fullpack-admin-theme/img/ico/html/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="http://themes.djavaui.com/blankon-fullpack-admin-theme/img/ico/html/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="http://themes.djavaui.com/blankon-fullpack-admin-theme/img/ico/html/apple-touch-icon.png" rel="shortcut icon">
    <!--/ END FAVICONS -->

    <!-- START @FONT STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Oswald:700,400" rel="stylesheet">
    <!--/ END FONT STYLES -->

    <!-- START @GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--/ END GLOBAL MANDATORY STYLES -->

    <!-- START @PAGE LEVEL STYLES -->
    <link href="{{ asset('global/plugins/bower_components/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('global/plugins/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('global/plugins/bower_components/dropzone/downloads/css/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('global/plugins/bower_components/jquery.gritter/css/jquery.gritter.css') }}" rel="stylesheet">
    <link href="{{ asset('global/plugins/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css') }}" rel="stylesheet">
    <!--/ END PAGE LEVEL STYLES -->

    <!-- START @THEME STYLES -->
    <link href="{{ asset('css/BackEnd/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/BackEnd/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/BackEnd/components.css') }}" rel="stylesheet">
    <link href="{{ asset('css/BackEnd/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/BackEnd/themes/blue-gray.theme.css') }}" rel="stylesheet" id="theme">
    <link href="{{ asset('css/BackEnd/custom.css') }}" rel="stylesheet">
    <!--/ END THEME STYLES -->

    <!-- START @IE SUPPORT -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset('global/plugins/bower_components/html5shiv/dist/html5shiv.min.js') }}"></script>
    <script src="{{ asset('global/plugins/bower_components/respond-minmax/dest/respond.min.js') }}"></script>
    <![endif]-->
    <!--/ END IE SUPPORT -->
</head>
<!--/ END HEAD -->

<!--

|=========================================================================================================================|
|  TABLE OF CONTENTS (Use search to find needed section)                                                                  |
|=========================================================================================================================|
|  01. @HEAD                        |  Container for all the head elements                                                |
|  02. @META SECTION                |  The meta tag provides metadata about the HTML document                             |
|  03. @FAVICONS                    |  Short for favorite icon, shortcut icon, website icon, tab icon or bookmark icon    |
|  04. @FONT STYLES                 |  Font from google fonts                                                             |
|  05. @GLOBAL MANDATORY STYLES     |  The main 3rd party plugins css file                                                |
|  06. @PAGE LEVEL STYLES           |  Specific 3rd party plugins css file                                                |
|  07. @THEME STYLES                |  The main theme css file                                                            |
|  08. @IE SUPPORT                  |  IE support of HTML5 elements and media queries                                     |
|=========================================================================================================================|
|  09. @BODY                        |  Contains all the contents of an HTML document                                      |
|  10. @WRAPPER                     |  Wrapping page section                                                              |
|  11. @HEADER                      |  Header page section contains about logo, top navigation, notification menu         |
|  12. @SIDEBAR LEFT                |  Sidebar page section contains all sidebar menu left                                |
|  13. @PAGE CONTENT                |  Contents page section contains breadcrumb, content page, footer page               |
|  14. @SIDEBAR RIGHT               |  Sidebar page section contains all sidebar menu right                               |
|  15. @BACK TOP                    |  Element back to top and action                                                     |
|=========================================================================================================================|
|  16. @CORE PLUGINS                |  The main 3rd party plugins script file                                             |
|  17. @PAGE LEVEL PLUGINS          |  Specific 3rd party plugins script file                                             |
|  18. @PAGE LEVEL SCRIPTS          |  The main theme script file                                                         |
|=========================================================================================================================|

START @BODY
|=========================================================================================================================|
|  TABLE OF CONTENTS (Apply to body class)                                                                                |
|=========================================================================================================================|
|  01. page-boxed                   |  Page into the box is not full width screen                                         |
|  02. page-header-fixed            |  Header element become fixed position                                               |
|  03. page-sidebar-fixed           |  Sidebar element become fixed position with scroll support                          |
|  04. page-sidebar-minimize        |  Sidebar element become minimize style width sidebar                                |
|  05. page-footer-fixed            |  Footer element become fixed position with scroll support on page content           |
|  06. page-sound                   |  For playing sounds on user actions and page events                                 |
|=========================================================================================================================|

-->
<body class="page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session">

<!--[if lt IE 9]>
<p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- START @WRAPPER -->
<section id="wrapper">

    @include('layouts._header')
    @include('layouts._sidebar_left')

    @yield('content')

    {{--@include('layouts._sidebar_right')--}}

</section><!-- /#wrapper -->
<!--/ END WRAPPER -->

<!-- START @BACK TOP -->
<div id="back-top" class="animated pulse circle">
    <i class="fa fa-angle-up"></i>
</div><!-- /#back-top -->
<!--/ END BACK TOP -->

<!-- START @ADDITIONAL ELEMENT -->
<div class="modal modal-success fade" id="modal-bootstrap-tour" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="margin: 150px auto;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Welcome to Blankon</h4>
            </div>
            <div class="modal-body">
                <div class="media">
                    <div class="media-left" style="padding-right: 15px;">
                        <a href="#">
                            <img data-no-retina class="media-object" src="http://img.djavaui.com/?create=100x180,81B71A?f=ffffff" alt="..." style="width: 100px;">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Hello, my name is Mr.Blankon</h4>
                        <b>Introduction</b> - Blankon fullpack admin theme is a theme full pack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="BlankonDashboard.callModal2()" data-dismiss="modal">Let's tour <i class="fa fa-arrow-circle-right"></i></button>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-success fade" id="modal-bootstrap-tour-new-features" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" style="margin: 150px auto;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New Features</h4>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                        <tr>
                            <th>Page</th>
                            <th>Description</th>
                            <th style="width: 90px" class="text-center">Live preview</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="min-width: 150px">
                                Material Design version
                            </td>
                            <td>
                                It is a design language developed by Google. Material Design makes more liberal use of grid-based layouts, responsive animations and depth effects such as lighting and shadows.
                            </td>
                            <td class="text-center">
                                <a href="../../../production/admin/material-design/dashboard.html" target="_blank" class="btn btn-block btn-primary">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="min-width: 150px">
                                Photography type 2
                            </td>
                            <td>
                                This design suitable for your portfolio photography, so simple and the best UI/UX photography website.
                            </td>
                            <td class="text-center">
                                <a href="../../../production/frontend/one-page-revolution-slider/photography-type-2/html/index.html" target="_blank" class="btn btn-block btn-primary">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="min-width: 150px">
                                UI features notifications page
                            </td>
                            <td>
                                It makes it easy to create alert - success - error - warning - information - confirmation messages as an alternative the standard alert dialog
                            </td>
                            <td class="text-center">
                                <a href="../../../production/admin/html/ui-feature-notifications.html" target="_blank" class="btn btn-block btn-primary">View</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="BlankonDashboard.handleTour()" data-dismiss="modal">Next</button>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-danger fade" id="modal-bootstrap-tour-end" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="margin: 150px auto;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">End Blankon Tour</h4>
            </div>
            <div class="modal-body">
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img data-no-retina class="media-object" src="http://img.djavaui.com/?create=100x180,81B71A?f=ffffff" alt="..." style="width: 100px;">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Thanks for watching!</h4>
                        <p>Thank you for view our blankon tour. If you already purchased Blankon and then you have any questions that are beyond the scope of this help file. You can visit us on below :</p>
                        <ul class="list-inline">
                            <li>
                                <a href="https://wrapbootstrap.com/user/djavaui" class="btn btn-inverse tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Wrapbootstrap">W</a>
                            </li>
                            <li>
                                <a href="http://djavaui.com" class="btn btn-lilac tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Our Website"><i class="fa fa-globe"></i></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/djavaui/" class="btn btn-facebook tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/djavaui" class="btn btn-twitter tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/102744122511959250698" class="btn btn-googleplus tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Google+"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="https://github.com/djavaui" class="btn btn-default tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Github"><i class="fa fa-github"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCt_dudJF4_0bOkQkwYN2qQQ" class="btn btn-youtube tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Youtube"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                        <b>Thanks so much!</b>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="BlankonDashboard.handleTour()" data-dismiss="modal">Let's tour again <i class="fa fa-arrow-circle-right"></i></button>
            </div>
        </div>
    </div>
</div>
<!--/ END ADDITIONAL ELEMENT -->

<!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
<!-- START @CORE PLUGINS -->
<script src="{{ asset('global/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/jquery-cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/typehead.js/dist/handlebars.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/typehead.js/dist/typeahead.bundle.min.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/jquery-nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/jquery.sparkline.min/index.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/ionsound/js/ion.sound.min.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/bootbox/bootbox.js') }}"></script>
<!--/ END CORE PLUGINS -->

<!-- START @PAGE LEVEL PLUGINS -->
<script src="{{ asset('global/plugins/bower_components/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/flot/jquery.flot.spline.min.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/flot/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/jquery.gritter/js/jquery.gritter.min.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/skycons-html5/skycons.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/counter-up/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('global/plugins/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js') }}"></script>
<!--/ END PAGE LEVEL PLUGINS -->

<!-- START @PAGE LEVEL SCRIPTS -->
<script src="{{ asset('js/BackEnd/apps.js') }}"></script>
<script src="{{ asset('js/BackEnd/pages/blankon.dashboard.js') }}"></script>
<script src="{{ asset('js/BackEnd/demo.js') }}"></script>
<!--/ END PAGE LEVEL SCRIPTS -->
<!--/ END JAVASCRIPT SECTION -->

<!-- START GOOGLE ANALYTICS -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-55892530-1', 'auto');
    ga('send', 'pageview');

</script>
<!--/ END GOOGLE ANALYTICS -->

</body>
<!--/ END BODY -->

</html>
