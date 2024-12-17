/**
 * Get the current coordinates of the first element in the set of matched
 * elements, relative to the closest positioned ancestor element that
 * matches the selector.
 * @param {Object} selector
 */
jQuery.fn.positionAncestor = function(selector) {
    var left = 0;
    var top = 0;
    this.each(function(index, element) {
        // check if current element has an ancestor matching a selector
        // and that ancestor is positioned
        var $ancestor = $(this).closest(selector);
        if ($ancestor.length && $ancestor.css("position") !== "static") {
            var $child = $(this);
            var childMarginEdgeLeft = $child.offset().left - parseInt($child.css("marginLeft"), 10);
            var childMarginEdgeTop = $child.offset().top - parseInt($child.css("marginTop"), 10);
            var ancestorPaddingEdgeLeft = $ancestor.offset().left + parseInt($ancestor.css("borderLeftWidth"), 10);
            var ancestorPaddingEdgeTop = $ancestor.offset().top + parseInt($ancestor.css("borderTopWidth"), 10);
            left = childMarginEdgeLeft - ancestorPaddingEdgeLeft;
            top = childMarginEdgeTop - ancestorPaddingEdgeTop;
            // we have found the ancestor and computed the position
            // stop iterating
            return false;
        }
    });
    return {
        left:    left,
        top:    top
    }
};


/*
* vertical news ticker
* Tadas Juozapaitis ( kasp3rito [eta] gmail (dot) com )
* http://www.jugbit.com/jquery-vticker-vertical-news-ticker/
*/
(function($){
$.fn.vTicker = function(options) {
	var defaults = {
		speed: 1500,
		pause: 3000,
		showItems: 2,
		animation: 'fade',
		mousePause: true,
		isPaused: false,
		direction: 'up',
		height: 0
	};

	var options = $.extend(defaults, options);

	moveUp = function(obj2, height, options){
		if(options.isPaused)
			return;
		
		var obj = obj2.children('ul');
		
    	var clone = obj.children('li:first').clone(true);
		
		if(options.height > 0)
		{
			height = obj.children('li:first').height();
		}		
		
    	obj.animate({top: '-=' + height + 'px'}, options.speed, function() {
        	$(this).children('li:first').remove();
        	$(this).css('top', '0px');
        });
		
		if(options.animation == 'fade')
		{
			obj.children('li:first').fadeOut(options.speed);
			if(options.height == 0)
			{
			obj.children('li:eq(' + options.showItems + ')').hide().fadeIn(options.speed).show();
			}
		}

    	clone.appendTo(obj);
	};
	
	moveDown = function(obj2, height, options){
		if(options.isPaused)
			return;
		
		var obj = obj2.children('ul');
		
    	var clone = obj.children('li:last').clone(true);
		
		if(options.height > 0)
		{
			height = obj.children('li:first').height();
		}
		
		obj.css('top', '-' + height + 'px')
			.prepend(clone);
			
    	obj.animate({top: 0}, options.speed, function() {
        	$(this).children('li:last').remove();
        });
		
		if(options.animation == 'fade')
		{
			if(options.height == 0)
			{
				obj.children('li:eq(' + options.showItems + ')').fadeOut(options.speed);
			}
			obj.children('li:first').hide().fadeIn(options.speed).show();
		}
	};
	
	return this.each(function() {
		var obj = $(this);
		var maxHeight = 0;

		obj.css({overflow: 'hidden', position: 'relative'})
			.children('ul').css({position: 'absolute', margin: 0, padding: 0})
			.children('li').css({margin: 0, padding: 0});

		if(options.height == 0)
		{
			obj.children('ul').children('li').each(function(){
				if($(this).height() > maxHeight)
				{
					maxHeight = $(this).height();
				}
			});

			obj.children('ul').children('li').each(function(){
				$(this).height(maxHeight);
			});

			obj.height(maxHeight * options.showItems);
		}
		else
		{
			obj.height(options.height);
		}
		
    	var interval = setInterval(function(){ 
			if(options.direction == 'up')
			{ 
				moveUp(obj, maxHeight, options); 
			}
			else
			{ 
				moveDown(obj, maxHeight, options); 
			} 
		}, options.pause);
		
		if(options.mousePause)
		{
			obj.bind("mouseenter",function(){
				options.isPaused = true;
			}).bind("mouseleave",function(){
				options.isPaused = false;
			});
		}
	});
};
})(jQuery);


