<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>SC-PMS</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @yield('style')
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	 <link href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	
	 <link href="{{ asset('assets/fonts/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">

	    <!--<link rel="stylesheet" type="text/css" href="assets/fonts/open-sans/styles.css">-->
	
     <link href="{{ asset('assets/fonts/montserrat/styles.css') }}" rel="stylesheet">
	 <link href="{{ asset('assets/libs/tether/css/tether.min.css') }}" rel="stylesheet">
	 <link href="{{ asset('assets/libs/jscrollpane/jquery.jscrollpane.css') }}" rel="stylesheet">
	 <link href="{{ asset('assets/libs/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
	 <link href="{{ asset('assets/styles/common.css') }}" rel="stylesheet">


    <!-- BEGIN THEME STYLES -->
	 <link href="{{ asset('assets/styles/themes/primary.min.css') }}" rel="stylesheet">
	 <link href="{{ asset('assets/styles/themes/sidebar-black.min.css') }}" rel="stylesheet">
     <link class="ks-sidebar-dark-style" rel="stylesheet" type="text/css" href="{{ asset('assets/styles/themes/sidebar-black.min.css') }}">

    <!-- END THEME STYLES -->

	 <link href="{{ asset('assets/styles/widgets/panels.min.css') }}" rel="stylesheet">
	 <link href="{{ asset('assets/scripts/charts/radial-progress/radial-progress.chart.min.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/styles/dashboard/projects.min.css') }}" rel="stylesheet">
     
     
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/kosmo/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/weather/css/weather-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/c3js/c3.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/noty/noty.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/widgets/payment.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/widgets/panels.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/dashboard/tabbed-sidebar.min.css') }}">


</head>
<body class="ks-navbar-fixed ks-sidebar-default ks-sidebar-position-fixed ks-page-header-fixed ks-theme-primary  "> <!--ks-page-loading// remove ks-page-header-fixed to unfix header -->

    <!-- BEGIN HEADER -->
