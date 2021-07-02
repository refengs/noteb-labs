/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Init Menu
3. InitQty


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
	initQty();

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

	3. Init Qty

	*/

	function initQty()
	{
		if($('.product_quantity').length)
		{
			var qtys = $('.product_quantity');

			qtys.each(function()
			{
				var qty = $(this);
				var sub = qty.find('.qty_sub');
				var add = qty.find('.qty_add');
				var num = qty.find('.product_num');
				var original;
				var newValue;

				sub.on('click', function()
				{
					original = parseFloat(qty.find('.product_num').text());
					if(original > 0)
						{
							newValue = original - 1;
						}
					num.text(newValue);
				});

				add.on('click', function()
				{
					original = parseFloat(qty.find('.product_num').text());
					newValue = original + 1;
					num.text(newValue);
				});
			});
		}
	}

});