// Menu JS

$(function() {
    var $el, leftPos, newWidth;
	hover_text_color = "#FFFFFF";
	orig_text_color = "#5E676B";
	off_axis = 0;
	 $mainNav = $("#nav ul.menu");
		$mainNav.append("<li id='magic-line'></li>");
		var $magicLine = $("li#magic-line");
		var currentItem;
		var noCurrent=false;
	if ($mainNav.children('li.current-menu-parent').length){
		currentItem = $('#nav ul.menu li.current-menu-parent');
	}else if ($mainNav.children('li.current-menu-item').length){
		currentItem = $('#nav ul.menu li.current-menu-item');
	}else{

		$('#nav ul.menu').prepend('<li><a></a></li>');
		currentItem = $('#nav ul.menu li:first-child');
		currentItem.css('width','0');
		noCurrent=true;
	}
	
    if (noCurrent)
	{
	
	$magicLine
        .width(0)
        .height($mainNav.height())
        .css("left", '0')
        .data("origLeft", 0)
        .data("origWidth", $magicLine.width());
	}else{
	$magicLine
        .width(currentItem.width())
        .height($mainNav.height())
        .css("left", currentItem.children('a').position().left-off_axis)
        .data("origLeft", currentItem.children('a').position().left-off_axis)
        .data("origWidth", $magicLine.width());
	}
    $("#nav ul.menu>li").mouseenter(function() {
        $el = $(this).children('a');
        leftPos = $el.position().left-off_axis;
        newWidth = $el.parent().width();
		currentItem.children('a').stop().animate({
		color:orig_text_color})
		$el.stop().animate({
		color:hover_text_color})
        $magicLine.stop().animate({
            left: leftPos,
            width: newWidth
        })
    }).mouseleave(function() {
	if(currentItem.children('a').index()!=$("a").index(this)){
		$el.stop().animate({
		color:orig_text_color})
		currentItem.children('a').stop().animate({
		color:hover_text_color})}
		
        $magicLine.stop().animate({
            left: $magicLine.data("origLeft"),
            width: $magicLine.data("origWidth")
        });    
    });
    
    /* Kick IE into gear */
    //$("li.current-menu-item>a").mouseenter();
    
});


// Document Ready
$(document).ready(function() {
//News Ticker

$('.Ticker.News').vTicker();

//Menu
$('#header #nav ul.menu li ul').each(function(index) {
    ulWidth = $(this).width();
	itemWidth = $(this).parent().width();
	Leftpos = $(this).parent().positionAncestor('ul.menu').left;
    $(this)
		.css('left',Leftpos-(ulWidth/2)+(itemWidth/2))
		.children('li').width(ulWidth);
});
//tabs

 $('ul.Tabs li a.defaulttab').parent().addClass('Current');
	$('.Tabs a').click(function(){
		//return false;
	});
	$('.Tabs a').hover(function(){
		$('ul.Tabs li.Current').removeClass('Current');
		switch_tabs($(this));
		return false;
	});
	var Contact = false;
	$('#ContactUs').click(function(){
		Contact = true;
		$('#overlay').fadeIn();
		$('#ContactUsForm').fadeIn();
	});
	
	
	$('#overlay, #ContactUsForm a.close').click(function(){
		$('#overlay').fadeOut();
		if (Contact == true)
		{
			$('#ContactUsForm').fadeOut();
		}
	});
	
});
 
