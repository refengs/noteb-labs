/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Init Menu
3. Init Home SLider
4. Init Isotope


******************************/

$(document).ready(function()
{
	"use strict";

	/* 

	1. Vars and Inits

	*/

	var menu = $('.menu');
	var burger = $('.hamburger');
	var menuActive = false;

	$(window).on('resize', function()
	{
		setTimeout(function()
		{
			$(window).trigger('resize.px.parallax');
		}, 375);
	});

	initMenu();
	initHomeSlider();
	initIsotope();

	/* 

	2. Init Menu

	*/

	function initMenu()
	{
		if(menu.length)
		{
			if($('.hamburger').length)
			{
				burger.on('click', function()
				{
					if(menuActive)
					{
						closeMenu();
					}
					else
					{
						openMenu();

						$(document).one('click', function cls(e)
						{
							if($(e.target).hasClass('menu_mm'))
							{
								$(document).one('click', cls);
							}
							else
							{
								closeMenu();
							}
						});
					}
				});
			}
		}
	}

	function openMenu()
	{
		menu.addClass('active');
		menuActive = true;
	}

	function closeMenu()
	{
		menu.removeClass('active');
		menuActive = false;
	}

	/* 

	3. Init Home SLider

	*/

	function initHomeSlider()
	{
		if($('.home_slider').length)
		{
			var homeSlider = $('.home_slider');
			homeSlider.owlCarousel(
			{
				items:1,
				loop:true,
				autoplay:false,
				smartSpeed:1200
			});

			if($('.home_slider_prev').length)
			{
				var prev = $('.home_slider_prev');
				prev.on('click', function()
				{
					homeSlider.trigger('prev.owl.carousel');
				});
			}

			if($('.home_slider_next').length)
			{
				var next = $('.home_slider_next');
				next.on('click', function()
				{
					homeSlider.trigger('next.owl.carousel');
				});
			}

		}
	}

	/* 

	4. Init Isotope Filtering

	*/

    function initIsotope()
    {
    	if($('.grid').length)
    	{
    		$('.grid').isotope({
	  			itemSelector: '.grid-item',
	  			percentPosition: true,
	  			masonry:
	  			{
				    horizontalOrder: true
			  	}
	        });

	        if($('.portfolio_category').length)
	    	{
	    		$('.portfolio_category').click(function()
		    	{
			        $('.portfolio_category.active').removeClass('active');
			        $(this).addClass('active');
			 
			        var selector = $(this).attr('data-filter');
			        $('.portfolio_grid').isotope({
			            filter: selector,
			            animationOptions: {
			                duration: 750,
			                easing: 'linear',
			                queue: false
			            }
			        });

			         return false;
			    });
	    	}
    	}
    }

});