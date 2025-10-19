var a=0;$(window).scroll(function(){if($('#counter').length!=0){var oTop=$('#counter').offset().top-window.innerHeight;if(a==0&&$(window).scrollTop()>oTop){$('.counter-value').each(function(){var $this=$(this),countTo=$this.attr('data-count');$({countNum:$this.text()}).animate({countNum:countTo},{duration:2000,easing:'swing',step:function(){$this.text(Math.floor(this.countNum));},complete:function(){$this.text(this.countNum);}});});a=1;}}});$(document).ready(function(){$('.pkg').click(function(){var packageUl=$(this).parent('.pricing-box').find('.scroll').html();var packageName=$(this).parent('.pricing-box').find('.category').html();var packageSku=$(this).parent('.pricing-box').find('.productSku').html();var packagePrice=$(this).parent('.pricing-box').find('.price-box p').html();localStorage.setItem('packageUl',packageUl);localStorage.setItem('packageName',packageName);localStorage.setItem('packageSku',packageSku);localStorage.setItem('packagePrice',packagePrice);window.location='order_now.php';});if($('#logo-packages-carousel').length!=0){$('#logo-packages-carousel').owlCarousel({loop:false,dots:false,margin:0,responsiveClass:true,nav:true,autoplay:2000,autoplayHoverPause:true,navText:['<i class="fal fa-caret-left"></i>','<i class="fal fa-caret-right"></i>'],responsive:{0:{items:1,nav:false},600:{items:2,},1000:{items:3,nav:true}}});}
if($('#website-packages-carousel').length!=0){$('#website-packages-carousel').owlCarousel({loop:false,dots:false,margin:0,responsiveClass:true,nav:true,autoplay:2000,autoplayHoverPause:true,navText:['<i class="fal fa-caret-left"></i>','<i class="fal fa-caret-right"></i>'],responsive:{0:{items:1,nav:false},600:{items:2,},1000:{items:3,nav:true}}});}
if($('.pricing-packages-carousel').length!=0){$('.pricing-packages-carousel').owlCarousel({loop:false,dots:false,margin:0,responsiveClass:true,nav:true,autoplay:2000,autoplayHoverPause:true,navText:['<i class="fal fa-caret-left"></i>','<i class="fal fa-caret-right"></i>'],responsive:{0:{items:1,nav:false},600:{items:2,},1000:{items:3,nav:true}}});}
if($('#brand-packages-carousel').length!=0){$('#brand-packages-carousel').owlCarousel({loop:false,dots:false,margin:0,responsiveClass:true,autoplayHoverPause:true,nav:true,autoplay:2000,navText:['<i class="fal fa-caret-left"></i>','<i class="fal fa-caret-right"></i>'],responsive:{0:{items:1,nav:false},600:{items:2,},1000:{items:3,nav:true}}});}
if($('#right-banner-carousel').length!=0){$('#right-banner-carousel').owlCarousel({loop:false,dots:false,margin:10,responsiveClass:true,nav:true,autoplay:2000,autoplayHoverPause:true,navText:['<i class="fal fa-caret-left"></i>','<i class="fal fa-caret-right"></i>'],responsive:{0:{items:1,nav:false},600:{items:2,},1000:{items:4,nav:true}}});}
if($('#portfolio-carousel').length!=0){$('#portfolio-carousel').owlCarousel({loop:false,stagePadding:40,nav:true,autoPlay:true,center:true,dots:false,autoplay:2000,autoplayHoverPause:true,navText:['<i class="fal fa-caret-left"></i>','<i class="fal fa-caret-right"></i>'],responsive:{0:{items:1},600:{items:2},1000:{items:2,nav:true}}});}
if($('#testimonial-carousel').length!=0){$('#testimonial-carousel').owlCarousel({loop:true,nav:true,autoPlay:true,center:true,dots:false,autoplay:2000,autoplayHoverPause:true,navText:['<i class="fal fa-caret-left"></i>','<i class="fal fa-caret-right"></i>'],responsive:{0:{items:1},600:{items:1},1000:{items:1,nav:true}}});}
if($('#mobile-testimonial-carousel').length!=0){$('#mobile-testimonial-carousel').owlCarousel({loop:true,nav:true,autoPlay:true,center:true,dots:false,autoplayHoverPause:true,autoplay:2000,navText:['<i class="fal fa-caret-left"></i>','<i class="fal fa-caret-right"></i>'],responsive:{0:{items:1},600:{items:1},1000:{items:1,nav:true}}});}
if($('#team-carousel').length!=0){$('#team-carousel').owlCarousel({margin:20,loop:true,nav:false,autoPlay:true,dots:true,autoplay:2000,autoplayHoverPause:true,responsive:{0:{items:1},600:{items:2},1000:{items:3}}});}
if($('.scroll').length!=0){$('.scroll').slimScroll({height:'300px',size:'6px',color:'rgba(3, 200, 245, 1)',alwaysVisible:true,distance:'16px',railVisible:true,railColor:' rgb(255, 189, 0)',railOpacity:1,railBorderRadius:'0px',wheelStep:10,disableFadeOut:false});}
var windowsWith=$(window).width();if(windowsWith<=576){if($('#stone-carousel').length!=0){$('#stone-carousel').addClass('owl-carousel owl-theme');$('#stone-carousel').owlCarousel({loop:true,nav:false,autoPlay:true,center:true,dots:false,autoplayHoverPause:true,autoplay:2000,navText:['<i class="fal fa-caret-left"></i>','<i class="fal fa-caret-right"></i>'],responsive:{0:{items:1,nav:false,dots:true},600:{items:1},1000:{items:1,nav:true}}});}}
		$('#logo_nanogallery2').nanogallery2( {
				"thumbnailHeight":600, "thumbnailWidth":600, "itemsBaseURL":"", "thumbnailGutterHeight":10, "thumbnailGutterWidth":10, items:[ {
					src: 'img/portfolio/logo/P-L1.jpg', srct: 'img/portfolio/logo/P-L1.jpg'
				}
					, {
						src: 'img/portfolio/logo/P-L2.jpg', srct: 'img/portfolio/logo/P-L2.jpg'
					}
					, {
						src: 'img/portfolio/logo/P-L3.jpg', srct: 'img/portfolio/logo/P-L3.jpg'
					}
					, {
						src: 'img/portfolio/logo/P-L4.jpg', srct: 'img/portfolio/logo/P-L4.jpg'
					}
					, {
						src: 'img/portfolio/logo/P-L5.jpg', srct: 'img/portfolio/logo/P-L5.jpg'
					}
					, {
						src: 'img/portfolio/logo/P-L6.jpg', srct: 'img/portfolio/logo/P-L6.jpg'
					}
					, {
						src: 'img/portfolio/logo/P-L7.jpg', srct: 'img/portfolio/logo/P-L7.jpg'
					}
					, {
						src: 'img/portfolio/logo/P-L8.jpg', srct: 'img/portfolio/logo/P-L8.jpg'
					}
					, {
						src: 'img/portfolio/logo/P-L9.jpg', srct: 'img/portfolio/logo/P-L9.jpg'
					}
					, {
						src: 'img/portfolio/logo/P-L10.jpg', srct: 'img/portfolio/logo/P-L10.jpg'
					}
					, {
						src: 'img/portfolio/logo/P-L11.jpg', srct: 'img/portfolio/logo/P-L11.jpg'
					}
					, {
						src: 'img/portfolio/logo/P-L12.jpg', srct: 'img/portfolio/logo/P-L12.jpg'
					}
					, {
						src: 'img/portfolio/logo/P-L13.jpg', srct: 'img/portfolio/logo/P-L13.jpg'
					}
					, {
						src: 'img/portfolio/logo/P-L14.jpg', srct: 'img/portfolio/logo/P-L14.jpg'
					}
					, {
						src: 'img/portfolio/logo/P-L15.jpg', srct: 'img/portfolio/logo/P-L15.jpg'
					}
					, {
						src: 'img/portfolio/logo/P-L16.jpg', srct: 'img/portfolio/logo/P-L16.jpg'
					}
					, ]
			}

		);

	}
);
$(function(){$('a[data-toggle="tab"]').on("shown.bs.tab",function(o){console.log(o.target);var t=$(o.target).attr("data-gallery");console.log(t),"#logo_nanogallery2"==t?$(t).nanogallery2({thumbnailHeight:600,thumbnailWidth:600,itemsBaseURL:"",thumbnailGutterHeight:10,thumbnailGutterWidth:10,items:[{src:"img/portfolio/logo/P-L1.jpg",srct:"img/portfolio/logo/P-L1.jpg"},{src:"img/portfolio/logo/P-L2.jpg",srct:"img/portfolio/logo/P-L2.jpg"},{src:"img/portfolio/logo/P-L3.jpg",srct:"img/portfolio/logo/P-L3.jpg"},{src:"img/portfolio/logo/P-L4.jpg",srct:"img/portfolio/logo/P-L4.jpg"},{src:"img/portfolio/logo/P-L5.jpg",srct:"img/portfolio/logo/P-L5.jpg"},{src:"img/portfolio/logo/P-L6.jpg",srct:"img/portfolio/logo/P-L6.jpg"},{src:"img/portfolio/logo/P-L7.jpg",srct:"img/portfolio/logo/P-L7.jpg"},{src:"img/portfolio/logo/P-L8.jpg",srct:"img/portfolio/logo/P-L8.jpg"},{src:"img/portfolio/logo/P-L9.jpg",srct:"img/portfolio/logo/P-L9.jpg"},{src:"img/portfolio/logo/P-L10.jpg",srct:"img/portfolio/logo/P-L10.jpg"},{src:"img/portfolio/logo/P-L11.jpg",srct:"img/portfolio/logo/P-L11.jpg"},{src:"img/portfolio/logo/P-L12.jpg",srct:"img/portfolio/logo/P-L12.jpg"},{src:"img/portfolio/logo/P-L13.jpg",srct:"img/portfolio/logo/P-L13.jpg"},{src:"img/portfolio/logo/P-L14.jpg",srct:"img/portfolio/logo/P-L14.jpg"},{src:"img/portfolio/logo/P-L15.jpg",srct:"img/portfolio/logo/P-L15.jpg"},{src:"img/portfolio/logo/P-L16.jpg",srct:"img/portfolio/logo/P-L16.jpg"}]}):"#web_nanogallery2"==t?$(t).nanogallery2({thumbnailHeight:600,thumbnailWidth:600,itemsBaseURL:"",thumbnailGutterHeight:10,thumbnailGutterWidth:10,items:[{src:"img/portfolio/web/01.jpg",srct:"img/portfolio/web/thumb/01.jpg"},{src:"img/portfolio/web/02.jpg",srct:"img/portfolio/web/thumb/02.jpg"},{src:"img/portfolio/web/03.jpg",srct:"img/portfolio/web/thumb/03.jpg"},{src:"img/portfolio/web/04.jpg",srct:"img/portfolio/web/thumb/04.jpg"},{src:"img/portfolio/web/05.jpg",srct:"img/portfolio/web/thumb/05.jpg"},{src:"img/portfolio/web/06.jpg",srct:"img/portfolio/web/thumb/06.jpg"},{src:"img/portfolio/web/07.jpg",srct:"img/portfolio/web/thumb/07.jpg"},{src:"img/portfolio/web/08.jpg",srct:"img/portfolio/web/thumb/08.jpg"},{src:"img/portfolio/web/09.jpg",srct:"img/portfolio/web/thumb/09.jpg"},{src:"img/portfolio/web/10.jpg",srct:"img/portfolio/web/thumb/10.jpg"},{src:"img/portfolio/web/11.jpg",srct:"img/portfolio/web/thumb/11.jpg"},{src:"img/portfolio/web/12.jpg",srct:"img/portfolio/web/thumb/12.jpg"}]}):"#branding_nanogallery2"==t?$(t).nanogallery2({thumbnailHeight:600,thumbnailWidth:600,itemsBaseURL:"",thumbnailGutterHeight:10,thumbnailGutterWidth:10,items:[{src:"img/portfolio/branding/01.jpg",srct:"img/portfolio/branding/01.jpg"},{src:"img/portfolio/branding/02.jpg",srct:"img/portfolio/branding/02.jpg"},{src:"img/portfolio/branding/03.jpg",srct:"img/portfolio/branding/03.jpg"},{src:"img/portfolio/branding/04.jpg",srct:"img/portfolio/branding/04.jpg"}]}):"#video_nanogallery2"==t&&$(t).nanogallery2({thumbnailHeight:600,thumbnailWidth:600,itemsBaseURL:"",thumbnailGutterHeight:10,thumbnailGutterWidth:10,items:[{src:"https://www.youtube.com/watch?v=yFUuj_Z1kvI",srct:"img/portfolio/video/01.jpg"},{src:"https://www.youtube.com/watch?v=BhTq2IECPGI",srct:"img/portfolio/logo/P-L2.jpg"},{src:"https://www.youtube.com/watch?v=l7XymMtmBfw",srct:"img/portfolio/logo/P-L3.jpg"},{src:"https://www.youtube.com/watch?v=k9s69VoVhCo",srct:"img/portfolio/logo/P-L4.jpg"},{src:"https://www.youtube.com/watch?v=GgKaWGujnuc",srct:"img/portfolio/logo/P-L4.jpg"},{src:"https://www.youtube.com/watch?v=Ax9PFx3WSW0",srct:"img/portfolio/logo/P-L4.jpg"},{src:"https://www.youtube.com/watch?v=HbIJ8zGSa8o",srct:"img/portfolio/logo/P-L4.jpg"},{src:"https://www.youtube.com/watch?v=CawTvb1mUxA",srct:"img/portfolio/video/02.jpg"},{src:"https://www.youtube.com/watch?v=bPrB-lYqUMM",srct:"img/portfolio/video/03.jpg"}]})})});

