<?php
/* Template Name: About Page
*/
?>
<?php get_header(); ?>

<div class="page-container">

      <div class="page-header">
        <h1><?php the_title(); ?></h1>
      </div>

      <!-- WP LOOP -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="section group">

          <div class="col span_4_of_12">
            <p><span class="about-photo"><img src="<?php the_field('photo'); ?>"></span></p>
          </div>

          <div class="col span_8_of_12">
            <p class="about-name"><?php the_field('name'); ?></p>
            <p class="about-headline"><?php the_field('headline'); ?></p>
            <p class="about-summary"><?php the_field('summary'); ?></p>

            <div class="about-social">
              <?php if( get_theme_mod( 'prism_facebook_url' ) != "" ): ?>
                <span id="facebook"><a href="<?php echo esc_url( get_theme_mod( 'prism_facebook_url' )); ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></span>
              <?php endif; ?>

              <?php if( get_theme_mod( 'prism_twitter_url' ) != "" ): ?>
                <span id="twitter"><a href="<?php echo esc_url( get_theme_mod( 'prism_twitter_url' )); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
              <?php endif; ?>

              <?php if( get_theme_mod( 'prism_pinterest_url' ) != "" ): ?>
                <span id="pinterest"><a href="<?php echo esc_url( get_theme_mod( 'prism_pinterest_url' )); ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></span>
              <?php endif; ?>

              <?php if( get_theme_mod( 'prism_instagram_url' ) != "" ): ?>
                <span id="instagram"><a href="<?php echo esc_url( get_theme_mod( 'prism_instagram_url' )); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
              <?php endif; ?>

              <?php if( get_theme_mod( 'prism_behance_url' ) != "" ): ?>
                <span id="behance"><a href="<?php echo esc_url( get_theme_mod( 'prism_behance_url' )); ?>"><i class="fa fa-behance" aria-hidden="true"></i></a></span>
              <?php endif; ?>

              <?php if( get_theme_mod( 'prism_dribble_url' ) != "" ): ?>
                <span id="dribbble"><a href="<?php echo esc_url( get_theme_mod( 'prism_dribble_url' )); ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a></span>
              <?php endif; ?>

              <?php if( get_theme_mod( 'prism_github_url' ) != "" ): ?>
                <span id="github"><a href="<?php echo esc_url( get_theme_mod( 'prism_github_url' )); ?>"><i class="fa fa-github" aria-hidden="true"></i></a></span>
              <?php endif; ?>

              <?php if( get_theme_mod( 'prism_tumblr_url' ) != "" ): ?>
                <span id="tumblr"><a href="<?php echo esc_url( get_theme_mod( 'prism_tumblr_url' )); ?>"><i class="fa fa-tumblr" aria-hidden="true"></i></a></span>
              <?php endif; ?>

              <?php if( get_theme_mod( 'prism_snapchat_url' ) != "" ): ?>
                <span id="snapchat"><a href="<?php echo esc_url( get_theme_mod( 'prism_snapchat_url' )); ?>"><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></a></span>
              <?php endif; ?>

              <?php if( get_theme_mod( 'prism_youtube_url' ) != "" ): ?>
                <span id="youtube"><a href="<?php echo esc_url( get_theme_mod( 'prism_youtube_url' )); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></span>
              <?php endif; ?>

              <?php if( get_theme_mod( 'prism_vimeo_url' ) != "" ): ?>
                <span id="vimeo"><a href="<?php echo esc_url( get_theme_mod( 'prism_vimeo_url' )); ?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a></span>
              <?php endif; ?>

              <?php if( get_theme_mod( 'prism_vine_url' ) != "" ): ?>
                <span id="vine"><a href="<?php echo esc_url( get_theme_mod( 'prism_vine_url' )); ?>"><i class="fa fa-vine" aria-hidden="true"></i></a></span>
              <?php endif; ?>

              <?php if( get_theme_mod( 'prism_googleplus_url' ) != "" ): ?>
                <span id="google-plus"><a href="<?php echo esc_url( get_theme_mod( 'prism_googleplus_url' )); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></span>
              <?php endif; ?>

              <?php if( get_theme_mod( 'prism_linkedin_url' ) != "" ): ?>
                <span id="linkedin"><a href="<?php echo esc_url( get_theme_mod( 'prism_linkedin_url' )); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></span>
              <?php endif; ?>
            </div>

          </div>



        </div>

        <div class="specialties">
          <p class="specialties-headline"><?php the_field('specialties_headline'); ?></p>

          <div class="section group">

            <div class="col span_4_of_12">
              <p class="specialty-icon"><i class="<?php the_field('specialty_1_icon'); ?>" aria-hidden="true"></i></p>
              <p class="specialty-title"><?php the_field('specialty_1_title'); ?></p>
              <p class="specialty-description"><?php the_field('specialty_1_description'); ?></p>
            </div>

            <div class="col span_4_of_12">
              <p class="specialty-icon"><i class="<?php the_field('specialty_2_icon'); ?>" aria-hidden="true"></i></p>
              <p class="specialty-title"><?php the_field('specialty_2_title'); ?></p>
              <p class="specialty-description"><?php the_field('specialty_2_description'); ?></p>
            </div>

            <div class="col span_4_of_12">
              <p class="specialty-icon"><i class="<?php the_field('specialty_3_icon'); ?>" aria-hidden="true"></i></p>
              <p class="specialty-title"><?php the_field('specialty_3_title'); ?></p>
              <p class="specialty-description"><?php the_field('specialty_3_description'); ?></p>
            </div>  

          </div>

        </div>

      <?php the_content(); ?>

      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'portfolio-prism' ); ?></p>
      <?php endif; ?> 

</div>

<?php get_footer(); ?>
