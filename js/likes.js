$('input#like').on('click',function(){
	var like = $('div#like').val();
	var uid = $('div#uid').val();
	var fid = $('div#fid').val();
	var pid = $('div#pid').val();

	 
		$.post('../php/likes.php',{like: like,uid:uid,fid:fid,pid:pid},function(data){
			$('div#like').html(data);
		});
});
		// JavaScript Document