$(function(){
	var formID = $('#note_id').text(), formName = $('#note_title').text();

	$('.trash_icon').each(function(index){
		$(this).click(function(e){
			var pinID = $(this).text(); 
			$.ajax({
				type: 'POST',
				url: 'canvas.script.php',
				data: {pin_id: pinID}
			})
			.done(function(response){
				window.location.reload();
			})
			.failure(function(data){
				console.log(data.responseText);
			});
		});			
	});
});