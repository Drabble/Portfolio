$(function(){
	$('.video_trigger').click( function(e){
		e.preventDefault();
		var URL = $(this).attr('href');
		var htm = '<iframe id="container" width="100%" height="500px" src="http://www.youtube.com/embed/' + URL + '?autoplay=1" frameborder="0" allowfullscreen ></iframe>';
			$('#container').replaceWith(htm);
			$(document).scrollTop( $("#container").offset().top );  
		return false;
	});
	$('.image_trigger').click( function(e){
		e.preventDefault();
		var URL = $(this).attr('href');
		var htm = '<img id="container" style="margin: none; padding: none; border: none;display:block; margin: auto;" height="500px" src="' + URL + '" />';
			$('#container').replaceWith(htm);
			$(document).scrollTop( $("#container").offset().top );  
		return false;
	});
});