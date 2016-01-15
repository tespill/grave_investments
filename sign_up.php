<!DOCTYPE html>
<?php
require_once('connect.php');
$error = false;
$success = false;

if(@$_POST['addUser']){
    /**
     * New user was submitted. Make sure name and email are present!
     */
    if(!$_POST['email'] || !$_POST['username'] || !$_POST['name'] || !$_POST['password']){
        $error .= '<p>Please enter all fields.</p>';
    }

    if($_POST['password'] != $_POST['password_confirm']){
        $error .= '<p>Your passwords do not match.</p>';
    }

    /**
     * If we're here...all is well. Process the insert
     */
    if($_POST['name'] && $_POST['email'] && $_POST['password'] && $_POST['username'] && $_POST['password'] == $_POST['password_confirm']) {

        $stmt = $dbh->prepare('INSERT INTO users (name, email, password, username) VALUES (:name, :email, :password, :username)');
        $result = $stmt->execute(
            array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'username' => $_POST['username']
            )
        );


        if ($result) {
            $success = "User " . $_POST['email'] . " was successfully saved.";
        } else {
            $success = "There was an error saving " . $_POST['email'];
        }
    }
}
?>

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
                        <form id="register-form" class="text-left" name="addUser" method="post">
                            <div class="login-form-main-message"></div>
                            <div class="main-login-form">
                                <div class="login-group">
                                    <div class="form-group">
                                        <label for="reg_username" class="sr-only">Email address</label>
                                        <input type="text" class="form-control" name="username" placeholder="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_password" class="sr-only">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_password_confirm" class="sr-only">Password Confirm</label>
                                        <input type="password" class="form-control" name="password_confirm" placeholder="confirm password">
                                    </div>

                                    <div class="form-group">
                                        <label for="reg_email" class="sr-only">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_fullname" class="sr-only">Full Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="name">
                                    </div>

                                    <div class="form-group login-group-checkbox">
                                        <input type="checkbox" class="" id="reg_agree" name="reg_agree">
                                        <label for="reg_agree">i agree with <a href="#">terms</a></label>
                                    </div>
                                </div>
                                <button type="submit" class="login-button" name="addUser" value="1"><i class="fa fa-chevron-right"></i></button>
                            </div>
                            <div class="etc-login-form">
                                <p>already have an account? <a href="sign_in.php">login here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end:Main Form -->

                <div align="center" class="error">
                    <?php
                    if($error){
                        echo $error;
                        echo '<br /><br />';
                    }
                    ?>
                </div>
                ​
                <div align="center" class="success">
                    <?php
                    if($success){
                        echo $success;
                        echo '<br /><br />';
                    }
                    ?>
                </div>
            </div>
        </div>

        <div id="footer">
            <p style="padding-top: 12px; padding-bottom: 5px">Tyler Cantrell, Juan Chavez, Aiden Navarro, Taylor Spiller [2015]</p>
        </div>
        <script rel="script" type="text/javascript" src="js/registration.js"></script>
    </body>
</html>