<nav class="navbar ks-navbar">
    <!-- BEGIN HEADER INNER -->
    <!-- BEGIN LOGO -->
    <div href="index.html" class="navbar-brand">
        <!-- BEGIN RESPONSIVE SIDEBAR TOGGLER -->
        <a href="#" class="ks-sidebar-toggle"><i class="ks-icon la la-bars" aria-hidden="true"></i></a>
        <a href="#" class="ks-sidebar-mobile-toggle"><i class="ks-icon la la-bars" aria-hidden="true"></i></a>
        <!-- END RESPONSIVE SIDEBAR TOGGLER -->

        <div class="ks-navbar-logo">
            <a href="index.html" class="ks-logo">SC-PMS</a>


            <span class="nav-item dropdown ks-dropdown-grid-images">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"></a>
                <div class="dropdown-menu ks-info ks-scrollable" aria-labelledby="Preview" data-height="260">
                    <div class="ks-scroll-wrapper">
                        <a href="#" class="ks-grid-item">
                            <img class="ks-icon" src="assets/img/menu-grid/dashboard.png">
                            <span class="ks-text">Dashboard</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <img class="ks-icon" src="assets/img/menu-grid/flask.png">
                            <span class="ks-text">Projects</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <img class="ks-icon" src="assets/img/menu-grid/calendar.png">
                            <span class="ks-text">Calendar</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <img class="ks-icon" src="assets/img/menu-grid/profile.png">
                            <span class="ks-text">Profile</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <img class="ks-icon" src="assets/img/menu-grid/ticket.png">
                            <span class="ks-text">Tickets</span>
                        </a>
                        <a href="#" class="ks-grid-item">
                            <img class="ks-icon" src="assets/img/menu-grid/settings.png">
                            <span class="ks-text">Settings</span>
                        </a>
                    </div>
                </div>
            </span>

            <!-- END GRID NAVIGATION -->
        </div>
    </div>
    <!-- END LOGO -->

    <!-- BEGIN MENUS -->
    <div class="ks-wrapper">
        <nav class="nav navbar-nav">
            <!-- BEGIN NAVBAR MENU -->
            <div class="ks-navbar-menu">
                <form class="ks-search-form">
                    <a class="ks-search-open" href="#">
                        <span class="la la-search"></span>
                    </a>
                    <div class="ks-wrapper">
                        <div class="input-icon icon-right icon icon-lg icon-color-primary">
                            <input id="input-group-icon-text" type="text" class="form-control" placeholder="Search...">
                            <span class="icon-addon">
                                <span class="la la-search ks-icon"></span>
                            </span>
                        </div>
                        <a class="ks-search-close" href="#">
                            <span class="la la-close"></span>
                        </a>
                    </div>
                </form>
                <a class="nav-item nav-link" href="#">Dashboard</a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu ks-info" aria-labelledby="Preview">
                        <a class="dropdown-item ks-active" href="#">Dropdown Link 1</a>
                        <a class="dropdown-item" href="#">Dropdown Link 2</a>
                        <a class="dropdown-item" href="#">Dropdown Link 3</a>
                        <div class="dropdown-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="Preview">
                                <a class="dropdown-item" href="#">Dropdown Link 1</a>
                                <a class="dropdown-item" href="#">Dropdown Link 2</a>
                                <a class="dropdown-item" href="#">Dropdown Link 3</a>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- END NAVBAR MENU -->

            <!-- BEGIN NAVBAR ACTIONS -->
            <div class="ks-navbar-actions">
                <!-- BEGIN NAVBAR ACTION BUTTON -->
                <div class="nav-item nav-link btn-action-block">
                    <a class="btn btn-danger" href="#">
                        <span class="ks-action">Activate Your Account</span>
                        <span class="ks-description">trial ends in 1 day</span>
                    </a>
                </div>
                <!-- END NAVBAR ACTION BUTTON -->

                <!-- BEGIN NAVBAR LANGUAGES -->
                <div class="nav-item dropdown ks-languages">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        EN <span class="ks-text">Languages</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right ks-scrollable" aria-labelledby="Preview">
                        <div class="ks-wrapper">
                            <a href="#" class="ks-language ks-selected">
                                <span class="flag-icon flag-icon-us ks-icon"></span>
                                <span class="ks-text">English</span>
                            </a>
                            <a href="#" class="ks-language">
                                <span class="flag-icon flag-icon-pl ks-icon"></span>
                                <span class="ks-text">Polski</span>
                            </a>
                            <a href="#" class="ks-language">
                                <span class="flag-icon flag-icon-de ks-icon"></span>
                                <span class="ks-text">Deutsch</span>
                            </a>
                            <a href="#" class="ks-language">
                                <span class="flag-icon flag-icon-lt ks-icon"></span>
                                <span class="ks-text">Lietuvių</span>
                            </a>
                            <a href="#" class="ks-language">
                                <span class="flag-icon flag-icon-fr ks-icon"></span>
                                <span class="ks-text">Français</span>
                            </a>
                            <a href="#" class="ks-language">
                                <span class="flag-icon flag-icon-by ks-icon"></span>
                                <span class="ks-text">Беларуская</span>
                            </a>
                            <a href="#" class="ks-language">
                                <span class="flag-icon flag-icon-it ks-icon"></span>
                                <span class="ks-text">Italiano</span>
                            </a>
                       
                        </div>
                    </div>
                </div>
                <!-- END NAVBAR LANGUAGES -->

                <!-- BEGIN NAVBAR MESSAGES -->
                <div class="nav-item dropdown ks-messages">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="la la-envelope ks-icon" aria-hidden="true">
                            <span class="badge badge-pill badge-info">3</span>
                        </span>
                        <span class="ks-text">Messages</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Preview">
                        <section class="ks-tabs-actions">
                            <a href="#"><i class="la la-plus ks-icon"></i></a>
                            <a href="#"><i class="la la-search ks-icon"></i></a>
                        </section>
                        <ul class="nav nav-tabs ks-nav-tabs ks-info" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="tab" data-target="#ks-navbar-messages-inbox" role="tab">Inbox</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#ks-navbar-messages-sent" role="tab">Sent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#ks-navbar-messages-archive" role="tab">Archive</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane ks-messages-tab active" id="ks-navbar-messages-inbox" role="tabpanel">
                                <div class="ks-wrapper ks-scrollable">
                                    <a href="#" class="ks-message">
                                        <div class="ks-avatar ks-online">
                                            <img src="assets/img/avatars/avatar-1.jpg" width="36" height="36">
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">Emily Carter</div>
                                            <div class="ks-text">In golf, Danny Willett (pictured) wins the M...</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ks-message">
                                        <div class="ks-avatar ks-online">
                                            <img src="assets/img/avatars/avatar-5.jpg" width="36" height="36">
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">Emily Carter</div>
                                            <div class="ks-text">In golf, Danny Willett (pictured) wins the M...</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ks-message">
                                        <div class="ks-avatar ks-offline">
                                            <img src="assets/img/avatars/placeholders/ava-36.png" width="36" height="36">
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">Emily Carter</div>
                                            <div class="ks-text">In golf, Danny Willett (pictured) wins the M...</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ks-message">
                                        <div class="ks-avatar ks-offline">
                                            <img src="assets/img/avatars/avatar-4.jpg" width="36" height="36">
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">Emily Carter</div>
                                            <div class="ks-text">In golf, Danny Willett (pictured) wins the M...</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="ks-view-all">
                                    <a href="#">View all</a>
                                </div>
                            </div>
                            <div class="tab-pane ks-empty" id="ks-navbar-messages-sent" role="tabpanel">
                                There are no messages.
                            </div>
                            <div class="tab-pane ks-empty" id="ks-navbar-messages-archive" role="tabpanel">
                                There are no messages.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END NAVBAR MESSAGES -->

                <!-- BEGIN NAVBAR NOTIFICATIONS -->
                <div class="nav-item dropdown ks-notifications">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="la la-bell ks-icon" aria-hidden="true">
                            <span class="badge badge-pill badge-info">7</span>
                        </span>
                        <span class="ks-text">Notifications</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Preview">
                        <ul class="nav nav-tabs ks-nav-tabs ks-info" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="tab" data-target="#navbar-notifications-all" role="tab">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#navbar-notifications-activity" role="tab">Activity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#navbar-notifications-comments" role="tab">Comments</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane ks-notifications-tab active" id="navbar-notifications-all" role="tabpanel">
                                <div class="ks-wrapper ks-scrollable">
                                    <a href="#" class="ks-notification">
                                        <div class="ks-avatar">
                                            <img src="assets/img/avatars/avatar-3.jpg" width="36" height="36">
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">Emily Carter <span class="ks-description">has uploaded 1 file</span></div>
                                            <div class="ks-text"><span class="la la-file-text-o ks-icon"></span> logo vector doc</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ks-notification">
                                        <div class="ks-action">
                                            <span class="ks-default">
                                                <span class="la la-briefcase ks-icon"></span>
                                            </span>
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">New project created</div>
                                            <div class="ks-text">Dashboard UI</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ks-notification">
                                        <div class="ks-action">
                                            <span class="ks-error">
                                                <span class="la la-times-circle ks-icon"></span>
                                            </span>
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">File upload error</div>
                                            <div class="ks-text"><span class="la la-file-text-o ks-icon"></span> logo vector doc</div>
                                            <div class="ks-datetime">10 minutes ago</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="ks-view-all">
                                    <a href="#">Show more</a>
                                </div>
                            </div>
                            <div class="tab-pane ks-empty" id="navbar-notifications-activity" role="tabpanel">
                                There are no activities.
                            </div>
                            <div class="tab-pane ks-empty" id="navbar-notifications-comments" role="tabpanel">
                                There are no comments.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END NAVBAR NOTIFICATIONS -->

                <!-- BEGIN NAVBAR USER -->
                <div class="nav-item dropdown ks-user">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="ks-avatar">
                            <img src="assets/img/avatars/avatar-13.jpg" width="36" height="36">
                        </span>
                        <span class="ks-info">
                            <span class="ks-name">Robert Dean</span>
                            <span class="ks-description">Premium User</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Preview">
                        <a class="dropdown-item" href="#">
                            <span class="la la-user ks-icon"></span>
                            <span>Profile</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="la la-wrench ks-icon" aria-hidden="true"></span>
                            <span>Settings</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="la la-question-circle ks-icon" aria-hidden="true"></span>
                            <span>Help</span>
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <span class="la la-sign-out ks-icon" aria-hidden="true"></span>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                        </form>
                    </div>
                </div>
                <!-- END NAVBAR USER -->
            </div>
            <!-- END NAVBAR ACTIONS -->
        </nav>

        <!-- BEGIN NAVBAR ACTIONS TOGGLER -->
        <nav class="nav navbar-nav ks-navbar-actions-toggle">
            <a class="nav-item nav-link" href="#">
                <span class="la la-ellipsis-h ks-icon ks-open"></span>
                <span class="la la-close ks-icon ks-close"></span>
            </a>
        </nav>
        <!-- END NAVBAR ACTIONS TOGGLER -->

        <!-- BEGIN NAVBAR MENU TOGGLER -->
        <nav class="nav navbar-nav ks-navbar-menu-toggle">
            <a class="nav-item nav-link" href="#">
                <span class="la la-th ks-icon ks-open"></span>
                <span class="la la-close ks-icon ks-close"></span>
            </a>
        </nav>
        <!-- END NAVBAR MENU TOGGLER -->
    </div>
    <!-- END MENUS -->
    <!-- END HEADER INNER -->
