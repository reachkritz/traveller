<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="../api_js.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/css6.css">
</head>

<body>
<div id="back">
<div id="top">

<ul>
<span style="color:#000000; font-size:30px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; margin-left:15px; margin-top:15px;">
<b><i>

<img src="../pics/eiffelt.jpg" height="60px" id="icon"></i>
</b>
</span>
<a href="logout.php" class="link">
<li>
<span class="text">
<span class="glyphicon glyphicon-off"  aria-hidden="true" ></span>
</span>
</li>
</a>
<a href="login.php" class="link">
<li><span class="text">
<span class="glyphicon glyphicon-home"  aria-hidden="true" ></span></span>
</li>
</a>

</ul>
<?php
include('function.php');
$con=dbconnect();
session_start();
$uid=$_SESSION['uid'];
$query="select * from reminder where uid=$uid and date>=curdate() ORDER BY date DESC";
$res=$con->query($query);
if($res->num_rows==0)
{
	echo "Oops!!! no plans to edit";
	?>
    <a href="future.php">Plan your journey with us</a>
    <?php
}
else
{
	while($arr=$res->fetch_array()){
		
		?>
        <div class="plan">
        <form action="edit2.php" method="post" >
       <div id="new" ><input type="text" value ="<?php echo $arr['plid']?>" id="plid" name="plid" >
        Destination
        <input type="text" value="<?php echo $arr['destination'] ?>" id="destination" class="destination" name="destination">
        Date of journey
        <input type="date" value="<?php echo $arr['date'] ?>" name="date" id="date" >
        Reminder date
        <input type="date" value="<?php echo $arr['remdate'] ?>" name="remdate" id="remdate" >
        </div>
        Destination:<?php echo $arr['destination'] ?>
        <br>
        Date of journey:<?php echo $arr['date'] ?>
        <br>
        Reminder date:<?php echo $arr['remdate'] ?> 
        <br>
        <input type="submit" value="UPDATE" name="update" id="update">
        </form>
        </div>
        <?php
		
	}


}
?>
</div>
</div>
</body>
</html>