
<?php
	include ('function.php');
	$con=dbconnect();
	$name=validate($_POST['name']);
	$query="select name,uid from register where name like '$name%'";
$res=$con->query($query);
if($res->num_rows==0){
	echo "User not present";
}
else{
	$row=$res->num_rows;
	echo "<select name=\"uid\" id=\"btn\" size=\"".$row."\">";
	 while( $arr=$res->fetch_array()){
		 echo "<option value=\"".$arr['uid']."\">".$arr['name']."</option>";
	 }
	 echo "</select>";
}
?>
