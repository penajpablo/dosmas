/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
	
	$(document).ready(function ($) {
        $('input[data-input-type]').on('input change', function () {
            var val = $(this).val();
            $(this).prev('.cs-range-value').html(val);
            $(this).val(val);
        });
    })
	
	//Blog title
	wp.customize(
		'blog_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '#recent-blog .section-header h2' ).text( newval );
				}
			);
		}
	);
	//Blog Description
	wp.customize(
		'blog_description', function( value ) {
			value.bind(
				function( newval ) {
					$( '#recent-blog .section-header p' ).text( newval );
				}
			);
		}
	);
	//info_title
	wp.customize(
		'info_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '#features-list .first h4' ).text( newval );
				}
			);
		}
	);
	
	//info_description
	wp.customize(
		'info_description', function( value ) {
			value.bind(
				function( newval ) {
					$( '#features-list .first p' ).text( newval );
				}
			);
		}
	);
	
	//info_title2
	wp.customize(
		'info_title2', function( value ) {
			value.bind(
				function( newval ) {
					$( '#features-list .second h4' ).text( newval );
				}
			);
		}
	);
	
	//info_description2
	wp.customize(
		'info_description2', function( value ) {
			value.bind(
				function( newval ) {
					$( '#features-list .second p' ).text( newval );
				}
			);
		}
	);
	
	//info_title3
	wp.customize(
		'info_title3', function( value ) {
			value.bind(
				function( newval ) {
					$( '#features-list .third h4' ).text( newval );
				}
			);
		}
	);
	
	//info_description3
	wp.customize(
		'info_description3', function( value ) {
			value.bind(
				function( newval ) {
					$( '#features-list .third p' ).text( newval );
				}
			);
		}
	);
	
	//service_title
	wp.customize(
		'service_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '#services .section-header h2' ).text( newval );
				}
			);
		}
	);
	
	//service_description
	wp.customize(
		'service_description', function( value ) {
			value.bind(
				function( newval ) {
					$( '#services .section-header p' ).text( newval );
				}
			);
		}
	);
	//slide_title
	wp.customize(
		'slide_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '#lite-slite .header-slider h1' ).text( newval );
				}
			);
		}
	);
	
	//slide_description
	wp.customize(
		'slide_description', function( value ) {
			value.bind(
				function( newval ) {
					$( '#lite-slite .header-slider p' ).text( newval );
				}
			);
		}
	);
	
	//slide_btn_text
	wp.customize(
		'slide_btn_text', function( value ) {
			value.bind(
				function( newval ) {
					$( '#lite-slite .header-slider a' ).text( newval );
				}
			);
		}
	);
	
	//testimonial_title
	wp.customize(
		'testimonial_title', function( value ) {
			value.bind(
				function( newval ) {
					$( '#testimonial .section-header h2' ).text( newval );
				}
			);
		}
	);
	
	//testimonial_description
	wp.customize(
		'testimonial_description', function( value ) {
			value.bind(
				function( newval ) {
					$( '#testimonial .section-header p' ).text( newval );
				}
			);
		}
	);
	
	//startkit_address
	wp.customize(
		'startkit_address', function( value ) {
			value.bind(
				function( newval ) {
					$( '#header-top .address' ).text( newval );
				}
			);
		}
	);
	
	//header_email
	wp.customize(
		'header_email', function( value ) {
			value.bind(
				function( newval ) {
					$( '#header-top .email' ).text( newval );
				}
			);
		}
	);
	
	//header_phone_number
	wp.customize(
		'header_phone_number', function( value ) {
			value.bind(
				function( newval ) {
					$( '#header-top .phone' ).text( newval );
				}
			);
		}
	);
	
	//copyright_content
	wp.customize(
		'copyright_content', function( value ) {
			value.bind(
				function( newval ) {
					$( '#footer-copyright p' ).text( newval );
				}
			);
		}
	);
} )( jQuery );