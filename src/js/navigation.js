/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */

// $("button").click(function(){
//     $("p").toggle();
// });


jQuery(document).ready(function($){

	$('#site-menu').on('click',function(){
		if($(this).attr('data-click-state') == 1) {
			$(this).attr('data-click-state', 0)
			/*Change this to your own property / function - Click State 1*/
			$(this).removeClass('toggled')
			$('#primary-menu-wrapper').removeClass('toggled')
			/*Click State 1 finish*/
	  } else {
	  	$(this).attr('data-click-state', 1)
	  	/*Change this to your own property / function - Click State 2*/
			$(this).addClass('toggled')
	  	$('#primary-menu-wrapper').addClass('toggled')
	  /*Click State 2 finish*/
	  }
	});

	$('#site-search').on('click',function(){
		if($(this).attr('data-click-state') == 1) {
			$(this).attr('data-click-state', 0)
			/*Change this to your own property / function - Click State 1*/
			$(this).removeClass('toggled')
			$('#nav-search').removeClass('toggled')
			/*Click State 1 finish*/
	  } else {
	  	$(this).attr('data-click-state', 1)
	  	/*Change this to your own property / function - Click State 2*/
			$(this).addClass('toggled')
	  	$('#nav-search').addClass('toggled')
	  /*Click State 2 finish*/
	  }
	});

	$('#full-site-search').on('click',function(){
		if($(this).attr('data-click-state') == 1) {
			$(this).attr('data-click-state', 0)
			/*Change this to your own property / function - Click State 1*/
			$(this).removeClass('toggled')
			$('#nav-search').removeClass('toggled')
			/*Click State 1 finish*/
	  } else {
	  	$(this).attr('data-click-state', 1)
	  	/*Change this to your own property / function - Click State 2*/
			$(this).addClass('toggled')
	  	$('#nav-search').addClass('toggled')
	  /*Click State 2 finish*/
	  }
	});


	$('#site-connect').on('click',function(){
		if($(this).attr('data-click-state') == 1) {
			$(this).attr('data-click-state', 0)
			/*Change this to your own property / function - Click State 1*/
			$(this).removeClass('toggled')
			$('#site-social').removeClass('toggled')
			/*Click State 1 finish*/
	  } else {
	  	$(this).attr('data-click-state', 1)
	  	/*Change this to your own property / function - Click State 2*/
			$(this).addClass('toggled')
	  	$('#site-social').addClass('toggled')
	  /*Click State 2 finish*/
	  }
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
