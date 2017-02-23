<?php
function validate($val){
	$val=htmlentities($val);
	$val=trim($val);
	return $val;	
}
function dbconnect(){
$dbhost="localhost";
$dbuname="root";
$dbpassword="";		//your password
$dbname="traveller";		//your database name
$con=new MySQLi($dbhost,$dbuname,$dbpassword,$dbname) or die("Not able to".$con->connect_error);

return $con;	
}
?>