//Allow to detect if a google frame is on my site
//(exemple : google image iframe)
if (top.location != self.location) top.location = self.location;

//Enable vertical scroll only if the windows heigth is too little.
function checkWindowSize(){
	if ( $(window).height() < 620 ) {
		$('#sidebar').removeClass('fixed');
	} else {
		$('#sidebar').addClass('fixed');
	}

	/*$("#container").css('height', 'auto');
	if($("#container").height() < $(window).height()) {
		$('#container').css('height', '100%');
	} else {
		$('#container').css('height', 'auto');
	}*/
	$('#container').css('height', '100%');

		var container = document.getElementById("container");
		var htmlheight = document.body.parentNode.scrollHeight;
		var windowheight = window.innerHeight;
		if ( htmlheight < windowheight ) { document.body.style.height = windowheight + "px"; container.style.height = windowheight + "px"; }
		else { document.body.style.height = htmlheight + "px"; container.style.height = htmlheight + "px"; }

}

//Cette fonction permet de géré le menu
//Sélectionne le bon onglet
function setMenu(url){
	$("#menu li").removeClass("selected");
	$("#menu #"+url).addClass("selected");
	$('#menu').spasticNav();
}

//Slide the content to the left, then to the right.
function slideContent(url){
	$("#content").animate({left : '-=250px'}, 1000, function(){
		$('#sidebar').load(url+'?sidebar');
		$("#content").animate({left : '+=250px'}, 1000, function(){
			$('#content').fadeOut("slow", function(){
				$('#content').load(url+'?content', function(){
					$('#content').fadeIn();
					//Change l'adresse comme on est en ajax
					history.pushState({}, "", url);
					var urlFull = url.split("/");
					var lang = urlFull[0];
					url = urlFull[1];
					setMenu(lang+"_"+url);
					checkWindowSize();
				});
			});
		});
	});
}

//Gere l'envoi du formulaire de contact
function contactForm(){
	$("#contactForm").on('submit', function(e){
		e.preventDefault();
		$('.confirm').fadeOut();
		$('.error').fadeOut();


		var $form = $(this),
			name = $form.find('input[name="name"]').val(),
			email = $form.find('input[name="email"]').val(),
			subject = $form.find('input[name="subject"]').val(),
			message = $form.find('textarea[name="message"]').val(),
			user_code = $form.find('input[name="user_code"]').val(),
			url = $form.attr('action');
		$.post(url, {
			'name' : name,
			'email' : email,
			'subject' : subject,
			'message' : message,
			'user_code' : user_code,
			'js' : 1
		}, function(data){
			data = $.parseJSON(data);
			var result = data.result;
			var captcha = data.captcha;
			if(result == 1){
				$(".confirm").removeClass("hidden");
				$(".confirm").fadeIn();
			}
			else {
				$(".error").removeClass("hidden");
				$(".error").fadeIn();
			}

			$("#captchaSpan").text(captcha);
			$("#contactForm").toggle( 'clip', {}, 1500 );
		});
	});
}

$(window).resize(checkWindowSize);

$(function(){
	checkWindowSize();

	//menu
	var urlFull = $("#url").html().split("/");
	var lang = urlFull[0];
	var url = urlFull[1];
	if(url == "admin")
		url = 'home';
	setMenu(lang+'_'+url);

	$(".menu").live("click", function(e){
		e.preventDefault();
		var urlFull = $(this).attr('id').split("_");
		slideContent(urlFull[0]+'/'+urlFull[1]);
	});
	$("#logo_cyrilf").live("click", function(e){
		e.preventDefault();
		slideContent(lang + '/home');
	});

	//page contact
	contactForm();
	$("#retry").live('click', function(){
		$("#contactForm").toggle( 'clip', {}, 1500 );
		$(".error").fadeOut();
		$(".confirm").fadeOut();
	});

	//Page projects
	$('.project_element').hover(function(){
		$(this).find('.project_element_top').find('img').slideUp();
		$(this).find('.project_element_top').animate({height: '+=20'}, 500, function(){});
		$(this).find('.project_element_bottom').animate({height: '-=20'}, 500, function(){$(this).css('display','none');});
	}, function(){
		$(this).find('img').fadeIn();
		$(this).find('.project_element_top').animate({height: '-=20'}, 500, function(){});
		$(this).find('.project_element_bottom').animate({height: '+=20'}, 500, function(){$(this).css('display','block');});
	});
});