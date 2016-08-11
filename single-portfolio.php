<?php get_header(); ?>

<div class="page-container">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php
      $thumbnail_id = get_post_thumbnail_id(); 
      $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
      $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);                
      ?>

      <div class="portfolio-header">
        <h1><?php the_title(); ?></h1>
      </div>      

        <div class="section group">

          <div class="col span_8_of_12">
            <img class="pitem-main-img" src="<?php the_field('featured_image'); ?>">
          </div> 

          <div class="col span_4_of_12 pitem-wrap">
            <p><span class="pitem-title">Date:</span> <span class="pitem-info"><?php the_field('date'); ?></span></p>
            <p><span class="pitem-title">Type:</span> <span class="pitem-info"><?php the_tags( '' ); ?></span></p>
            <p><span class="pitem-title">Client:</span> <span class="pitem-info"><?php the_field('client'); ?></span></p>
            <p><span class="pitem-title">Summary:</span></p>
            <p><span class="pitem-info"><?php the_field('summary'); ?></span></p>
        </div> 

      </div> 
      
      <br>
      <hr>
      <br>

      <?php the_content(); ?>

      <div class="portfolio-navlinks">

        <span class="portfolio-prev">
          <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> <?php previous_post_link('%link'); ?>
        </span>

        <span class="portfolio-next">
          <?php next_post_link('%link'); ?> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
        </span>

        <p class="portfolio-current">
          <a href="<?php echo esc_url( home_url() ); ?>/portfolio">All Portfolio Items</a>
        </p>

      </div> 

      <br><br>

      <?php comments_template(); ?>
      <?php paginate_comments_links() ?>

      <?php endwhile; else: ?>

      <div class="page-header">
      <h1>Oh no!</h1>
      </div>

      <p>No content is appearing for this page!</p>

      <?php endif; ?>

</div>

<?php get_footer(); ?>