</nav>
<!-- END HEADER -->






<div class="ks-page-container">
    
    <!-- BEGIN DEFAULT SIDEBAR -->
<div class="ks-column ks-sidebar ks-info">
    <div class="ks-wrapper ks-sidebar-wrapper">
        <ul class="nav nav-pills nav-stacked">
            <li class="nav-item ks-user dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="assets/img/avatars/avatar-12.jpg" width="36" height="36" class="ks-avatar rounded-circle">
                    <div class="ks-info">
                        <div class="ks-name">{{ Auth::user()->name }}</div>
                        <div class="ks-text">{{ Auth::user()->status }}</div>
                    </div>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="profile-social-profile.html">Profile</a>
                    <a class="dropdown-item" href="profile-settings-general.html">Settings</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link"  href="{{route('home')}}" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-dashboard"></span>
                    <span>Dashboard</span>
                </a>
              
            </li>
        
            <li class="nav-item dropdown">
                <a class="nav-link"  href="{{ route('users.index')}}" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-user"></span>
                    <span>Users</span>
                </a>
            
            </li>

             <li class="nav-item dropdown">
                <a class="nav-link"  href="{{ route('projects.index')}}" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-desktop"></span>
                    <span>Project</span>
                </a>
            
            </li>

             <li class="nav-item dropdown">
                <a class="nav-link"  href="{{ route('events.index')}}" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-calendar"></span>
                    <span>Project Calendar</span>
                </a>
            
            </li>
          
           
         
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ks-icon la la-question-circle"></span>
                    <span>FAQ</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="faq.html">Index</a>
                </div>
            </li>
        </ul>
        <div class="ks-sidebar-extras-block">
            <div class="ks-extras-block-item">
                <div class="ks-name">Monthly Badwidth Transfer</div>
                <div class="ks-progress">
                    <div class="progress ks-progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 84%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="ks-description">
                    <span class="ks-amount">84%</span>
                    <span class="ks-text">(8 400 MB of 10 000)</span>
                </div>
            </div>
            <div class="ks-extras-block-item">
                <div class="ks-name">Disk Space Usage</div>
                <div class="ks-progress">
                    <div class="progress ks-progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 36%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="ks-description">
                    <span class="ks-amount">36%</span>
                    <span class="ks-text">(3 600 MB of 10 000)</span>
                </div>
            </div>
            <div class="ks-sidebar-copyright">© 2018 SC-PMS. All right reserved</div>
        </div>
    </div>
