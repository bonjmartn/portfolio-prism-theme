<?php get_header(); ?>

<div class="archives-container">

    <div class="archives-header">
        <h1><?php wp_title(''); ?></h1>
    </div>

    <ul class="grid-wrap">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

        <?php endwhile; ?>
        <?php endif; ?>

        </li>

    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>></div>

    </ul>

    <p>&nbsp;</p>

     <div class="pagination-wrap">
        <?php
            global $wp_query;

            $big = 999999999; // need an unlikely integer

            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages,
                'prev_text'          => __('<i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Previous'),
                'next_text'          => __('Next <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>'),
                'before_page_number' => '&nbsp;&nbsp;',
                'after_page_number'  => '&nbsp;&nbsp;'
            ) );
            ?>

    </div>

</div>

<?php get_footer(); ?>