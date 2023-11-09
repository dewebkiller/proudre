<?php

function get_properties($product_cat, $limit) {

    $args = array(
        'post_type' => 'properties',
        'properties_status' => $product_cat,
        'stock' => 1,
        'posts_per_page' => $limit,
        'orderby' => 'date',
        'order' => 'DESC');
    $loop = new WP_Query($args);
    while ($loop->have_posts()) : $loop->the_post();
        ?>
        <div class="property_block">
            <div class="col-sm-4">
                <div class="properties_image"> <a href="<?php the_permalink(); ?>"><?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('thumbnail', ['class' => 'img-responsive responsive--full', 'title' => get_the_title()]);
                        }
                        ?></a>
                    <div class="sale">Featured </div>
                    <div class="price"><?php the_field('price'); ?> </div>
                </div>
                <div class="properties_details">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="location"><p><?php the_field('address'); ?></p></div>
                    <div class="text">
                        <?php $content = get_the_content();
                        $trimmed_content = wp_trim_words($content, 20);
                        ?>
                        <p><?php echo $trimmed_content; ?></p>
                    </div>
                    <div class="lower-box clearfix">
                        <div class="pull-left">
                            <ul>
                                <li><span class="icon" data-toggle="tooltip" data-placement="right" title="Tooltip on right"><img src="<?php echo bloginfo('template_url'); ?>/image/properties/icon/bed.png" class="img-responsive" alt=""></span><?php the_field('bedroom'); ?></li>
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
}
