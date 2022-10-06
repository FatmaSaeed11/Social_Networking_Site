<?php
    require_once 'F:\xampp\htdocs\project_php\controllers\authController.php';
    require_once 'F:\xampp\htdocs\project_php\controllers\DBController.php';
    session_start();
    $_SESSION['postDelete']=3;
    
    $ath=new AuthController;
    $test=$ath->displayTopic();
    
    if(isset($_GET['postInput'])){
        echo '<h1 style="color:red;">this is the post ::: '.$_GET['postInput'].'</h1>';
    }
    if(isset($_GET['postInput'])&&!empty($_GET['postInput'])){
        $auth=new AuthController;
        if($auth->addPost($_GET['postInput'],$_SESSION['usernameInput'])){
            //echo '<h1 style="color:red;">post added"</h1>';
            //echo "post added";
            //rate function here...
        }
        //else echo"cannot add post";
    }
    //else echo'<p style="color:red;">you did not enter a post<p>'; 
    
    /*if(isset($_GET['commentInput'])){
        echo"<p style='color:red;'>this is the comment ::: ".$_GET['commentInput']."</p>";
    }*/
    for($i=0;$i<sizeof($test);$i++){
        if(isset($test)){
            if(isset($_GET['commentInput'.$i])&&!empty($_GET['commentInput'.$i])){
                //echo"<p style='color:red;'>this is the comment ::: ".$_GET['commentInput'.$i]."<br></p>";
                $auth=new AuthController;
                if($auth->addComment($_SESSION['usernameInput'],$test[$i]['topic_id'],$_GET['commentInput'.$i])){
                    echo"<p style='color:red;'>comment added succesfully!!</p>";
                    $ath=new AuthController;
                    $ath->ratePost($_GET['commentInput'.$i],$test[$i]['topic_id']);
                }
                else "no comment added";
            }
            else ;//echo "no<br>";
        }
    }
    function Comment_display($topic_id){
        $ath=new AuthController;
        return $ath->displayComment($topic_id);
    }
    function deleteTest($user_name,$topic_id,$description){
        echo '<p style="color:red;">';
        echo $user_name.'<br>';
        echo $topic_id.'<br>';
        echo $description.'<br>';
        echo'</p>';
    }
?>

<!doctype html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title><?php echo $_SESSION['usernameInput'];?></title>
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
                   <a href="feeds.html"> <img src="../assets/images/74.jpg" alt=""></a>
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
                placeholder="Search..." autocomplete="off">
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
                    <img src="../assets/images/avatars/74.jpg" alt="">
                </div>
                <div class="dropdown-user-avatar">
                    <img src="../assets/images/avatars/74.jpg" alt="">
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

</div> 
           </header>

       </div>


            <div class="main_content_inner">


                <div uk-grid>

                    <div class="uk-width-expand">                        
                        <div class="sl_sidebar_sugs_title mt-1"> Add post
                        </div>
                        <form action="#" class="invite-user-form">
                            <div class="sl_form_fields invite-user-combine">
                                <input type="text" placeholder="<?php echo"what's on your mind,".$_SESSION['usernameInput']."!";?>"  name ="postInput" class="form-control">
                                <button class="button small" title="Send Invitation"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M2,21L23,12L2,3V10L17,12L2,14V21Z"></path></svg>
                                </button>
                            </div>
                            <br>
                        <?php echo 'this the size of table : '.sizeof($test); for($i=0;$i<sizeof($test);$i++){?>
                            <div class="post">
                                <div class="post-heading">
                                    <div class="post-avature">
                                        <img src="../assets/images/avatars/avatar-6.jpg" alt="">
                                    </div>
                                    <div class="post-title">
                                        <h4> <?php
                                            echo $test[$i]['topic_user_name'];?></h4>
                                        <p> 5 <span> hrs</span> <i class="uil-users-alt"></i> </p>
                                    </div>
                                    <div class="post-btn-action">
                                    <?php if($test[$i]['topic_user_name']==$_SESSION['usernameInput']){?>
                                        <input type="submit"  value="delete" class="button small" name="<?php echo'deleteButton'.$i;?>">
                                        <?php if(isset($_GET['deleteButton'.$i])){
                                            //deleteTest($test[$i]['topic_user_name'],$test[$i]['topic_id'],$test[$i]['topic_description']);
                                            $dtAth=new AuthController;
                                            if($dtAth->deleteTopic($test[$i]['topic_id'])){
                                                echo "deleted succfully";
                                            }
                                            else echo "failed";
                                        }
                                            ?>
                                    </input>
                                    <?php }?>
                                    </div>
                                </div>
                                <div class="post-description">
                                    <div>
                                        <p><?php echo $test[$i]['topic_description'];?><hr><p>
                                    </div>

                                    <div class="post-state-details">
                                        
                                        <?php $comm_arr=Comment_display($test[$i]['topic_id']);?>
                                        <p><?php echo sizeof($comm_arr);?> Comments</p>
                                    </div>

                                </div>
                                
                                <div class="post-state">
                                    
                                    <div class="post-state-btns"><span> Comment</span>
                                    </div>
                            
                            
                                 </div>
                        
                        <!-- post comments -->
                        <div class="post-comments">
                            <?php for($j=0;$j<sizeof($comm_arr);$j++){?>
                                    <div class="post-comments-single">
                                        <div class="post-comment-avatar">
                                            <img src="../assets/images/avatars/avatar-5.jpg" alt="">
                                        </div>
                                        <div class="post-comment-text">
                                            <div class="post-comment-text-inner">
                                                <h6> <?php echo $comm_arr[$j]['user_name'];?></h6>
                                                <p> <?php echo $comm_arr[$j]['description'];?> </p>
                                            </div>
                                            
                                        </div>
                                        <a href="#" class="post-comment-opt"></a>
                                    </div>
                                    <?php }?>
                                    <div class="post-add-comment">
                                        <div class="post-add-comment-avature">
                                            <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="post-add-comment-text-area">
                                            <input type="text" name="commentInput<?php echo $i;?>" placeholder='add a comment <?php echo $_SESSION['usernameInput'];?>'>
                                            <div class="icons"> 
                                                
                                                <span class="uil-grin"></span>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <?php }?>
                            <!-- <div class="sl_form_fields invite-user-combine">-->
                                
                                <!-- </div> -->
                                
                                <!-- Footer menus-->
                                <div class="footer-wrapper-sidebar mt-4">
                                    
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