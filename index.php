<?php
Include 'db_connection.php';

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//    header("location: login.php");
//    exit;
//}

$dbhost = "localhost:3306";
$dbuser = "sgchs_jestes";
$dbpass = "hornets";
$db = "sgchs_jestes";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

if($_SESSION["display"] == "" || isset($_SESSION["display"]) == false){
   $_SESSION["display"] = "Guest";
 }

if($_SESSION["display"] == "Guest"){
    $logtext = "Log In";
}   else{
    $logtext = "Log Out";
}

?>


<html>

<head>
    <script src="functions.js"></script>
    <script type='text/javascript'>
    title = "Home | Deep Dive Gaming | ";
    position = 0;

    function scrolltitle() {
        document.title = title.substring(position, title.length) + title.substring(0, position);
        position++;
        if (position > title.length) position = 0;
        titleScroll = window.setTimeout(scrolltitle, 200);
    }
    scrolltitle();
    </script>
    <link rel="stylesheet" type="text/css" href="pace.css" />
    <script src="pace.js"></script>
    <link rel="icon" href="img/newlogo.png" sizes="16x16" type="image/png">
    <style>
    #merch #m_con th {
        border: 5px solid black;
    }
    </style>
</head>

<body onload="startTime()"
    style="background-image: url('img/black.png'); background-repeat: no-repeat; background-size: cover; background-size: 100% 100%;">
    <center>
        <h1 style="color: rgb(255, 255, 255);">Deep Dive Gaming</h1>
    </center>
    <div id="selector" bgcolor="white" style="width: 100%; height: 100%; top: 0px; position: fixed; padding-left: 0px;">
        <table style="width: 15%; background-color: rgba(0, 0, 0, .001);">
            <tr>
                <th>
                    <h4 style="color: rgb(85, 85, 85);">Hi,
                        <b><?php echo htmlspecialchars($_SESSION["display"]); ?></b>.</h4>
                </th>
            </tr>
            <tr>
                <th><a href="logout.php"><input type="button" id="loginout" value="<?php echo $logtext?>"></a></th>
            </tr>
            <tr>
                <th style="padding-top: 0%;"><a href="index.php"><img src="img/house1.png" width="25%" height="10%"
                            alt="Home"></a></th>
            </tr>
            <br>
            <tr>
                <br>
                <th style="padding-top: 0%;"><a href="crys.php"><img src="img/crys1.png" width="35%" height="8%"
                            alt="Crystal Creatures"></a></th>
            </tr>
            <br>
            <tr>
                <th style="padding-top: 0%;"><a href="space.php"><img src="img/unnamed1.png" width="30%" height="7%"
                            alt="Untitled Mech Game" /></a></th>
            </tr>
            <tr>
                <th style="padding-top: 0%;"><a href="leader.php"><img src="img/leader1.png" width="25%" height="20%"
                            alt="Leaderboards" /></a></th>
            </tr>
            <!--
            <tr>
                <th style="padding-top: 0%; padding-left: 0px; float: left; margin-left: 0px;"><a href="cart.php"><img src="img/cart.png"
                        width="30%" height="15%" alt="Leaderboards" /></a></th>
            </tr>
   -->

            <tr>
                <th style="padding-top: 42%; padding-left: 0px; float: left; margin-left: 0px;"><img src="img/logo.png"
                        width="70%" height="30%" alt="Leaderboards" /></th>
            </tr>
            <tr>
                <th>
                    <div id=txt></div>
                </th>
            </tr>
        </table>
    </div>
    <div id="int_crys">
        <center>
            <h2 style="color: rgb(255, 255, 255);">Crystal Creatures</h2>
            <p style="color: rgb(255, 255, 255);">
                Complete This Jacob! Complete This Jacob! Complete This Jacob! Complete This Jacob! Complete This Jacob!
            </p>
    </div>
    </center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="int_mech" style="padding-bottom: 25%;">
        <center>
            <h2 style="color: rgb(175, 0, 0);">Untitled Mech Game</h2>
            <p style="color: rgb(175, 0, 0);">
                Untitled Mech Game is a game where you start on an abandoned planet. To survive you must move
                <br>to other planers to find new resources to depend on. There is a plethora of other planets to
                <br>explore featuring a fire planet, a gas giant, and a seemingly peaceful planet with a deadly
                <br>secret.
            </p>
    </div>
    </center>
</body>

</html>