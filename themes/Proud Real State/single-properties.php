<?php get_header(); ?>
<div class="sub-banner">
    <div class="container-fluid">
        <div class="row">
            <?php
            $images = get_field('gallery');

            if ($images):
                ?>

                <div id="carousel" class="flexslider">
                    <ul class="slides">
                        <?php foreach ($images as $image): ?>
                            <li>
                                <a data-fancybox="gallery" href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['dwk-gallery']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="our_properties">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 properties_page">
                <div class="col-md-6"> 
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('large', ['class' => 'img-responsive responsive--full', 'title' => get_the_title()]);
                    }
                    ?> 
                </div>
                <div class="col-md-6">
                    <ul class="details">
                        <li><span class="icon"><img src="<?php echo bloginfo('template_url'); ?>/image/property/icon/bed.png" class="img-responsive" alt=""></span><?php the_field('bedroom'); ?></li>
                        <li><span class="icon"><img src="<?php echo bloginfo('template_url'); ?>/image/property/icon/bath.png" class="img-responsive" alt=""></span><?php the_field('bathroom'); ?></li>
                        <li><span class="icon"><img src="<?php echo bloginfo('template_url'); ?>/image/property/icon/garage.png" class="img-responsive" alt=""></span><?php the_field('parking'); ?></li>
                        <li><span class="icon"><img src="<?php echo bloginfo('template_url'); ?>/image/property/icon/square.png" class="img-responsive" alt=""></span><?php the_field('area'); ?> square</li>
                    </ul>
                    <h3><?php the_title(); ?></h3>
                    <div class="location"><p><?php the_field('address'); ?></p></div>
                    <div class="text">

                        <?php
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                the_content();
                            } // end while
                        } // end if
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 properties_page">
                <div class="col-md-6">
                    <h3>Property Features</h3>
                    <div class="proerty-features">
                        <?php the_field("features"); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php the_field('locaation_map'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>