function switch_tabs(obj)
{
	
	$parent = obj.parent()
	$parent.addClass('Current');
	var TabPos = obj.parent().index();
	var sumWidth = 0;
	for (i=1;i<=TabPos;i++)
	{
		var lastWidth = $('ul.Tabs li').eq(i).outerWidth(true);
		sumWidth += lastWidth;
	}
	$('li.CurrentArr').stop().animate({
	left: sumWidth-(lastWidth/2)-8
	},500);

	$('.TabContent').hide();
	$('.Tabs a').removeClass("selected");
	var id = obj.attr("name");
 
	$('#'+id).show();
	obj.addClass("selected");
}

	// Accordion
	
	$(document).ready(function() {
		
		//HIDE THE DIVS ON PAGE LOAD	
		$("div.AcElContent").hide();
		$("#HPAcordion ul.Acordion li:first .AcElContent")
			.show()
			.parent().addClass('Selected');
		
		//ACCORDION BUTTON ACTION	
		$('div.AcElHead').click(function() {
		if ($(this).parent().hasClass('Selected')==true){
			$(this)
				.next().slideUp('normal')
				.parent().removeClass('Selected');
		}
		else{
			$('div.AcElContent').slideUp('normal');	
			$(this).next().slideDown('normal');
			
			$('#HPAcordion ul.Acordion li').removeClass('Selected');
			$(this).parent().addClass('Selected');
		}
		});
	
	});
	
	
	
	
/* Tooltip Game Fetures */




/* Tooltip Games */

$(document).ready(function() {
	ToolTipGamesInfo($('.LargeRating'));
	
});

function ToolTipGamesInfo($list){
		
	$ToolTip = $('#InformationContent');
	var mouseHoverTooltip = false;
	var clicked=false;
	
	
	
		$list.find('a.Info').live('mouseover',function() {
			
			var PosFix = $(this).offset();
			
			var InformationContent = $(this).next().html();
			
			$ToolTip.find('.Mid').html(InformationContent);
			InformationHeight = $ToolTip.height();
			$ToolTip.css('top',PosFix.top-InformationHeight);

			$ToolTip.css('left',PosFix.left-$ToolTip.outerWidth(true)+40);
			$ToolTip.stop(true,true).fadeIn();

		}).live('mouseout',function() {
			setTimeout(function () {
				if (!mouseHoverTooltip){
					$ToolTip.stop(true,true).fadeOut();
				}
			},100);
		});
		
		$ToolTip.mouseover(function() {
			mouseHoverTooltip = true;
			
		}).mouseleave(function() {
			FadeoutIfNotclicked();
			
		}).mousedown(function(){
			clicked = true;
			
		}).mouseup(function(){
			setTimeout(function () {
				clicked = false;
			},100);
		});
		
		
			function FadeoutIfNotclicked(){
				setTimeout(function () {
				if (clicked==false){
					mouseHoverTooltip = false;
					$ToolTip.fadeOut();
				}else {
					FadeoutIfNotclicked();
				}
				
				},100);
			}
	
}
	
	
	
	
	
	
	
	
	
	
	// Tooltip
	
	$(document).ready(function() {
		//Vars
		function StopTooltip(){
			$Tooltip.stop().animate({
				opacity: 0
				}, 100);
			$Tooltip.find('.TipArrow').css('display','none');
		}
		var Fadespeed = 200;
		$('body').append('<div class="Tooltip" id="Tooltip"><span class="leftRad"></span><span class="TooltipText"></span><span class="rightRad"></span><div class="TipArrow"></div></div>');
		$('span[tooltip], a[tooltip], div[tooltip], img[tooltip]').live("mouseover",function() {
			var TooltipTitle = $(this).attr('tooltip');
			var offset = $(this).offset();
			var ArrOffset=0;
			$Tooltip = $('#Tooltip');
			$TooltipText = $Tooltip.find('span.TooltipText');
			$TooltipText.html(TooltipTitle);
			if (offset.left+$('#Tooltip').outerWidth(true)>$('#main').outerWidth()+$('#main').offset().left)
			{ 	oldOffset = offset.left;
				var pageOffset = $('#main').outerWidth();
				if ($('#main').offset().left>0)
				{    
					 pageOffset+=$('#main').offset().left;
					 offset.left = pageOffset-($('#Tooltip').width());
				}
				
				ArrOffset = oldOffset-offset.left;
				
			}
			$Tooltip
				.css('left',offset.left)
				.css('top',offset.top-$Tooltip.outerHeight())
				.css('display','inline-block');
			$Tooltip.find('.TipArrow')
				.css('left',($(this).outerWidth(true)/2)-5+ArrOffset)
				.css('display','block');

			$Tooltip.stop(false, true).animate({
				opacity: 1
				}, Fadespeed);
				
			
		}).live("mouseleave",function() {
			StopTooltip();
		});
	});
	
	
	
	/* BrandDetails */
	$(document).ready(function() {
		$('ul.CasinosList li').mouseover(function() {
			if ($(this).find('.Hot').length && $(this).find('.BrandDetails .Middle .BigHot').length!=true){
				$(this).find('.BrandDetails .Middle').prepend('<span class="BigHot">Hot</span>');
			}
			$(this).find('.BrandDetails').stop(true,true).fadeIn(250);
		}).mouseleave(function() {
			$(this).find('.BrandDetails').stop(true,true).fadeOut(250);
		});
	});
	

	
	
	
	
	
	
	
