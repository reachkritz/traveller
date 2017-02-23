<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="../js/search.js">
</script>
<script>

$(document).ready(function(e) {
	
    $("#searchTF").on('keyup',function()
	{
	
		var str=document.getElementById("searchTF").value;
		$.post("search_name.php",{name : str},function(data)
		{
			$("#result").html(data);
		});	
	});
});
</script>
</head>

<body>

<input type="text" id="searchTF" name="searchTF" autocomplete="off" />
<span id="result">Type Something .....</span>
</body>
</html>