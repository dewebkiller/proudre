<?php get_header(); ?>
<?php
$queried_object = get_queried_object();
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;
$acimage = get_field('breadcrumb_image', $taxonomy . '_' . $term_id);
$size = 'full';
?>
<div class="sub-banner inner-subbanner" style="background-image: url('<?php echo $acimage["url"]; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
                <div class="banner-text">

                    <h4><?php echo category_description(); ?></h4>
                    <h1><?php single_cat_title(); ?></h1>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="our_properties">
    <div class="container">
        <div class="row">
            <?php
            if (have_posts()) :
                while (have_posts()): the_post();
                    ?>
                    <div class="col-sm-4">
                        <div class="property_block">
                            <div class="properties_image"> <a href="<?php the_permalink(); ?>"><?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('dwk-gallry', ['class' => 'img-responsive responsive--full', 'title' => get_the_title()]);
                                    }
                                    ?></a>
                                <div class="sale">Featured </div>
                                <div class="price">$<?php the_field('price'); ?> </div>
                            </div>
                            <div class="properties_details">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="location"><?php the_field('address'); ?></div>
                                <div class="text">
                                    <?php
                                    $content = get_the_content();
                                    $trimmed_content = wp_trim_words($content, 20);
                                    ?>
                                    <p><?php echo $trimmed_content; ?></p>
                                </div>
                                <div class="lower-box clearfix">
                                    <div class="pull-left">
                                        <ul>
                                            <li><span class="icon"><img src="<?php echo bloginfo('template_url'); ?>/image/properties/icon/bed.png" class="img-responsive" alt=""></span><?php the_field('bedroom'); ?></li>
                                            <li><span class="icon"><img src="<?php echo bloginfo('template_url'); ?>/image/properties/icon/bath.png" class="img-responsive" alt=""></span><?php the_field('bathroom'); ?></li>
                                            <li><span class="icon"><img src="<?php echo bloginfo('template_url'); ?>/image/properties/icon/garage.png" class="img-responsive" alt=""></span><?php the_field('parking'); ?></li>
                                        </ul>
                                    </div>
                                    <div class="pull-right">
                                        <ul>
                                            <li><span class="icon"><img src="<?php echo bloginfo('template_url'); ?>/image/properties/icon/square.png" class="img-responsive" alt=""></span><?php the_field('area'); ?> square</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>


<?php
get_footer();
