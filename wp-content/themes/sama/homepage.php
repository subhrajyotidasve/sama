<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>


 <div class="container-fluid">
        <div class="row banner_area">
            <img src="<?php bloginfo('template_directory'); ?>/images/banner.jpg" alt="img">
            <div class="banner_text">
                <div class="container">
                    <div class="main_cont">
                        <h2><?php echo get_field('banner_title', 'option'); ?></h2>
                        <p><?php echo get_field('banner_sub_title', 'option'); ?></p>
                        <a href="<?php echo get_field('get_started_link', 'option'); ?>">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row about_area">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="abot_lft">
                        <h4><?php echo get_field('know_us_content', 'option'); ?></h4>
                        <a href="<?php echo get_field('know_us_buttin_link', 'option'); ?>">Get to know us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="abot_rit">
                    	<?php $homeimg = get_field('know_us_image', 'option'); ?>
                        <img src="<?php echo $homeimg['url']; ?>" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row project_area">
            <div class="container">
                <div class="heading">
                    <h3>PROJECTS</h3>
                </div>
                <?php 

                $project = new WP_Query(array(

                  'post_type' => 'project',
                  'posts_per_page' => '3',                               
                  'orderby' => 'ID',          
                  'order' => 'DESC',
                  
                ));

                if($project -> have_posts()): 

                while($project -> have_posts()): $project -> the_post();

                ?>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                   <div class="main_proj_area">
                    <div class="top_proj">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                    </div>
                    <div class="btm_proj">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                   </div> 
                </div>
                <?php endwhile; endif;  wp_reset_postdata(); ?>
                
                
            </div>
            <div class="proj_btom">
                <a href="<?php bloginfo('home'); ?>/projects">View all Projects</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row publictn_area">
            <div class="container">
                <div class="heading">
                    <h3>PUBLICATIONS</h3>
                </div>
                <?php 
                        $args = new WP_Query(array(

                            'post_type' => 'sama_publication',
                            'orderby'   => 'ID',
                            'posts_per_page' => '3',
                            'order' =>'DESC'
                        ));

                        if($args->have_posts()):
                            while($args->have_posts()): $args->the_post();

                    ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                   <div class="main_proj_area">
                    <div class="top_proj">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                    </div>
                    <div class="btm_proj">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                   </div> 
                </div>
                <?php endwhile; endif;  wp_reset_postdata(); ?>
                
            </div>
            <div class="proj_btom">
                <a href="<?php bloginfo('home'); ?>/our-works">View all Publications</a>
            </div>
        </div>
    </div>

<?php get_footer();?>