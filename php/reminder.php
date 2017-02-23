<?php
	include('function.php');
$con=dbconnect();
session_start();
$uid=$_SESSION['uid'];
	$destination=validate($_POST['destination']);
	$date=validate($_POST['date']);
	$remdate=validate($_POST['remdate']);
	$query="insert into `reminder` (`uid`,`destination`,`date`,`remdate`) values ('$uid','$destination','$date','$remdate');";
	$res=$con->query($query);

	
	 echo "Reminder has been set";
	

?>
