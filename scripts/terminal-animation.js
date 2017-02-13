$(document).ready( function(){
	setTimeout( function(){
		$('.header-intro').typewriting( 
			"YEAR 3 SOFTWARE DEVELOPMENT STUDENT<br />BORN IN ROMANIA, LIVING IN SCOTLAND<br />ORIGINAL IDEAS, PASSION AND HARD WORK<br />NOW AVAILABLE FOR YOU", {
			"typing_interval": 100,
			"blink_interval": "1s",
			"cursor_color": "#ec7964"
		}, function() {
			console.log( "END" );
		});
	}, 1000);
});