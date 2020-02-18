<?php
Include 'db_connection.php';
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
$temp1 = mysqli_query($conn, "SELECT * FROM MECH_LEAD WHERE ID=1");
$final1 = mysqli_fetch_assoc($temp1);
$temp2 = mysqli_query($conn, "SELECT * FROM MECH_LEAD WHERE ID=2");
$final2 = mysqli_fetch_assoc($temp2);
$temp3 = mysqli_query($conn, "SELECT * FROM MECH_LEAD WHERE ID=3");
$final3 = mysqli_fetch_assoc($temp3);
$temp4 = mysqli_query($conn, "SELECT * FROM MECH_LEAD WHERE ID=4");
$final4 = mysqli_fetch_assoc($temp4);
$temp5 = mysqli_query($conn, "SELECT * FROM MECH_LEAD WHERE ID=5");
$final5 = mysqli_fetch_assoc($temp5);
$temp6 = mysqli_query($conn, "SELECT * FROM MECH_LEAD WHERE ID=6");
$final6 = mysqli_fetch_assoc($temp6);
$ctemp1 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_LEADER WHERE ID=1");
$cfinal1 = mysqli_fetch_assoc($ctemp1);
$ctemp2 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_LEADER WHERE ID=2");
$cfinal2 = mysqli_fetch_assoc($ctemp2);
$ctemp3 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_LEADER WHERE ID=3");
$cfinal3 = mysqli_fetch_assoc($ctemp3);
$ctemp4 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_LEADER WHERE ID=4");
$cfinal4 = mysqli_fetch_assoc($ctemp4);
$ctemp5 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_LEADER WHERE ID=5");
$cfinal5 = mysqli_fetch_assoc($ctemp5);
$ctemp6 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_LEADER WHERE ID=6");
$cfinal6 = mysqli_fetch_assoc($ctemp6);
$ctemp7 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_LEADER WHERE ID=7");
$cfinal7 = mysqli_fetch_assoc($ctemp7);
$ctemp8 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_LEADER WHERE ID=8");
$cfinal8 = mysqli_fetch_assoc($ctemp8);
$ctemp9 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_LEADER WHERE ID=9");
$cfinal9 = mysqli_fetch_assoc($ctemp9);
$ctemp10 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_LEADER WHERE ID=10");
$cfinal10 = mysqli_fetch_assoc($ctemp10);
$ctemp11 = mysqli_query($conn, "SELECT * FROM CRYS_CREA_LEADER WHERE ID=11");
$cfinal11 = mysqli_fetch_assoc($ctemp11);
?>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="pace.css" />
      <script src="pace.js"></script>
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link rel="icon" href="img/newlogo.png" sizes="16x16" type="image/png"> 
    <style>
      #merch #m_con th {
        border: 5px solid black;
      }
    </style>
  </head>
  <body style="background-image: url(''); background-repeat: no-repeat; background-size: cover; background-size: 100% 100%;">
    <center>
      <h1 style="color: rgb(255, 255, 255);">Deep Dive Gaming
      </h1>
    </center>
    <div id="selector" bgcolor="white" style="width: 100%; height: 100%; top: 0px; position: fixed; padding-left: 0px;">
      <table  style="width: 15%; background-color: rgba(0, 0, 0, .001);">
        <tr>
          <th>
            <h4 style="color: rgb(85, 85, 85);">Hi, 
              <b>
                <?php echo htmlspecialchars($_SESSION["username"]); ?>
              </b>.
            </h4>
          </th>
        </tr>
        <tr>
          <th>
            <a href="logout.php">
              <input type="button" value="Log Out">
            </a>
          </th>
        </tr>
        <tr>
          <th style="padding-top: 0%;">
            <a href="index.php">
              <img src="img/house1.png" width="25%" height="10%" alt="Home">
            </a>
          </th>
        </tr>
        <br>
        <tr>
          <br>
          <th style="padding-top: 10%;">
            <a href="crys.php">
              <img src="img/crys1.png" width="35%" height="8%" alt="Crystal Creatures">
            </a>
          </th>
        </tr>
        <br>
        <tr>
          <th style="padding-top: 10%;">
            <a href="space.php">
              <img src="img/unnamed1.png" width="30%" height="7%" alt="Untitled Mech Game"/>
            </a>
          </th>
        </tr>
        <tr>
          <th style="padding-top: 10%;">
            <a href="leader.php">
              <img src="img/leader1.png" width="25%" height="20%" alt="Leaderboards"/>
            </a>
          </th>
        </tr>
        <tr>
          <th style="padding-top: 10%; padding-left: 0px; float: left; margin-left: 0px;">
            <a href="easteregg.html">
              <img src="img/logo.png" width="70%" height="30%" alt="Leaderboards"/>
            </a>
          </th>
        </tr>
      </table>
    </div>
    <center>
      <div id="leaderboards" style="align: right; color: (125, 125, 125); ">
        <h2 style="color: rgb(125, 125, 125);">Crystal Creatures
        </h2>
        <table width="90%" style="padding-left: 10%; padding-top: 0%;">
          <tr style="color: rgb(125, 125, 125);">
            <th>
              Name
            </th>
            <th>
              Place
            </th>
            <th>
              Team 1
            </th>
            <th>
              Team 2
            </th>
          </tr>
          <tr style="color: rgb(125, 125, 125);">
            <th>
            <?php echo $cfinal2['NAME'] ?>
            </th>
            <th>
            <?php echo $cfinal2['PLACE'] ?>
            </th>
            <th>
            <?php echo $cfinal2['TEAM1'] ?>
            </th>
            <th>
            <?php echo $cfinal2['TEAM2'] ?>
            </th>
          </tr>
          <tr style="color: rgb(125, 125, 125);">
            <th>
            <?php echo $cfinal3['NAME'] ?>
            </th>
            <th>
            <?php echo $cfinal3['PLACE'] ?>
            </th>
            <th>
            <?php echo $cfinal3['TEAM1'] ?>
            </th>
            <th>
            <?php echo $cfinal3['TEAM2'] ?>
            </th>
          </tr>
          <tr style="color: rgb(125, 125, 125);">
            <th>
            <?php echo $cfinal4['NAME'] ?>
            </th>
            <th>
            <?php echo $cfinal4['PLACE'] ?>
            </th>
            <th>
            <?php echo $cfinal4['TEAM1'] ?>
            </th>
            <th>
            <?php echo $cfinal4['TEAM2'] ?>
            </th>
          </tr>
          <tr style="color: rgb(125, 125, 125);">
            <th>
            <?php echo $cfinal5['NAME'] ?>
            </th>
            <th>
            <?php echo $cfinal5['PLACE'] ?>
            </th>
            <th>
            <?php echo $cfinal5['TEAM1'] ?>
            </th>
            <th>
            <?php echo $cfinal5['TEAM2'] ?>
            </th>
          </tr>
          <tr style="color: rgb(125, 125, 125);">
            <th>
            <?php echo $cfinal6['NAME'] ?>
            </th>
            <th>
            <?php echo $cfinal6['PLACE'] ?>
            </th>
            <th>
            <?php echo $cfinal6['TEAM1'] ?>
            </th>
            <th>
            <?php echo $cfinal6['TEAM2'] ?>
            </th>
          </tr>
          <tr style="color: rgb(125, 125, 125);">
            <th>
            <?php echo $cfinal7['NAME'] ?>
            </th>
            <th>
            <?php echo $cfinal7['PLACE'] ?>
            </th>
            <th>
            <?php echo $cfinal7['TEAM1'] ?>
            </th>
            <th>
            <?php echo $cfinal7['TEAM2'] ?>
            </th>
          </tr>
          <tr style="color: rgb(125, 125, 125);">
            <th>
            <?php echo $cfinal8['NAME'] ?>
            </th>
            <th>
            <?php echo $cfinal8['PLACE'] ?>
            </th>
            <th>
            <?php echo $cfinal8['TEAM1'] ?>
            </th>
            <th>
            <?php echo $cfinal8['TEAM2'] ?>
            </th>
          </tr>
          <tr style="color: rgb(125, 125, 125);">
            <th>
            <?php echo $cfinal9['NAME'] ?>
            </th>
            <th>
            <?php echo $cfinal9['PLACE'] ?>
            </th>
            <th>
            <?php echo $cfinal9['TEAM1'] ?>
            </th>
            <th>
            <?php echo $cfinal9['TEAM2'] ?>
            </th>
          </tr>
          <tr style="color: rgb(125, 125, 125);">
            <th>
            <?php echo $cfinal10['NAME'] ?>
            </th>
            <th>
            <?php echo $cfinal10['PLACE'] ?>
            </th>
            <th>
            <?php echo $cfinal10['TEAM1'] ?>
            </th>
            <th>
            <?php echo $cfinal10['TEAM2'] ?>
            </th>
          </tr>
          <tr style="color: rgb(125, 125, 125);">
            <th>
            <?php echo $cfinal11['NAME'] ?>
            </th>
            <th>
            <?php echo $cfinal11['PLACE'] ?>
            </th>
            <th>
            <?php echo $cfinal11['TEAM1'] ?>
            </th>
            <th>
            <?php echo $cfinal11['TEAM2'] ?>
            </th>
          </tr>
        </table>
        <br>
        <h2 style="color: rgb(125, 125, 125);">Untitled Mech Game
        </h2>
        <table width="90%" style="padding-left: 10%; padding-top: 0%;">
          <tr style="color: rgb(125, 125, 125);">
            <th style="color: rgb(125, 125, 125);">
              Name
            </th>
            <th style="color: rgb(125, 125, 125);">Stat
            </th>
            <th style="color: rgb(125, 125, 125);">Record
            </th>
          </tr>
          <tr style="color: rgb(125, 125, 125);">
            <th>
              <p>
                <?php echo $final1['NAME'] ?>
              </p>
            </th>
            <th>
              <p>
                <?php echo $final1['STAT'] ?>
              </p>
            </th>
            <th>
              <?php echo $final1['NUMBER'] ?>
          </p>
          </th>
        </tr>
      <tr style="color: rgb(125, 125, 125);">
        <th>
          <p>
            <?php echo $final2['NAME'] ?>
          </p>
        </th>
        <th>
          <p>
            <?php echo $final2['STAT'] ?>
          </p>
        </th>
        <th>
          <?php echo $final2['NUMBER'] ?>
      </p>
      </th>
    </tr>
  <tr style="color: rgb(125, 125, 125);">
    <th>
      <p>
        <?php echo $final3['NAME'] ?>
      </p>
    </th>
    <th>
      <p>
        <?php echo $final3['STAT'] ?>
      </p>
    </th>
    <th>
      <?php echo $final3['NUMBER'] ?>
  </p>
  </th>
</tr>
<tr style="color: rgb(125, 125, 125);">
  <th>
    <p>
      <?php echo $final4['NAME'] ?>
    </p>
  </th>
  <th>
    <p>
      <?php echo $final4['STAT'] ?>
    </p>
  </th>
  <th>
    <?php echo $final4['NUMBER'] ?>
</p>
</th>
</tr>
<tr style="color: rgb(125, 125, 125);">
  <th>
    <p>
      <?php echo $final5['NAME'] ?>
    </p>
  </th>
  <th>
    <p>
      <?php echo $final5['STAT'] ?>
    </p>
  </th>
  <th>
    <?php echo $final5['NUMBER'] ?>
</p>
</th>
</tr>
<tr style="color: rgb(125, 125, 125);">
  <th>
    <p>
      <?php echo $final6['NAME'] ?>
    </p>
  </th>
  <th>
    <p>
      <?php echo $final6['STAT'] ?>
    </p>
  </th>
  <th>
    <?php echo $final6['NUMBER'] ?>
</p>
</th>
</tr>
</div>
</center>
</body>
</html>
