<?php /* Template Name: Publication Page */ ?>
<?php get_header(); ?>
<?php
$minimum_range = 3000;
$maximum_range = 5000;

$capminimum_range = 3000;
$capmaximum_range = 5000;
?>
 <div class="container-fluid">
    	<div class="row projects_area_inn">
    		<div class="container">
          <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    
    			<div class="heading">
                    <h3>Our WORK</h3>
                </div>
                <div class="publicat_filter">
                  <div class="row">
                    <div class="col-md-2">
                      <input type="text" name="minimum_range" id="minimum_range" class="form-control" value="<?php echo $minimum_range; ?>" />
                    </div>
                    <div class="col-md-8" style="padding-top:12px">
                      <div id="price_range"></div>
                    </div>
                    <div class="col-md-2">
                      <input type="text" name="maximum_range" id="maximum_range" class="form-control" value="<?php echo $maximum_range; ?>" />
                    </div>
                  </div>
                </div>

                <div class="publicat_filter">
                  <div class="row">
                    <div class="col-md-2">
                      <input type="text" name="capminimum_range" id="capminimum_range" class="form-control" value="<?php echo $capminimum_range; ?>" />
                    </div>
                    <div class="col-md-8 capasity" style="padding-top:12px">
                      <div id="price_range"></div>
                    </div>
                    <div class="col-md-2">
                      <input type="text" name="capmaximum_range" id="capmaximum_range" class="form-control" value="<?php echo $capmaximum_range; ?>" />
                    </div>
                  </div>
                </div>




                <div class="publicat_filter">
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
    
    <script>  
jQuery(document).ready(function(){  
    
  jQuery( "#price_range" ).slider({
    range: true,
    min: 1000,
    max: 20000,
    values: [ <?php echo $minimum_range; ?>, <?php echo $maximum_range; ?> ],
    slide:function(event, ui){
      jQuery("#minimum_range").val(ui.values[0]);
      jQuery("#maximum_range").val(ui.values[1]);
      load_product(ui.values[0], ui.values[1]);
    }
  });
  
  //load_product(<?php echo $minimum_range; ?>, <?php echo $maximum_range; ?>);
  
  function load_product(minimum_range, maximum_range)
  {
    //alert(minimum_range);
    var lowerprice = minimum_range;
    var maxprice = maximum_range;
    jQuery.ajax({
       type: "post",
        url: ajax_var.url,
        dataType: 'html',
        data: "action=country-like&nonce="+ajax_var.nonce+"&country_like=&lower_price="+lowerprice+"&max_price="+maxprice,

           // dataType: 'json',

            success: function(response){              

                
                $('#postshowdiv').html(response);
            }
    });
  }
  
});  
</script>

<script>  
jQuery(document).ready(function(){  
    
  jQuery( ".capasity #price_range" ).slider({
    range: true,
    min: 1000,
    max: 20000,
    values: [ <?php echo $capminimum_range; ?>, <?php echo $capmaximum_range; ?> ],
    slide:function(event, ui){
      jQuery("#capminimum_range").val(ui.values[0]);
      jQuery("#capmaximum_range").val(ui.values[1]);
      capload_product(ui.values[0], ui.values[1]);
      //alert(ui.values[0]);
    }
  });
  
  //load_product(<?php echo $minimum_range; ?>, <?php echo $maximum_range; ?>);
  
  function capload_product(capminimum_range, capmaximum_range)
  {
    //alert(minimum_range);
    var caplowerprice = capminimum_range;
    var capmaxprice = capmaximum_range;
    jQuery.ajax({
       type: "post",
        url: ajax_var.url,
        dataType: 'html',
        data: "action=capasity-like&nonce="+ajax_var.nonce+"&capasity_like=&lower_price="+caplowerprice+"&max_price="+capmaxprice,

           // dataType: 'json',

            success: function(response){              

                
                $('#postshowdiv').html(response);
            }
    });
  }
  
});  
</script>




<?php get_footer(); ?>