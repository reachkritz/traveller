<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="../css/css8.css">
<body>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="../api_js.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

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
</div>
<div id="plan">
<?php
include('function.php');
$con=dbconnect();
session_start();
$uid=$_SESSION['uid'];

$destination=validate($_POST['destination']);
$plid=validate($_POST['plid']);

$date=validate($_POST['date']);
$remdate=validate($_POST['remdate']);?>
<div id="new"><input type="text" value ="<?php echo $plid?>" id="plid" name="plid" ></div>
Destination
<input type="text" value="<?php echo $destination ?>" id="destination" class="destination" name="destination"><br>
        Date of journey        <input type="date" value="<?php echo $date ?>" name="date" id="date" ><br>
        Reminder date
        <input type="date" value="<?php echo $remdate ?>" name="remdate" id="remdate" ><br>
       <label>  <input type="submit" value="UPDATE" name="update" id="update"></label>
      <script src="../js/search.js"></script>
<script src="../js/edit.js"></script>
	<div id="response"></div>
</div>
</div>
</body>
</html>