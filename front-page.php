<?php get_header(); ?>

           
<div class="home-container">

  <div class="home-top-posts">

    <div class="section group">

      <!-- WP LOOP for Two Recent Posts -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'portfolio-prism' ); ?></p>

      <?php endif; ?> 

      <?php
        $args = array( 'posts_per_page' => 2, 'post_type' => 'portfolio', 'orderby' => 'date' );
        $postslist = get_posts( $args );
        foreach ( $postslist as $post ) :
        setup_postdata( $post ); ?> 

      <div class="col span_6_of_12">

        <div class="home-top-item">

          <div class="home-top-image">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
            <div class="home-top-title">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
          </div>

        </div>

      </div>

      <?php
        endforeach; 
        wp_reset_postdata();
      ?>

    </div>
      
  </div>  

</div> 

  <!-- Name and Headline Bar -->

  <div class="name-headline">

    <?php if( get_theme_mod( 'prism_name_text' ) != "" ): ?>
      <p id="name-headline-n"><?php echo get_theme_mod( 'prism_name_text' ); ?></p>
    <?php endif; ?>

    <?php if( get_theme_mod( 'prism_headline_text' ) != "" ): ?>
      <p id="name-headline-h"><?php echo get_theme_mod( 'prism_headline_text' ); ?></p>
    <?php endif; ?>

  </div>

<div class="home-container">
  
  <!-- Portfolio Posts Grid -->

  <ul class="grid-wrap">

      <!-- WP LOOP for Portfolio posts -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php
            $args = array( 'posts_per_page' => 9, 'post_type' => 'portfolio', 'offset' => 2, 'orderby' => 'date' );
            $postslist = get_posts( $args );
            foreach ( $postslist as $post ) :
            setup_postdata( $post ); ?> 

          <li class="grid-item">

              <div class="grid-image">
              <p>
                  <?php if ( has_post_thumbnail() ) : ?>
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
                  <?php endif; ?>
              </p>

                  <div class="grid-title">
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  </div>

              </div>

              <?php
                endforeach; 
                wp_reset_postdata();
              ?>

      <?php endwhile; ?>
      <?php endif; ?>

          </li>

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>></div>

  </ul>

<!-- Latest Blog Posts Grid -->

<div class="latest-blog-posts">
  <h2>Latest Blog Posts</h2>
</div>

  <ul class="grid-wrap">

      <!-- WP LOOP for Portfolio posts -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php
            $args = array( 'posts_per_page' => 3, 'orderby' => 'date' );
            $postslist = get_posts( $args );
            foreach ( $postslist as $post ) :
            setup_postdata( $post ); ?> 

          <li class="grid-item">

              <div class="grid-image">
              <p>
                  <?php if ( has_post_thumbnail() ) : ?>
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
                  <?php endif; ?>
              </p>

                  <div class="grid-title">
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  </div>

              </div>

              <?php
                endforeach; 
                wp_reset_postdata();
              ?>

      <?php endwhile; ?>
      <?php endif; ?>

          </li>

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>></div>

  </ul>

<p>&nbsp;</p>
<p>&nbsp;</p>

</div><!-- end of home container -->

<?php get_footer(); ?>