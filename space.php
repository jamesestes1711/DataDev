<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


$dbhost = "localhost:3306";
 $dbuser = "sgchs_jestes";
 $dbpass = "hornets";
 $db = "sgchs_jestes";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

Include 'db_connection.php';
OpenCon();
$temp1 = mysqli_query($conn, "SELECT * FROM MECH_MERCH WHERE ID=1");
$final1 = mysqli_fetch_assoc($temp1);
$temp2 = mysqli_query($conn, "SELECT * FROM MECH_MERCH WHERE ID=2");
$final2 = mysqli_fetch_assoc($temp2);
$temp3 = mysqli_query($conn, "SELECT * FROM MECH_MERCH WHERE ID=3");
$final3 = mysqli_fetch_assoc($temp3);
$temp4 = mysqli_query($conn, "SELECT * FROM MECH_MERCH WHERE ID=5");
$final4 = mysqli_fetch_assoc($temp4);
$temp5 = mysqli_query($conn, "SELECT * FROM MECH_MERCH WHERE ID=6");
$final5 = mysqli_fetch_assoc($temp5);
$temp6 = mysqli_query($conn, "SELECT * FROM MECH_MERCH WHERE ID=7");
$final6 = mysqli_fetch_assoc($temp6);
$temp7 = mysqli_query($conn, "SELECT * FROM MECH_MERCH WHERE ID=9");
$final7 = mysqli_fetch_assoc($temp7);
$temp8 = mysqli_query($conn, "SELECT * FROM MECH_MERCH WHERE ID=10");
$final8 = mysqli_fetch_assoc($temp8);
$temp9 = mysqli_query($conn, "SELECT * FROM MECH_MERCH WHERE ID=11");
$final9 = mysqli_fetch_assoc($temp9);
$temp10 = mysqli_query($conn, "SELECT * FROM MECH_MERCH WHERE ID=13");
$final10 = mysqli_fetch_assoc($temp10);

//$resultr = mysqli_fetch_assoc($result);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="index.css" />
        <link rel="stylesheet" type="text/css" href="pace.css" />
      <script src="pace.js"></script>
        <link rel="icon" href="img/newlogo.png" sizes="16x16" type="image/png"> 
        <style>
            #merch #m_con th {
              border: 5px solid black;
            }
            p {
                color: rgb(255, 212, 148)
            }
            </style>
    </head>
    <body style="background-image: url('img/Picture5.png'); background-repeat: no-repeat; background-size: cover; background-size: 100% 100%;">
        <center><h1 style="color: rgb(255, 255, 255);">Deep Dive Gaming</h1></center>
        <div id="selector" bgcolor="white" style="width: 100%; height: 100%; top: 0px; position: fixed; padding-left: 0%;">
        <table  style="width: 15%; background-color: rgba(0, 0, 0, .001);">
            <tr>
               <th><h4 style="color: rgb(85, 85, 85);">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h4></th>
            </tr>
            <tr>
               <th><a href="logout.php"><input type="button" value="Log Out"></a></th>
            </tr>
            <tr>
               <th style="padding-top: 0%;"><a href="index.php"><img src="img/house1.png" width="25%" height="10%" alt="Home"></a></th>
            </tr>
            <br>
            <tr>
               <br>
               <th style="padding-top: 10%;"><a href="crys.php"><img src="img/crys1.png" width="35%" height="8%" alt="Crystal Creatures"></a></th>
            </tr>
            <br>
            <tr>
            <th style="padding-top: 10%;"><a href="space.php"><img src="img/unnamed1.png" width="30%" height="7%" alt="Untitled Mech Game"/></a></th>
            </tr>
            <tr>
               <th style="padding-top: 10%;"><a href="leader.php"><img src="img/leader1.png" width="25%" height="20%" alt="Leaderboards"/></a></th>
            </tr>
            <tr>
               <th style="padding-top: 10%; padding-left: 0px; float: left; margin-left: 0px;"><img src="img/logo.png" width="70%" height="30%" alt="Leaderboards"/></th>
            </tr>
         </table>
    </div>
