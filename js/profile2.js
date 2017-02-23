$('input#confirmrequest').on('click',function(){
	console.log('a');
	var fid=document.getElementById("fid").innerHTML;
	console.log(fid);
	console.log('fdf');
			$.post('../php/confirm.php',{name: fid},function(data){
			$('div#x').html(data);
			console.log('s');
		});
	
});
		