<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Grave Investments</title>
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
                <li class='active'><a href='schedule.php'><span>Schedule</span></a></li>
                <li class='last'><a href="sign_in.php"><span>Sign In</span></a></li>
            </ul>
        </div>
        <!-- END OF NAVIGATION BAR -->

        <div id="content">
            <br>
            <center>
                <form>
                    Date and time of funeral:
                    <input type="date" name="funeral">&nbsp
                    <input type="time" name="timeOf">
                </form>
                <br>
                <form action="action_page.php">
                    First name:<br>
                    <input type="text" name="firstname">
                    <br>
                    Last name:<br>
                    <input type="text" name="lastname">
                    <br>
                </form><br>
                <form action="">
                    <input type="radio" name="sex" value="male">Male
                    &nbsp &nbsp &nbsp
                    <input type="radio" name="sex" value="female">Female
                    &nbsp &nbsp
                    <input type="radio" name="sex" value="male">Other
                </form>
                <input type="submit" value="Submit">
            </center>
            <br>
        </div>
        <div id="footer">
            <p style="padding-top: 12px; padding-bottom: 5px">Tyler Cantrell, Juan Chavez, Aiden Navarro, Taylor Spiller [2015]</p>
        </div>
    </body>
</html>