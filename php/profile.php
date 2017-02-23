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
$fid=validate($_POST['uid']);
$uid=$_SESSION['uid'];
$query="select * from photos where uid=$fid";

$res=$con->query($query);
//if($res->num_rows==0)
//{
	  
//}
  // else{
	//   $pid=1;
	   while($arr=$res->fetch_array()){
		  // if($arr['pid']>$pid){
			 //  $pid=$arr['pid'];
		   //}
	   //}
		  
	  //$var=1;
	  //while($var<=$pid)
	  //{
		  ?>
          <img src="<?php echo "../uploads/".$arr['pname'];?>">
		  <?php
		 // $var=$var+1;
	  //}
   }
?>
<div id="fid"><?php echo $fid.""?></div>

<input type="submit" name="addfriend"  id="addfriend" <?php 
$query1="select * from `request status` where `status`=1;";
 $res2=$con->query($query1); 
 
if($con->connect_errno){
	die("Not able to".$con->connect_error);	
}
else
{
 while($arr1=$res2->fetch_array())
{
	if($arr1['uid']==$uid && $arr1['fid']==$fid)
	  {echo "disabled";
	  $x="FRIENDS";}
	  else if($arr1['uid']==$fid && $arr1['fid']==$uid)
	  {echo "disabled";
	  $x="FRIENDS";}
	  else
	  {$x="ADD FRIEND";}
}}?> value="<?php echo $x ;?>">
<div id="x"></div>
<script type="text/javascript" src="../js/search.js"></script>
<script type="text/javascript" src="../js/profile.js"></script>
</body>
</html>