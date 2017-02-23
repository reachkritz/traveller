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
$fid=validate($_POST['name']);
$query="select * from `request status` where uid=$uid and fid=$fid";
$res=$con->query($query);
	$var=1;

$query="UPDATE `traveller`.`request status`  SET status=1 WHERE uid=$fid and fid=$uid;";
echo "Friends";

$con->query($query);

?>
</body>
</html>