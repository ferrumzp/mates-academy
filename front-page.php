<?php
/**
 * Created by PhpStorm.
 * User: sivushkin
 * Date: 29.11.17
 * Time: 11:51
 */
get_header(); ?>

<div class="container clear article">
    <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
           <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
               <?php the_content('read more...'); ?>
            <?php endwhile; else: ?>
                <?php _e('Sorry', 'textdomain'); ?>
            <?php endif; ?>
        </div>
        <div class="col-lg-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("New Sidebar") ) : ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
