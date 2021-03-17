function the_computer_repair_menu_open_nav() {
	window.the_computer_repair_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function the_computer_repair_menu_close_nav() {
	window.the_computer_repair_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(function($){
 	"use strict";
   	jQuery('.main-menu > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
   	});
});

jQuery(document).ready(function () {
	window.the_computer_repair_currentfocus=null;
  	the_computer_repair_checkfocusdElement();
	var the_computer_repair_body = document.querySelector('body');
	the_computer_repair_body.addEventListener('keyup', the_computer_repair_check_tab_press);
	var the_computer_repair_gotoHome = false;
	var the_computer_repair_gotoClose = false;
	window.the_computer_repair_responsiveMenu=false;
 	function the_computer_repair_checkfocusdElement(){
	 	if(window.the_computer_repair_currentfocus=document.activeElement.className){
		 	window.the_computer_repair_currentfocus=document.activeElement.className;
	 	}
 	}
 	function the_computer_repair_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.the_computer_repair_responsiveMenu){
			if (!e.shiftKey) {
				if(the_computer_repair_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				the_computer_repair_gotoHome = true;
			} else {
				the_computer_repair_gotoHome = false;
			}

		}else{

			if(window.the_computer_repair_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.the_computer_repair_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.the_computer_repair_responsiveMenu){
				if(the_computer_repair_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					the_computer_repair_gotoClose = true;
				} else {
					the_computer_repair_gotoClose = false;
				}
			
			}else{

			if(window.the_computer_repair_responsiveMenu){
			}}}}
		}
	 	the_computer_repair_checkfocusdElement();
	}
});

(function( $ ) {
	jQuery(window).load(function() {
	    jQuery("#status").fadeOut();
	    jQuery("#preloader").delay(1000).fadeOut("slow");
	})
	$(window).scroll(function(){
		var sticky = $('.header-sticky'),
			scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});
	jQuery(document).ready(function () {
		$(window).scroll(function () {
		    if ($(this).scrollTop() > 100) {
		        $('.scrollup').fadeIn();
		    } else {
		        $('.scrollup').fadeOut();
		    }
		});
		$('.scrollup').click(function () {
		    $("html, body").animate({
		        scrollTop: 0
		    }, 600);
		    return false;
		});
	});
})( jQuery );
