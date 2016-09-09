(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	$(document).ready(function() {
		var width = $(window).width();
		width = $(this).width();
		if (width <= 800) {
			$('#dc-rtfw-table > table.wishlist_table').addClass('col-md-12 table-bordered table-striped table-condensed cf');
			$('#dc-rtfw-table > table.wishlist_table > thead > tr > th').each(function(i) {
				$('#dc-rtfw-table > table.wishlist_table > tbody > tr > td:nth-child(' + (i+1) +')').attr('data-title', $(this).text());
			});
		}
		else {
			$('#dc-rtfw-table > table.wishlist_table').removeClass('col-md-12 table-bordered table-striped table-condensed cf');
		}
		$(window).on("resize", function(event){
			width = $(this).width();
			if (width <= 800) {
				$('#dc-rtfw-table > table.wishlist_table').addClass('col-md-12 table-bordered table-striped table-condensed cf');
				$('#dc-rtfw-table > table.wishlist_table > thead > tr > th').each(function(i) {
					$('#dc-rtfw-table > table.wishlist_table > tbody > tr > td:nth-child(' + (i+1) +')').attr('data-title', $(this).text());
				});
			}
			else {
				$('#dc-rtfw-table > table.wishlist_table').removeClass('col-md-12 table-bordered table-striped table-condensed cf');
			}
		});
	});

})( jQuery );
