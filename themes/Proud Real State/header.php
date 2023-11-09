<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Proud Real Estate</title>
        <meta name="description" content="Proud Real Estate" />
        <meta name="keywords" content="Proud Real Estate" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo body_class(); ?>">
        <?php
        $phone = '027806 8938';
        $email = 'info@proudre.com.au';
        $facebook = 'https://www.facebook.com/proudrealestate/';
        $twitter = '#';
        $youtube = '#';
        $googleplus = '#';
        $instagram = '#';
        ?>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-9">
                        <div class="header-contact">
                            <ul>
                                <li><a href="tel:<?php echo $phone;?>"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $phone;?></a> </li>
                                <li><a href="mailto:<?php echo $email;?>"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $email;?></a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <ul class="header-social-icon">
                            <?php if ($facebook) { ?><li><a href="<?php echo $facebook;?>" target="_blank"><i class="fa fa-facebook"></i></a></li> <?php } ?>
                            <?php if ($twitter) { ?><li><a href="<?php echo $twitter;?>" target="_blank"><i class="fa fa-twitter"></i></a></li><?php } ?>
                            <?php if ($youtube) { ?><li><a href="<?php echo $youtube;?>" target="_blank"><i class="fa fa-youtube"></i></a></li><?php } ?>
                            <?php if ($googleplus) { ?><li><a href="<?php echo $googleplus;?>" target="_blank"><i class="fa fa-google-plus"></i></a></li><?php } ?>
                            <?php if ($instagram) { ?><li><a href="<?php echo $instagram;?>" target="_blank"><i class="fa fa-instagram"></i></a></li><?php } ?>
                        </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-3">
                    <div class="logo"> <a href="./"><img src="<?php echo bloginfo('template_url'); ?>/image/logo.png" alt="Proud Real Estate" class="img-responsive"></a> </div>
                </div>
                <div class="col-lg-9 col-sm-9 col-xs-12">
                    <?php get_search_form(); ?>
                    
                    <div class="menu col-xs-12 no-padding">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid" id="button-container"> 
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" id="button-navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
                                    <?php
                                    $itemmenu = array(
                                        'theme_location' => 'primary',
                                        'menu' => '',
                                        'container' => '',
                                        //'container_class' => 'nav navbar-nav',
                                        'container_id' => '',
                                        'menu_class' => 'nav navbar-nav',
                                        'menu_id' => '',
                                        'echo' => true,
                                        //'fallback_cb' => 'wp_page_menu',
                                        'before' => '',
                                        'after' => '',
                                        'link_before' => '',
                                        'link_after' => '',
                                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        'depth' => 0,
                                        'walker' => ''
                                    );

                                    wp_nav_menu($itemmenu);
                                    ?>
                                </div>
                            </div>
                    </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
