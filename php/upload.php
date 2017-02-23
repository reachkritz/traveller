<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="login.php" method="post" enctype="multipart/form-data">
Select an image to upload:
<input type="file" name="filetoupload" id="filetoupload">
<input type="submit" value="Upload image" name="submit" id="submit"> 
</form>

<?php
/*include('function.php');
$con=dbconnect();
session_start();
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
	$query="select max(pid) as `pid` from photos ";
	$res=$con->query($query);
	// if($res->num_rows==0)
   //{
	 //  $pid=1;
   //}
   //else{
	 //  $pid=1;
	   while($arr=$res->fetch_array()){
		 echo $arr['pid'];
		 $pid=$arr['pid'];
	   }
		  
	  //$pid=$pid+1;
   //}
   //echo $pid;
   
   $_FILES["filetoupload"]["name"]=$pid.".".$imageFileType;
   $target_file= $target_dir. basename($_FILES["filetoupload"]["name"]);
   echo $target_file;
   
    if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["filetoupload"]["name"]). " has been uploaded.";
		$like=0;
		$query="INSERT INTO `traveller`.`photos` (`uid`,`pname`,`like`,`comment`,`fid`) VALUES ('$uid', '$pid.".".$imageFileType','$like','$like','$like');";
		$con->query($query);
		echo "../uploads/$pid.\".\".$imageFileType" ;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}*/


?>

</body>
</html>