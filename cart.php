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


?>