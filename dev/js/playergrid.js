$(document).ready(function() {

	/* Get a grid from the URL if it exists */
	/*
	function getParameterByName(name) {
	    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
	    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
	        results = regex.exec(location.search);
	    return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}
	userColors = getParameterByName('colors');
*/

	var boxNo = 0;
	/* Generate the grid for colors! */
	function generateGrid(height,width){
		var toAppend = "";
		for(var i=0; i<height; i++ ){
			toAppend = toAppend + "<div class='row box-row'>";
			for(var j=0; j<width; j++ ){
				toAppend = toAppend + "<div class='box box-r" + i + "-c" + j + " hidden-sm col-lg-2 col-2'></div>";
			}
			toAppend = toAppend + "</div><!-- .box-row -->";
		}
		return toAppend;
	}
	$('.boxes-row .boxes').append(generateGrid(2,6));
	$('.player .boxes').append(generateGrid(6,6));

	/* Set the height to match the width */
	function setHeight(selector){
		var width = $(selector).width();
		$(selector).css({'height':width+'px'});
	}
	function setPadHeight(selector){
		var width = $(selector).width();
		width = width + 15;
		$(selector).css({'height':width+'px'});
	}


	/* setHeight('.boxes'); */
	setPadHeight('.box');
	setPadHeight('.player .boxes');

	$(window).resize(function(){
		setHeight('.bc-iframe');
		/* setHeight('.boxes'); */
		setPadHeight('.box');
		setPadHeight('.player .boxes');
	});


	/* Insert the bandcamp widget so that we can control the callback */
	function callIframe() {
			var bcPlayer="<iframe id='bcPlayer' class='bc-iframe' style='border: 0; width: 100%;' src='' seamless>	<a href='http://d8ts.bandcamp.com/album/da-tes'>DA/TES by Splotch &amp; Emoticon Dream</a></iframe>";
			var srcUrl="http://bandcamp.com/EmbeddedPlayer/album=185332851/size=large/bgcol=ffffff/linkcol=0687f5/transparent=true/";
	    $('.bc-col').prepend(bcPlayer);
    	$('iframe#bcPlayer').attr('src', srcUrl);
	    $('iframe#bcPlayer').load(function() {
				setHeight('.bc-iframe');
	    });
	}
	callIframe();


/* COLOR THE GRID! */

	var play_settings = {
    rainbow_mode: 1,
    grid_size: 0
	};

	if (play_settings.rainbow_mode) {
		rainbow_mode();
	}

	function rainbow_mode() {
		$('.box').on('mouseenter', function(){
			var d = new Date();
		 var s = d.getSeconds();
		 var c = s*6;	//0-60 seconds --> 0-360 color range
		 
		 var decColor = c + ", 80%, 40%";
		 var newColor = "hsl(" + decColor.toString(16) + ")";
		 	$(this).data("color",c);
		 	console.log(jQuery.data(this, "color"));
			$(this).css("background", newColor);
			$(this).animate({background: + newColor }, 100, function(){
				/* $(this).animate({backgroundColor: "#eee" }); */
			});
		});
	}

$('.release-date a, .header').click(function(){
		relaseDateLink = $('.release-date a');
		if (relaseDateLink.css('font-size') == '120px')
		{
			$(relaseDateLink).animate({fontSize: "20px"},300);
		}
		else if (relaseDateLink.css('font-size') == '20px'){
			$(relaseDateLink).animate({fontSize: "120px"},300);
	}
	$('.header-hide').slideToggle(function(){
	});
});

$('.box').click(function(){
	if ($(this).css('background-color') != '#ccc')
	{
		$(this).css('background-color','#ccc');
	}
});


$('.dates a').popover({trigger:'hover'});

});
