<?php
get_header(); ?>

 <div class="container">
<div id="primary" <?=post_class()?>>
    <main id="main" class="site-main" role="main">

    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();

        ?>
        <div class="container"><?php the_post_thumbnail('large'); ?></div>
        <h1><?php the_title(); ?></h1>
        <div class="row">
            <div class="meta-data">
                <?=the_category();?>
            </div>
            <div class="meta-data">
                <?=the_date();?>
            </div>
            <div class="meta-data">
                <?=the_tags();?>
            </div>
        </div>
        
        <div><?php the_content(); ?></div>
        <?php
        get_template_part( 'content', get_post_format() );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

        // Previous/next post navigation.
        the_post_navigation( array(
            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                '<span class="post-title">%title</span>',
            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                '<span class="post-title">%title</span>',
        ) );

    // End the loop.
    endwhile;
    ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->
</div>
<?php
get_footer();