$(document).ready(function()
{
	$("#page a, #footer a").hover( 
		function () 
		{
			$(this).stop(true,true)
					.css('color','#666')
					.animate({color : '#7DC50C'}, 500);
		},
		function () 
		{
			$(this).stop(true,true)
					.css('color','#7DC50C')
					.animate({color : '#666'}, 500);
		}
	);
	
	$("div .right").hover( 
		function () 
		{
			$(this).stop(true,true)
				.animate({
					width : '249px',
					height: '255px'
				}, 1000);
		},
		function () 
		{
			$(this).stop(true,true)
				.animate({
					width : '163px',
					height: '160px'
				}, 1000);
		}
	);
	
	$("#page").hover( 
		function () 
		{
			$(this).stop(true,true)
					.animate({backgroundColor : '#BBB'}, 1500);
		},
		function () 
		{
			$(this).stop(true,true)
					.animate({backgroundColor : '#FFF'}, 1500);
		}
	);
	
	$(".select_articles").hover( 
		function () 
		{
			$(this).stop(true,true)
					.css('cursor','pointer')
					.animate({backgroundColor : '#7DC50C'}, 250);
		},
		function () 
		{
			$(this).stop(true,true)
					.animate({backgroundColor : '#FFF'}, 250);
		}
	);
});