<?php
	session_start();

	$username = $_POST["username"];
	$pwd = $_POST["password"];

	$_SESSION["username"] = $username;
	$_SESSION["pwd"] = $pwd;
	$_SESSION['start'] = time();


	if ($_SESSION['start'] + 600 < time()) {
     header("Location: logOut.php")
    } else {
     // session ok
    }

?>

