<?php
//echo 'hello';
$email= $_GET['emailid'];
include('function.php');
$con=dbconnect();
$query="select * from traveller.register where email like '$email' ";
$res=$con->query($query);
if($res->num_rows!=0){
	echo "Duplicate Entry of Email ID";
}



?>