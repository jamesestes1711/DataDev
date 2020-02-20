<?php
Include 'db_connection.php';
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
/*
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
header("location: login.php");
exit;
}
*/


if($_SESSION["display"] == "Guest"){
    $logtext = "Log In";
}   else{
    $logtext = "Log Out";
}

$dbhost = "localhost:3306";
$dbuser = "sgchs_jestes";
$dbpass = "hornets";
$db = "sgchs_jestes";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
OpenCon();
$temp1 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=1") or die("Database query failed: 1");
$final1 = mysqli_fetch_assoc($temp1) or die("Query to array failed: 1");
$temp2 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=2") or die("Database query failed: 2");
$final2 = mysqli_fetch_assoc($temp2) or die("Query to array failed");
$temp3 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=3") or die("Database query failed: 3");
$final3 = mysqli_fetch_assoc($temp3) or die("Query to array failed");
$temp4 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=4") or die("Database query failed: 4");
$final4 = mysqli_fetch_assoc($temp4) or die("Query to array failed");
$temp5 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=5") or die("Database query failed: 5");
$final5 = mysqli_fetch_assoc($temp5) or die("Query to array failed");
$temp6 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=6") or die("Database query failed: 6");
$final6 = mysqli_fetch_assoc($temp6) or die("Query to array failed");
$temp7 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=7") or die("Database query failed: 7");
$final7 = mysqli_fetch_assoc($temp7) or die("Query to array failed");
$temp8 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=8") or die("Database query failed: 8");
$final8 = mysqli_fetch_assoc($temp8) or die("Query to array failed");
$temp9 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=9") or die("Database query failed: 9");
$final9 = mysqli_fetch_assoc($temp9) or die("Query to array failed");
$temp10 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=10") or die("Database query failed: 10");
$final10 = mysqli_fetch_assoc($temp10) or die("Query to array failed");
$temp11 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=11") or die("Database query failed: 11");
$final11 = mysqli_fetch_assoc($temp11) or die("Query to array failed");
$temp12 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=12") or die("Database query failed: 12");
$final12 = mysqli_fetch_assoc($temp12) or die("Query to array failed");
$temp13 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=13") or die("Database query failed: 13");
$final13 = mysqli_fetch_assoc($temp13) or die("Query to array failed");
$temp14 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=14") or die("Database query failed: 14");
$final14 = mysqli_fetch_assoc($temp14) or die("Query to array failed");
$temp15 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=15") or die("Database query failed: 15");
$final15 = mysqli_fetch_assoc($temp15) or die("Query to array failed");
$temp16 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=16") or die("Database query failed: 16");
$final16 = mysqli_fetch_assoc($temp16) or die("Query to array failed");
$temp17 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=17") or die("Database query failed: 17");
$final17 = mysqli_fetch_assoc($temp17) or die("Query to array failed");
$temp18 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=18") or die("Database query failed: 18");
$final18 = mysqli_fetch_assoc($temp18) or die("Query to array failed");
$temp19 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=19") or die("Database query failed: 19");
$final19 = mysqli_fetch_assoc($temp19) or die("Query to array failed");
$temp20 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=20") or die("Database query failed: 20");
$final20 = mysqli_fetch_assoc($temp20) or die("Query to array failed");
$temp21 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=21") or die("Database query failed: 21");
$final21 = mysqli_fetch_assoc($temp21) or die("Query to array failed");
$temp22 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=22") or die("Database query failed: 22");
$final22 = mysqli_fetch_assoc($temp22) or die("Query to array failed");
$temp23 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=23") or die("Database query failed: 23");
$final23 = mysqli_fetch_assoc($temp23) or die("Query to array failed");
$temp24 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=24") or die("Database query failed: 24");
$final24 = mysqli_fetch_assoc($temp24) or die("Query to array failed");
$temp25 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_MERCH WHERE ID=25") or die("Database query failed: 25");
$final25 = mysqli_fetch_assoc($temp25) or die("Query to array failed");

if($_SESSION["display"] == ""){
  $_SESSION["display"] = "Guest";
}

?>
<html>

