$(function(){
	var textarea = document.querySelector('textarea');

	textarea.addEventListener('input', function(){
		var maxlength = this.getAttribute('maxlength');
		var length = this.value.length;
		$('#charnum').text(maxlength - length + ' character(s) left');
	});

	var form = $('#ajax_form');
	var err = $('#err_msg');

	$(form).submit(function(e){
		console.log('Here');
		e.preventDefault();
		var formData = $(form).serialize(); 
		//Submit form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response){
			window.location.reload();
			// $('#myModal').modal('hide');
			//Make sure that the err_msg div has the 'success' class.
			// $(err).removeClass('error');
			// $(err).addClass('success');
			//Set the message text.
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