<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	

	?>
	<div class="container-fluid">
        <div class="row brodcm_menu">
            <div class="container">
                <div class="col-lg-12">
                    <p><a href="publications.html">Publications</a> > Impact of Microlending on Women’s Economic Empowerment in Jordan</p>
                </div>
            </div>
        </div>
    </div>
 
    <div class="container-fluid">
    	<div class="row projects_area_inn publdtls_area_inn">
    		<div class="container">
    			
    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    				<div class="single_projects_inn public_detls_inn">
    					<div class="single_projects_inn_left single_publications_inn_left">
    						<img src="<?php the_post_thumbnail_url(); ?>" alt="img">
    					</div>
    					<div class="single_projects_inn_right single_publications_inn_right">
    						<div class="top_projt top_publict top_publict_details">
    							<h3><?php the_title(); ?></h3>
    						</div>
    						<div class="bott_projt bott_publict">
    							<ul>
    								<?php 
                                        $downloadlink = get_field('download_link');

                                        $publitiondate = get_field('publication_date');
                                        $clientname = get_field('client');
                                        $countryname = get_field('country');

                                        
                                    ?>
    								<li><p>Download:<span><a download href="<?php echo $downloadlink['url']; ?>">EN</a> | AR</span></p></li>
    								<li><p>Date:<span><?php echo $publitiondate; ?></span></p></li>
    								<li><p>Client:<span><?php echo $clientname; ?></span></p></li>
                                    <li><p>Type:<span><?php the_terms($post_ID, 'worktype'); ?></span></p></li>
    								<li><p>Country:<span><?php echo $countryname; ?></span></p></li>
    							</ul>
    						</div>
    					</div>
    				</div>

     			</div>
    		</div>
    	</div>
    </div>

    <div class="container-fluid">
        <div class="row main_details_contnt">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="main_details_content_inn">
                       <?php the_content(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>



<?php

endwhile; // End of the loop.

get_footer();
