$(function(){
    $("#createBtn").click(function(){
		$('#modaltest').load('create_pin.php', function(){
			$('#myModal').modal({show:true});
		});	
	});

	$('#nav_logout').click(function(){
		$('#logout_div').load('logout.php', function(){
			window.location.replace('main.php');
		});
	});
});