$(document).ready(function(){
	if($('#portfolio-carousel-video').length != 0){
		var carousel = $('#portfolio-carousel-video').owlCarousel({
			stagePadding:40,
			loop:true,
			nav:true,
			autoPlay:true,
			center:true,
			dots:false,
			autoplay:2000,
			autoplayHoverPause:true,
			navText:['<i class="fal fa-caret-left"></i>','<i class="fal fa-caret-right"></i>'],
			responsive:{0:{items:1},600:{items:2},1000:{items:2,nav:true}}
		});
		window.owlTube = $(carousel).owlTube();
	}
})


$(document).ready(function(){
	if($('.packages-slider').length != 0){
		var carousel = $('#portfolio-carousel-video').owlCarousel({
			stagePadding:40,
			loop:true,
			nav:true,
			autoPlay:true,
			center:true,
			dots:false,
			autoplay:2000,
			autoplayHoverPause:true,
			navText:['<i class="fal fa-caret-left"></i>','<i class="fal fa-caret-right"></i>'],
			responsive:{0:{items:3},600:{items:2},1000:{items:2,nav:true}}
		});
		window.owlTube = $(carousel).owlTube();
	}
})

 
$(document).ready(function(){
	if($('.portfolio_print').length != 0){
		var carousel = $('.portfolio_print').owlCarousel({
			loop:true,
			nav:true,
			animateOut: 'fadeOut',
    	animateIn: 'fadeIn',
    	mouseDrag: false,
			margin: 30,
			autoPlay:true,
			dots:false,
			autoplay:5000,
			autoplayHoverPause:true,
			navText:['<i class="fal fa-caret-left"></i>','<i class="fal fa-caret-right"></i>'],
			responsive:{0:{items:1},600:{items:1},1000:{items:1,nav:true}}
		});
		window.owlTube = $(carousel).owlTube();
	}

	if($('#web_desgin_carousel').length != 0){
		var carousel = $('#web_desgin_carousel').owlCarousel({
			loop:true,
			nav:true,
			animateOut: 'fadeOut',
    	animateIn: 'fadeIn',
    	mouseDrag: false,
			margin: 30,
			autoPlay:true,
			dots:false,
			autoplay:5000,
			autoplayHoverPause:true,
			navText:['<i class="fal fa-caret-left"></i>','<i class="fal fa-caret-right"></i>'],
			responsive:{0:{items:1},600:{items:1},1000:{items:1,nav:true}}
		});
		window.owlTube = $(carousel).owlTube();
	}

// if($('#team-carousel').length!=0) {}

$(document).on('click', '.faq_nav ul li a', function(event) {
  event.preventDefault();
  $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top - 220
  }, 500);
  // if ($(this).hasClass('faq_nav ul li a')) {
      
  // }
});
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("affix-top");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
// $('.faq_nav ul li.active').click(function() {
//     $(this).removeClass('active');
//     $(this).addClass('active');
// });

    $(document).on("scroll", onScroll);
    
    //smoothscroll
    $('.faq_nav ul li a').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 150
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });

	function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('.faq_nav ul li a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('.faq_nav ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
	}

})


$(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
        $('header').addClass('fixed-header');
     }
    else {
        $('header').removeClass('fixed-header');
        $('header').removeClass('visible-title');
    }
});


