<?php
    session_start();
    require_once '../../Models/person.php';
    require_once '../../Models/user.php';
    require_once '../../Models/admin.php';
    require_once '../../controllers/authController.php';

    //header("Location: ..\admin\adminView.php");
    //header("Location: https://www.geeksforgeeks.org");

    $ans=3;
    //require_once 'F:\xampp\htdocs\project_php\Views\admin\adminView.php';
    if (isset($_GET['usernameInput'])){
        $_SESSION['usernameInput']=$_GET['usernameInput'];
    }
    if(isset($_GET['usernameInput'])&&isset($_GET['passwordInput'])){
        if(!empty($_GET['usernameInput'])&&!empty($_GET['passwordInput'])){
            $auth=new AuthController;
            $person=new Person;
            
            //$user->setUsername($_GET['usernameInput']);
            $person->username=$_GET['usernameInput'];
            //$user->setPassword($_GET['passwordInput']);
            $person->password=$_GET['passwordInput'];
            

            $ans=$auth->login($person);
            /*if($ans==1){
                echo"i am a user";
            }
            else {
                echo"i am an admin";
            }*/
            
        }
    }
    else{
        //echo"there is an error '-'";
    }
    
    ?>
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

<body class="bg-white">



    <!-- Content
    ================================================== -->
    <div uk-height-viewport class="uk-flex uk-flex-middle">
        <div class="uk-width-2-3@m uk-width-1-2@s m-auto rounded uk-overflow-hidden shadow-lg">
            <div class="uk-child-width-1-2@m uk-grid-collapse bg-gradient-primary" uk-grid>

                <!-- column one -->
                <div class="uk-margin-auto-vertical uk-text-center uk-animation-scale-up p-3 uk-light">
                    <img src="assets/images/logo-light-icon.png" alt="">
                    <h3 class="mb-3 mt-lg-4"> Simplest</h3>
                    <p>Share what's new and life moments with <br> your friends. </p>
                </div>

                <!-- column two -->
                <div class="uk-card-default px-5 py-8">
                    <div class="mb-4 uk-text-center">
                        <h2 class="mb-0"> Welcome back</h3>
                        <p class="my-2">Login to manage your account.</p>
                        <div class="error" ><style>.error{ color: #D8000C;background-color: #FFBABA;}</style><?php if($ans==0)echo "Enter correct Username & Password"?></div>
                    </div>
                    <form>

                        <div class="uk-form-group">
                            <label class="uk-form-label"> username</label>

                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-user"></i>
                                </span>
                                <input class="uk-input" type="text" name="usernameInput" placeholder="@username">
                            </div>

                        </div>

                        <div class="uk-form-group">
                            <label class="uk-form-label"> Password</label>

                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-lock"></i>
                                </span>
                                <input class="uk-input" type="password" name="passwordInput" placeholder="********">
                            </div>

                        </div>

                    

                        <div class="mt-4 uk-flex-middle uk-grid-small" uk-grid>
                            <div class="uk-width-expand@s">
                                <p> Don't have account <a href="Signup.php">Sign up</a></p>
                            </div>
                            <div class="uk-width-auto@s">
                                 
                                <!--<a href='https://www.facebook.com/'><button type="submit" class="button primary" >get started</button></a>-->
                                
                                <button type="submit" class="button primary">
                                    
                                    get started
                                </button>
                                
                                <!--..\admin\adminView.php-->
                            </div>
                            </div>
                        </div>

                    </form>
                </div><!--  End column two -->

            </div>
        </div>
    </div>

    <!-- Content -End
    ================================================== -->


     

    <!-- javaScripts
    ================================================== -->
    <script src="assets/js/uikit.js"></script>
    <script src="assets/js/simplebar.js"></script>
    


</body>

</html>