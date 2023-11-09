<?php
$phone = '027806 8938';
$email = 'info@proudre.com.au';
$facebook = 'https://www.facebook.com/proudrealestate/';
$twitter = '#';
$youtube = '#';
$googleplus = '#';
$instagram = '#';
$address = '6/7-10 Joyce St, Pendle hill 2145';
$additionalinfo = 'We take the quality of our customer service extremely seriously and will always strive to make your search for the perfect property as seamless as possible.';

?>
<div id="back-to-top" style="display: block;"><i class="fa fa-long-arrow-up"></i></div>
<div class="footer-button">
    <div class="container">
        <div class="row ">
            <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                <ul class="footer-bar">
                    <li><a href="<?php home_url(); ?>><i class="fa fa-home"></i><br />
                            Home</a></li>
                    <li><a href="tel:<?php echo $phone; ?>"><i class="fa fa-phone"></i><br />
                            Phone</a></li>
                    <li><a href="sms:<?php echo $phone; ?>"><i class="fa fa-comment-o"></i><br />
                            SMS</a></li>
                    <li><a href="mailto:<?php echo $email; ?>"><i class="fa fa-envelope"></i><br />
                            Email</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="title">
                    <h4>About Site</h4>
                </div>
                <p><?php echo $additionalinfo ?></p>
            </div>
            <div class="col-sm-3">
                <div class="title">
                    <h4>Contact Us</h4>
                </div>
                <ul>
                    <li><i class="fa fa-location-arrow" aria-hidden="true"></i><?php echo $address; ?></li>
                    <li><a href="tel:<?php echo $phone; ?>"><i class="fa fa-phone" aria-hidden="true"></i>Call us FREE <?php echo $phone; ?></a> </li>
                    <li><a href="mailto:<?php echo $email; ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $email; ?></li>
                </ul>
                
            </div>
            <div class="col-sm-3">
                <?php dynamic_sidebar('newsletter'); ?>
                <div class="clearfix"></div>
                <p>Don't miss the change to get the latest updates</p>
                
            </div>
            <div class="col-sm-3">
                <div class="title">
                    <h4>Quick Links</h4>
                </div>
                <?php
                $quicklinks = array(
                    'theme_location' => 'quick',
                    //'menu' => '',
                    //'container' => '',
                    //'container_class' => 'nav navbar-nav',
                    //'container_id' => '',
                    //'menu_class' => 'nav navbar-nav',
                    //'menu_id' => '',
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

                wp_nav_menu($quicklinks);
                ?>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="pull-left col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <p>&copy; <?php echo date("Y"); ?> Proud Real Estate. All Rights reserved. 
            </div>
            <div class="text-center col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                <?php
                $itemmenu = array(
                    'theme_location' => 'footer',
                    //'menu' => '',
                    //'container' => '',
                    //'container_class' => 'nav navbar-nav',
                    //'container_id' => '',
                    //'menu_class' => 'nav navbar-nav',
                    //'menu_id' => '',
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
            <div class="pull-right col-lg-2 col-md-2 col-sm-12 col-xs-12"> <a href="http://8848webs.com/" target="_blank" title="8848webs"><img src="<?php echo bloginfo('template_url'); ?>/image/8848logo.png" class="img-responsive" alt="8848 Webs" /></a> </div>

        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>