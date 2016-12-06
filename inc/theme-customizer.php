<?php

function prism_customize_register( $wp_customize ) {


  // Customize title and tagline sections and labels

  $wp_customize->get_section('title_tagline')->title = __('Site Name and Description', 'portfolio-prism');  
  $wp_customize->get_control('display_header_text')->section = 'title_tagline'; 
  $wp_customize->get_control('blogname')->label = __('Site Name', 'portfolio-prism');  
  $wp_customize->get_control('blogdescription')->label = __('Site Description', 'portfolio-prism');  
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
  $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';

  // Customize the Front Page Settings

  $wp_customize->get_section('static_front_page')->title = __('Homepage Preferences', 'portfolio-prism');
  $wp_customize->get_section('static_front_page')->priority = 20;
  $wp_customize->get_control('show_on_front')->label = __('Choose Homepage Preference', 'portfolio-prism');  
  $wp_customize->get_control('page_on_front')->label = __('Select Homepage', 'portfolio-prism');  
  $wp_customize->get_control('page_for_posts')->label = __('Select Blog Homepage', 'portfolio-prism');  

  // Customize Background Settings

  $wp_customize->get_section('background_image')->title = __('Background Styles', 'portfolio-prism');  
  $wp_customize->get_control('background_color')->section = 'background_image'; 
  $wp_customize->remove_control('header_image');

  // Remove some panels and sections

  $wp_customize->remove_control('background_color');
  $wp_customize->remove_control('header_image');
  $wp_customize->remove_section('colors');

// Create custom panels

  $wp_customize->add_panel( 'general_settings', array(
      'priority' => 10,
      'theme_supports' => '',
      'title' => __( 'General Settings', 'portfolio-prism' ),
      'description' => __( 'Controls the basic settings for the theme.', 'portfolio-prism' ),
  ) );
  $wp_customize->add_panel( 'social_icons', array(
      'priority' => 20,
      'theme_supports' => '',
      'title' => __( 'Social Media Icons', 'portfolio-prism' ),
      'description' => __( 'Appears in the footer and on the About page. If you do not want to display one, leave it blank.', 'portfolio-prism' ),
  ) );
  $wp_customize->add_panel( 'design_settings', array(
      'priority' => 30,
      'theme_supports' => '',
      'title' => __( 'Design Settings', 'portfolio-prism' ),
      'description' => __( 'Controls the basic design settings for the theme.', 'portfolio-prism' ),
  ) ); 
  $wp_customize->add_panel( 'color_choices', array(
      'priority' => 40,
      'theme_supports' => '',
      'title' => __( 'Color Choices', 'portfolio-prism' ),
      'description' => __( 'Controls the color settings for the theme.', 'portfolio-prism' ),
  ) ); 
  $wp_customize->add_panel( 'typography_settings', array(
      'priority' => 50,
      'theme_supports' => '',
      'title' => __( 'Typography', 'portfolio-prism' ),
      'description' => __( 'Controls the fonts for the theme.', 'portfolio-prism' ),
  ) ); 

  // Assign sections to panels

  $wp_customize->get_section('title_tagline')->panel = 'general_settings';      
  $wp_customize->get_section('static_front_page')->panel = 'general_settings';
  $wp_customize->get_section('background_image')->panel = 'design_settings';
  $wp_customize->get_section('background_image')->priority = 1000;


// GENERAL SETTINGS PANEL ........................................ //

// SOCIAL MEDIA ICONS PANEL ........................................ //

    $wp_customize->add_section( 'custom_social_icons' , array(
    'title'      => __('Social Media Icons','portfolio-prism'), 
    'panel'      => 'social_icons',
    'priority'   => 20    
  ) ); 

  $wp_customize->add_setting(
      'prism_facebook_url',
      array(
          'default'           => __( '', 'portfolio-prism' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_facebook_url',
            array(
                'label'          => __( 'Facebook', 'portfolio-prism' ),
                'section'        => 'custom_social_icons',
                'settings'       => 'prism_facebook_url',
                'type'           => 'text'
            )
        )
   );  

  $wp_customize->add_setting(
      'prism_twitter_url',
      array(
          'default'           => __( '', 'portfolio-prism' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_twitter_url',
            array(
                'label'          => __( 'Twitter', 'portfolio-prism' ),
                'section'        => 'custom_social_icons',
                'settings'       => 'prism_twitter_url',
                'type'           => 'text'
            )
        )
   ); 

  $wp_customize->add_setting(
      'prism_twitter_url',
      array(
          'default'           => __( '', 'portfolio-prism' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_twitter_url',
            array(
                'label'          => __( 'Twitter', 'portfolio-prism' ),
                'section'        => 'custom_social_icons',
                'settings'       => 'prism_twitter_url',
                'type'           => 'text'
            )
        )
   ); 

  $wp_customize->add_setting(
      'prism_pinterest_url',
      array(
          'default'           => __( '', 'portfolio-prism' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_pinterest_url',
            array(
                'label'          => __( 'Pinterest', 'portfolio-prism' ),
                'section'        => 'custom_social_icons',
                'settings'       => 'prism_pinterest_url',
                'type'           => 'text'
            )
        )
   ); 

  $wp_customize->add_setting(
      'prism_instagram_url',
      array(
          'default'           => __( '', 'portfolio-prism' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_instagram_url',
            array(
                'label'          => __( 'Instagram', 'portfolio-prism' ),
                'section'        => 'custom_social_icons',
                'settings'       => 'prism_instagram_url',
                'type'           => 'text'
            )
        )
   );

   $wp_customize->add_setting(
      'prism_behance_url',
      array(
          'default'           => __( '', 'portfolio-prism' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_behance_url',
            array(
                'label'          => __( 'Behance', 'portfolio-prism' ),
                'section'        => 'custom_social_icons',
                'settings'       => 'prism_behance_url',
                'type'           => 'text'
            )
        )
   );

  $wp_customize->add_setting(
      'prism_dribble_url',
      array(
          'default'           => __( '', 'portfolio-prism' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_dribble_url',
            array(
                'label'          => __( 'Dribbble', 'portfolio-prism' ),
                'section'        => 'custom_social_icons',
                'settings'       => 'prism_dribble_url',
                'type'           => 'text'
            )
        )
   );

  $wp_customize->add_setting(
      'prism_github_url',
      array(
          'default'           => __( '', 'portfolio-prism' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_github_url',
            array(
                'label'          => __( 'GitHub', 'portfolio-prism' ),
                'section'        => 'custom_social_icons',
                'settings'       => 'prism_github_url',
                'type'           => 'text'
            )
        )
   ); 

   $wp_customize->add_setting(
      'prism_tumblr_url',
      array(
          'default'           => __( '', 'portfolio-prism' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_tumblr_url',
            array(
                'label'          => __( 'Tumblr', 'portfolio-prism' ),
                'section'        => 'custom_social_icons',
                'settings'       => 'prism_tumblr_url',
                'type'           => 'text'
            )
        )
   );

   $wp_customize->add_setting(
      'prism_snapchat_url',
      array(
          'default'           => __( '', 'portfolio-prism' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_snapchat_url',
            array(
                'label'          => __( 'Snapchat', 'portfolio-prism' ),
                'section'        => 'custom_social_icons',
                'settings'       => 'prism_snapchat_url',
                'type'           => 'text'
            )
        )
   );

   $wp_customize->add_setting(
      'prism_youtube_url',
      array(
          'default'           => __( '', 'portfolio-prism' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_youtube_url',
            array(
                'label'          => __( 'YouTube', 'portfolio-prism' ),
                'section'        => 'custom_social_icons',
                'settings'       => 'prism_youtube_url',
                'type'           => 'text'
            )
        )
   );

   $wp_customize->add_setting(
      'prism_vimeo_url',
      array(
          'default'           => __( '', 'portfolio-prism' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_vimeo_url',
            array(
                'label'          => __( 'Vimeo', 'portfolio-prism' ),
                'section'        => 'custom_social_icons',
                'settings'       => 'prism_vimeo_url',
                'type'           => 'text'
            )
        )
   );

   $wp_customize->add_setting(
      'prism_vine_url',
      array(
          'default'           => __( '', 'portfolio-prism' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_vine_url',
            array(
                'label'          => __( 'Vine', 'portfolio-prism' ),
                'section'        => 'custom_social_icons',
                'settings'       => 'prism_vine_url',
                'type'           => 'text'
            )
        )
   );

   $wp_customize->add_setting(
      'prism_googleplus_url',
      array(
          'default'           => __( '', 'portfolio-prism' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_googleplus_url',
            array(
                'label'          => __( 'Google+', 'portfolio-prism' ),
                'section'        => 'custom_social_icons',
                'settings'       => 'prism_googleplus_url',
                'type'           => 'text'
            )
        )
   );

   $wp_customize->add_setting(
      'prism_linkedin_url',
      array(
          'default'           => __( '', 'portfolio-prism' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_linkedin_url',
            array(
                'label'          => __( 'LinkedIn', 'portfolio-prism' ),
                'section'        => 'custom_social_icons',
                'settings'       => 'prism_linkedin_url',
                'type'           => 'text'
            )
        )
   );

// DESIGN SETTINGS PANEL ........................................ //

  // Add Custom Logo Settings

  $wp_customize->add_section( 'custom_logo' , array(
    'title'      => __('Change Your Logo','portfolio-prism'), 
    'panel'      => 'design_settings',
    'priority'   => 10    
  ) );  
  $wp_customize->add_setting(
      'prism_logo',
      array(
          'default'         => get_template_directory_uri() . '/images/portfolio-prism-logo.png',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_logo',
           array(
               'label'      => __( 'Change Logo', 'portfolio-prism' ),
               'section'    => 'custom_logo',
               'settings'   => 'prism_logo',
               'context'    => 'prism-custom-logo' 
           )
       )
   ); 


// Name and Headline Bar Text

  $wp_customize->add_section( 'custom_headline_text' , array(
    'title'      => __('Name and Headline Bar','portfolio-prism'), 
    'panel'      => 'design_settings',
    'priority'   => 20    
  ) ); 

  $wp_customize->add_setting(
      'prism_name_text',
      array(
          'default'           => __( 'Your Name', 'portfolio-prism' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_name_text',
            array(
                'label'          => __( 'Your Name', 'portfolio-prism' ),
                'section'        => 'custom_headline_text',
                'settings'       => 'prism_name_text',
                'type'           => 'text'
            )
        )
   );  

  $wp_customize->add_setting(
      'prism_headline_text',
      array(
          'default'           => __( 'Your Headline', 'portfolio-prism' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_headline_text',
            array(
                'label'          => __( 'Your Headline', 'portfolio-prism' ),
                'section'        => 'custom_headline_text',
                'settings'       => 'prism_headline_text',
                'type'           => 'text'
            )
        )
   );  

// COLOR CHOICES PANEL ........................................ //


// Text Colors

  $wp_customize->add_section( 'text_colors' , array(
    'title'      => __('Text Colors','portfolio-prism'), 
    'panel'      => 'color_choices',
    'priority'   => 100    
  ) );

  $wp_customize->add_setting(
      'prism_h1_color',
      array(
          'default'         => '#333333',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_h1_color',
           array(
               'label'      => __( 'Headings Color', 'portfolio-prism' ),
               'section'    => 'text_colors',
               'settings'   => 'prism_h1_color' 
           )
       )
   );

  $wp_customize->add_section( 'p_styles' , array(
    'title'      => __('Paragraph Text Styles','portfolio-prism'), 
    'panel'      => 'color_choices',
    'priority'   => 130    
  ) );  
  $wp_customize->add_setting(
      'prism_p_color',
      array(
          'default'         => '#333333',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_p_color',
           array(
               'label'      => __( 'Paragraph Color', 'portfolio-prism' ),
               'section'    => 'text_colors',
               'settings'   => 'prism_p_color' 
           )
       )
   );


// Accent Color

  $wp_customize->add_section( 'theme_colors' , array(
    'title'      => __('Accent Color','portfolio-prism'), 
    'panel'      => 'color_choices',
    'priority'   => 100    
  ) );

  $wp_customize->add_setting(
      'prism_accent_color',
      array(
          'default'         => '#3fa9f5',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_accent_color',
           array(
               'label'      => __( 'Accent color for links and hover effects', 'portfolio-prism' ),
               'section'    => 'theme_colors',
               'settings'   => 'prism_accent_color' 
           )
       )
   ); 


// TYPOGRAPHY PANEL ........................................ //

// Headings Font

$wp_customize->add_section( 'custom_h_fonts' , array(
    'title'      => __('Headings Font','portfolio-prism'), 
    'panel'      => 'typography_settings',
    'priority'   => 100    
  ) ); 

$wp_customize->add_setting(
      'prism_h1_font_type',
      array(
          'default'         => 'Open Sans',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );

   $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_h1_font_type',
            array(
                'label'          => __( 'Font', 'portfolio-prism' ),
                'section'        => 'custom_h_fonts',
                'settings'       => 'prism_h1_font_type',
                'type'           => 'select',
                'choices'        => array(
                  'Lato'       => 'Lato',
                  'Open Sans'       => 'Open Sans',
                  'Roboto'       => 'Roboto',
                  'Source Sans Pro'       => 'Source Sans Pro',
                  'Raleway'       => 'Raleway',
                  'Titillium Web'      => 'Titillium Web',
                  'Alegreya Sans'       => 'Alegreya Sans',
                  'Josefin Sans'       => 'Josefin Sans',
                  'Exo 2'       => 'Exo 2',
                  'Rubik'       => 'Rubik',
                  'Prompt'       => 'Prompt',
                  'Kanit'       => 'Kanit',
                  'Proza Libre'       => 'Proza Libre',
                  'Libre Franklin'       => 'Libre Franklin',
                  'Josefin Slab'       => 'Josefin Slab',
                  'Trirong'       => 'Trirong',
                  'Cormorant Garamond'       => 'Cormorant Garamond',
                  'Taviraj'       => 'Taviraj',
                  'Cormorant'       => 'Cormorant',
                  'Cormorant Infant'       => 'Cormorant Infant'
                )
            )
        )       
   );


 // Paragraph Font

   $wp_customize->add_section( 'custom_p_fonts' , array(
    'title'      => __('Paragraph Font','portfolio-prism'), 
    'panel'      => 'typography_settings',
    'priority'   => 100    
  ) );  

   $wp_customize->add_setting(
      'prism_p_font_size',
      array(
          'default'         => '14px',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_p_font_size',
            array(
                'label'          => __( 'Font Size', 'portfolio-prism' ),
                'section'        => 'custom_p_fonts',
                'settings'       => 'prism_p_font_size',
                'type'           => 'select',
                'choices'        => array(
                  '12'   => '12px',
                  '14'   => '14px',
                  '16'   => '16px',
                  '18'   => '18px',
                  '20'   => '20px',
                  '22'   => '22px'
                )
            )
        )       
   ); 


   $wp_customize->add_setting(
      'prism_p_font_type',
      array(
          'default'         => 'Open Sans',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );

   $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_p_font_type',
            array(
                'label'          => __( 'Font', 'portfolio-prism' ),
                'section'        => 'custom_p_fonts',
                'settings'       => 'prism_p_font_type',
                'type'           => 'select',
                'choices'        => array(
                  'Lato'       => 'Lato',
                  'Open Sans'       => 'Open Sans',
                  'Roboto'       => 'Roboto',
                  'Source Sans Pro'       => 'Source Sans Pro',
                  'Raleway'       => 'Raleway',
                  'Titillium Web'      => 'Titillium Web',
                  'Alegreya Sans'       => 'Alegreya Sans',
                  'Josefin Sans'       => 'Josefin Sans',
                  'Exo 2'       => 'Exo 2',
                  'Rubik'       => 'Rubik',
                  'Prompt'       => 'Prompt',
                  'Kanit'       => 'Kanit',
                  'Proza Libre'       => 'Proza Libre',
                  'Libre Franklin'       => 'Libre Franklin',
                  'Josefin Slab'       => 'Josefin Slab',
                  'Trirong'       => 'Trirong',
                  'Cormorant Garamond'       => 'Cormorant Garamond',
                  'Taviraj'       => 'Taviraj',
                  'Cormorant'       => 'Cormorant',
                  'Cormorant Infant'       => 'Cormorant Infant'
                )
            )
        )       
   );

  
  // Add Custom CSS Textfield

  $wp_customize->add_section( 'custom_css_field' , array(
    'title'      => __('Custom CSS','portfolio-prism'), 
    'panel'      => 'design_settings',
    'priority'   => 2000    
  ) );  
  $wp_customize->add_setting(
      'prism_custom_css',
      array(          
          'sanitize_callback' => 'sanitize_textarea'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_css',
            array(
                'label'          => __( 'Add custom CSS here', 'portfolio-prism' ),
                'section'        => 'custom_css_field',
                'settings'       => 'prism_custom_css',
                'type'           => 'textarea'
            )
        )
   );

}
  
add_action( 'customize_register', 'prism_customize_register' );


// Call the custom css into the header

$defaults = array(
  'wp-head-callback'       => 'prism_style_header'
);
add_theme_support( 'custom-header', $defaults );

// Callback function for updating styles

function prism_style_header() {

   ?>

<style type="text/css">

h1,
h1 a,
h2,
h2 a,
h3,
h3 a,
h4,
h4 a,
h5,
h5 a,
h6,
h6 a {
	font-family: <?php echo get_theme_mod('prism_h1_font_type'); ?>;
  color: <?php echo get_theme_mod('prism_h1_color'); ?>;
}

p,
span,
li {
	font-size: <?php echo get_theme_mod('prism_p_font_size') . 'px'; ?>;
	color: <?php echo get_theme_mod('prism_p_color'); ?>;
	font-family: <?php echo get_theme_mod('prism_p_font_type'); ?>;
}

a {
	font-family: <?php echo get_theme_mod('prism_p_font_type'); ?>;
}

.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus {
  background-color: <?php echo get_theme_mod('prism_accent_color'); ?>;
}

a,
a:visited {
  color: <?php echo get_theme_mod('prism_accent_color'); ?>;
}

a:hover,
a:focus,
a:active {
  color: <?php echo get_theme_mod('prism_accent_color'); ?>;
}

button:hover,
html input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover {
  background: <?php echo get_theme_mod('prism_accent_color'); ?>;
}

.footer-social .fa,
.footer-social a,
.about-social .fa,
.about-social a,
.specialty-icon .fa, {
  color: <?php echo get_theme_mod('prism_p_color'); ?>;
}

.footer-social .fa:hover,
.footer-social a:hover,
.about-social .fa:hover,
.about-social a:hover,
.specialty-icon .fa:hover {
  color: <?php echo get_theme_mod('prism_accent_color'); ?>;
}

.grid-item:hover,
.home-top-item:hover {
  border-color: <?php echo get_theme_mod('prism_accent_color'); ?>;
}

h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
  color: <?php echo get_theme_mod('prism_accent_color'); ?>;
}

h1 a:visited,
h2 a:visited,
h3 a:visited,
h4 a:visited,
h5 a:visited,
h6 a:visited {
  color: <?php echo get_theme_mod('prism_accent_color'); ?>;
}

  <?php if( get_theme_mod('prism_custom_css') != '' ) {
    echo get_theme_mod('prism_custom_css');
  } ?>

  </style>

<?php 

}

// Add theme support for Custom Backgrounds

$defaults = array(
  'default-color' => '#ffffff',
);
add_theme_support( 'custom-background', $defaults );


// Sanitize text 

function sanitize_text( $text ) {
    
    return sanitize_text_field( $text );

}

// Sanitize textarea 

function sanitize_textarea( $text ) {
    
    return esc_textarea( $text );

}

// Custom js for theme customizer

function prism_customizer_js() {
  wp_enqueue_script(
    'prism_theme_customizer',
    get_template_directory_uri() . '/js/theme-customizer.js',
    array( 'jquery', 'customize-preview' ),
    '',
    true
);
}
add_action( 'customize_preview_init', 'prism_customizer_js' );

?>