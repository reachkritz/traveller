function process(str)
{
	//console.log(11);
	var xmlHttp;
	if(str=="")
	{
		return;
	}
	else
	{
		if(window.XMLHttpRequest)
		{
			xmlHttp = new XMLHttpRequest();
		}
		else
		{
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState==4&&xmlHttp.status==200)
			{
				var resp=xmlHttp.responseText;
				console.log(resp);
				document.getElementById("input").innerHTML=resp;
			}
		}
		xmlHttp.open("GET","../php/register_check.php?emailid="+str,true);
		xmlHttp.send();
	}
}
		
	