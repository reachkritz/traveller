<?php
	include '../php/function.php';
	$con=dbconnect();
	$pid=validate($_POST['pid']);
	$like=validate($_POST['like']);
	$uid=validate($_POST['uid']);
	$fid=validate($_POST['fid']);
	$val=1;
	$query="insert into `photos` (`uid`,`pid`,`like`,`fid`) values ('$uid','$pid','$val','$fid');";
	$res=$con->query($query);

	 $like=$like+1;
	 echo $like;
	

?>
