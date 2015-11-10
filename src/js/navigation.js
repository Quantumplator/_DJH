/**
 * navigation.js (original below)
 *
 * Handles toggling the navigation menu for all screens and enables tab
 * support for dropdown menus.
 *
 */


jQuery(document).ready(function($){

  // run css display tests on initial page load
  checkState();
  // run test on resize of the window
  $(window).resize(checkState);

  // Toggle switches
  $("#site-menu").click(function(){
      $("#primary-menu-wrapper").slideToggle("medium");
      $(this).toggleClass("toggled");
  });

  $("#site-search").click(function(){
      $("#nav-search").slideToggle("fast");
      $(this).toggleClass("toggled");
  });

  $("#full-site-search").click(function(){
      $("#nav-search").slideToggle("fast");
      $(this).toggleClass("toggled");
  });

  $("#site-connect").click(function(){
      $("#site-social").slideToggle("fast");
      $(this).toggleClass("toggled");
  });

	//Function to the css rule
	function checkState(){
    if ($("#full-site-search").css("display") == "inline-block" && $("#primary-menu-wrapper").css("display") != "inline-block"){
    	$("#primary-menu-wrapper").css("display", "inline-block");
    } else if ($("#full-site-search").css("display") == "none" && $("#primary-menu-wrapper").css("display") == "inline-block") {
    	$("#primary-menu-wrapper").css("display", "none");
    }

    if ($("#full-site-search").css("display") == "inline-block" && $("#site-social").css("display") != "block"){
    	$("#site-social").css("display", "block");
    } 
    // else if ($("#full-site-search").css("display") == "none" && $("#primary-menu-wrapper").css("display") == "inline-block") {
    // 	$("#primary-menu-wrapper").css("display", "none");
    // }
	}

	$('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	        || location.hostname == this.hostname) {

	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	           if (target.length) {
	             $('html,body').animate({
	                 scrollTop: target.offset().top
	            }, 1000);
	            return false;
	        }
	    }
	});


}); 

/**
 * original navigation.js
 *
 *
 */

( function() {
	var container, button, menu, links, subMenus;

	container = document.getElementById( 'primary-menu-wrapper' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( '#site-menu' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );
	subMenus = menu.getElementsByTagName( 'ul' );

	// Set menu items with submenus to aria-haspopup="true".
	for ( var i = 0, len = subMenus.length; i < len; i++ ) {
		subMenus[i].parentNode.setAttribute( 'aria-haspopup', 'true' );
	}

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}
} )();
