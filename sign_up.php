<?php
require_once('connect.php');
$error = false;
$success = false;

if(@$_POST['addUser']){
    /**
     * New user was submitted. Make sure name and email are present!
     */
    if(!$_POST['email']){
        $error .= '<p>Email is a required field!</p>';
    }

    if(!$_POST['name']){
        $error .= '<p>Name is a required field!</p>';
    }

    if(!$_POST['password']){
        $error .= '<p>Password is a required field!</p>';
    }

    if(!$_POST['username']){
        $error .= '<p>Username is a required field!</p>';
    }

    if($_POST[] && )
    /**
     * If we're here...all is well. Process the insert
     */
    $stmt = $dbh->prepare('INSERT INTO users (username, password, email, name) VALUES (:username, :password, :email, :name:)');
    $result = $stmt->execute(
        array(
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'username'=>$_POST['username'],
            'password'=>$_POST['password']
        )
    );

    if($result){
        $success = "User " . $_POST['email'] . " was successfully saved.";
    }else{
        $success = "There was an error saving " . $_POST['email'];
    }
}

/**
 * We'll always want to pull the users to show them in the table
 */
$stmt = $dbh->prepare('SELECT * FROM users');
$stmt->execute();
$users = $stmt->fetchAll();
?>

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
                <li><a href='index.html'><span>Home</span></a></li>
                <li><a href='#'><span>Shop</span></a>
                    <ul>
                        <li class='has-sub'><a href='caskets.html'><span>Caskets</span></a></li>
                        <li class='has-sub'><a href='urns.html'><span>Urns</span></a></li>
                        <li class='has-sub'><a href='flower.html'><span>Flowers</span></a></li>
                    </ul>
                </li>
                <li><a href='schedule.html'><span>Schedule</span></a></li>
                <li class='last active'><a href="sign_in.html"><span>Sign In</span></a></li>
            </ul>
        </div>
        <!-- END OF NAVIGATION BAR -->

        <!-- All of the information the new user will have to fill out. A table to organize the input fields -->
        <div id="content">
            <div class="container">
                <!-- Error Messages -->
                <div class="error">
                    <?php
                    if($error){
                        echo $error;
                        echo '<br /><br />';
                    }
                    ?>
                </div>
                ​
                <div class="success">
                    <?php
                    if($success){
                        echo $success;
                        echo '<br /><br />';
                    }
                    ?>
                </div>
                <!-- End of Error Messages -->

                <!-- REGISTRATION FORM -->
                <div class="text-center" style="padding:50px 0">
                    <div class="logo">Register</div>
                    <!-- Main Form -->
                    <div class="login-form-1">
                        <form id="register-form" class="text-left" method="post">
                            <div class="login-form-main-message"></div>
                            <div class="main-login-form">
                                <div class="login-group">
                                    <div class="form-group">
                                        <label for="reg_username" class="sr-only">Email address</label>
                                        <input type="text" class="form-control" id="reg_username" name="username" placeholder="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_password" class="sr-only">Password</label>
                                        <input type="password" class="form-control" id="reg_password" name="password" placeholder="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_password_confirm" class="sr-only">Password Confirm</label>
                                        <input type="password" class="form-control" id="reg_password_confirm" name="password_confirm" placeholder="confirm password">
                                    </div>

                                    <div class="form-group">
                                        <label for="reg_email" class="sr-only">Email</label>
                                        <input type="text" class="form-control" id="reg_email" name="email" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="reg_fullname" class="sr-only">Full Name</label>
                                        <input type="text" class="form-control" id="reg_fullname" name="name" placeholder="name">
                                    </div>

                                    <div class="form-group login-group-checkbox">
                                        <input type="checkbox" class="" id="reg_agree" name="reg_agree">
                                        <label for="reg_agree">i agree with <a href="#">terms</a></label>
                                    </div>
                                </div>
                                <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                            </div>
                            <div class="etc-login-form">
                                <p>already have an account? <a href="sign_in.html">login here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end:Main Form -->

                <?php
                if($users && count($users)){
                    ?>
                    <table>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($users as $user){
                            ?>
                            <tr>
                                <td><?php echo $user['name']?></td>
                                <td><?php echo $user['email']?></td>
                                <td><?php echo $user['username']?></td>
                                <td><?php echo $user['password']?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                    <?php
                }else{
                    echo "There are no users in this system.";
                }
                ?>

            </div>
        </div>

        <div id="footer">
            <p style="padding-top: 12px; padding-bottom: 5px">Tyler Cantrell, Juan Chavez, Aiden Navarro, Taylor Spiller [2015]</p>
        </div>
        <script rel="script" type="text/javascript" src="js/registration.js"></script>
    </body>
</html>

