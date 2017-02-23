<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
div#new{
	display:none;
}
	</style>
</head>


<body>
<?php
include('function.php');
$con=dbconnect();
session_start();
$fid=$_POST['fid'];
$uid=$_SESSION['uid'];
$query="select * from photos where uid=$fid";
$res=$con->query($query);
//if($res->num_rows==0)
//{
	  
//}
   //else{
	   
	   while($arr=$res->fetch_array()){
		  // if($arr['pid']>$pid){
			  // $pid=$arr['pid'];
		   //}
	   //}
		  
	  //$var=1;
	  //while($var<=$pid)
	  //{
		//  ?>
          <img src="<?php echo "../uploads/".$arr['pname'];?>">
		 // <?php
		 // $var=$var+1;
	  }
   //}
?>
<form action="profile3.php" method="post">
<div id="new"><input type="text" name="fid" value="<?php echo $fid.""?>"></div>
<input type="submit" name="confirmrequest" value="CONFIRM REQUEST" id="confirmrequest">
</form>
<!--<div id="x"></div>
<script type="text/javascript" src="../js/search.js"></script>
<script type="text/javascript" src="../js/profile2.js"></script>-->
</body>
</html>