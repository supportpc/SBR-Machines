(function ($) {
    "use strict";
	
	var $window = $(window); 
	var $body = $('body'); 

	/* Preloader Effect */
	$window.on('load', function(){
		$(".preloader").fadeOut(600);
	});

	/* Sticky Header */	
	if($('.active-sticky-header').length){
		$window.on('resize', function(){
			setHeaderHeight();
		});

		function setHeaderHeight(){
	 		$("header.main-header").css("height", $('header .header-sticky').outerHeight());
		}	
	
		$window.on("scroll", function() {
			var fromTop = $(window).scrollTop();
			setHeaderHeight();
			var headerHeight = $('header .header-sticky').outerHeight()
			$("header .header-sticky").toggleClass("hide", (fromTop > headerHeight + 100));
			$("header .header-sticky").toggleClass("active", (fromTop > 600));
		});
	}	
	
	/* Slick Menu JS */
	$('#menu').slicknav({
		label : '',
		prependTo : '.responsive-menu'
	});

	if($("a[href='#top']").length){
		$(document).on("click", "a[href='#top']", function() {
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
		});
	}

	/* Hero Video Slider Layout JS (Sequential Auto-Play Videos) */
	if ($('.hero-slider-layout .swiper').length) {
		let fallbackTimer = null;

		const heroSwiper = new Swiper('.hero-slider-layout .swiper', {
			effect: 'fade',
			fadeEffect: {
				crossFade: true
			},
			slidesPerView: 1,
			speed: 1000,
			spaceBetween: 0,
			loop: false,
			allowTouchMove: true,
			pagination: {
				el: '.hero-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.hero-button-next',
				prevEl: '.hero-button-prev',
			},
		});

		function getAllHeroVideos() {
			return document.querySelectorAll('.hero-slider-layout .hero-video-item');
		}

		function moveToNextSlide() {
			if (!heroSwiper || heroSwiper.destroyed) return;
			if (heroSwiper.activeIndex >= heroSwiper.slides.length - 1) {
				heroSwiper.slideTo(0, 1000);
			} else {
				heroSwiper.slideNext(1000);
			}
		}

		function playActiveVideo(index) {
			clearTimeout(fallbackTimer);
			const allVideos = getAllHeroVideos();
			
			allVideos.forEach(function(video, i) {
				if (i !== index) {
					try {
						video.pause();
						video.currentTime = 0;
					} catch(e) {}
				}
			});

			const activeSlide = heroSwiper.slides[index];
			if (!activeSlide) return;

			const currentVideo = activeSlide.querySelector('.hero-video-item');
			if (currentVideo) {
				currentVideo.currentTime = 0;
				const playPromise = currentVideo.play();
				if (playPromise !== undefined) {
					playPromise.then(function() {
						if (currentVideo.duration && !isNaN(currentVideo.duration) && currentVideo.duration > 0) {
							fallbackTimer = setTimeout(function() {
								moveToNextSlide();
							}, (currentVideo.duration * 1000) + 1500);
						}
					}).catch(function() {
						fallbackTimer = setTimeout(moveToNextSlide, 6000);
					});
				}
			} else {
				fallbackTimer = setTimeout(moveToNextSlide, 6000);
			}
		}

		const heroVideos = getAllHeroVideos();
		heroVideos.forEach(function(video) {
			video.muted = true;
			video.setAttribute('playsinline', '');
			video.setAttribute('webkit-playsinline', '');

			video.addEventListener('ended', function() {
				clearTimeout(fallbackTimer);
				moveToNextSlide();
			});

			video.addEventListener('error', function() {
				clearTimeout(fallbackTimer);
				fallbackTimer = setTimeout(moveToNextSlide, 6000);
			});

			video.addEventListener('loadedmetadata', function() {
				const activeSlide = heroSwiper.slides[heroSwiper.activeIndex];
				if (activeSlide && activeSlide.contains(video)) {
					clearTimeout(fallbackTimer);
					if (video.duration && !isNaN(video.duration) && video.duration > 0) {
						fallbackTimer = setTimeout(function() {
							moveToNextSlide();
						}, (video.duration * 1000) + 1500);
					}
				}
			});
		});

		heroSwiper.on('slideChangeTransitionEnd', function() {
			playActiveVideo(heroSwiper.activeIndex);
		});

		$(window).on('load', function() {
			playActiveVideo(heroSwiper.activeIndex);
		});
		
		setTimeout(function() {
			playActiveVideo(heroSwiper.activeIndex);
		}, 300);

		document.addEventListener('visibilitychange', function() {
			if (document.hidden) {
				clearTimeout(fallbackTimer);
				getAllHeroVideos().forEach(function(v) {
					try { v.pause(); } catch(e) {}
				});
			} else {
				playActiveVideo(heroSwiper.activeIndex);
			}
		});
	}

	/* Services Slider JS */
	if ($('.services-slider').length) {
		const services_slider = new Swiper('.services-slider .swiper', {
			slidesPerView : 1,
			speed: 1000,
			spaceBetween: 30,
			loop: true,
			autoplay: {
				delay: 5000,
			},
			pagination: {
				el: '.services-pagination',
				clickable: true,
			},
			breakpoints: {
				768:{
					slidesPerView: 2,
				},
				991:{
					slidesPerView: 3,
				}
			}
		});
	}

	/* testimonial Slider JS */
	if ($('.testimonial-slider').length) {
		const testimonial_slider = new Swiper('.testimonial-slider .swiper', {
			slidesPerView : 1,
			speed: 1000,
			spaceBetween: 30,
			loop: true,
			autoplay: {
				delay: 5000,
			},
			pagination: {
				el: '.testimonial-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.testimonial-button-next',
				prevEl: '.testimonial-button-prev',
			},
			breakpoints: {
				768:{
					slidesPerView: 1,
				},
				991:{
					slidesPerView: 1,
				}
			}
		});
	}

	/* Testimonial Company Slider JS */
	if ($('.testimonial-company-slider').length) {
		const testimonial_company_slider = new Swiper('.testimonial-company-slider .swiper', {
			slidesPerView : 2,
			speed: 2000,
			spaceBetween: 40,
			loop: true,
			autoplay: {
				delay: 5000,
			},
			breakpoints: {
				768:{
				  	slidesPerView: 4,
				},
				991:{
				  	slidesPerView: 6,
				}
			}
		});
	}

	/* Page Single Slider Start */
		if ($('.page-single-slider').length) {
			const testimonial_slider = new Swiper('.page-single-slider .swiper', {
				slidesPerView : 1,
				speed: 1000,
				spaceBetween: 30,
				loop: true,
				autoplay: {
					delay: 5000,
				},
				pagination: {
					el: '.page-single-pagination',
					clickable: true,
				},
				breakpoints: {
					768:{
						slidesPerView: 1,
					},
					991:{
						slidesPerView: 1,
					}
				}
			});
		}

	/* Skill Bar */
	if ($('.skills-progress-bar').length) {
		$('.skills-progress-bar').waypoint(function() {
			$('.skillbar').each(function() {
				$(this).find('.count-bar').animate({
				width:$(this).attr('data-percent')
				},2000);
			});
		},{
			offset: '70%'
		});
	}

	/* Youtube Background Video JS */
	if ($('#herovideo').length) {
		var myPlayer = $("#herovideo").YTPlayer();
	}

	/* Init Counter */
	if ($('.counter').length) {
		$('.counter').counterUp({ delay: 6, time: 3000 });
	}

	/* Image Reveal Animation */
	if ($('.reveal').length) {
        gsap.registerPlugin(ScrollTrigger);
        let revealContainers = document.querySelectorAll(".reveal");
        revealContainers.forEach((container) => {
            let image = container.querySelector("img");
            let tl = gsap.timeline({
                scrollTrigger: {
                    trigger: container,
                    toggleActions: "play none none none"
                }
            });
            tl.set(container, {
                autoAlpha: 1
            });
            tl.from(container, 1, {
                xPercent: -100,
                ease: Power2.out
            });
            tl.from(image, 1, {
                xPercent: 100,
                scale: 1,
                delay: -1,
                ease: Power2.out
            });
        });
    }

	/* Text Effect Animation */
	if ($('.text-anime-style-1').length) {
		let staggerAmount 	= 0.05,
			translateXValue = 0,
			delayValue 		= 0.5,
		   animatedTextElements = document.querySelectorAll('.text-anime-style-1');
		
		animatedTextElements.forEach((element) => {
			let animationSplitText = new SplitText(element, { type: "chars, words" });
				gsap.from(animationSplitText.words, {
				duration: 1,
				delay: delayValue,
				x: 20,
				autoAlpha: 0,
				stagger: staggerAmount,
				scrollTrigger: { trigger: element, start: "top 85%" },
				});
		});		
	}
	
	if ($('.text-anime-style-2').length) {				
		let	 staggerAmount 		= 0.03,
			 translateXValue	= 20,
			 delayValue 		= 0.1,
			 easeType 			= "power2.out",
			 animatedTextElements = document.querySelectorAll('.text-anime-style-2');
		
		animatedTextElements.forEach((element) => {
			let animationSplitText = new SplitText(element, { type: "chars, words" });
				gsap.from(animationSplitText.chars, {
					duration: 1,
					delay: delayValue,
					x: translateXValue,
					autoAlpha: 0,
					stagger: staggerAmount,
					ease: easeType,
					scrollTrigger: { trigger: element, start: "top 85%"},
				});
		});		
	}
	
	if ($('.text-anime-style-3').length) {		
		let	animatedTextElements = document.querySelectorAll('.text-anime-style-3');
		
		 animatedTextElements.forEach((element) => {
			//Reset if needed
			if (element.animation) {
				element.animation.progress(1).kill();
				element.split.revert();
			}

			element.split = new SplitText(element, {
				type: "lines,words,chars",
				linesClass: "split-line",
			});
			gsap.set(element, { perspective: 400 });

			gsap.set(element.split.chars, {
				opacity: 0,
				x: "50",
			});

			element.animation = gsap.to(element.split.chars, {
				scrollTrigger: { trigger: element,	start: "top 90%" },
				x: "0",
				y: "0",
				rotateX: "0",
				opacity: 1,
				duration: 1,
				ease: Back.easeOut,
				stagger: 0.02,
			});
		});		
	}

	/* Parallaxie js */
	var $parallaxie = $('.parallaxie');
	if($parallaxie.length && ($window.width() > 991))
	{
		if ($window.width() > 768) {
			$parallaxie.parallaxie({
				speed: 0.55,
				offset: 0,
			});
		}
	}

	/* Zoom Gallery screenshot */
	$('.gallery-items').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom',
		image: {
			verticalFit: true,
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
			  return element.find('img');
			}
		}
	});

	/* Contact form validation */
	var $contactform = $("#contactForm");
	$contactform.validator({focus: false}).on("submit", function (event) {
		if (!event.isDefaultPrevented()) {
			event.preventDefault();
			submitForm();
		}
	});

	function submitForm(){
		/* Ajax call to submit form */
		$.ajax({
			type: "POST",
			url: "form-process.php",
			data: $contactform.serialize(),
			success : function(text){
				if (text === "success"){
					formSuccess();
				} else {
					submitMSG(false,text);
				}
			}
		});
	}

	function formSuccess(){
		$contactform[0].reset();
		submitMSG(true, "Message Sent Successfully!")
	}

	function submitMSG(valid, msg){
		if(valid){
			var msgClasses = "h4 text-success";
		} else {
			var msgClasses = "h4 text-danger";
		}
		$("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
	}
	/* Contact form validation end */

	/* Animated Wow Js */	
	new WOW().init();

	/* Popup Video */
	if ($('.popup-video').length) {
		$('.popup-video').magnificPopup({
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: true
		});
	}

	/* Why Choose List Active Start */
	var $why_choose_list = $('.why-choose-list');
	if ($why_choose_list.length) {
		var $why_choose_item = $why_choose_list.find('.why-choose-item');

		if ($why_choose_item.length) {
			$why_choose_item.on({
				mouseenter: function () {
					if (!$(this).hasClass('active')) {
						$why_choose_item.removeClass('active'); 
						$(this).addClass('active'); 
					}
				},
				mouseleave: function () {
					// Optional: Add logic for mouse leave if needed
				}
			});
		}
	}
	/* Why Choose List Active End */
	
})(jQuery);