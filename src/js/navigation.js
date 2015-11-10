/**
 * navigation.js
 *
 * Handles toggling the navigation menu for all screens and enables tab
 * support for dropdown menus.
 *
 */

jQuery(document).ready(function($){
  var $window = $(window).on('resize', function(){
      if ($("#site-title").css("display") != "flex" && $("#primary-menu-wrapper").is(':visible'))
      	$("#primary-menu-wrapper").css('display','inline-block')
      if ($("#site-title").css("display") == "flex" && $("#primary-menu-wrapper").is(':visible'))
      	$("#primary-menu-wrapper").css('display','block')
  }).trigger('resize'); //on page load
});



// jQuery(window).resize(function() {

// 	if ($("#primary-menu-wrapper").is(':visible') && $("#site-title").css("display") == "flex")
//   	$("#primary-menu-wrapper").css('display','block');
// });


jQuery(document).ready(function($){

  $("#site-menu").click(function(){
      $("#primary-menu-wrapper").slideToggle("medium", function() {
      	// The display flex check here could be any css that ONLY applies to @media(mobile, general)
    		if ($(this).is(':visible') && $("#site-title").css("display") != "flex")
        	$(this).css('display','inline-block');
      });
  });

  $("#site-search").click(function(){
      $("#nav-search").slideToggle("medium");
  });

  $("#full-site-search").click(function(){
      $("#nav-search").slideToggle("medium");
  });

  $("#site-connect").click(function(){
      $("#site-social").slideToggle("medium");
  });


}); 



// // $(selector).toggle(speed,callback);

// ( function() {
// 	var container, button, menu, links, subMenus;

// 	container = document.getElementById( 'primary-menu-wrapper' );
// 	if ( ! container ) {
// 		return;
// 	}

// 	button = container.getElementsByTagName( '#site-menu' )[0];
// 	if ( 'undefined' === typeof button ) {
// 		return;
// 	}

// 	menu = container.getElementsByTagName( 'ul' )[0];

// 	// Hide menu toggle button if menu is empty and return early.
// 	if ( 'undefined' === typeof menu ) {
// 		button.style.display = 'none';
// 		return;
// 	}

// 	menu.setAttribute( 'aria-expanded', 'false' );
// 	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
// 		menu.className += ' nav-menu';
// 	}

// 	button.onclick = function() {
// 		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
// 			container.className = container.className.replace( ' toggled', '' );
// 			button.setAttribute( 'aria-expanded', 'false' );
// 			menu.setAttribute( 'aria-expanded', 'false' );
// 		} else {
// 			container.className += ' toggled';
// 			button.setAttribute( 'aria-expanded', 'true' );
// 			menu.setAttribute( 'aria-expanded', 'true' );
// 		}
// 	};

// 	// Get all the link elements within the menu.
// 	links    = menu.getElementsByTagName( 'a' );
// 	subMenus = menu.getElementsByTagName( 'ul' );

// 	// Set menu items with submenus to aria-haspopup="true".
// 	for ( var i = 0, len = subMenus.length; i < len; i++ ) {
// 		subMenus[i].parentNode.setAttribute( 'aria-haspopup', 'true' );
// 	}

// 	// Each time a menu link is focused or blurred, toggle focus.
// 	for ( i = 0, len = links.length; i < len; i++ ) {
// 		links[i].addEventListener( 'focus', toggleFocus, true );
// 		links[i].addEventListener( 'blur', toggleFocus, true );
// 	}

// 	/**
// 	 * Sets or removes .focus class on an element.
// 	 */
// 	function toggleFocus() {
// 		var self = this;

// 		// Move up through the ancestors of the current link until we hit .nav-menu.
// 		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

// 			// On li elements toggle the class .focus.
// 			if ( 'li' === self.tagName.toLowerCase() ) {
// 				if ( -1 !== self.className.indexOf( 'focus' ) ) {
// 					self.className = self.className.replace( ' focus', '' );
// 				} else {
// 					self.className += ' focus';
// 				}
// 			}

// 			self = self.parentElement;
// 		}
// 	}
// } )();
