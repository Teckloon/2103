
<?php

// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['Login'])) 
{
	$currentPage = basename($_SERVER['SCRIPT_FILENAME']);
	if($currentPage != "login.php") //Prevent double redirect on login page
		header ("Location: login.php");
}
else
{
	if($_SESSION['Login'] == FALSE)
	{
		$currentPage = basename($_SERVER['SCRIPT_FILENAME']);
		if($currentPage != "login.php") //Prevent double redirect on login page
			header ("Location: login.php");
	}
}
?>
<div class="jumbotron">
	<div class="container banner-title">
		<h1 class="navbar-brand" style="color:white;">SIT Booking Facility System</h1>
	</div>
</div>