<!--

    START @SIDEBAR LEFT
    |=========================================================================================================================|
    |  TABLE OF CONTENTS (Apply to sidebar left class)                                                                        |
    |=========================================================================================================================|
    |  01. sidebar-box               |  Variant style sidebar left with box icon                                              |
    |  02. sidebar-rounded           |  Variant style sidebar left with rounded icon                                          |
    |  03. sidebar-circle            |  Variant style sidebar left with circle icon                                           |
    |=========================================================================================================================|

    -->
<aside id="sidebar-left" class="sidebar-circle">

    <!-- Start left navigation - profile shortcut -->
    <div id="tour-8" class="sidebar-content">
        <div class="media">
            <a class="pull-left has-notif avatar" href="page-profile.html">
                <img src="{{ "https://www.gravatar.com/avatar/" . md5( strtolower( trim( Auth::guard()->user()->email ) ) ) . "?s=32" }}" alt="admin">
                <i class="online"></i>
            </a>
            <div class="media-body">
                <h4 class="media-heading">Hello, <span>{{ Auth::guard()->user()->name }}</span></h4>
                <small>Administrator</small>
            </div>
        </div>
    </div><!-- /.sidebar-content -->
    <!--/ End left navigation -  profile shortcut -->

    <!-- Start left navigation - menu -->
    <ul id="tour-9" class="sidebar-menu">

        <!-- Start navigation - dashboard -->
        {{--<li class="submenu active">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-home"></i></span>
                <span class="text">Dashboard</span>
                <span class="arrow"></span>
                <span class="selected"></span>
            </a>
            <ul>
                <li class="active"><a href="dashboard.html">Basic</a></li>
                <li><a href="dashboard-ecommerce.html">E-Commerce</a></li>
                <li><a href="dashboard-hr.html">Human resources</a></li>
                <li><a href="dashboard-investor.html">Investor</a></li>
                <li><a href="dashboard-marketing-campaign.html">Marketing campaign</a></li>
                <li><a href="dashboard-projects.html">Projects</a></li>
                <li><a href="dashboard-real-estate.html">Real estate</a></li>
                <li><a href="dashboard-retail-analysis.html">Retail analysis</a></li>
            </ul>
        </li>--}}
        <!--/ End navigation - dashboard -->

        <!-- Start navigation - frontend themes -->
        {{--<li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-leaf"></i></span>
                <span class="text">Frontend themes</span>
                <span class="arrow"></span>
            </a>
            <ul>
                <li class="submenu">
                    <a href="javascript:void(0);">One page <span class="arrow"></span></a>
                    <ul>
                        <li><a href="frontend-themes.html">Original</a></li>
                        <li><a href="frontend-themes-3.html">Revolution slider</a></li>
                    </ul>
                </li>
                <li><a href="frontend-themes-2.html">Multi page</a></li>
            </ul>
        </li>--}}
        <!--/ End navigation - frontend themes -->

        <!-- Start navigation - blankon versions -->
        {{--<li>
            <a href="blankon-versions.html">
                <span class="icon"><i class="fa fa-dropbox"></i></span>
                <span class="text">Blankon Versions</span>
            </a>
        </li>--}}
        <!--/ End navigation - blankon versions -->

        <!-- Start category apps -->
        {{--<li class="sidebar-category">
            <span>APPS</span>
            <span class="pull-right"><i class="fa fa-trophy"></i></span>
        </li>--}}
        <!--/ End category apps -->

        <!-- Start navigation - blog -->
        {{--<li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-globe"></i></span>
                <span class="text">Blog</span>
                <span class="arrow"></span>
            </a>
            <ul>
                <li class="submenu">
                    <a href="javascript:void(0);">Grid <span class="label label-danger pull-right">NEW</span></a>
                    <ul>
                        <li><a href="blog-grid.html">Type 1</a></li>
                        <li><a href="blog-grid-type-2.html">Type 2</a></li>
                    </ul>
                </li>
                <li><a href="blog-list.html">List</a></li>
                <li><a href="blog-single.html">Single</a></li>
            </ul>
        </li>--}}
        <!--/ End navigation - blog -->

        <!-- Start navigation - mail -->
        {{--<li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-envelope"></i></span>
                <span class="text">Mail</span>
                <span class="arrow"></span>
            </a>
            <ul>
                <li><a href="mail-inbox.html">Inbox</a></li>
                <li><a href="mail-compose.html">Compose mail</a></li>
                <li><a href="mail-view.html">View mail</a></li>
                <li class="submenu">
                    <a href="javascript:void(0);">Template mail <span class="arrow"></span></a>
                    <ul>
                        <li><a href="mail-template-billing.html" target="_blank">Billing</a></li>
                        <li><a href="mail-template-newsletter.html" target="_blank">Newsletter</a></li>
                        <li><a href="mail-template-promo.html" target="_blank">Promotion</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);">Responsive Layout <span class="arrow"></span></a>
                    <ul>
                        <li><a href="mail-layout-responsive-basic.html" target="_blank">Basic</a></li>
                        <li><a href="mail-layout-responsive-basic-2col.html" target="_blank">Basic 2 col</a></li>
                        <li><a href="mail-layout-responsive-bodyimage.html" target="_blank">Body image</a></li>
                        <li><a href="mail-layout-responsive-bodyimage-2col.html" target="_blank">Body image 2 col</a></li>
                        <li><a href="mail-layout-responsive-boxed-2col.html" target="_blank">Boxed 2 col</a></li>
                        <li><a href="mail-layout-responsive-boxed-3col.html" target="_blank">Boxed 3 col</a></li>
                    </ul>
                </li>
            </ul>
        </li>--}}
        <!--/ End navigation - mail -->

        <!-- Start navigation - project -->
        {{--<li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-rocket"></i></span>
                <span class="text">Project</span>
                <span class="arrow"></span>
            </a>
            <ul>
                <li class="submenu">
                    <a href="javascript:void(0);">Portfolio <span class="arrow"></span></a>
                    <ul>
                        <li><a href="project-portfolio.html">Type 1</a></li>
                        <li><a href="project-portfolio-type-2.html">Type 2</a></li>
                        <li><a href="project-portfolio-type-3.html">Type 3</a></li>
                        <li><a href="project-portfolio-type-4.html">Type 4</a></li>
                    </ul>
                </li>
                <li><a href="project-team.html">Team</a></li>
                <li><a href="project-team-board.html">Team Board</a></li>
                <li><a href="project-team-profile.html">Team Profile</a></li>
                <li><a href="project-issue-tracker.html">Issue Tracker</a></li>
                <li><a href="project-clients.html">Clients</a></li>
            </ul>
        </li>--}}
        <!--/ End navigation - project -->

        <!-- Start navigation - pages -->
        {{--<li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-file-o"></i></span>
                <span class="text">Pages</span>
                <span class="arrow"></span>
            </a>
            <ul>
                <li class="submenu">
                    <a href="javascript:void(0);">Gallery <span class="arrow"></span></a>
                    <ul>
                        <li><a href="page-gallery.html">Type 1</a></li>
                        <li><a href="page-gallery-type-2.html">Type 2</a></li>
                        <li><a href="page-gallery-type-3.html">Type 3</a></li>
                        <li><a href="page-gallery-type-4.html">Type 4</a></li>
                    </ul>
                </li>
                <li><a href="page-calendar.html">Calendar</a></li>
                <li><a href="page-faq.html">FAQ <span class="label label-danger pull-right">New</span></a></li>
                <li><a href="page-invoice.html">Invoice</a></li>
                <li><a href="page-messages.html">Messages</a></li>
                <li class="submenu">
                    <a href="javascript:void(0);">Timeline <span class="arrow"></span></a>
                    <ul>
                        <li><a href="page-timeline.html">Type 1</a></li>
                        <li><a href="page-timeline-type-2.html">Type 2</a></li>
                    </ul>
                </li>
                <li><a href="page-profile.html">Profile</a></li>
                <li class="submenu">
                    <a href="javascript:void(0);">Search<span class="arrow"></span></a>
                    <ul>
                        <li><a href="page-search-basic.html">Basic</a></li>
                        <li><a href="page-search-course.html">Courses</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);">Error <span class="arrow"></span></a>
                    <ul>
                        <li><a href="page-error-403.html">Error 403</a></li>
                        <li><a href="page-error-403-type-2.html">Error 403 Type 2</a></li>
                        <li><a href="page-error-404.html">Error 404</a></li>
                        <li><a href="page-error-404-type-2.html">Error 404 Type 2</a></li>
                        <li><a href="page-error-500.html">Error 500</a></li>
                        <li><a href="page-error-500-type-2.html">Error 500 Type 2</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);">Account <span class="arrow"></span></a>
                    <ul>
                        <li><a href="page-signin.html">Sign In</a></li>
                        <li><a href="page-signin-type-2.html">Sign In Type 2</a></li>
                        <li><a href="page-signup.html">Sign Up</a></li>
                        <li><a href="page-lost-password.html">Lost password</a></li>
                        <li><a href="page-lock-screen.html">Lock Screen</a></li>
                    </ul>
                </li>
            </ul>
        </li>--}}
        <!--/ End navigation - pages -->

        <!-- Start category ui kit-->
        {{--<li class="sidebar-category">
            <span>UI KIT</span>
            <span class="pull-right"><i class="fa fa-magic"></i></span>
        </li>--}}
        <!--/ End category ui kit-->

        <!-- Start navigation - forms -->
        {{--<li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-list-alt"></i></span>
                <span class="text">Forms</span>
                <span class="arrow"></span>
            </a>
            <ul>
                <li><a href="form-element.html">Element</a></li>
                <li><a href="form-advanced.html">Advanced</a></li>
                <li><a href="form-layout.html">Layout</a></li>
                <li><a href="form-validation.html">Validation</a></li>
                <li><a href="form-wizard.html">Wizard</a></li>
                <li><a href="form-wysiwyg.html">Text Editor</a></li>
                <li><a href="form-xeditable.html">X-Editable</a></li>
                <li><a href="form-picker.html">Picker</a></li>
            </ul>
        </li>--}}
        <!--/ End navigation - forms -->

        <!-- Start navigation - tables -->
        {{--<li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-table"></i></span>
                <span class="text">Tables</span>
                <span class="arrow"></span>
            </a>
            <ul>
                <li><a href="table-default.html">Default</a></li>
                <li><a href="table-color.html">Color</a></li>
                <li><a href="table-advanced.html">Advanced</a></li>
                <li><a href="table-datatable.html">Datatable</a></li>
                <li><a href="table-samples.html">Samples <span class="label label-danger pull-right">NEW</span></a></li>
            </ul>
        </li>--}}
        <!--/ End navigation - tables -->

        <!-- Start navigation - maps -->
        {{--<li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-map-marker"></i></span>
                <span class="text">Maps</span>
                <span class="arrow"></span>
            </a>
            <ul>
                <li><a href="maps-google.html">Google</a></li>
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <span class="text">Vector</span>
                        <span class="arrow"></span>
                    </a>
                    <ul>
                        <li><a href="maps-vector.html">Jqvmap</a></li>
                        <li><a href="maps-vector-2.html">Jvectormap <span class="label label-danger pull-right">NEW</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>--}}
        <!--/ End navigation - maps -->

        <!-- Start navigation - charts -->
        {{--<li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-signal"></i></span>
                <span class="text">Charts</span>
                <span class="arrow"></span>
            </a>
            <ul>
                <li><a href="chart-flot.html">Flot</a></li>
                <li><a href="chart-morris.html">Morris</a></li>
                <li><a href="chart-chartjs.html">Chartjs</a></li>
                <li><a href="chart-c3js.html">C3js</a></li>
                <li><a href="chart-peity.html">Peity</a></li>
                <li><a href="chart-easy-pie-chart.html">Easy Pie Chart</a></li>
                <li><a href="chart-chartist.html">Chartist</a></li>
            </ul>
        </li>--}}
        <!--/ End navigation - charts -->

        <!-- Start category development -->
        {{--<li class="sidebar-category">
            <span>DEVELOP</span>
            <span class="pull-right"><i class="fa fa-code"></i></span>
        </li>--}}
        <!--/ End category development -->

        <!-- Start development - ui features -->
       {{-- <li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-cubes"></i></span>
                <span class="text">UI Features</span>
                <span class="plus"></span>
            </a>
            <ul>
                <li><a href="ui-feature-bootstrap-tour.html">Bootstrap Tour</a></li>
                <li><a href="ui-feature-notifications.html">Notifications</a></li>
                <li><a href="ui-feature-grid-stack.html">Grid Stack</a></li>
            </ul>
        </li>--}}
        <!--/ End development - ui features -->

        <!-- Start development - components -->
        {{--<li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-cube"></i></span>
                <span class="text">Components</span>
                <span class="plus"></span>
            </a>
            <ul>
                <li><a href="component-grid-system.html">Grid System</a></li>
                <li><a href="component-buttons.html">Buttons</a></li>
                <li><a href="component-typography.html">Typography</a></li>
                <li><a href="component-panel.html">Panels</a></li>
                <li><a href="component-alerts.html">Alerts</a></li>
                <li><a href="component-modals.html">Modals</a></li>
                <li><a href="component-video.html">Video <span class="label label-danger pull-right">New</span></a></li>
                <li><a href="component-tabsaccordion.html">Tabs & Accordion</a></li>
                <li><a href="component-sliders.html">Sliders</a></li>
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <span class="text">List Group</span>
                        <span class="arrow"></span>
                    </a>
                    <ul>
                        <li><a href="component-list-group.html">Basic</a></li>
                        <li><a href="component-list-group-samples.html">Samples</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <span class="text">Icons</span>
                        <span class="count label label-danger">6</span>
                        <span class="arrow"></span>
                    </a>
                    <ul>
                        <li><a href="component-glyphicons.html">Glyphicons</a></li>
                        <li><a href="component-glyphicons-pro.html">Glyphicons PRO</a></li>
                        <li><a href="component-font-awesome.html">Font Awesome</a></li>
                        <li><a href="component-weather-icons.html">Weather Icons</a></li>
                        <li><a href="component-map-icons.html">Map Icons</a></li>
                        <li><a href="component-simple-line-icons.html">Simple Line Icons</a></li>
                        <li><a href="component-flag-icon-css.html">Flag Icon CSS <span class="label label-danger pull-right">NEW</span></a></li>
                    </ul>
                </li>
                <li><a href="component-other.html">Other</a></li>
            </ul>
        </li>--}}
        <!--/ End development - components -->

        <!-- Start development - layouts -->
        {{--<li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-columns"></i></span>
                <span class="text">Layouts</span>
                <span class="plus"></span>
            </a>
            <ul>
                <li><a href="layout-blank.html">Blank Page</a></li>
                <li><a href="layout-boxed.html">Boxed Page</a></li>
                <li><a href="layout-header-fixed.html">Header Fixed Page</a></li>
                <li><a href="layout-sidebar-fixed.html">Sidebar Fixed Page</a></li>
                <li><a href="layout-sidebar-minimize.html">Sidebar Minimize Page</a></li>
                <li><a href="layout-sidebar-default.html">Sidebar Default Page</a></li>
                <li><a href="layout-sidebar-box.html">Sidebar Box Page</a></li>
                <li><a href="layout-sidebar-rounded.html">Sidebar Rounded Page</a></li>
                <li><a href="layout-sidebar-circle.html">Sidebar Circle Page</a></li>
                <li><a href="layout-footer-fixed.html">Footer Fixed Page</a></li>
            </ul>
        </li>--}}
        <!--/ End development - layouts -->

        <!-- Start development - sub menu -->
        {{--<li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-align-left"></i></span>
                <span class="text">Sub Menu</span>
                <span class="plus"></span>
            </a>
            <ul>
                <!-- Start level 1 -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <span class="text">Level 1</span>
                        <span class="arrow"></span>
                    </a>
                    <ul>
                        <!-- Start level 2 -->
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <span class="text">Level 2</span>
                                <span class="fa fa-angle-double-right pull-right arrow"></span>
                            </a>
                            <ul>
                                <!-- Start level 3 -->
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <span class="text">Level 3</span>
                                        <span class="fa fa-angle-double-right pull-right arrow"></span>
                                    </a>
                                    <ul>
                                        <!-- Start level 4 -->
                                        <li class="submenu">
                                            <a href="javascript:void(0);">
                                                <span class="text">Level 4</span>
                                                <span class="fa fa-angle-double-right pull-right arrow"></span>
                                            </a>
                                            <ul>
                                                <!-- Start level 5 -->
                                                <li>
                                                    <a href="javascript:void(0);">Level 5</a>
                                                </li>
                                                <!--/ End level 5 -->
                                                <li>
                                                    <a href="javascript:void(0);">Level 5</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Level 5</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End level 4 -->
                                        <li>
                                            <a href="javascript:void(0);">Level 4</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Level 4</a>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ End level 3 -->
                                <li>
                                    <a href="javascript:void(0);">Level 3</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Level 3</a>
                                </li>
                            </ul>
                        </li>
                        <!--/ End level 2 -->
                        <li>
                            <a href="javascript:void(0);">Level 2</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Level 2</a>
                        </li>
                    </ul>
                </li>
                <!--/ End level 1 -->
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Level 1</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Level 1</span>
                    </a>
                </li>
            </ul>
        </li>--}}
        <!--/ End development - sub menu -->

        <!-- Start development - animate.css -->
        {{--<li>
            <a href="animate.html">
                <span class="icon"><i class="fa fa-forumbee"></i></span>
                <span class="text">Animate.css</span>
                <span class="label label-danger pull-right">New</span>
            </a>
        </li>--}}
        <!--/ End development - animate.css -->

        <!-- Start category widget -->
        <li class="sidebar-category">
            <span>CATALOG</span>
            <span class="pull-right"><i class="fa fa-cubes"></i></span>
        </li>
        <!--/ End category widget -->

        <!-- Start widget - overview -->
        <li>
            <a href="widget-overview.html">
                <span class="icon"><i class="fa fa-desktop"></i></span>
                <span class="text">List Catalog</span>
                <span class="label label-primary pull-right rounded">10</span>
            </a>
        </li>
        <!--/ End widget - overview -->

        <!-- Start widget - social -->
        <li>
            <a href="widget-social.html">
                <span class="icon"><i class="fa fa-group"></i></span>
                <span class="text">Social</span>
                <span class="label label-success pull-right rounded">28</span>
            </a>
        </li>
        <!--/ End widget - social -->

        <!-- Start widget - blog -->
        <li>
            <a href="widget-blog.html">
                <span class="icon"><i class="fa fa-pencil"></i></span>
                <span class="text">Blog</span>
                <span class="label label-info pull-right rounded">15</span>
            </a>
        </li>
        <!--/ End widget - blog -->

        <!-- Start widget - weather -->
        <li>
            <a href="widget-weather.html">
                <span class="icon"><i class="fa fa-sun-o"></i></span>
                <span class="text">Weather</span>
                <span class="label label-warning pull-right rounded">6</span>
            </a>
        </li>
        <!--/ End widget - weather -->

        <!-- Start widget - misc -->
        <li>
            <a href="widget-misc.html">
                <span class="icon"><i class="fa fa-puzzle-piece"></i></span>
                <span class="text">Misc</span>
                <span class="label label-danger pull-right rounded">9</span>
            </a>
        </li>
        <!--/ End widget - misc -->

        <!-- Start category documentation -->
        {{--<li class="sidebar-category">
            <span><span class="hidden-sidebar-minimize">BLANKON</span> CORE</span>
            <span class="pull-right"><i class="fa fa-coffee"></i></span>
        </li>--}}
        <!--/ End category documentation -->

        <!-- Start documentation - api documentation -->
        {{--<li>
            <a href="../../../documentation/admin/html/full-documentation.html" target="_blank">
                <span class="icon"><i class="fa fa-book"></i></span>
                <span class="text">API Documentation</span>
            </a>
        </li>--}}
        <!--/ End documentation - api documentation -->

    </ul><!-- /.sidebar-menu -->
    <!--/ End left navigation - menu -->

    <!-- Start left navigation - footer -->
    <div id="tour-10" class="sidebar-footer hidden-xs hidden-sm hidden-md">
        <a id="setting" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Setting"><i class="fa fa-cog"></i></a>
        <a id="fullscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Fullscreen"><i class="fa fa-desktop"></i></a>
        <a id="lock-screen" data-url="page-signin.html" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Lock Screen"><i class="fa fa-lock"></i></a>
        <a id="logout" data-url="page-lock-screen.html" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Logout"><i class="fa fa-power-off"></i></a>
    </div><!-- /.sidebar-footer -->
    <!--/ End left navigation - footer -->

</aside><!-- /#sidebar-left -->
<!--/ END SIDEBAR LEFT -->
