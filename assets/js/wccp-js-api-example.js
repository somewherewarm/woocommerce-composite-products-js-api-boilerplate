/* global wc_cp_composite_scripts */

;( function ( $, window, document, undefined ) {

	$( '.composite_data' )

		.on( 'wc-composite-initializing', function( event, composite ) {

			console.log( composite );

		} );

} ) ( jQuery, window, document );
