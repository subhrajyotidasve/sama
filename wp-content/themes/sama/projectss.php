<?php /* Template Name: Project Page */ ?>
<?php get_header(); ?>
<div class="container-fluid">
    	<div class="row projects_area_inn">
    		<div class="container">
    			<div class="heading">
                    <h3>PROJECTS</h3>
                </div>
    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    				
                     <?php 

                        $project = new WP_Query(array(

                          'post_type' => 'project',
                                                        
                          'orderby' => 'ID',          
                          'order' => 'DESC',
                          
                        ));

                        if($project -> have_posts()): 

                        while($project -> have_posts()): $project -> the_post();

                        ?>

                    <div class="single_projects_inn">
    					<div class="single_projects_inn_left">
    						<img src="<?php the_post_thumbnail_url(); ?>" alt="img">
    					</div>
    					<div class="single_projects_inn_right">
    						<div class="top_projt">
    							<h3><?php the_title(); ?></h3>
    							<p><?php the_content(); ?></p>
    						</div>
    						<div class="bott_projt">
    							<ul>
    								<li><p>Client:<span><?php $client = get_field('client'); echo $client; ?></span></p></li>
    								<li><p>Year:<span><?php $year = get_field('year'); echo $year; ?></span></p></li>
    								<li><p>Country:<span><?php $country = get_field('country'); echo $country; ?></span></p></li>
                                    <?php $puburl = get_field('publication_url'); ?>
    								<li><p>Publication:<span><a href="<?php echo $puburl; ?>"><?php $publi = get_field('publication'); echo $publi; ?></a></span></p></li>
    							</ul>
    						</div>
    					</div>
    				</div>
                    <?php endwhile; endif;  wp_reset_postdata(); ?>
    				

    			</div>
    		</div>
    	</div>
    </div>
<?php get_footer(); ?>