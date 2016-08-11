(function( $ ) {

    wp.customize( 'prism_logo', function( value ) {
        value.bind( function( to ) {
            $(' .logo img ').attr( 'src', to );
        } );
    });    

    wp.customize( 'prism_name_text', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #name-headline-n ').hide();
            } else {
                $(' #name-headline-n ').show();
                $(' #name-headline-n ').text( to );
            }
        } );
    }); 

    wp.customize( 'prism_headline_text', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #name-headline-h ').hide();
            } else {
                $(' #name-headline-h ').show();
                $(' #name-headline-h ').text( to );
            }
        } );
    });

    wp.customize( 'prism_facebook_url', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #facebook ').hide();
            } else {
                $(' #facebook ').show();
                $(' #facebook ').href( to );
            }
        } );
    });

    wp.customize( 'prism_twitter_url', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #twitter ').hide();
            } else {
                $(' #twitter ').show();
                $(' #twitter ').href( to );
            }
        } );
    });

    wp.customize( 'prism_pinterest_url', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #pinterest ').hide();
            } else {
                $(' #pinterest ').show();
                $(' #pinterest ').href( to );
            }
        } );
    });

    wp.customize( 'prism_instagram_url', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #instagram ').hide();
            } else {
                $(' #instagram ').show();
                $(' #instagram ').href( to );
            }
        } );
    });

    wp.customize( 'prism_behance_url', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #behance ').hide();
            } else {
                $(' #behance ').show();
                $(' #behance ').href( to );
            }
        } );
    });

    wp.customize( 'prism_dribble_url', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #dribbble ').hide();
            } else {
                $(' #dribbble ').show();
                $(' #dribbble ').href( to );
            }
        } );
    });

    wp.customize( 'prism_github_url', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #github ').hide();
            } else {
                $(' #github ').show();
                $(' #github ').href( to );
            }
        } );
    });

    wp.customize( 'prism_tumblr_url', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #tumblr ').hide();
            } else {
                $(' #tumblr ').show();
                $(' #tumblr ').href( to );
            }
        } );
    });

    wp.customize( 'prism_snapchat_url', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #snapchat ').hide();
            } else {
                $(' #snapchat ').show();
                $(' #snapchat ').href( to );
            }
        } );
    });

    wp.customize( 'prism_youtube_url', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #youtube ').hide();
            } else {
                $(' #youtube ').show();
                $(' #youtube ').href( to );
            }
        } );
    });

    wp.customize( 'prism_vimeo_url', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #vimeo ').hide();
            } else {
                $(' #vimeo ').show();
                $(' #vimeo ').href( to );
            }
        } );
    });

    wp.customize( 'prism_vine_url', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #vine ').hide();
            } else {
                $(' #vine ').show();
                $(' #vine ').href( to );
            }
        } );
    });

    wp.customize( 'prism_googleplus_url', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #google-plus ').hide();
            } else {
                $(' #google-plus ').show();
                $(' #google-plus ').href( to );
            }
        } );
    });

    wp.customize( 'prism_linkedin_url', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #linkedin ').hide();
            } else {
                $(' #linkedin ').show();
                $(' #linkedin ').href( to );
            }
        } );
    });

    wp.customize( 'prism_h1_color', function( value ) {
        value.bind( function( to ) {
            $( 'h1' ).css( 'color', to );
            $( 'h2' ).css( 'color', to );
            $( 'h3' ).css( 'color', to );
            $( 'h4' ).css( 'color', to );
            $( 'h5' ).css( 'color', to );
            $( 'h6' ).css( 'color', to );

        } );
    });

    wp.customize( 'prism_h1_font_type', function( value ) {
        value.bind( function( to ) {            
            $( 'h1' ).css( 'font-family', to );  
            $( 'h2' ).css( 'font-family', to );  
            $( 'h3' ).css( 'font-family', to );  
            $( 'h4' ).css( 'font-family', to );
            $( 'h5' ).css( 'font-family', to );
            $( 'h6' ).css( 'font-family', to );
            $( 'h1 a' ).css( 'font-family', to );  
            $( 'h2 a' ).css( 'font-family', to );  
            $( 'h3 a' ).css( 'font-family', to );  
            $( 'h4 a' ).css( 'font-family', to );
            $( 'h5 a' ).css( 'font-family', to );
            $( 'h6 a' ).css( 'font-family', to );
        } );
    }); 

    wp.customize( 'prism_p_color', function( value ) {
        value.bind( function( to ) {
            $( 'p' ).css( 'color', to );
            $( 'li' ).css( 'color', to );
            $( 'span' ).css( 'color', to );
        } );
    });

    wp.customize( 'prism_p_font_size', function( value ) {
        value.bind( function( to ) {            
            $( 'p' ).css( 'font-size', to + 'px' ); 
            $( 'li' ).css( 'font-size', to + 'px' ); 
            $( 'span' ).css( 'font-size', to + 'px' );         
        } );
    }); 

    wp.customize( 'prism_p_font_type', function( value ) {
        value.bind( function( to ) {            
            $( 'p' ).css( 'font-family', to ); 
            $( 'li' ).css( 'font-family', to );  
            $( 'span' ).css( 'font-family', to );           
        } );
    });

})( jQuery );