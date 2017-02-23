$('input#submit').on('click',function(){
	var filetoupload = $('input#filetoupload').val();
	console.log(filetoupload);
		$.post('../php/upload.php',{filetoupload: filetoupload},function(data){
			$('img#photo').attr(src,data);
			console.log("ab");
			console.log(data);
		});
	
});
		// JavaScript Document