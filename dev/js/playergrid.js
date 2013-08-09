$(document).ready(function() {
	function setWidth(selector){
		var width = $(selector).width();
		$('.bc-iframe').css({'height':width+'px'});
	}
	setWidth('.bc-iframe');
});
