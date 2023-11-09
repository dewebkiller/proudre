<?php
/* Template Name: Home */
get_header();
?>
<div id="banner">
    <div class="slider">
        <?php
        $args1 = array(
            'post_type' => 'banner',
            'stock' => 1,
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC');
        $loop1 = new WP_Query($args1);
        while ($loop1->have_posts()) : $loop1->the_post();
            ?>
            <li>
                <?php the_post_thumbnail('dwk-banner', ['class' => 'img-responsive responsive--full', 'title' => get_the_title()]); ?>
            </li>
        <?php endwhile; ?>
    </div>
</div>
<div class="welcome">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-6"> <?php
            $my_postid = 6;
                $url = wp_get_attachment_url(get_post_thumbnail_id($my_postid));
                ?>
                <img src="<?php echo $url; ?>" class="img-fluid"> </div>
            <div class="col-lg-6 col-sm-6">
                <?php
                $my_postid = 6; //This is page id or post id
                $content_post = get_post($my_postid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
                ?></div>
        </div>
    </div>
</div>
<div class="properties">
    <div class="container">
        <div class="row">
            <div class="title">

                <h2>Properties For Sale</h2>
                <p class="colored">Our Featured Properties For Sale</p>
            </div>
            <?php get_properties('sale', 3); ?>
        </div>
    </div>
</div>
<div class="properties">
    <div class="container">
        <div class="row">
            <div class="title">

                <h2>Properties For  Rent</h2>
                <p class="colored">Our Featured Properties For Rent</p>
            </div>
            <?php get_properties('rent', 3); ?>
        </div>
    </div>
</div>
<div class="testimonial">
    <div class="container">
        <div class="row">
            <div class="title">
                <h2>TESTIMONIALS</h2>
            </div>
            <div>
                <div id="testimonial" class="owl-carousel feedback">
                    <?php
                    $args = array(
                        'post_type' => 'testimonials',
                        'stock' => 1,
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC');
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                        ?>
                        <div class="feedbacks">
                            <div class="review"><?php the_content(); ?></div>
                            <div class="info-box">
                                <figure class="image-box"><?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('thumbnail', ['class' => 'img-responsive responsive--full', 'title' => get_the_title()]);
                                    }
                                    ?></figure>
                                <h3><?php the_title(); ?></h3>
                                <p class="designation"><?php the_field('designation'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog_section">
    <div class="container">
        <div class="row">
            <div class="head">
                <h3>Latest news from our blog</h3>
                <p>A nice subtitle can go here</p>
            </div>
            <div id="blog" class="owl-carousel">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'stock' => 1,
                    'posts_per_page' => -10,
                    'orderby' => 'date',
                    'order' => 'DESC');
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
                    ?>
                    <div class="blog">
                        <div class="blog_image"> <a href="<?php the_permalink(); ?>"><?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('dwk-gallery', ['class' => 'img-responsive responsive--full', 'title' => get_the_title()]);
                                }
                                ?></a>
                            <div class="blog_details">
                                <div class="date_category">
                                    <ul>
                                        <li><span class="blog-icon"><i class="fa fa-calendar"></i></span> <?php the_time('F j, Y') ?></li>
                                        <li><span class="blog-icon"><i class="fa fa-user"></i></span> <?php the_author(); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog_author">
                            <div class="post_card_author">
                                <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
