<?php
get_header();
/* Template Name: Teams */
$image = get_field('breadcrumb_image');
?>
<div class="sub-banner inner-subbanner elementor" style="background-image: url('<?php echo $image['url']; ?>');">
  <div class="elementor-background-overlay"></div>
  <div class="container">
    <div class="row">
      <div class="banner-text">
        <h2>OUR TEAM</h2>
        <h4>Know More About Our Agents</h4>

      </div>

    </div>
  </div>
</div>
<div id="inner-page post-wrapper" class="team-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php
                        $args = array(
                            'post_type' => 'team',
                            'stock' => 1,
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'DESC');
                        $loop = new WP_Query($args);
                        

                        while ($loop->have_posts()) : $loop->the_post();
                        $designation = get_field('team_designation');
                        $team_phone = get_field('team_phone');
                        $team_mobile = get_field('team_mobile');
                        $team_email = get_field('team_email');
                        $team_address = get_field('team_address');
                        $title = get_the_title();
                        $words = explode(' ', $title);
                        
                            ?>
                            <div class="col-lg-4">
                            <div class="teamwrapper">
                                <div class="teamimage">
                                <?php the_post_thumbnail( );?>
                                </div>
                                <div class="teamcontent">
                                <h3><?php the_title( );?></h3>
                                <h2><?php echo $designation;?></h2>
                                <ul>
                                    <li><i class="fa fa-phone"></i> <?php echo $team_phone;?></li>
                                    <li><i class="fa fa-mobile"></i> <?php echo $team_mobile;?></li>
                                    <li><i class="fa fa-envelope"></i> <?php echo $team_email;?></li>
                                </ul>
                                <a href="<?php the_permalink(160);?>" class="team-btn elementor-button-link elementor-button elementor-size-sm">Contact <?php echo $words[0];?> </a>
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