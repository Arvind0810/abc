<?php
get_header();
?>
<div class="container-fluid mb-4 mx-0">
<h1 class="page-title text-bold text-center my-5"><?php _e("Recent Posts"); ?></h1>
</div>
<div class="container">
    <div class="row">
        
<?php
while(have_posts()){
    the_post(); ?>
    <div class="col-sm-4 mb-3">
        <div class="card">
    <div class="image-container w-100">
    <div class="post-list-image full-width">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
    </div>
    </div>
    <div class="post-body">
        <div class="title p-3 pb-0">
            <a href="<?php the_permalink() ?>"><h3 class="title"><?php the_title(); ?></h3></a>
        </div>
        <div class="content p-3">
        <?php the_excerpt();?>
        <p class="read-more"><a href="<?php the_permalink() ?>" class="btn btn-readmore"><?=_e('Read More')?></a></p>
        </div>
    </div>
    </div>
    </div>
    <?php
}
?>



</div>
</div>
<?php
get_footer();