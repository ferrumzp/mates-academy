<?php
/**
 * Created by PhpStorm.
 * User: sivushkin
 * Date: 29.11.17
 * Time: 11:28
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
    <div class="header">
        <div class="container clear">
            <div class="row">
                <div class="col-lg-9">
                    <span class="bloginfo"><?php echo get_bloginfo('name'); ?></span><span class="blogdesc"><?php echo get_bloginfo('description'); ?></span>
                </div>
                <div class="col-lg-3 lnb">
                    <a href="#" class="llink">Login</a>
                    <a href="#" class="btn btn-orange" role="button">contact me</a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 clear navitop">
                    <div class="navbar">
                        <?php wp_nav_menu( array(
                            'theme_location'  => '',
                            'menu'            => '',
                            'container'       => 'div',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',

                            //'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ) ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>