<div id="merch" style="float: right;">
    <table id="merch" width="90%" style="padding-left: 20%; padding-top: 20%;">
        <tr id="m_con" style="height: 95%;">
            <th>
                <img src="img/UMG/mech.png" width="55%" height="55%" alt="Leaderboards"/>
                <p>Name: <?php echo $final1['NAME'] ?></p>
                <p>Price: <?php echo $final1['PRICE'] ?></p>
                <p>Type: <?php echo $final1['TYPE'] ?></p>
            </th>
            <th>
                <img src="img/UMG/mech2.png" width="55%" height="75%" alt="Leaderboards"/>
                <p>Name: <?php echo $final2['NAME'] ?></p>
                <p>Price: <?php echo $final2['PRICE'] ?></p>
                <p>Type: <?php echo $final2['TYPE'] ?></p>

            </th>
            <th>
                <img src="img/UMG/mech3.png" width="55%" height="35%" alt="Leaderboards"/>
                <p>Name: <?php echo $final3['NAME'] ?></p>
                <p>Price: <?php echo $final3['PRICE'] ?></p>
                <p>Type: <?php echo $final3['TYPE'] ?></p>

            </th>
            <th>
                <img src="img/UMG/mech4.png" width="75%" height="25%" alt="Leaderboards"/>
                <p>Name: <?php echo $final4['NAME'] ?></p>
                <p>Price: <?php echo $final4['PRICE'] ?></p>
                <p>Type: <?php echo $final4['TYPE'] ?></p>

            </th>

        </tr>
        <tr id="m_con" style="height: 95%;">
            <th style="width: 25%;">
                <img src="img/UMG/Mech5.png" width="50%" height="25%" alt="Leaderboards"/>
                <p>Name: <?php echo $final5['NAME'] ?></p>
                <p>Price: <?php echo $final5['PRICE'] ?></p>
                <p>Type: <?php echo $final5['TYPE'] ?></p>

            </th>
            <th style="width: 25%;">
                <img src="img/UMG/Mech6.png" width="45%" height="13%" alt="Leaderboards"/>
                <p>Name: <?php echo $final6['NAME'] ?></p>
                <p>Price: <?php echo $final6['PRICE'] ?></p>
                <p>Type: <?php echo $final6['TYPE'] ?></p>

            </th>
            <th style="width: 25%;">
                <img src="img/UMG/Mech7.png" width="100%" height="50%" alt="Leaderboards"/>
                <p>Name: <?php echo $final7['NAME'] ?></p>
                <p>Price: <?php echo $final7['PRICE'] ?></p>
                <p>Type: <?php echo $final7['TYPE'] ?></p>
            </th>
            <th style="width: 25%;">
                <img src="img/UMG/Mech8.png" width="50%" height="50%" alt="Leaderboards"/>
                <p>Name: <?php echo $final8['NAME'] ?></p>
                <p>Price: <?php echo $final8['PRICE'] ?></p>
                <p>Type: <?php echo $final8['TYPE'] ?></p>
            </th>

        </tr>
        <tr id="m_con" style="height: 95%;">
            <th>
                <img src="img/UMG/Mech9.png" width="45%" height="45%" alt="Leaderboards"/>
                <p>Name: <?php echo $final9['NAME'] ?></p>
                <p>Price: <?php echo $final9['PRICE'] ?></p>
                <p>Type: <?php echo $final9['TYPE'] ?></p>

            </th>
            <th>
                <img src="img/UMG/Mech 10.png" width="45%" height="25%" alt="Leaderboards"/>
                <p>Name: <?php echo $final10['NAME'] ?></p>
                <p>Price: <?php echo $final10['PRICE'] ?></p>
                <p>Type: <?php echo $final10['TYPE'] ?></p>

            </th>
        </tr>


        </tr>
    </table>
</div>
</body>
</html>