/*
============================================================
Review Top slider
============================================================
*/
$(function() {
var size = $(".TickerOverflow ul > li").size();
var position = 0;
var thumbNum = 1;
var step = $('.TickerOverflow ul li:first').outerWidth(true);
var SmallStep = 30;
var buttonMarkup = "";

//Adds Position Bar
if ($('.TickerOverflow ul li').size()>1){
$('.ReviewTopTicker .frame').append('<div class="SmallBarAbs"><ul class="SmallBar"></ul></div>');
$('.TickerOverflow ul').find('li').each(function() {
var relIfExist = $(this).attr("tooltip");
if (relIfExist) {
	relIfExist = 'tooltip="' + relIfExist + '"';
}
buttonMarkup += "<li class="+$(this).attr("class")+"><a "+ relIfExist + " class='TickerChoose' href='#'></a></li>";
});
$('.ReviewTopTicker .SmallBar').append(buttonMarkup);
$('.TickerChoose').eq(0).addClass('active');

$('.TickerChoose:last').parent().append('<span class="EndUl"></span>');
}
$("a.TickerChoose").click(function(){
	
	
	var selPos = $('a.TickerChoose').index(this);
	
	if (position != -(selPos) && (position)<=0) {
		$('.TickerChoose.active').removeClass('active');
		$('.TickerChoose').eq(selPos).addClass('active');
		var setTitle = $('.TickerOverflow ul li').eq(selPos).attr('title');
		var Distance = (position+selPos);
		Distance= step*Distance;
		position=-(selPos);
		$(".TickerOverflow ul").animate({"left": "-="+Distance+"px"}, "fast", function() {
		});
		}
return false;
});
if ($('.TickerOverflow ul li').size()> thumbNum) {
$('.TickerOverflow ul').width((step*size)+1);
$('.SmallBar').width((SmallStep*size));
}
var centerFix = ($('.SmallBar').parent().outerWidth(true)-$('.SmallBar').outerWidth())/2;
$('.SmallBarAbs').css('left', centerFix +'px');
});





/* Prev NextSlider Functions */
$(document).ready(function() {
	
	UpdateTickerWidth($('.SliderTgOverflow>ul'), 1, 1);
	
	$('.SliderTG .Prev').click(function () {
		//alert("Back");
		MoveTicker($('.SliderTgOverflow>ul'), 1, $(this),1);
		return false;
	});
	
	$('.SliderTG .Next').click(function () {
		
		MoveTicker($('.SliderTgOverflow>ul'), -1, $(this),1);
		return false;
	});
	
	ResetTicker($('.SliderTgOverflow>ul'), 1, false, 1);
});



