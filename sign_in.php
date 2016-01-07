<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <script src="jquery-2.1.4.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/navbar.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="pics/favico.ico" />

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

    <style>
        .info
        {
            padding-left: 10px;
        }
        .info p, input
        {
            display: inline-block;
            vertical-align: baseline;
            width: 180px;
        }
        .info p
        {
            margin-top: 1px;
        }

        form, input
        {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }
        .buttons
        {
            margin-bottom: 15px;
        }
    </style>
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
                <li class='has-sub'><a href='urns.html'><span>Urns</span></a></li>
                <li class='has-sub'><a href='flower.php'><span>Flowers</span></a></li>
            </ul>
        </li>
        <li><a href='schedule.php'><span>Schedule</span></a></li>
        <li class='last active'><a href="sign_in.php"><span>Sign In</span></a></li>
    </ul>
</div>
<!-- END OF NAVIGATION BAR -->

<!-- The content for signing in: the title, the input fields, and a button! -->
<div id="content">
    <!-- LOGIN FORM -->
    <div class="text-center" style="padding:50px 0">
        <div class="logo">login</div>
        <!-- Main Form -->
        <div class="login-form-1">
            <form id="login-form" class="text-left">
                <div class="login-form-main-message"></div>
                <div class="main-login-form">
                    <div class="login-group">
                        <div class="form-group">
                            <label for="lg_username" class="sr-only">Username</label>
                            <input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label for="lg_password" class="sr-only">Password</label>
                            <input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
                        </div>
                        <div class="form-group login-group-checkbox">
                            <input type="checkbox" id="lg_remember" name="lg_remember">
                            <label for="lg_remember">remember</label>
                        </div>
                    </div>
                    <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                </div>
                <div class="etc-login-form">
                    <p>new user? <a href="sign_up.php">create new account</a></p>
                </div>
            </form>
        </div>
        <!-- end:Main Form -->
    </div>
</div>

<div id="footer">
    <p style="padding-top: 12px; padding-bottom: 5px">Tyler Cantrell, Juan Chavez, Aiden Navarro, Taylor Spiller [2015]</p>
</div>

</body>

</html>