<?php
    session_start();
    require_once 'F:\xampp\htdocs\project_php\controllers\authController.php';
    require_once 'F:\xampp\htdocs\project_php\controllers\DBController.php';

    $total=false;
    $ath=new AuthController;
    $test=$ath->displayKeyword();
    //print_r($test);

    $auth=new AuthController;
    //echo '<style>#H1{color:red;}</style><p id="H1">data : '.$_GET['keyWord'].' '.$_GET['flag'].' '.$_SESSION['usernameInput'].'</p><br>';

    if(isset($_GET['flag'])&&isset($_GET['keyWord'])){
        if($auth->addKeyword($_GET['keyWord'],$_GET['flag'],$_SESSION['usernameInput'])){
            //echo"key word added";
        }
        else ;//echo"no key word was added";
    }
    else ;//echo"<style>#H1{color:red;}</style><h1 id='H1'>NO WAY</h1>";
?>

<!doctype html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Simplest is - Professional A unique and beautiful collection of UI elements">
    <link rel="icon" href="../assets/images/favicon.png">

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/uikit.css">
    <link rel="stylesheet" href="../assets/css/uikit.css">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="../assets/css/icons.css">
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
                   <a href="feeds.html"> <img src="../assets/images/logo-light.png" alt=""></a>
               </div>
               <?php for($i=0;$i<5;$i++)echo"<br>";?>
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
                           <p>© 2022 <strong>Simplest</strong>. All Rights Reserved. </p>
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
                       <a href="feeds.html"> <img src="../assets/images/logo.png" alt=""></a>
                       <a href="feeds.html"> <img src="../assets/images/logo-light.png" class="logo-inverse"
                               alt=""></a>
                   </div>

                   <!-- form search-->
                   <div class="head_search">
                       <form>
                           <div class="head_search_cont">
                               <input value="" type="text" class="form-control"
                                   placeholder="Search.." autocomplete="off">
                               <i class="s_icon uil-search-alt"></i>
                           </div>

                           <!-- Search box dropdown -->
                           <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small"
                               class="dropdown-search display-hidden">
                               <!-- User menu -->

                               <ul class="dropdown-search-list">
                                   <li class="list-title"> Recent Searches </li>
                                   <li> <a href="#">
                                           <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                           <p> Erica Jones <span> 2 hours ago </span> </p>
                                       </a>
                                   </li>
                                   <li> <a href="#">
                                           <img src="../assets/images/avatars/avatar-3.jpg" alt="">
                                           <p> Adrian Mohani <span> 13 days ago </span> </p>
                                       </a>
                                   </li>
                                   <li> <a href="#">
                                           <img src="../assets/images/avatars/avatar-4.jpg" alt="">
                                           <p> Mountain Riders <span> 3 days ago <span>Group</span> </span> </p>
                                       </a>
                                   </li>
                                   <li> <a href="#">
                                           <img src="../assets/images/avatars/avatar-5.jpg" alt="">
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
                                               <img src="../assets/images/avatars/avatar-2.jpg" alt="">
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
                                               <img src="../assets/images/avatars/avatar-3.jpg" alt="">
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
                                               <img src="../assets/images/avatars/avatar-1.jpg" alt="">
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
                                               <img src="../assets/images/avatars/avatar-4.jpg" alt="">
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
                                               <img src="../assets/images/avatars/avatar-2.jpg" alt="">
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
                                               <img src="../assets/images/avatars/avatar-3.jpg" alt="">
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
                                               <img src="../assets/images/avatars/avatar-1.jpg" alt="">
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
                                               <img src="../assets/images/avatars/avatar-4.jpg" alt="">
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
                                               <img src="../assets/images/avatars/avatar-2.jpg" alt="">
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
                                               <img src="../assets/images/avatars/avatar-3.jpg" alt="">
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
                                               <img src="../assets/images/avatars/avatar-4.jpg" alt="">
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
                                               <img src="../assets/images/avatars/avatar-2.jpg" alt="">
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
                                               <img src="../assets/images/avatars/avatar-3.jpg" alt="">
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
                                               <img src="../assets/images/avatars/avatar-4.jpg" alt="">
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
                       <a class="opts_account" href="#"> <img src="../assets/images/avatars/avatar-2.jpg" alt=""></a>

                       <!-- profile dropdown-->
                       <div uk-dropdown="mode:click ; animation: uk-animation-slide-bottom-small"
                           class="dropdown-notifications rounded display-hidden">

                           <!-- User Name / Avatar -->
                           <!-- User Name / Avatar -->
                           <a href="timeline.html">

                               <div class="dropdown-user-details">

                                   <div class="dropdown-user-cover">
                                       <img src="../assets/images/avatars/profile-cover.jpg" alt="">
                                   </div>
                                   <div class="dropdown-user-avatar">
                                       <img src="../assets/images/avatars/avatar-1.jpg" alt="">
                                   </div>
                                   <div class="dropdown-user-name"> <?php echo $_SESSION['usernameInput'];?> </div>
                               </div>

                           </a>

                           <ul class="dropdown-user-menu">
                               <li><a href="../Auth/login.php"> <i class="fas fa-sign-out-alt"></i>Log Out</a></li>
                           </ul>

                           <hr class="m-0">
                           <ul class="dropdown-user-menu">
                           </ul>

                       </div>


                   </div>

               </div> <!-- / heaader-innr -->
           </header>

       </div>


            <div class="main_content_inner">


                <div uk-grid>

                    <div class="uk-width-expand">

                  <!--  
                                        -->
                        
                        <div class="sl_sidebar_sugs_title mt-1"> Add Key word</div>
                        <form action="#" class="invite-user-form">
                            <div class="sl_form_fields invite-user-combine">
                                <input type="text" placeholder="Key word"  name ="keyWord" class="form-control">
                                <button class="button small" title="Send Invitation"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M2,21L23,12L2,3V10L17,12L2,14V21Z"></path></svg>
                                </button>
                            </div>
                            <br>
                           <!-- <div class="sl_form_fields invite-user-combine">-->
                                    <input type="radio" value=1 name="flag">
                                     <label for="good" >good</label><br>
                                     <input type="radio" value=0 name="flag" >
                                     <label for="bad" >bad</label><br> 
                           <!-- </div> -->

                        <!-- Footer menus-->
                        <div class="footer-wrapper-sidebar mt-4">
                        <table id="customers" >
                            <style>
                                #customers {
                                font-family: Arial, Helvetica, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                                }

                                #customers td, #customers th {
                                border: 1px solid #ddd;
                                padding: 8px;
                                }

                                #customers tr:nth-child(even){background-color: #f2f2f2;}

                                #customers tr:hover {background-color: #ddd;}

                                #customers th {
                                padding-top: 12px;
                                padding-bottom: 12px;
                                text-align: left;
                                background-color: #1c3faa;
                                color: white;
                                }
                            </style>
                            <tr>
                                <th>description</th>
                                <th>flag</th>
                                <th>user_name_key</th>
                            </tr>
                            <?php
                                
                                for($i=0;$i<sizeof($test);$i++){
                            ?>  
                            <tr>
                                    <td><?php echo $test[$i]['description']; ?></td>
                                    <td><?php echo $test[$i]['flag']; ?></td>
                                    <td><?php echo $test[$i]['user_name_key']; ?></td>
                            </tr> 
                            <?php }?>
                        </table>
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
    <script src="../assets/js/uikit.js"></script>
    <script src="../assets/js/simplebar.js"></script>
    

</body>

</html>