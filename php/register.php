<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
function validate($val){
	$val=htmlentities(trim($val));
	return $val;
}
$name=validate($_POST['name']);

$emailid=validate($_POST['emailid']);
$pwd=validate($_POST['pwd']);
$gender=validate($_POST['gender']);
$date=validate($_POST['date']);
$city=validate($_POST['city']);
$country=validate($_POST['country']);
$dbhost="localhost";
$dbuname="root";
$dbpassword="";		//your database password
$dbname="traveller";		//your database name
$con=new MySQLi($dbhost,$dbuname,$dbpassword,$dbname);

if($con->connect_errno){
	die("Not able to".$con->connect_error);	
}

$query="INSERT INTO `traveller`.`register` (`name`,`email`, `pwd`, `gender`,`dob`,`city`,`country`) VALUES ('$name', '$emailid', '$pwd', '$gender','$date','$city', '$country');";
$con->query($query);
if($con->errno){
	die("Sorry could not execute query".$con->error);	
	
}
/*else
mkdir("uploads\$var");
}
else{

 while( $arr=$res->fetch_array())
  {$var=$arr['uid'];}
  echo "huhuhuuhuy";
  $var=$var+1;
  $query="INSERT INTO `traveller`.`register` (`name`,`email`, `pwd`, `gender`,`dob`,`city`,`country`,`uid`) VALUES ('$name', '$emailid', '$pwd', '$gender','$date','$city', '$country','$var');";
  $con->query($query);
if($con->errno)
	die("Sorry could not execute query".$con->error);
	else
  mkdir("uploads/$var");


}
*/
?>
</body>
</html>