<head>
<script src="functions.js"></script>

    <script type='text/javascript'>
    title = "Crystal Creatures | Deep Dive Gaming | ";
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
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link rel="icon" href="img/newlogo.png" sizes="16x16" type="image/png">
    <style>
    #merch #m_con th {
        border: 5px solid black;
    }

    p {
        color: rgb(255, 255, 255)
    }
    </style>
</head>

<body onload="startTime()"
    style="background-image: url('img/Picture7.png'); background-repeat: no-repeat; background-size: cover; background-size: 100% 100%;">
    <center>
        <h1 style="color: rgb(255, 255, 255);">Deep Dive Gaming
        </h1>
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
    <div id="merch" style="float: right; padding-top: 0px;">
        <table id="merch" width="90%" style="padding-left: 20%; padding-top: 20%;">
            <tr id="m_con" style="height: 95%;">
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Armadillo.png" width="55%" height="15%" alt="Leaderboards" />
                    <p>Name: <?php echo $final1['NAME'] ?></p>
                    <p>Price: <?php echo $final1['COST'] ?></p>
                    <p>Type: <?php echo $final1['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Cactile.png" width="55%" height="55%" alt="Leaderboards" />
                    <p>Name: <?php echo $final2['NAME'] ?></p>
                    <p>Price: <?php echo $final2['COST'] ?></p>
                    <p>Type: <?php echo $final2['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Combiotic.png" width="45%" height="15%" alt="Leaderboards" />
                    <p>Name: <?php echo $final3['NAME'] ?></p>
                    <p>Price: <?php echo $final3['COST'] ?></p>
                    <p>Type: <?php echo $final3['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Echopus.png" width="25%" height="25%" alt="Leaderboards" />
                    <p>Name: <?php echo $final4['NAME'] ?></p>
                    <p>Price: <?php echo $final4['COST'] ?></p>
                    <p>Type: <?php echo $final4['TYPE'] ?></p>
                </th>
            </tr>
            <tr id="m_con" style="height: 95%;">
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Felice.png" width="55%" height="55%" alt="Leaderboards" />
                    <p>Name: <?php echo $final5['NAME'] ?></p>
                    <p>Price: <?php echo $final5['COST'] ?></p>
                    <p>Type: <?php echo $final5['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Geckmo.png" width="55%" height="55%" alt="Leaderboards" />
                    <p>Name: <?php echo $final6['NAME'] ?></p>
                    <p>Price: <?php echo $final6['COST'] ?></p>
                    <p>Type: <?php echo $final6['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Hisnotized.png" width="45%" height="15%"
                        alt="Leaderboards" />
                    <p>Name: <?php echo $final7['NAME'] ?></p>
                    <p>Price: <?php echo $final7['COST'] ?></p>
                    <p>Type: <?php echo $final7['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Hivewire.png" width="25%" height="25%" alt="Leaderboards" />
                    <p>Name: <?php echo $final8['NAME'] ?></p>
                    <p>Price: <?php echo $final8['COST'] ?></p>
                    <p>Type: <?php echo $final8['TYPE'] ?></p>
                </th>
            </tr>
            <tr id="m_con" style="height: 95%;">
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Logion.png" width="55%" height="55%" alt="Leaderboards" />
                    <p>Name: <?php echo $final9['NAME'] ?></p>
                    <p>Price: <?php echo $final9['COST'] ?></p>
                    <p>Type: <?php echo $final9['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Ostrick.png" width="55%" height="55%" alt="Leaderboards" />
                    <p>Name: <?php echo $final10['NAME'] ?></p>
                    <p>Price: <?php echo $final10['COST'] ?></p>
                    <p>Type: <?php echo $final10['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Paldant.png" width="45%" height="15%" alt="Leaderboards" />
                    <p>Name: <?php echo $final11['NAME'] ?></p>
                    <p>Price: <?php echo $final11['COST'] ?></p>
                    <p>Type: <?php echo $final11['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Pandemickey.png" width="25%" height="25%"
                        alt="Leaderboards" />
                    <p>Name: <?php echo $final12['NAME'] ?></p>
                    <p>Price: <?php echo $final12['COST'] ?></p>
                    <p>Type: <?php echo $final12['TYPE'] ?></p>
                </th>
            </tr>
            <tr id="m_con" style="height: 95%;">
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Picture1.png" width="55%" height="55%" alt="Leaderboards" />
                    <p>Name: <?php echo $final13['NAME'] ?></p>
                    <p>Price: <?php echo $final13['COST'] ?></p>
                    <p>Type: <?php echo $final13['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Psychimp.png" width="55%" height="55%" alt="Leaderboards" />
                    <p>Name: <?php echo $final14['NAME'] ?></p>
                    <p>Price: <?php echo $final14['COST'] ?></p>
                    <p>Type: <?php echo $final14['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Spicher.png" width="45%" height="15%" alt="Leaderboards" />
                    <p>Name: <?php echo $final15['NAME'] ?></p>
                    <p>Price: <?php echo $final15['COST'] ?></p>
                    <p>Type: <?php echo $final15['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Spowl.png" width="25%" height="25%" alt="Leaderboards" />
                    <p>Name: <?php echo $final16['NAME'] ?></p>
                    <p>Price: <?php echo $final16['COST'] ?></p>
                    <p>Type: <?php echo $final16['TYPE'] ?></p>
                </th>
            </tr>
            <tr id="m_con" style="height: 55%;">
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Tempeck.png" width="55%" height="15%" alt="Leaderboards" />
                    <p>Name: <?php echo $final17['NAME'] ?></p>
                    <p>Price: <?php echo $final17['COST'] ?></p>
                    <p>Type: <?php echo $final17['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Tamers/Shinrai Dekinai.png" width="55%" height="55%"
                        alt="Leaderboards" />
                    <p>Name: <?php echo $final18['NAME'] ?></p>
                    <p>Price: <?php echo $final18['COST'] ?></p>
                    <p>Type: <?php echo $final18['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Tamers.png" width="45%" height="15%" alt="Leaderboards" />
                    <p>Name: <?php echo $final19['NAME'] ?></p>
                    <p>Price: <?php echo $final19['COST'] ?></p>
                    <p>Type: <?php echo $final19['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Tamers.png" width="25%" height="25%" alt="Leaderboards" />
                    <p>Name: <?php echo $final20['NAME'] ?></p>
                    <p>Price: <?php echo $final20['COST'] ?></p>
                    <p>Type: <?php echo $final20['TYPE'] ?></p>
                </th>
            </tr>
            <tr id="m_con" style="height: 55%;">
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Cactile.png" width="55%" height="55%" alt="Leaderboards" />
                    <p>Name: <?php echo $final21['NAME'] ?></p>
                    <p>Price: <?php echo $final21['COST'] ?></p>
                    <p>Type: <?php echo $final21['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Cactile.png" width="55%" height="55%" alt="Leaderboards" />
                    <p>Name: <?php echo $final22['NAME'] ?></p>
                    <p>Price: <?php echo $final22['COST'] ?></p>
                    <p>Type: <?php echo $final22['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Cactile.png" width="55%" height="55%" alt="Leaderboards" />
                    <p>Name: <?php echo $final23['NAME'] ?></p>
                    <p>Price: <?php echo $final23['COST'] ?></p>
                    <p>Type: <?php echo $final23['TYPE'] ?></p>
                </th>
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Cactile.png" width="55%" height="55%" alt="Leaderboards" />
                    <p>Name: <?php echo $final24['NAME'] ?></p>
                    <p>Price: <?php echo $final24['COST'] ?></p>
                    <p>Type: <?php echo $final24['TYPE'] ?></p>
                </th>
            </tr>
            <tr id="m_con" style="height: 95%;">
                <th style="width: 25%;">
                    <img src="img/newcc/Creatures (Poster)/Cactile.png" width="55%" height="55%" alt="Leaderboards" />
                    <p>Name: <?php echo $final25['NAME'] ?></p>
                    <p>Price: <?php echo $final25['COST'] ?></p>
                    <p>Type: <?php echo $final25['TYPE'] ?></p>
                </th>
            </tr>
        </table>
    </div>
</body>

</html>