</div>
<!-- END DEFAULT SIDEBAR -->




 @yield('content')


</div>

<!-- BEGIN PAGE LEVEL PLUGINS -->
	 <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}" defer></script>
	 <script src="{{ asset('assets/libs/popper/popper.min.js') }}" defer></script>
	 <script src="{{ asset('assets/libs/responsejs/response.min.js') }}" defer></script>
	 <script src="{{ asset('assets/libs/loading-overlay/loadingoverlay.min.js') }}" defer></script>
	 <script src="{{ asset('assets/libs/tether/js/tether.min.js') }}" defer></script>
	 <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.min.js') }}" defer></script>
	 <script src="{{ asset('assets/libs/jscrollpane/jquery.jscrollpane.min.js') }}" defer></script>
	 <script src="{{ asset('assets/libs/jscrollpane/jquery.mousewheel.js') }}" defer></script>
	 <script src="{{ asset('assets/libs/flexibility/flexibility.js') }}" defer></script>
	 <script src="{{ asset('assets/libs/noty/noty.min.js') }}" defer></script>
	 <script src="{{ asset('assets/libs/velocity/velocity.min.js') }}" defer></script>

<!-- BEGIN THEME LAYOUT SCRIPTS -->
	 <script src="{{ asset('assets/scripts/common.min.js') }}" defer></script>


