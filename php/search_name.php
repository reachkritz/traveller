<?php
$name=mysql_real_escape_string($_POST['name']);
$name=trim($name);
if(strlen($name)>0)
{
$sql="select name from register where name like '$name%'";
require_once('connection.inc');
$result=$con->query($sql) or die ("Search Error");
$num=mysqli_fetch_array($result);
if(!$num)
{
	echo "No result Found :(";
}
else
do
{
	echo $num['name'].'&nbsp&nbsp&nbsp;'."<br/>";
}while($num=mysqli_fetch_array($result));
}
else
{
	echo "Type Something...";
}
?>