<?php /* Template Name: Samapublic Page */ ?>
<?php get_header(); ?>
 <div class="container-fluid">
    	<div class="row projects_area_inn">
    		<div class="container">
    			<div class="heading">
                    <h3>Our WORK</h3>
                </div>

                <div class="publicat_filter">

                  <?php 
                      $clientname = [];
                      $countryname = [];
                        $args = new WP_Query(array(

                            'post_type' => 'sama_publication',
                            'orderby'   => 'ID',
                            'order' =>'DESC'
                        ));

                        if($args->have_posts()):
                            while($args->have_posts()): $args->the_post();

                              $clientname[] = get_field('client');
                              $countryname[] = get_field('country');

                            endwhile; endif;

                            $ctarray = array_unique($clientname);
                            $countryarray = array_unique($countryname);
                            //echo "<pre>";
                           // var_dump($clientname);

                           // print_r(array_unique($clientname));

                    ?>

                    <div class="select-style">
                        
                         <select name="worktyp" id="locationdt">
                          <option value="">By City</option>
                           <?php 
                            foreach($ctarray as $value)
                            { ?>

                              <option value="<?php echo $value; ?>"><?php echo $value; ?></option>

                            <?php }

                           ?>
                         </select>

                    </div>
                    <div class="select-style">
                        
                         <select name="countrytyp" id="countryname">
                          <option value="">By Country</option>
                           <?php 
                            foreach($countryarray as $value)
                            { ?>

                              <option value="<?php echo $value ?>"><?php echo $value; ?></option>

                            <?php }

                           ?>
                         </select>

                    </div>



                    <form>
                        <div class="select-style">
                          <select name="worktyp" id="worktyp">
                            <option value="">By Type</option>
                            <?php 
                                $terms = get_terms(
                                     array(
                                       'taxonomy'   => 'worktype',
                                       'hide_empty' => false,
                                         )
                                    );
                                if ( ! empty( $terms ) && is_array( $terms ) ) 
                                {
                                    foreach($terms as $term)
                                    { ?>
                                            <option value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
                                   <?php }


                                } ?>

                           
                          </select>
                        </div>
                        <div class="select-style">
                          <select name="workthem" id="workthemee">
                            <option value="">By Theme</option>
                            <?php 
                                $thterms = get_terms(
                                     array(
                                       'taxonomy'   => 'worktheme',
                                       'hide_empty' => false,
                                         )
                                    );
                                if ( ! empty( $thterms ) && is_array( $thterms ) ) 
                                {
                                    foreach($thterms as $term)
                                    { ?>
                                            <option value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
                                   <?php }


                                } ?>
                          </select>
                        </div>
                        <div class="select-style">
                          <select name="workyearr" id="workyearr">
                            <option value="">By Year</option>
                            <?php 
                                $yterms = get_terms(
                                     array(
                                       'taxonomy'   => 'workyear',
                                       'hide_empty' => false,
                                         )
                                    );
                                if ( ! empty( $yterms ) && is_array( $yterms ) ) 
                                {
                                    foreach($yterms as $term)
                                    { ?>
                                            <option value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
                                   <?php }


                                } ?>
                          </select>
                        </div>
                    </form>
                </div>

    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="postshowdiv">
    				
                    <?php 
                        $args = new WP_Query(array(

                            'post_type' => 'sama_publication',
                            'orderby'   => 'ID',
                            'order' =>'DESC'
                        ));

                        if($args->have_posts()):
                            while($args->have_posts()): $args->the_post();

                    ?>

                    <div class="single_projects_inn">
    					<div class="single_projects_inn_left single_publications_inn_left">
    						<img src="<?php the_post_thumbnail_url(); ?>" alt="img">
    					</div>
    					<div class="single_projects_inn_right single_publications_inn_right">
    						<div class="top_projt top_publict">
    							<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
    							<p><?php the_content() ?></p>
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
                <?php endwhile; endif; ?>
                    

     			</div>
    		</div>
    	</div>
    </div>
    




<?php get_footer(); ?>