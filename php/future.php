<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register</title>
</head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../api_js.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="../css/css7.css">

</head>

<body>
<?php
session_start();
?>
<div id="back">
<a href="login.php" class="btn btn-info btn-lg" id="home"><span class="glyphicon glyphicon-home"  aria-hidden="true"></span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
<div id="sub">



<div id="regr">
<div id="response"></div>
<label><span></span><span class="glyphicon glyphicon-plane"  aria-hidden="true" ></span>
<input type="text" name="destination" placeholder="DESTINATION" class="blank" id="destination" required>
</label>

<label>
<span>Journey date:</span>
<span class="glyphicon glyphicon-calendar"  aria-hidden="true" ></span>

<input type="date" name="date" placeholder="JOURNEY DATE" class="blank" id="date" required>
</label>

<label>
<span>Reminder:</span>
<span class="glyphicon glyphicon-time"  aria-hidden="true" ></span>

<input type="date" name="remdate" placeholder="REMINDER" class="blank" id="remdate" required>
</label>
<input type="submit" name="submit" value="Submit" id="submit" class="button">
</div>


<script src="../js/search.js"></script>
<script src="../js/reminder.js"></script>
</div>
</div>

</body>
</html>