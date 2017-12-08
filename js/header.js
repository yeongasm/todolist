$(function(){
    $("#createBtn").click(function(){
		$('#modaltest').load('create_pin.php', function(){
			$('#myModal').modal({show:true});
		});	
	});
});