var mq = window.matchMedia('all and (max-width: 992px)');
if(mq.matches) {
    document.getElementsByClassName("col-md-6 col-sm-12").className = "col-xs-12";
     document.getElementsByClassName("styled-input").className = "styled-input wide";
    
} 


$(document).ready(function() {
					$('a').click(function(e) {
						e.preventDefault();
						$url = $(this).attr('href');
						$('body').addClass('animated flipOutY');
						function cessload() {
							window.location.href=$url;
							}
						setInterval(cessload,1000);
					});
	
		$('#clogo').click(function() {
			window.location.href('index');
		})
	
	
			$('.show-news').click(function(e) {
			e.preventDefault();
			$(this).toggleClass('cess-active');
			$('.show1').toggleClass('animated rollOut hide');;
			$('.show2').toggleClass('animated rollIn show');
		});
		
		$('.drop').click(function() {
			$('.mob-nav').addClass('animated slideInUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {$('.mob-nav').removeClass('animated slideInUp')});;
			$('.mob-nav').removeClass('toggle');
			

		});
			
		$('.close-nav').click(function() {
			
			$('.mob-nav').addClass('animated slideOutDown').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
				$('.mob-nav').removeClass('animated slideOutDown');
				$('.mob-nav').addClass('toggle')
			});

		});
				});
		
 $('.loader').addClass('animated fadeOut');