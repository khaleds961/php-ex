<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
echo "Welcome";

?>

<html>
<button onclick="location.href='logout.php'">Log Out</button>
</html>