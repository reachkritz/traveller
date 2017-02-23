<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	include('function.php');
$con=dbconnect();
session_start();
$uid=$_SESSION['uid'];

$destination=validate($_POST['destination']);
	$date=validate($_POST['date']);
	$remdate=validate($_POST['remdate']);
	$plid=validate($_POST['plid']);
	echo $uid."".$plid."".$destination."".$date."".$remdate;
	$query="update `traveller`.`reminder` set `destination`='$destination',`date`='$date',`remdate`='$remdate' where `uid`= $uid and `plid`=$plid"; 
    $con->query($query);

	echo "Your Plan has been edited";
?>
</body>
</html>