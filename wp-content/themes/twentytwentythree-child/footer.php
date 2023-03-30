
<footer class="bg-light">
    <div class="container footer my-5">
        <div class="row">
            <div class="col-sm-4"><h3>
                <h4><?php _e('Latest News', 'arsha'); ?></h4>
                <?php dynamic_sidebar('footer-1') ?>
            </h3></div>
            <div class="col-sm-4">
            <h3>
                <h4><?php _e('Information Technology', 'arsha'); ?></h4>
                <?php dynamic_sidebar('footer-2'); ?>
            </h3>
            </div>
            <div class="col-sm-4">
            <h3>
                <h4><?php _e('Echonomy', 'arsha'); ?></h4>
                <?php dynamic_sidebar('footer-3') ?>
            </h3>
            </div>
        </div>
        <div class="copyright my-4">
            <p class="text-center"><?php _e('All right Reserved', 'arsha');?></p>
        </div>
    </div>
</footer>
<?php
wp_footer();
?>
</body>
</html>

