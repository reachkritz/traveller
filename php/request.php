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
if($res->num_rows==0)
{
	$var=0;

$query="INSERT INTO `traveller`.`request status` (`uid`,`fid`, `status`) VALUES ('$uid', '$fid', '$var');";
echo "Friend request status";
}
else
{
	echo "Friend request already sent";
}
$con->query($query);

?>
</body>
</html>