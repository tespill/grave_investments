<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <script src="jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/navbar.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="pics/favico.ico"/>

        <!-- Bootstrap Links -->
        <script rel="script" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

        <!-- Registration Links -->
        <link rel="stylesheet" type="text/css" href="css/registration.css"/>
        <script rel="script" type="text/javascript" src="js/registration.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    </head>

    <body>
        <header>
            <img alt="Grave Investments" src="pics/logo.png">
        </header>

        <!-- NEW NAVIGATION BAR
                http://cssmenumaker.com/menu/animated-responsive-drop-down-menu
                -->
        <div style="z-index: 10" id='cssmenu'>
            <ul>
                <li><a href='index.php'><span>Home</span></a></li>
                <li><a href='#'><span>Shop</span></a>
                    <ul>
                        <li class='has-sub'><a href='caskets.php'><span>Caskets</span></a></li>
                        <li class='has-sub'><a href='urns.php'><span>Urns</span></a></li>
                        <li class='has-sub'><a href='flower.php'><span>Flowers</span></a></li>
                    </ul>
                </li>
                <li><a href='schedule.php'><span>Schedule</span></a></li>
                <li class='last active'><a href="sign_in.php"><span>Sign In</span></a></li>
            </ul>
        </div>
        <!-- END OF NAVIGATION BAR -->

        <!-- All of the information the new user will have to fill out. A table to organize the input fields -->
        <div id="content">
            <div class="container">
                <!-- REGISTRATION FORM -->
                <div class="text-center" style="padding:50px 0">
                    <div class="logo">Register</div>
                    <!-- Main Form -->
                    <div class="login-form-1">
                        <form id="register-form" class="text-left">
                            <div class="login-form-main-message"></div>
                            <div class="main-login-form">
                                <div class="login-group">
                                    <div class="form-group">
                                        <label for="reg_username" class="sr-only">Email address</label>
                                        <input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_password" class="sr-only">Password</label>
                                        <input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_password_confirm" class="sr-only">Password Confirm</label>
                                        <input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
                                    </div>

                                    <div class="form-group">
                                        <label for="reg_email" class="sr-only">Email</label>
                                        <input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_fullname" class="sr-only">Full Name</label>
                                        <input type="text" class="form-control" id="reg_fullname" name="reg_fullname" placeholder="full name">
                                    </div>

                                    <div class="form-group login-group-checkbox">
                                        <input type="checkbox" class="" id="reg_agree" name="reg_agree">
                                        <label for="reg_agree">i agree with <a href="#">terms</a></label>
                                    </div>
                                </div>
                                <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                            </div>
                            <div class="etc-login-form">
                                <p>already have an account? <a href="sign_in.php">login here</a></p>
                            </div>
                        </form>
                    </div>
                    <!-- end:Main Form -->
                </div>

            </div>
        </div>

        <div id="footer">
            <p style="padding-top: 12px; padding-bottom: 5px">Tyler Cantrell, Juan Chavez, Aiden Navarro, Taylor Spiller [2015]</p>
        </div>
        <script rel="script" type="text/javascript" src="js/registration.js"></script>
    </body>
</html>