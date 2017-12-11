$(function(){
	var menu = $('.navbar');
    var origOffsetY = menu.offset().top;

    function scroll() {
        if ($(window).scrollTop() >= origOffsetY) {
            $('.menu').addClass('sticky');
            $('.content').addClass('menu-padding');
        } else {
            $('.menu').removeClass('sticky');
            $('.content').removeClass('menu-padding');
        }


    }
    document.onscroll = scroll;

    $("#createBtn").click(function(){
        if ($('.menu_opener').is(':checked')){
            $('.menu_opener').prop('checked', false);
        }
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