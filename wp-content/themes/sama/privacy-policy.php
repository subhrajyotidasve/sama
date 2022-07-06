<?php/* Template Name: Privacy Policy */ ?>
<?php get_header(); ?>
<div class="container-fluid">
        <div class="row whtmks_diffrnt">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="whtmks_diffrnt_all">
                        <?php while ( have_posts() ) :
								the_post(); ?>

                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?>	

                        </p>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>