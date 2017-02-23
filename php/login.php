<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="../api_js.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/css6.css">
<script src="../js/home.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
</head>
<body>
<?php
include('function.php');
//if(session_status()==PHP_SESSION_NONE){
if(isset($_POST['btn'])){
$emailid=validate($_POST['emailid']);
$pwd=validate($_POST['pwd']);
$pr=0;
}
else
{   session_start();
	$emailid=$_SESSION['emailid'];
	$pwd=$_SESSION['pwd'];
	$pr=1;
}
$con=dbconnect();
$query="select * from register where email like '$emailid'";
$res=$con->query($query);
if($res->num_rows==0){
	echo "Invalid username";
}
else{
	while($arr=$res->fetch_array()){
		if($arr['pwd']==$pwd){
			if($pr!=1)
			session_start();
			
			
			$_SESSION['emailid']=$emailid;
			$_SESSION['pwd']=$pwd;
			$_SESSION['uid']=$arr['uid'];
			$uid=$arr['uid'];
			$query1="select * from `request status` where fid like '$uid' and status=0";
			$res1=$con->query($query1);
			$x=0;
if($res1->num_rows==0){
	
}
else{
	
   while($arr1=$res1->fetch_array()){
	   $fuid=$arr1['uid'];
	   $query2="select name from register where uid like '$fuid'";
	   $res2=$con->query($query2);
	   $x=$x+1;
   }
}
$query6="select * from `reminder` where uid like '$uid' and remdate <= curdate() and date >= curdate()";
			$res6=$con->query($query6);
			$y=0;
if($res6->num_rows==0){
	
}
else{
	
   while($arr6=$res6->fetch_array()) {
	   $y=$y+1;
   }
}
?>
 <div id="back">
<div id="top">
<ul>
<span style="color:#000000; font-size:30px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; margin-left:15px; margin-top:15px;">
<b><i>

<img src="../pics/eiffelt.jpg" height="60px" id="icon"></i>
</b>
</span>
<a href="../php/logout.php" class="link">
<li>
<span class="text">
<span class="glyphicon glyphicon-off"  aria-hidden="true" ></span>
</span>
</li>
</a>
<a href="future.php" class="link">
<li>
<span class="text">
FUTURE TRAVEL PLANS
</span>
</li>
</a>
<a href="edit.php" class="link">
<li>
<span class="text">
<span class="glyphicon glyphicon-pencil"  aria-hidden="true" ></span>
EDIT PLANS
</span>
</li>
</a>
<a href="#" class="link">
<li id="flip">
<span class="text">
FIND FRIENDS
</span>
</li>
</a>
<a href="upload.php" class="link">
<li>
<span class="text">
 <span class="glyphicon glyphicon-open"  aria-hidden="true" ></span>
</span>
</li>
</a>

<a href="#" class="link">
<li>
<span class="text">
<span class="glyphicon glyphicon-time"  aria-hidden="true" ></span> &#9662;
<div id="inner1">
<?php echo $y ?>
</div>
</span>
<?php if($y!=0){ ?>
<ul class="dropdown2">
<?php 
$uid=$arr['uid'];
			$query7="select * from `reminder` where uid like '$uid' and remdate <= curdate() and date >= curdate()";
			$res7=$con->query($query7);
while($arr7=$res7->fetch_array()){
	    ?><li class="rem">You planned to visit  <b><?php echo $arr7['destination']." on ".$arr7['date'] ?></b> Happy Journey!! </li>
        <?php }?> 
</ul>
<?php }?>
</li>
</a>
<a href="#" class="link">
<li>
<span class="text">
<span class="glyphicon glyphicon-user"  aria-hidden="true" ></span><span class="glyphicon glyphicon-plus"  aria-hidden="true" ></span> &#9662;
<div id="inner">
<?php echo $x ?>
</div>
</span>
<?php if($x!=0){ ?>
<ul class="dropdown">
<?php 
$uid=$arr['uid'];
			$query1="select * from `request status` where fid like '$uid' and status=0";
			$res1=$con->query($query1);
while($arr1=$res1->fetch_array()){
	   $fuid=$arr1['uid'];
	   $query2="select name from `register` where uid like '$fuid'";
	   $res2=$con->query($query2);?>
	   <li><?php
	    while($arr2=$res2->fetch_array()){
	    ?><form action="profile2.php" method="post"><div id="new"><input type="text" value="<?php echo $fuid?>"name="fid"><?php echo $arr2['name']."" ?></div><input type="submit" name="viewprofile" id="viewprofile" value="<?php echo $arr2['name']."" ?>"></form>
        <?php }?></li><?php }?> 
</ul>
<?php }?>

</li>
</a>
</ul>



<div id="panel">

	
  
     
   &nbsp;&nbsp;&nbsp;
   <form action="profile.php" method="post" >
    <input type="search" name="search" placeholder="ENTER SEARCH" class="ph" id="search"/>
    <input type="submit" value="View Profile" name="request" id="request">
     <div id="name-data"></div> 
</form>
</div>
</div>
<script src="../js/search.js"></script>
<script src="../js/global.js"></script>
<!--form  method="post" enctype="multipart/form-data">
Select an image to upload:
<input type="file" name="filetoupload" id="filetoupload">
<input type="submit" value="Upload image" name="submit" id="submit"> 

<img id="photo" src="">
<script src="../js/display.js"></script>-->
<div id="out">
<div id="content">
<?php
if(isset($_POST['submit'])){

$con=dbconnect();
$uid=$_SESSION['uid'];


$target_dir = "../uploads/";

$target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["filetoupload"]["tmp_name"]);
    if($check !== false) {
       echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["filetoupload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	$query11="select * from photos";
	$res11=$con->query($query11);
	if($res11->num_rows==0)
   {
	   $pid=1;
   }
   else{
	   $pid=1;
	   while($arr11=$res11->fetch_array()){
		// echo $arr['pid'];
		if($arr11['pid']>$pid)
		 $pid=$arr11['pid'];
	   }
		  
	  $pid=$pid+1;
   }
   echo $pid;
   
   $_FILES["filetoupload"]["name"]=$pid.".".$imageFileType;
   $target_file= $target_dir. basename($_FILES["filetoupload"]["name"]);
   echo $target_file;
   
    if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["filetoupload"]["name"]). " has been uploaded.";
		$like=0;
		$query8="INSERT INTO `traveller`.`photos` (`uid`,`pname`,`like`,`comment`,`fid`) VALUES ('$uid', '$pid.$imageFileType','$like','$like','$like');";
		$con->query($query8);
		
if($con->connect_errno){
	die("Not able to".$con->connect_error);	
}

		//echo "../uploads/$pid.\".\".$imageFileType" ;
		//<img src="../uploads/" class="picture">
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}}?>
<?php



//$uid=$_SESSION['uid'];
$query10="select * from photos where uid=$uid ORDER BY `pid` DESC;";
$res10=$con->query($query10);

if($con->connect_errno){
	die("Not able to".$con->connect_error);	
}

if($res10->num_rows==0)
{
	  
}
   else{
	  while($arr10=$res10->fetch_array())
	  {
		  ?>
          <img src="<?php echo "../uploads/".$arr10['pname'];?>" class="picture"><br>
		  <?php
		 
	  }
   }
?>
</div>


<div id="sidebar">
FRIEND LIST:
<br><br>
<ul>
<?php
$uid=$arr['uid'];
$query3="select * from `request status` where (fid like $uid or uid like $uid) and status=1"; 
$res3=$con->query($query3);



while($arr2=$res3->fetch_array()){
	if($arr2['uid']==$uid){
	$xid=$arr2['fid'];
	}
	else{
	$xid=$arr2['uid'];
	}
	$query4="select name from `register` where uid= $xid "; 
$res4=$con->query($query4);
   while($arr3=$res4->fetch_array()){
?><b><a href="profile3.php"><li><?php	echo $arr3['name'];?></li></a></b><?php
   }
}
?>
</ul>
</div>
</div>
</div>
<body>
</body>
</html>
            <?php
		}else
		echo "INCORRECT PASSWORD";
	}
}
?>
