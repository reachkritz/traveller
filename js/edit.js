$('input#update').on('click',function(){
	console.log('a');
	var plid=$('input#plid').val();
	var destination = $('input#destination').val();
	console.log('a');
	var date = $('input#date').val();
	console.log('a');
	var remdate = $('input#remdate').val();
	console.log('a');
		$.post('../php/update.php',{destination:destination, date:date,remdate:remdate,plid:plid},function(data){
			$('div#response').html(data);
		});
	
});
		