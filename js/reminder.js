$('input#submit').on('click',function(){
	var destination = $('input#destination').val();
	var date = $('input#date').val();
	var remdate = $('input#remdate').val();
	console.log('s');
		$.post('../php/reminder.php',{destination:destination,date:date,remdate:remdate},function(data){
			$('div#response').html(data);
			console.log('as');
		});
});
		