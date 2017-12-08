$(function(){
	var form = $('#ajax_form'); 
	var err = $('#err_msg');

	$(form).submit(function(e){
		//Stop the browser from submitting the form
		e.preventDefault();
		var formData = $(form).serialize();

		//Submit form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response){
			var data = $.parseJSON(response);
			console.log(data);
			window.location.replace('user.php?user='+data.user+'&log='+data.log+'&uid='+data.uid);
			//Make sure that the err_msg div has the 'success' class.
			// $(err).removeClass('error');
			// $(err).addClass('success');
			// Set the message text.
			// $(err).text(response); 
		})
		.fail(function(data){
			//Make sure that the err_msg dive has the error class.
			$(err).removeClass('success');
			$(err).addClass('error');

			//Set the message text. 
			if (data.responseText !== ''){
				$(err).text(data.responseText);
			} else {
				$(err).text('Oops! An error occured an your could no be sent to'+$(form).attr('action'));
			}
		});
	});		
});