<!-- END THEME LAYOUT SCRIPTS -->
	 <script src="{{ asset('assets/libs/d3/d3.min.js') }}" defer></script>
	 <script src="{{ asset('assets/scripts/charts/radial-progress/radial-progress.chart.js') }}" defer></script>
    
    
    <script src="{{ asset('libs/c3js/c3.min.js') }}"></script>
    <script src="{{ asset('libs/noty/noty.min.js') }}"></script>
    <script src="{{ asset('libs/maplace/maplace.min.js') }}"></script>
    <script src="{{ asset('https://maps.google.com/maps/api/js?libraries=geometry&v=3.26&key=AIzaSyBBjLDxcCjc4s9ngpR11uwBWXRhyp3KPYM') }}"></script>
   
<script type="application/javascript">
(function ($) {
    $(document).ready(function() {
        var radialProgress = new KosmoCharts.RadialProgress('#ks-projects-progress-chart', {
            amount: 75,
            postfix: '%',
            cornerRadius: 10,
            lineWidth: 7,
            description: 'work done',
            size: 156
        });
        radialProgress.render();
    });
})(jQuery);
</script>
<script type="application/javascript">
(function ($) {
    $(document).ready(function () {
        c3.generate({
            bindto: '#ks-next-payout-chart',
            data: {
                columns: [
                    ['data1', 6, 5, 6, 5, 7, 8, 7]
                ],
                types: {
                    data1: 'area'
                },
                colors: {
                    data1: '#81c159'
                }
            },
            legend: {
                show: false
            },
            tooltip: {
                show: false
            },
            point: {
                show: false
            },
            axis: {
                x: {show:false},
                y: {show:false}
            }
        });

        c3.generate({
            bindto: '#ks-total-earning-chart',
            data: {
                columns: [
                    ['data1', 6, 5, 6, 5, 7, 8, 7]
                ],
                types: {
                    data1: 'area'
                },
                colors: {
                    data1: '#4e54a8'
                }
            },
            legend: {
                show: false
            },
            tooltip: {
                show: false
            },
            point: {
                show: false
            },
            axis: {
                x: {show:false},
                y: {show:false}
            }
        });

        c3.generate({
            bindto: '.ks-chart-orders-block',
            data: {
                columns: [
                    ['Revenue', 150, 200, 220, 280, 400, 160, 260, 400, 300, 400, 500, 420, 500, 300, 200, 100, 400, 600, 300, 360, 600],
                    ['Profit', 350, 300,  200, 140, 200, 30, 200, 100, 400, 600, 300, 200, 100, 50, 200, 600, 300, 500, 30, 200, 320]
                ],
                colors: {
                    'Revenue': '#f88528',
                    'Profit': '#81c159'
                }
            },
            point: {
                r: 5
            },
            grid: {
                y: {
                    show: true
                }
            }
        });

        setTimeout(function () {
            new Noty({
                text: '<strong>Welcome to Kosmo Admin Template</strong>! <br> You successfully read this important alert message.',
                type   : 'information',
                theme  : 'mint',
                layout : 'topRight',
                timeout: 3000
            }).show();
        }, 1500);

        var maplace = new Maplace({
            map_div: '#ks-payment-widget-table-and-map-map',
            controls_on_map: false
        });
        maplace.Load();
    });
})(jQuery);
</script>

