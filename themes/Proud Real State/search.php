<?php
get_header();
?>
<?php
$queried_object = get_queried_object();
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;
$acimage = get_field('breadcrumb_image', $taxonomy . '_' . $term_id);
$size = 'full';
?>
<div class="sub-banner inner-subbanner" style="background-image: url('<?php echo bloginfo('template_url'); ?>/image/sub-banner/sub-banner.jpg');">
    <div class="container">
        <div class="row">
            <div class="banner-text">
                <h4>Property For Sale and For Rent</h4>
                <h1>Search Results</h1>
            </div>
        </div>
    </div>
</div>

<div class="inner-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <?php if (have_posts()) : ?>

                    <div class="navigation">
                        <div class="alignleft">
                            <?php next_posts_link('&laquo; Previous Entries') ?>
                        </div>
                        <div class="alignright">
                            <?php previous_posts_link('Next Entries &raquo;') ?>
                        </div>
                    </div>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="post">
                           
                                <div class="post-wrapper">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <div class="post-image pull-left">

                                            <?php the_post_thumbnail('full', ['class' => 'img-responsive responsive--full', 'title' => get_the_title()]); ?>

                                        </div>
                                    <?php } ?>
                                    <div class="post-content">
                                        <h4 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                                                <?php the_title(); ?>
                                            </a></h4>

                                        <?php the_excerpt(); ?>
                                        <a class="btn btn-success" href="<?php the_permalink(); ?>">Read More</a>
                                    </div>
                                </div>
                           
                        </div>
                    <?php endwhile; ?>
                    <div class="navigation">
                        <div class="alignleft">
                            <?php next_posts_link('&laquo; Previous Entries') ?>
                        </div>
                        <div class="alignright">
                            <?php previous_posts_link('Next Entries &raquo;') ?>
                        </div>
                    </div>
                <?php else : ?>
                    <h3 class="center">No result found. Try a different search?</h3>
                    <p>&nbsp;</p>
                <?php endif; ?>
            </div>
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

        </div>
    </div>
    <?php
    get_footer();
    ?>
</div>


