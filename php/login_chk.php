<?php
//echo 'hello';
$email= $_GET['emailid'];
$pwd=$_GET['pwd'];

include('function.php');
$con=dbconnect();
$query="select * from traveller.register where email like '$email' AND pwd like '$pwd' ";
$res=$con->query($query);
if($res->num_rows==0){
	echo "Invalid Username and Password";
}



?>