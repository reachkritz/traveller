$('input#search').on('keyup',function(){
	var name = $('input#search').val();
	 if( $.trim(name)!= '') {
		$.post('../php/name.php',{name: name},function(data){
			$('div#name-data').html(data);
		});
	}
});
		