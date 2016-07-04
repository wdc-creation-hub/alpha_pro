var mq = window.matchMedia('all and (max-width: 992px)');
if (mq.matches) {
	document.getElementsByClassName("col-md-6 col-sm-12").className = "col-xs-12";
	document.getElementsByClassName("styled-input").className = "styled-input wide";

}


$(document).ready(function () {
	$('a').click(function (e) {
		e.preventDefault();
		$url = $(this).attr('href');
		$('body').addClass('animated fadeOut');

		function cessload() {
			window.location.href = $url;
		}
		setInterval(cessload, 1000);
	});

	$('#clogo').click(function () {
		window.location.href('index');
	})



	$('.drop').click(function () {
		$('.mob-nav').addClass('animated slideInUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
			$('.mob-nav').removeClass('animated slideInUp')
		});
		$('.mob-nav').removeClass('toggle');


	});

	$('.close-nav').click(function () {

		$('.mob-nav').addClass('animated slideOutDown').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
			$('.mob-nav').removeClass('animated slideOutDown');
			$('.mob-nav').addClass('toggle')
		});

	});
});

$(document).ready(function() {	
	 $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
});

$('.loader').addClass('animated fadeOut');


$('a[clickey]').click(function (e) {
	e.preventDefault();
	$next = this.getAttribute("href");
	$animate = this.getAttribute("clickey");
	if($animate=="none") {
		window.location.href=$next;
	} else {
		$('body').addClass('animated' + " " + $animate).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
			window.location.href = $next;
		});
	}
})

$('div[clickey],span[clickey]').css({
		"cursor":"pointer",
		"pointer-events":"auto"
});


$('div[clickey],span[clickey]').click(function (e) {
	e.preventDefault();
	$next = this.getAttribute("click-load");
	$animate = this.getAttribute("clickey");
	if($animate=="none") {
		window.location.href=$next;
	} else {
		$('body').addClass('animated' + " " + $animate).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
			window.location.href = $next;
		});
	}
})

function clickeyAll(n) {
	$('a').click(function (e) {
	e.preventDefault();
	$next = this.getAttribute("href");
	
	if(n=="none") {
		window.location.href=$next;
	} else {
		$('body').addClass('animated' + " " + n).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
			window.location.href = $next;
		});
	}
})
}


$('div[data-load]').css('cursor','pointer');
				$('div[data-load]').click(function() {
					$load= this.getAttribute('data-load');
					window.location.href=$load;
				});
				
