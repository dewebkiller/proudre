<?php get_header(); ?>
<?php //echo do_shortcode( '[SHORTCODE_ELEMENTOR id="292"]' );?>
<div class="sub-banner inner-subbanner" style="background-image: url('<?php echo bloginfo('template_url'); ?>/image/sub-banner/sub-banner.jpg');">
    <div class="container">
        <div class="row">
            <div class="banner-text">
                <h2><?php the_title();?></h2>
            </div>
        </div>
    </div>
</div>
<div id="inner-page">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-8">
            <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
               <?php the_post_thumbnail( );?>
                <h2><?php the_title();?></h2>
               <?php the_content(); ?>
               <?php
            }
        }
        ?>
            </div>
        

            <div class="col-lg-4">
                <div class="sidebar">
                <?php echo do_shortcode( '[SHORTCODE_ELEMENTOR id="284"]' );?>
                </div>
                
            </div>
        </div>

    </div>
    
</div>

<?php
get_footer();
