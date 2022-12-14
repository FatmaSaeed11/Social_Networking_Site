<!doctype html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Simplest Social Network HTML Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Simplest is - Professional A unique and beautiful collection of UI elements">
    <link rel="icon" href="assets/images/favicon.png">

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/uikit.css">
    <link rel="stylesheet" href="assets/css/uikit.css">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="assets/css/icons.css">
    <script src="https://kit.fontawesome.com/815e388c50.js" crossorigin="anonymous"></script>

    <!-- Google font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

</head>

<body>
 
        <!-- Wrapper -->
    <div id="wrapper">

        <!-- sidebar -->
       <div class="main_sidebar">
           <div class="side-overlay" uk-toggle="target: #wrapper ; cls: collapse-sidebar mobile-visible"></div>
       
           <!-- sidebar header -->
           <div class="sidebar-header">
               <!-- Logo-->
               <div id="logo">
                   <a href="feeds.html"> <img src="assets/images/logo-light.png" alt=""></a>
               </div>
               <span class="btn-close" uk-toggle="target: #wrapper ; cls: collapse-sidebar mobile-visible"></span>
           </div>
       
           <!-- sidebar Menu -->
           <div class="sidebar">
               <div class="sidebar_innr" data-simplebar>
       
                   <div class="sections">
                       <ul>
                           <li class="active">
                               <a href="feeds.html">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#047cac" d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z"></path>
                                   </svg>
                                   News Feed </a>
                           </li>
                          
                           <li>
                               <a href="pokes.html">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#009688"
                                           d="M21,9A1,1 0 0,1 22,10A1,1 0 0,1 21,11H16.53L16.4,12.21L14.2,17.15C14,17.65 13.47,18 12.86,18H8.5C7.7,18 7,17.27 7,16.5V10C7,9.61 7.16,9.26 7.43,9L11.63,4.1L12.4,4.84C12.6,5.03 12.72,5.29 12.72,5.58L12.69,5.8L11,9H21M2,18V10H5V18H2Z">
                                       </path>
                                   </svg> Ban </a>
                           </li>
                          
                          
                           <li>
                               <a href="popular-post.html">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#8d73cc"
                                           d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zm-1-2V4H5v16h14zM7 6h4v4H7V6zm0 6h10v2H7v-2zm0 4h10v2H7v-2zm6-9h4v2h-4V7z">
                                       </path>
                                   </svg> Popular Posts </a>
                           </li>
                           <li>
                               <a href="events.html">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                       <path fill="#f25e4e"
                                           d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z">
                                       </path>
                                   </svg> Events </a>
                           </li>
                           
                          
                          
                           
                       </ul>
                       
                   </div>
       
                 
       
                   <!--  Optional Footer -->
                   <div id="foot">
       
                       <ul>
                           <li> <a href="page-term.html"> About Us </a></li>
                           <li> <a href="page-setting.html"> Setting </a></li>
                           <li> <a href="page-privacy.html"> Privacy Policy </a></li>
                           <li> <a href="page-term.html"> Terms - Conditions </a></li>
                       </ul>
       
       
                       <div class="foot-content">
                           <p>?? 2022 <strong>Simplest</strong>. All Rights Reserved. </p>
                       </div>
       
                   </div>
       
       
       
               </div>
       
       
           </div>
       
       </div>

       <!-- contents -->
       <div class="main_content">

            <!-- header -->
       <div id="main_header">
           <header>
               <div class="header-innr">

                   <!-- Logo-->
                   <div class="header-btn-traiger is-hidden" uk-toggle="target: #wrapper ; cls: collapse-sidebar mobile-visible">
                       <span></span></div>

                    <!-- Logo-->
                    <div id="logo">
                       <a href="feeds.html"> <img src="assets/images/logo.png" alt=""></a>
                       <a href="feeds.html"> <img src="assets/images/logo-light.png" class="logo-inverse"
                               alt=""></a>
                   </div>

                   <!-- form search-->
                   <div class="head_search">
                       <form>
                           <div class="head_search_cont">
                               <input value="" type="text" class="form-control"
                                   placeholder="Search for Friends , Videos and more.." autocomplete="off">
                               <i class="s_icon uil-search-alt"></i>
                           </div>

                           <!-- Search box dropdown -->
                           <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small"
                               class="dropdown-search display-hidden">
                               <!-- User menu -->

                               <ul class="dropdown-search-list">
                                   <li class="list-title"> Recent Searches </li>
                                   <li> <a href="#">
                                           <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                           <p> Erica Jones <span> 2 hours ago </span> </p>
                                       </a>
                                   </li>
                                   <li> <a href="#">
                                           <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                           <p> Adrian Mohani <span> 13 days ago </span> </p>
                                       </a>
                                   </li>
                                   <li> <a href="#">
                                           <img src="assets/images/avatars/avatar-4.jpg" alt="">
                                           <p> Mountain Riders <span> 3 days ago <span>Group</span> </span> </p>
                                       </a>
                                   </li>
                                   <li> <a href="#">
                                           <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                           <p> Coffee Addicts <span> 12 days ago <span> Page</span></span> </p>
                                       </a>
                                   </li>
                                   <li class="menu-divider"></li>
                                   <li class="list-footer"> <a href="your-history.html"> Searches History </a>
                                   </li>
                               </ul>

                           </div>


                       </form>
                   </div>

                   <!-- user icons -->
                   <div class="head_user">


                       <!-- browse apps  -->
                       

                       <!-- browse apps dropdown -->
                       <div uk-dropdown="mode:click ; pos: bottom-center ; animation: uk-animation-scale-up"
                           class="icon-browse display-hidden">
                           <a href="#" class="icon-menu-item">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                   <path fill="#9c27b0"
                                       d="M12,8H4A2,2 0 0,0 2,10V14A2,2 0 0,0 4,16H5V20A1,1 0 0,0 6,21H8A1,1 0 0,0 9,20V16H12L17,20V4L12,8M21.5,12C21.5,13.71 20.54,15.26 19,16V8C20.53,8.75 21.5,10.3 21.5,12Z">
                                   </path>
                               </svg>
                               Create Ad </a>
                           <a href="#" class="icon-menu-item">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                   <path fill="#009da0"
                                       d="M18,20H6V18H4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V18H18V20M14,2H6A2,2 0 0,0 4,4V12H6V4H14V8H18V12H20V8L14,2M11,16H8V14H11V16M16,16H13V14H16V16M3,14H6V16H3V14M21,16H18V14H21V16Z">
                                   </path>
                               </svg>
                               Create Blog </a>
                           <a href="#" class="icon-menu-item">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                   <path fill="#f25e4e"
                                       d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z">
                                   </path>
                               </svg>
                               Create Event </a>
                           <a href="#" class="icon-menu-item">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                   <path fill="#03A9F4"
                                       d="M12,6A3,3 0 0,0 9,9A3,3 0 0,0 12,12A3,3 0 0,0 15,9A3,3 0 0,0 12,6M6,8.17A2.5,2.5 0 0,0 3.5,10.67A2.5,2.5 0 0,0 6,13.17C6.88,13.17 7.65,12.71 8.09,12.03C7.42,11.18 7,10.15 7,9C7,8.8 7,8.6 7.04,8.4C6.72,8.25 6.37,8.17 6,8.17M18,8.17C17.63,8.17 17.28,8.25 16.96,8.4C17,8.6 17,8.8 17,9C17,10.15 16.58,11.18 15.91,12.03C16.35,12.71 17.12,13.17 18,13.17A2.5,2.5 0 0,0 20.5,10.67A2.5,2.5 0 0,0 18,8.17M12,14C10,14 6,15 6,17V19H18V17C18,15 14,14 12,14M4.67,14.97C3,15.26 1,16.04 1,17.33V19H4V17C4,16.22 4.29,15.53 4.67,14.97M19.33,14.97C19.71,15.53 20,16.22 20,17V19H23V17.33C23,16.04 21,15.26 19.33,14.97Z">
                                   </path>
                               </svg>
                               Create Groups </a>
                           <a href="#" class="icon-menu-item">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                   <path fill="#f79f58" d="M14.4,6L14,4H5V21H7V14H12.6L13,16H20V6H14.4Z"></path>
                               </svg>
                               Create Page </a>
                           <a href="#" class="icon-menu-item">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                   <path fill="#8bc34a"
                                       d="M22,16V4A2,2 0 0,0 20,2H8A2,2 0 0,0 6,4V16A2,2 0 0,0 8,18H20A2,2 0 0,0 22,16M11,12L13.03,14.71L16,11L20,16H8M2,6V20A2,2 0 0,0 4,22H18V20H4V6">
                                   </path>
                               </svg>
                               Albums </a>
                           <a href="#" class="more-app"> More Apps</a>
                       </div>


                       <!-- Message  notificiation dropdown -->
                      

                       <!-- Message  notificiation dropdown -->
                       <div uk-dropdown="mode:click ; animation: uk-animation-slide-bottom-small"
                           class="dropdown-notifications display-hidden">

                           <!-- notification contents -->
                           <div class="dropdown-notifications-content" data-simplebar>

                               <!-- notivication header -->
                               <div class="dropdown-notifications-headline">
                                   <h4>Messages</h4>
                                   <a href="#">
                                       <i class="icon-feather-settings"
                                           uk-tooltip="title: Message settings ; pos: left"></i>
                                   </a>
                               </div>

                               <!-- notiviation list -->
                               <ul>
                                   <li>
                                       <a href="#">
                                           <span class="notification-avatar status-online">
                                               <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                           </span>
                                           <div class="notification-text notification-msg-text">
                                               <strong>Jonathan Madano</strong>
                                               <p>Thanks for The Answer ... <span class="time-ago"> 2 h </span> </p>

                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <span class="notification-avatar">
                                               <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                           </span>
                                           <div class="notification-text notification-msg-text">
                                               <strong>Stella Johnson</strong>
                                               <p> Alex will explain you how ... <span class="time-ago"> 3 h </span>
                                               </p>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <span class="notification-avatar status-online">
                                               <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                           </span>
                                           <div class="notification-text notification-msg-text">
                                               <strong>Alex Dolgove</strong>
                                               <p> Alia just joined Messenger! <span class="time-ago"> 3 h </span> </p>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <span class="notification-avatar status-online">
                                               <img src="assets/images/avatars/avatar-4.jpg" alt="">
                                           </span>
                                           <div class="notification-text notification-msg-text">
                                               <strong>Adrian Mohani</strong>
                                               <p>Thanks for The Answer ... <span class="time-ago"> 2 h </span> </p>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <span class="notification-avatar">
                                               <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                           </span>
                                           <div class="notification-text notification-msg-text">
                                               <strong>Jonathan Madano</strong>
                                               <p>Thanks for The Answer ... <span class="time-ago"> 2 h </span> </p>

                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <span class="notification-avatar">
                                               <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                           </span>
                                           <div class="notification-text notification-msg-text">
                                               <strong>Stella Johnson</strong>
                                               <p> Alex will explain you how ... <span class="time-ago"> 3 h </span>
                                               </p>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <span class="notification-avatar">
                                               <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                           </span>
                                           <div class="notification-text notification-msg-text">
                                               <strong>Alex Dolgove</strong>
                                               <p> Alia just joined Messenger! <span class="time-ago"> 3 h </span> </p>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <span class="notification-avatar">
                                               <img src="assets/images/avatars/avatar-4.jpg" alt="">
                                           </span>
                                           <div class="notification-text notification-msg-text">
                                               <strong>Adrian Mohani</strong>
                                               <p>Thanks for The Answer ... <span class="time-ago"> 2 h </span> </p>
                                           </div>
                                       </a>
                                   </li>
                               </ul>

                           </div>
                           <div class="dropdown-notifications-footer">
                               <a href="#"> See all in Messages</a>
                           </div>


                       </div>


                       <!-- notificiation icon  -->
                       <a href="#" class="opts_icon" uk-tooltip="title: Notifications ; pos: bottom ;offset:7">
                           <img src="assets/images/icons/bell.svg" alt=""> <span>3</span>
                       </a>


                       <!-- notificiation dropdown -->
                       <div uk-dropdown="mode:click ; animation: uk-animation-slide-bottom-small"
                           class="dropdown-notifications display-hidden">

                           <!-- notification contents -->
                           <div class="dropdown-notifications-content" data-simplebar>

                               <!-- notivication header -->
                               <div class="dropdown-notifications-headline">
                                   <h4>Notifications </h4>
                                   <a href="#">
                                       <i class="icon-feather-settings"
                                           uk-tooltip="title: Notifications settings ; pos: left"></i>
                                   </a>
                               </div>

                               <!-- notiviation list -->
                               <ul>
                                   <li>
                                       <a href="#">
                                           <span class="notification-avatar">
                                               <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                           </span>
                                           <span class="notification-icon bg-gradient-primary">
                                               <i class="icon-feather-thumbs-up"></i></span>
                                           <span class="notification-text">
                                               <strong>Adrian Moh.</strong> Like Your Comment On Video
                                               <span class="text-primary">Learn Prototype Faster</span>
                                               <br> <span class="time-ago"> 9 hours ago </span>
                                           </span>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <span class="notification-avatar">
                                               <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                           </span>
                                           <span class="notification-icon bg-gradient-danger">
                                               <i class="icon-feather-star"></i></span>
                                           <span class="notification-text">
                                               <strong>Alex Dolgove</strong> Added New Review In Video
                                               <span class="text-primary">Full Stack PHP Developer</span>
                                               <br> <span class="time-ago"> 19 hours ago </span>
                                           </span>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <span class="notification-avatar">
                                               <img src="assets/images/avatars/avatar-4.jpg" alt="">
                                           </span>
                                           <span class="notification-icon bg-gradient-success">
                                               <i class="icon-feather-message-circle"></i></span>
                                           <span class="notification-text">
                                               <strong>Stella John</strong> Replay Your Comment in
                                               <span class="text-primary">Adobe XD Tutorial</span>
                                               <br> <span class="time-ago"> 12 hours ago </span>
                                           </span>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <span class="notification-avatar">
                                               <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                           </span>
                                           <span class="notification-icon bg-gradient-primary">
                                               <i class="icon-feather-thumbs-up"></i></span>
                                           <span class="notification-text">
                                               <strong>Adrian Moh.</strong> Like Your Comment On Video
                                               <span class="text-primary">Learn Prototype Faster</span>
                                               <br> <span class="time-ago"> 9 hours ago </span>
                                           </span>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <span class="notification-avatar">
                                               <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                           </span>
                                           <span class="notification-icon bg-gradient-warning">
                                               <i class="icon-feather-star"></i></span>
                                           <span class="notification-text">
                                               <strong>Alex Dolgove</strong> Added New Review In Video
                                               <span class="text-primary">Full Stack PHP Developer</span>
                                               <br> <span class="time-ago"> 19 hours ago </span>
                                           </span>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                           <span class="notification-avatar">
                                               <img src="assets/images/avatars/avatar-4.jpg" alt="">
                                           </span>
                                           <span class="notification-icon bg-gradient-success">
                                               <i class="icon-feather-message-circle"></i></span>
                                           <span class="notification-text">
                                               <strong>Stella John</strong> Replay Your Comment in
                                               <span class="text-primary">Adobe XD Tutorial</span>
                                               <br> <span class="time-ago"> 12 hours ago </span>
                                           </span>
                                       </a>
                                   </li>
                               </ul>

                           </div>


                       </div>


                       <!-- profile -image -->
                       <a class="opts_account" href="#"> <img src="assets/images/avatars/avatar-2.jpg" alt=""></a>

                       <!-- profile dropdown-->
                       <div uk-dropdown="mode:click ; animation: uk-animation-slide-bottom-small"
                           class="dropdown-notifications rounded display-hidden">

                           <!-- User Name / Avatar -->
                           <!-- User Name / Avatar -->
                           <a href="timeline.html">

                               <div class="dropdown-user-details">

                                   <div class="dropdown-user-cover">
                                       <img src="assets/images/avatars/profile-cover.jpg" alt="">
                                   </div>
                                   <div class="dropdown-user-avatar">
                                       <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                   </div>
                                   <div class="dropdown-user-name"> James Lewis </div>
                               </div>

                           </a>

                           <ul class="dropdown-user-menu">
                               <li><a href="#"> <i class="fas fa-rocket"></i> Boost Posts </a> </li>
                               <li><a href="#"> <i class="fas fa-rocket"></i> Boost Pages </a> </li>
                               <li><a href="#"> <i class="fas fa-bullhorn"></i> Advertising </a></li>
                               <li><a href="#"> <i class="fas fa-user-edit"></i> General Settings</a></li>
                               <li><a href="#"> <i class="fas fa-user-cog"></i> Admi Area</a></li>
                               <li>
                                   <a href="#" id="night-mode" class="btn-night-mode">
                                       <i class="fas fa-moon"></i> Night mode
                                       <span class="btn-night-mode-switch">
                                           <span class="uk-switch-button"></span>
                                       </span>
                                   </a>
                               </li>
                               </li>
                               <li><a href="form-login.html"> <i class="fas fa-sign-out-alt"></i>Log Out</a>
                               </li>
                           </ul>

                           <hr class="m-0">
                           <ul class="dropdown-user-menu">
                               <li><a href="page-setting.html" class="bg-secondery"> <i class="uil-bolt"></i>
                                       <div> Upgrade To Premium <span> Pro features give you complete control </span>
                                       </div>
                                   </a>
                               </li>
                           </ul>

                       </div>


                   </div>

               </div> <!-- / heaader-innr -->
           </header>

       </div>


            <div class="main_content_inner">


                <div uk-grid>

                    <div class="uk-width-2-3@m fead-area">

                        <div class="uk-position-relative" uk-slider="finite: true">

                        </div>

                        <div class="post-newer mt-lg-2">

                            <div class="post-new" uk-toggle="target: body ; cls: post-focus">
                                <div class="post-new-media">
                                    <div class="post-new-media-user">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="post-new-media-input">
                                        <input type="text" class="uk-input" placeholder="What's Your Mind ? Hamse!">
                                    </div>
                                    <a href="#">
                                        <img src="assets/images/icons/live.png" alt="">
                                        Add post
                                    </a>
                                </div>
                                <hr>
                                
                            </div>

                            <div class="post-pop">

                                <div class="post-new-overyly" uk-toggle="target: body ; cls: post-focus"></div>

                                <div class="post-new uk-animation-slide-top-small">


                                    <div class="post-new-header">

                                        <h4> Create new post</h4>

                                        <!-- close button-->
                                        <span class="post-new-btn-close" uk-toggle="target: body ; cls: post-focus"
                                            uk-tooltip="title:Close; pos: left "></span>

                                    </div>

                                    <div class="post-new-media">
                                        <div class="post-new-media-user">
                                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="post-new-media-input">
                                            <input type="text" class="uk-input"
                                                placeholder="What's Your Mind ? Dennis!">
                                        </div>
                                    </div>
                                    <div class="post-new-tab-nav">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="#4db3f6"
                                                    d="M8.5,13.5L11,16.5L14.5,12L19,18H5M21,19V5C21,3.89 20.1,3 19,3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19Z">
                                                </path>
                                            </svg>
                                            <span> Upload Image</span>
                                        </a>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 512 512">
                                                <path fill="#71a257"
                                                    d="M450.6 153.6c-3.3 0-6.5.9-9.3 2.7l-86.5 54.6c-2.5 1.6-4 4.3-4 7.2v76c0 2.9 1.5 5.6 4 7.2l86.5 54.6c2.8 1.7 6 2.7 9.3 2.7h20.8c4.8 0 8.6-3.8 8.6-8.5v-188c0-4.7-3.9-8.5-8.6-8.5h-20.8zM273.5 384h-190C55.2 384 32 360.8 32 332.6V179.4c0-28.3 23.2-51.4 51.4-51.4h190c28.3 0 51.4 23.2 51.4 51.4v153.1c.1 28.3-23 51.5-51.3 51.5z">
                                                </path>
                                            </svg>
                                            <span> Upload Videos</span>
                                        </a>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                                viewBox="0 0 24 24">
                                                <path fill="#f3c038"
                                                    d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M8.5,8C9.328,8,10,8.896,10,10	s-0.672,2-1.5,2S7,11.104,7,10S7.672,8,8.5,8z M12,18c-1.905,0-3.654-0.874-4.8-2.399l1.599-1.201C9.563,15.417,10.73,16,12,16	c1.27,0,2.436-0.583,3.2-1.601l1.6,1.201C15.653,17.126,13.904,18,12,18z M15.5,12c-0.828,0-1.5-0.896-1.5-2s0.672-2,1.5-2	S17,8.896,17,10S16.328,12,15.5,12z">
                                                </path>
                                            </svg>
                                            <span> Feeling </span>
                                        </a>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                viewBox="0 0 24 24">
                                                <path fill="#673ab7"
                                                    d="M17.5,12A1.5,1.5 0 0,1 16,10.5A1.5,1.5 0 0,1 17.5,9A1.5,1.5 0 0,1 19,10.5A1.5,1.5 0 0,1 17.5,12M14.5,8A1.5,1.5 0 0,1 13,6.5A1.5,1.5 0 0,1 14.5,5A1.5,1.5 0 0,1 16,6.5A1.5,1.5 0 0,1 14.5,8M9.5,8A1.5,1.5 0 0,1 8,6.5A1.5,1.5 0 0,1 9.5,5A1.5,1.5 0 0,1 11,6.5A1.5,1.5 0 0,1 9.5,8M6.5,12A1.5,1.5 0 0,1 5,10.5A1.5,1.5 0 0,1 6.5,9A1.5,1.5 0 0,1 8,10.5A1.5,1.5 0 0,1 6.5,12M12,3A9,9 0 0,0 3,12A9,9 0 0,0 12,21A1.5,1.5 0 0,0 13.5,19.5C13.5,19.11 13.35,18.76 13.11,18.5C12.88,18.23 12.73,17.88 12.73,17.5A1.5,1.5 0 0,1 14.23,16H16A5,5 0 0,0 21,11C21,6.58 16.97,3 12,3Z">
                                                </path>
                                            </svg>
                                            <span> Post Color </span>
                                        </a>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                                viewBox="0 0 24 24">
                                                <path fill="#ff3a55"
                                                    d="M12,2A3,3 0 0,1 15,5V11A3,3 0 0,1 12,14A3,3 0 0,1 9,11V5A3,3 0 0,1 12,2M19,11C19,14.53 16.39,17.44 13,17.93V21H11V17.93C7.61,17.44 5,14.53 5,11H7A5,5 0 0,0 12,16A5,5 0 0,0 17,11H19Z">
                                                </path>
                                            </svg>
                                            <span> Recording </span>
                                        </a>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                viewBox="0 0 512 512">
                                                <path fill="#6bcfef"
                                                    d="M312 155h91c2.8 0 5-2.2 5-5 0-8.9-3.9-17.3-10.7-22.9L321 63.5c-5.8-4.8-13-7.4-20.6-7.4-4.1 0-7.4 3.3-7.4 7.4V136c0 10.5 8.5 19 19 19z">
                                                </path>
                                                <path fill="#6bcfef"
                                                    d="M267 136V56H136c-17.6 0-32 14.4-32 32v336c0 17.6 14.4 32 32 32h240c17.6 0 32-14.4 32-32V181h-96c-24.8 0-45-20.2-45-45z">
                                                </path>
                                            </svg>
                                            <span> File </span>
                                        </a>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                viewBox="0 0 24 24">
                                                <path fill="#f07729"
                                                    d="M3.572,5.572l4.506,10.813C8.233,16.757,8.597,17,9.001,17H18c0.417,0,0.79-0.259,0.937-0.648l3-8 c0.115-0.308,0.072-0.651-0.114-0.921C21.635,7.161,21.328,7,21,7H6.333L4.923,3.615C4.768,3.243,4.404,3,4,3H2v2h1L3.572,5.572z">
                                                </path>
                                                <circle fill="#f07729" cx="10.5" cy="20.5" r="1.5"></circle>
                                                <circle fill="#f07729" cx="16.438" cy="20.5" r="1.5"></circle>
                                            </svg>
                                            <span> Product </span>
                                        </a>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                viewBox="0 0 24 24">
                                                <path fill="#31a38c"
                                                    d="M17,17H15V13H17M13,17H11V7H13M9,17H7V10H9M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z">
                                                </path>
                                            </svg>
                                            <span> Create Poll </span>
                                        </a>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                                viewBox="0 0 24 24">
                                                <path fill="#f35369"
                                                    d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z">
                                                </path>
                                            </svg>
                                            <span> Location </span>
                                        </a>

                                    </div>
                                    <div class="uk-flex uk-flex-between">

                                        <button class="button outline-light circle" type="button" style="
                                        border-color: #e6e6e6;  border-width: 1px;  ">Public</button>
                                        <div uk-dropdown>
                                            <ul class="uk-nav uk-dropdown-nav">
                                                <li class="uk-active"><a href="#">Only me</a></li>
                                                <li><a href="#">Every one</a></li>
                                                <li><a href="#"> People I Follow </a></li>
                                                <li><a href="#">I People Follow Me</a></li>
                                            </ul>
                                        </div>

                                        <a href="#" class="button primary px-6"> Share </a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="post">
                            <div class="post-heading">
                                <div class="post-avature">
                                    <img src="assets/images/avatars/avatar-6.jpg" alt="">
                                </div>
                                <div class="post-title">
                                    <h4> Mariah Ali </h4>
                                    <p> 5 <span> hrs</span> <i class="uil-users-alt"></i> </p>
                                </div>
                                <div class="post-btn-action">
                                    <span class="icon-more uil-ellipsis-h"></span>
                                    <div class="mt-0 p-2" uk-dropdown="pos: top-right;mode:hover ">
                                        <ul class="uk-nav uk-dropdown-nav">
                                            <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                                            <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                                            <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                                                    Delete </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="post-description">
                                <div class="fullsizeimg">
                                    <img src="assets/images/post/img-1.jpg" alt="">
                                </div>

                                <div class="post-state-details">
                                    <div>
                                        <img src="assets/images/icons/reactions_like.png" alt="">
                                        <img src="assets/images/icons/reactions_love.png" alt="">
                                        <p> 13 </p>
                                    </div>
                                    <p> 24 Comments</p>
                                </div>

                            </div>

                            <div class="post-state">
                                <div class="post-state-btns"> <i class="uil-thumbs-up"></i> 126<span> Liked </span>
                                </div>
                                <div class="post-state-btns"> <i class="uil-heart"></i> 18 <span> Coments</span>
                                </div>
                                <div class="post-state-btns"> <i class="uil-share-alt"></i> 193 <span> Shared
                                    </span>
                                </div>
                                
                            </div>

                            <!-- post comments -->
                            <div class="post-comments">
                                <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>
                                <div class="post-comments-single">
                                    <div class="post-comment-avatar">
                                        <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                    </div>
                                    <div class="post-comment-text">
                                        <div class="post-comment-text-inner">
                                            <h6> Alex Dolgove</h6>
                                            <p> Ut wisi enim ad minim laoreet dolore magna aliquam erat </p>
                                        </div>
                                        <div class="uk-text-small">
                                            <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                                            </a>
                                            <a href="#" class=" mr-1"> Replay </a>
                                            <span> 1d</span>
                                        </div>
                                    </div>
                                    <a href="#" class="post-comment-opt"></a>
                                </div>
                                <div class="post-comments-single">
                                    <div class="post-comment-avatar">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="post-comment-text">
                                        <div class="post-comment-text-inner">
                                            <h6>Stella Johnson</h6>
                                            <p> Ut wisi enim ad minim laoreet dolore <strong> David !</strong> </p>
                                        </div>
                                        <div class="uk-text-small">
                                            <a href="#" class="text-primary mr-1"> <i class="uil-thumbs-up"></i>
                                                Like
                                            </a>
                                            <a href="#" class=" mr-1"> Replay </a>
                                            <span> 2d</span>
                                        </div>
                                    </div>
                                    <a href="#" class="post-comment-opt"></a>
                                </div>
                                <div class="post-comments-single">
                                    <div class="post-comment-avatar">
                                        <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                    </div>
                                    <div class="post-comment-text">
                                        <div class="post-comment-text-inner">
                                            <h6> Jonathan Madano </h6>
                                            <p> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                aliquam
                                                erat
                                                volutpat.<strong> David !</strong> </p>
                                        </div>
                                        <div class="uk-text-small">
                                            <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                                            </a>
                                            <a href="#" class=" mr-1"> Replay </a>
                                            <span> 3d</span>
                                        </div>
                                    </div>
                                    <a href="#" class="post-comment-opt"></a>
                                </div>


                                <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>

                                <div class="post-add-comment">
                                    <div class="post-add-comment-avature">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="post-add-comment-text-area">
                                        <input type="text" placeholder="Write your comment...">
                                        <div class="icons">
                                            <span class="uil-grin"></span>
                        
                                        </div>
                                    </div>

                                </div>

                            </div>



                        </div>

                        <div class="post">
                            <div class="post-heading">
                                <div class="post-avature">
                                    <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                </div>
                                <div class="post-title">
                                    <h4> Erica Jones </h4>
                                    <p> 5 <span> hrs</span> <i class="uil-users-alt"></i> </p>
                                </div>
                                <div class="post-btn-action">
                                    <span cle uil-ellipsis-h"></span>
                                    <div class="mt-0 p-2" uk-dropdown="pos: top-right;mode:hover ">
                                        <ul class="uk-nav uk-dropdown-nav">
                                            <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                                            <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                                            <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                                                    Delete </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="post-description">
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-1-1@m">
                                        <img src="assets/images/post/img-4.jpg" class="rounded" alt="">
                                    </div>
                                    <div class="uk-width-1-2@m uk-width-1-2">
                                        <img src="assets/images/post/img-2.jpg" class="rounded" alt="">
                                    </div>
                                    <div class="uk-width-1-2@m uk-width-1-2 uk-position-relative">
                                        <img src="assets/images/post/img-3.jpg" class="rounded" alt="">
                                        <div class="uk-position-center uk-light">
                                            <a href="#">
                                                <h3> + 15 more </h3>
                                            </a></div>
                                    </div>
                                </div>

                                <div class="post-state-details">
                                    <div>
                                        <img src="assets/images/icons/reactions_like.png" alt="">
                                        <img src="assets/images/icons/reactions_love.png" alt="">
                                        <p> 13 </p>
                                    </div>
                                    <p> <span class="mr-2"> <i class="uil-eye"></i> Veiws </span> 212 Comments </p>
                                </div>

                            </div>

                            <div class="post-state">
                                <div class="post-state-btns"> <i class="uil-thumbs-up"></i> 126<span> Liked </span>
                                </div>
                                <div class="post-state-btns"> <i class="uil-heart"></i> 18 <span> Coments</span>
                                </div>
                                <div class="post-state-btns"> <i class="uil-share-alt"></i> 193 <span> Shared
                                    </span>
                                </div>
                               
                            </div>


                            <!-- post comments -->
                            <div class="post-comments">
                                <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>
                                <div class="post-comments-single">
                                    <div class="post-comment-avatar">
                                        <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                    </div>
                                    <div class="post-comment-text">
                                        <div class="post-comment-text-inner">
                                            <h6> Alex Dolgove</h6>
                                            <p> Ut wisi enim ad minim laoreet dolore magna aliquam erat </p>
                                        </div>
                                        <div class="uk-text-small">
                                            <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                                            </a>
                                            <a href="#" class=" mr-1"> Replay </a>
                                            <span> 3d</span>
                                        </div>
                                    </div>
                                    <a href="#" class="post-comment-opt"></a>
                                </div>
                                <div class="post-comments-single">
                                    <div class="post-comment-avatar">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="post-comment-text">
                                        <div class="post-comment-text-inner">
                                            <h6>Stella Johnson</h6>
                                            <p> Ut wisi enim ad minim laoreet dolore <strong> David !</strong> </p>
                                        </div>
                                        <div class="uk-text-small">
                                            <a href="#" class="text-primary mr-1"> <i class="uil-thumbs-up"></i>
                                                Like
                                            </a>
                                            <a href="#" class=" mr-1"> Replay </a>
                                            <span> 3d</span>
                                        </div>
                                    </div>
                                    <a href="#" class="post-comment-opt"></a>
                                </div>
                                <div class="post-comments-single">
                                    <div class="post-comment-avatar">
                                        <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                    </div>
                                    <div class="post-comment-text">
                                        <div class="post-comment-text-inner">
                                            <h6> Jonathan Madano </h6>
                                            <p> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                aliquam
                                                erat
                                                volutpat.<strong> David !</strong> </p>
                                        </div>
                                        <div class="uk-text-small">
                                            <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                                            </a>
                                            <a href="#" class=" mr-1"> Replay </a>
                                            <span> 3d</span>
                                        </div>
                                    </div>
                                    <a href="#" class="post-comment-opt"></a>
                                </div>


                                <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>

                                <div class="post-add-comment">
                                    <div class="post-add-comment-avature">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="post-add-comment-text-area">
                                        <input type="text" placeholder="Write your comment...">
                                        <div class="icons">
                                            
                                            <span class="uil-grin"></span>
                                          
                                        </div>
                                    </div>

                                </div>

                            </div>



                        </div>

                        <div class="post">
                            <div class="post-heading">
                                <div class="post-avature">
                                    <img src="assets/images/avatars/avatar-4.jpg" alt="">
                                </div>
                                <div class="post-title">
                                    <h4> Stella Johnson </h4>
                                    <p> 5 <span> hrs</span> <i class="uil-users-alt"></i> </p>
                                </div>
                                <div class="post-btn-action">
                                    <span class="icon-more uil-ellipsis-h"></span>
                                    <div class="mt-0 p-2" uk-dropdown="pos: top-right;mode:hover ">
                                        <ul class="uk-nav uk-dropdown-nav">
                                            <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                                            <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                                            <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                                                    Delete </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="post-description">

                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat</p>
                                <div class="post-state-details">
                                    <div>
                                        <img src="assets/images/icons/reactions_like.png" alt="">
                                        <img src="assets/images/icons/reactions_love.png" alt="">
                                        <p> 13 </p>
                                    </div>
                                    <p> 24 Comments</p>
                                </div>

                            </div>

                            <div class="post-state">
                                <div class="post-state-btns"> <i class="uil-thumbs-up"></i> 126<span> Liked </span>
                                </div>
                                <div class="post-state-btns"> <i class="uil-heart"></i> 18 <span> Coments</span>
                                </div>
                                <div class="post-state-btns"> <i class="uil-share-alt"></i> 193 <span> Shared
                                    </span>
                                </div>
                                
                            </div>

                            <!-- post comments -->
                            <div class="post-comments">
                                <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>
                                <div class="post-comments-single">
                                    <div class="post-comment-avatar">
                                        <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                    </div>
                                    <div class="post-comment-text">
                                        <div class="post-comment-text-inner">
                                            <h6> Alex Dolgove</h6>
                                            <p> Ut wisi enim ad minim laoreet dolore magna aliquam erat </p>
                                        </div>
                                        <div class="uk-text-small">
                                            <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                                            </a>
                                            <a href="#" class=" mr-1"> Replay </a>
                                            <span> 1d</span>
                                        </div>
                                    </div>
                                    <a href="#" class="post-comment-opt"></a>
                                </div>
                                <div class="post-comments-single">
                                    <div class="post-comment-avatar">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="post-comment-text">
                                        <div class="post-comment-text-inner">
                                            <h6>Stella Johnson</h6>
                                            <p> Ut wisi enim ad minim laoreet dolore <strong> David !</strong> </p>
                                        </div>
                                        <div class="uk-text-small">
                                            <a href="#" class="text-primary mr-1"> <i class="uil-thumbs-up"></i>
                                                Like
                                            </a>
                                            <a href="#" class=" mr-1"> Replay </a>
                                            <span> 2d</span>
                                        </div>
                                    </div>
                                    <a href="#" class="post-comment-opt"></a>
                                </div>

                                <div class="post-add-comment">
                                    <div class="post-add-comment-avature">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="post-add-comment-text-area">
                                        <input type="text" placeholder="Write your comment...">
                                        <div class="icons">
                                            
                                            <span class="uil-grin"></span>
                                            
                                        </div>
                                    </div>

                                </div>

                            </div>


                        </div>

                        <div class="post">
                            <div class="post-heading">
                                <div class="post-avature">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="post-title">
                                    <h4> Dennis Han </h4>
                                    <p> 5 <span> hrs</span> <i class="uil-users-alt"></i> </p>
                                </div>
                                <div class="post-btn-action">
                                    <span class="icon-more uil-ellipsis-h"></span>
                                    <div class="mt-0 p-2" uk-dropdown="pos: top-right;mode:hover ">
                                        <ul class="uk-nav uk-dropdown-nav">
                                            <li><a href="#"> <i class="uil-share-alt mr-1"></i> Share</a> </li>
                                            <li><a href="#"> <i class="uil-edit-alt mr-1"></i> Edit Post </a></li>
                                            <li><a href="#" class="text-danger"> <i class="uil-trash-alt mr-1"></i>
                                                    Delete </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="post-description">

                                <div class="fullsizevid">
                                    <div class="embed-video">
                                        <iframe src="https://www.youtube.com/embed/pQN-pnXPaVg" frameborder="0"
                                            uk-video="automute: true" allowfullscreen uk-responsive></iframe>
                                    </div>
                                </div>

                                <div class="post-state-details">
                                    <div>
                                        <img src="assets/images/icons/reactions_like.png" alt="">
                                        <img src="assets/images/icons/reactions_love.png" alt="">
                                        <p> 13 </p>
                                    </div>
                                    <p> <span class="mr-2"> <i class="uil-eye"></i> 38 Veiws </span> 212 Comments
                                    </p>
                                </div>

                            </div>

                            <div class="post-state">
                                <div class="post-state-btns"> <i class="uil-thumbs-up"></i> 126<span> Liked </span>
                                </div>
                                <div class="post-state-btns"> <i class="uil-heart"></i> 18 <span> Coments</span>
                                </div>
                                <div class="post-state-btns"> <i class="uil-share-alt"></i> 193 <span> Shared
                                    </span>
                                </div>
                                
                            </div>


                            <!-- post comments -->
                            <div class="post-comments">
                                <a href="#" class="view-more-comment"> Veiw 8 more Comments</a>
                                <div class="post-comments-single">
                                    <div class="post-comment-avatar">
                                        <img src="assets/images/avatars/avatar-5.jpg" alt="">
                                    </div>
                                    <div class="post-comment-text">
                                        <div class="post-comment-text-inner">
                                            <h6> Alex Dolgove</h6>
                                            <p> Ut wisi enim ad minim laoreet dolore magna aliquam erat </p>
                                        </div>
                                        <div class="uk-text-small">
                                            <a href="#" class="text-danger mr-1"> <i class="uil-heart"></i> Love
                                            </a>
                                            <a href="#" class=" mr-1"> Replay </a>
                                            <span> 3d</span>
                                        </div>
                                    </div>
                                    <a href="#" class="post-comment-opt"></a>
                                </div>
                                <div class="post-comments-single">
                                    <div class="post-comment-avatar">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="post-comment-text">
                                        <div class="post-comment-text-inner">
                                            <h6>Stella Johnson</h6>
                                            <p> Ut wisi enim ad minim laoreet dolore <strong> David !</strong> </p>
                                        </div>
                                        <div class="uk-text-small">
                                            <a href="#" class="text-primary mr-1"> <i class="uil-thumbs-up"></i>
                                                Like
                                            </a>
                                            <a href="#" class=" mr-1"> Replay </a>
                                            <span> 3d</span>
                                        </div>
                                    </div>
                                    <a href="#" class="post-comment-opt"></a>
                                </div>

                                <div class="post-add-comment">
                                    <div class="post-add-comment-avature">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="post-add-comment-text-area">
                                        <input type="text" placeholder="Write your comment...">
                                        <div class="icons">
                                            
                                            <span class="uil-grin"></span>
                                         
                                        </div>
                                    </div>

                                </div>

                            </div>



                        </div>

                    </div>
                    <div class="uk-width-expand">

                  <!--  
                                        -->
                        <div class="sl_sidebar_sugs_title">People you may know
                            <i class="icon-feather-rotate-cw"></i>
                        </div>
                        <div class="sl_sidebar_sugs">
                            <div class="sl_sidebar_sugs_avatar">
                                <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            </div>
                            <div class="sl_sidebar_sugs_text">
                                <a href="#" class="sl_user_link_name"> Jonathan Madano </a>
                            </div>
                            <div class="user-follow-button sl_sidebar_sugs_btns">
                                <button type="button" class="button small">
                                    <span>Ban</span>
                                </button>
                            </div>
                            
                        </div>
                        <div class="sl_sidebar_sugs">
                            <div class="sl_sidebar_sugs_avatar">
                                <img src="assets/images/avatars/avatar-6.jpg" alt="">
                            </div>
                            <div class="sl_sidebar_sugs_text">
                                <a href="#" class="sl_user_link_name"> Monera Khalifa </a>
                            </div>
                            <div class="user-follow-button sl_sidebar_sugs_btns">
                                <button type="button" class="button small">
                                    <span>Ban</span>
                                </button>
                            </div>
                            
                        </div>
                        <div class="sl_sidebar_sugs">
                            <div class="sl_sidebar_sugs_avatar">
                                <img src="assets/images/avatars/avatar-3.jpg" alt="">
                            </div>
                            <div class="sl_sidebar_sugs_text">
                                <a href="#" class="sl_user_link_name"> Adrian Mohani </a>
                            </div>
                            <div class="user-follow-button sl_sidebar_sugs_btns">
                                <button type="button" class="button small">
                                    <span>Ban</span>
                                </button>
                            </div>
                            
                        </div>
                        <div class="sl_sidebar_sugs">
                            <div class="sl_sidebar_sugs_avatar">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            </div>
                            <div class="sl_sidebar_sugs_text">
                                <a href="#" class="sl_user_link_name"> Stella Johnson </a>
                            </div>
                            <div class="user-follow-button sl_sidebar_sugs_btns">
                                <button type="button" class="button small">
                                    <span>Ban</span>
                                </button>
                            </div>
                        </div>
                        <div class="sl_sidebar_sugs_title mt-1"> Add Key word
                            <i class="icon-feather-rotate-cw"></i>
                        </div>
                        <form action="#" class="invite-user-form">
                            <div class="sl_form_fields invite-user-combine">
                                <input type="text" placeholder="Key word" class="form-control">
                                <button class="button small" title="Send Invitation"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M2,21L23,12L2,3V10L17,12L2,14V21Z"></path>
                                    </svg></button>
                            </div>
                       

                       




                        <!-- Footer menus-->
                        <div class="footer-wrapper-sidebar mt-4">
                            <div class="footer-powered">
                                <p> ?? 2022 Simplest.net</p>
                            </div>

                            <hr>

                            <ul class="list-inline">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#"> Privecy</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Developers</a></li>
                                <li>
                                    <div class="dropdown dropup sun_foot_drop_menu">
                                        <a href="#" class="dropdown-toggle">
                                            More <span class="caret"></span>
                                        </a>
                                        <div uk-dropdown="pos: bottom-left ; mode:hover "
                                            class="uk-dropdown uk-dropdown-bottom-right"
                                            style="left: 745px; top: 87px;">
                                            <ul class="uk-nav uk-dropdown-nav">
                                                <li><a href="#"> View as guast </a></li>
                                                <li><a href="#"> Bloc this person </a></li>
                                                <li><a href="#"> Report abuse</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="clear"></div>
                        </div>






                    </div>
                </div>


            </div>

        </div>
                </div>




            </div>
        </div>


    </div>

     

    <!-- javaScripts 
    ================================================== -->
    <script src="assets/js/uikit.js"></script>
    <script src="assets/js/simplebar.js"></script>
    

</body>

</html>