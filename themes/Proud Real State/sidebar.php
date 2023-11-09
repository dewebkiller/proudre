<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <div class="search-sidebar">
        <?php
        $taxonomy = 'properties_cat';
        $terms = get_terms($taxonomy); // Get all terms of a taxonomy

        if ($terms && !is_wp_error($terms)) :
            ?>
            <ul>
                <?php
                foreach ($terms as $term) {
                    $icon = get_field('icons', $term);
                    ?>
                    <li>
                        <div class="banner-details">
                            <div class="banner-icon"><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><img src="<?php echo $icon['url']; ?>" class="img-responsive" alt=""></a></div>
                            <h3 class="banner-title"><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></h3>
                            <a class="btn btn-default" href="<?php echo get_term_link($term->slug, $taxonomy); ?>">View All Properties</a>
                        </div>
                    </li>

                <?php } ?>
            </ul>
        <?php endif; ?>
    </div>
</div>