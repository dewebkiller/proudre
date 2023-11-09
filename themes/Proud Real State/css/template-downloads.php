<?php
get_header();
/* Template Name: Downloads */
$image = get_field('breadcrumb_image');
?>
<div class="sub-banner inner-subbanner elementor" style="background-image: url('<?php echo $image['url']; ?>');">
    <div class="elementor-background-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="banner-text">
                <h2>Download</h2>
                <h4>Download our Resources</h4>
                
            </div>

        </div>
    </div>
</div>
<div id="inner-page post-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-bordered" style="margin-top: 30px;">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Downloads</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $args = array(
                            'post_type' => 'downloads',
                            'stock' => 1,
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'DESC');
                        $loop = new WP_Query($args);
                        $i=1;
                        while ($loop->have_posts()) : $loop->the_post();
                            ?>
                            <tr>
                                <td><?php echo $i++;?></td>
                                <td><?php the_content(); ?></td>
                            </tr>
                        <?php endwhile; ?>

                    </tbody>
                </table>
            </div>
            
                <?php get_sidebar();?>
            
        </div>
    </div>

</div>
<?php
get_footer();
