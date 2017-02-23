/*var xmlHttp;
xmlHttp= createObject();

function createObject(){
	var xmlHttp;
	if(window.ActiveXObject){
		try{
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch(e){
			xmlHttp = false;
		}
	}
	else{
		try{
			xmlHttp = new XMLHttpRequest();
		} catch(e){
			xmlHttp = false;
		}
	}
	if(!xmlHttp){
	  alert("cant create object");
	}
	else{
	  return xmlHttp;
	}
}
function process(){
	if(xmlHttp.readyState==4||xmlHttp.readyState==0){
		email=encodeURIComponent(document.getElementById("emailid").value);
		xmlHttp.onreadystatechange= handleServerResponse;
		xmlHttp.open("GET","register_check.php",true);
		
		xmlHttp.send();
	}
	else{
		setTimeout('process()',1000);
	}
}
function handleServerResponse(){
	if(xmlHttp.readyState==4){
		if(xmlHttp.status==200){
			xmlResponse= xmlHttp.responseXML;
			xmlDocumentElement = xmlResponse.documentElement;
			var message = xmlDocumentElement.firstChild.data;
			document.getElementById("input").innerHTML = '<span style="color:blue">' + message + '</span>';
			setTimeout('process()',1000);
		}else{
			alert('something went wrong');
		}
}
}*/
function process(str,str2)
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
		xmlHttp.open("GET","register_check.php?emailid="+str+"&pwd="+str2,true);
		xmlHttp.send();
	}
}
		
	