function UpdateTickerWidth($TickerUl, Lines, MaxPerLine, item_number){
	var count = item_number ? item_number : $TickerUl.children('li').size();
	var item_size = parseInt($TickerUl.children('li').eq(0).outerWidth(true));
	var total_pages = Math.ceil(count / (MaxPerLine * Lines));
	var items_on_last_page = count % (MaxPerLine * Lines);
	var width = (total_pages - 1) * MaxPerLine;
	items_on_last_page = items_on_last_page==0 ? MaxPerLine : items_on_last_page;
	width += Math.min(items_on_last_page, MaxPerLine);
	$TickerUl.css('width', width*item_size);
	
	//$TickerUl.css('height', MaxPerLine*parseInt($TickerUl.children('li').eq(0).outerHeight(true)));
}


function ResetTicker($TickerUl, step, last,Per_Page) {
	var speed = Math.abs(step)*300;
	var last_page = -1*GetTickerLastPage($TickerUl, Math.abs(step));
	var position = parseInt($TickerUl.css('left'));
	
	if(last) {
		$TickerUl.animate({ left: GetTickerLastPage($TickerUl, step) }, speed);
		TickerCheckControls($TickerUl.parent().parent().find('.Prev'),position,$TickerUl,Per_Page);
	} else {
		$TickerUl.css('left', 0 );
		TickerCheckControls($TickerUl.parent().parent().find('.Prev'),0,$TickerUl,Per_Page);
	}
	
	
}
var ticker_working = false;
function MoveTicker($TickerUl, step, caller, per_page) {
	if (ticker_working) return;
	ticker_working = true;
	var position = parseInt($TickerUl.css('left'));
	
	var width = $TickerUl.outerWidth(true);
	var step_size = $TickerUl.children('li').eq(0).outerWidth(true);
	var speed = Math.abs(step)*300;
	
	//alert(width);
	
	// if move is logical (not go back on zero, and not go fowred on last page)
	var last_page = GetTickerLastPage($TickerUl, per_page, Math.abs(step));
	if(step > 0 && position >= 0) { ticker_working = false; return; }
	if(step < 0 && position <= last_page) { ticker_working = false; return; }
	
	
	var to_move = position+(step*step_size);
	$TickerUl.animate({ left: to_move}, speed, function(){ ticker_working = false;});
	TickerCheckControls(caller,to_move,$TickerUl,per_page);
}

function GetTickerLastPage($TickerUl, per_page, step) {
	var width = $TickerUl.outerWidth(true);
	var step_size = $TickerUl.children('li').eq(0).outerWidth(true);
	var page_width = per_page * step_size;
	return page_width - width;
}

function TickerCheckControls(caller, NextLocation ,$TickerUl ,per_page) {
	// check if to disable or enable key
	var itemSize = $TickerUl.children('li').eq(0).outerWidth(true);
	var ulSize = $TickerUl.outerWidth(true);
	var Next;
	var Prev;
	if (NextLocation<=-1*(ulSize-(per_page*itemSize))) {
		
		Next = true;	
	}else{

	
		
		Next = false;
	}
	if (NextLocation>=0) {
		Prev = true;
	}else{
		Prev = false;
	}
	
	if (Next) {
		caller.parent().find('.Next')
			.css('cursor','auto')
			.css('opacity','0.6');
	}else{
	caller.parent().find('.Next')
		.css('cursor','pointer')
		.css('opacity','1');
	}
	
	if (Prev) {
		caller.parent().find('.Prev')
		.css('cursor','auto')
		.css('opacity','0.6');
	}else{
	caller.parent().find('.Prev')
		.css('cursor','pointer')
		.css('opacity','1');
	}
	
	
}