<div class="ks-mobile-overlay"></div>

<!-- BEGIN SETTINGS BLOCK -->
<div class="ks-settings-slide-block">
    <a class="ks-settings-slide-control">
        <span class="ks-icon la la-cog"></span>
    </a>

    <div class="ks-header">
        <span class="ks-text">Layout Options</span>
        <a class="ks-settings-slide-close-control">
            <span class="ks-icon la la-close"></span>
        </a>
    </div>

    <div class="ks-themes-list">

        <a href="../default-primary/index.html" class="ks-theme ks-primary ks-active"></a>
        <a href="../default-primary-dark/index.html" class="ks-theme ks-dark-primary"></a>
        <a href="../default-info/index.html" class="ks-theme ks-info"></a>
        <a href="../default-pink/index.html" class="ks-theme ks-blink-pink-san-marino"></a>
        <a href="../default-bermuda-gray/index.html" class="ks-theme ks-bermuda-gray-malachite"></a>
        <a href="../default-royal-blue/index.html" class="ks-theme ks-royal-blue-orchid"></a>
        <a href="../default-ebony-clay/index.html" class="ks-theme ks-ebony-clay-cerise-red"></a>
        <a href="../default-international-klein-blue/index.html" class="ks-theme ks-international-klein-blue-dixie"></a>
        <a href="../default-jungle-green/index.html" class="ks-theme ks-jungle-green-chambray"></a>
        <a href="../default-voodoo/index.html" class="ks-theme ks-voodoo-medium-purple"></a>
        <a href="../default-cornflower-blue/index.html" class="ks-theme ks-cornflower-blue-ecstasy"></a>
        <a href="../default-purple/index.html" class="ks-theme ks-purple-mandy"></a>
        <a href="../default-oslo-gray/index.html" class="ks-theme ks-oslo-gray-royal-blue"></a>
        <a href="../default-astronaut-blue/index.html" class="ks-theme ks-astronaut-blue-persian-green"></a>
        <a href="../default-old-brick/index.html" class="ks-theme ks-old-brick"></a>
        <a href="../default-white/index.html" class="ks-theme ks-white"></a>
    </div>

    <ul class="ks-settings-list">
        <li>
            <span class="ks-text">Collapsed Sidebar</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-sidebar-checkbox-toggle">
                <input type="checkbox" value="1">
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
        <li>
            <span class="ks-text">Fixed page header</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-page-header-checkbox-toggle">
                <input type="checkbox" value="0" checked>
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
        <li>
            <span class="ks-text">Dark/Light Sidebar</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-sidebar-style-checkbox-toggle">
                <input type="checkbox" value="0" checked>
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
        <li>
            <span class="ks-text">White/Gray Content Background</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-content-bg-checkbox-toggle">
                <input type="checkbox" value="0" checked>
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
    </ul>
</div>
<!-- END SETTINGS BLOCK -->
</body>
</html>


