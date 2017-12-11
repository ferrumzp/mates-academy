<?php
/**
 * Created by PhpStorm.
 * User: sivushkin
 * Date: 29.11.17
 * Time: 12:13
 */
get_header(); ?>

<div class="container clear article">
    <div class="row">
        <div class="col-lg-12 ">
            <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content('read more...'); ?>
            <?php endwhile; else: ?>
                <?php _e('Sorry', 'textdomain'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
