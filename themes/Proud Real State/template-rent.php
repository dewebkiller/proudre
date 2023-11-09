<?php
get_header();
/* Template Name: Rent */
$image = get_field('breadcrumb_image');

?>
<div class="sub-banner inner-subbanner" style="background-image: url('<?php echo $image['url'];?>');">
    <div class="container">
        <div class="row">
            <div class="banner-text">
                <h4>Property For Sale and For Rent</h4>
                <h1>Search and Find Your <span>Dream Home</span></h1>
            </div>
            <?php
            $taxonomy = 'properties_cat';
            $terms = get_terms($taxonomy); // Get all terms of a taxonomy
            
            if ($terms && !is_wp_error($terms)) :
                
                ?>
                <ul>
                    <?php foreach ($terms as $term) { 
                        $icon = get_field('icons',$term);
                        ?>
                        <li>
                            <div class="banner-details">
                                <div class="banner-icon"><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><img src="<?php echo $icon['url'];?>" class="img-responsive" alt=""></a></div>
                                <h3 class="banner-title"><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></h3>
                            </div>
                        </li>
                        
                    <?php } ?>
                </ul>
            <?php endif; ?>


        </div>
    </div>
</div>
<div class="our_properties">
    <div class="container">
        <div class="row">
            <div class="title">
                <p class="colored">Our Featured Properties For Sale</p>
                <h1>Properties For Sale</h1>
            </div>
            <?php
            $args = array(
                'post_type' => 'properties',
                'properties_status' => 'rent',
                'stock' => 1,
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC');
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
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

            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php
get_footer();
