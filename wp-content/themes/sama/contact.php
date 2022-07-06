<?php/* Template Name: Contact Page */ ?>
<?php get_header(); ?>
 <div class="container-fluid">
        <div class="row contact_page_area">
            <div class="container">
                <div class="heading">
                    <h3>CONTACT US</h3>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact_area_left">
                        <p><?php echo get_field('contact_content', 'option') ?></p>

                        <ul>
                            <li><a target="_blank" href="<?php echo get_field('facebook', 'option') ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="<?php echo get_field('instagram', 'option') ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="<?php echo get_field('linkedin', 'option') ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="<?php echo get_field('twitter', 'option') ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact_area_right">
                         <?php echo do_shortcode('[contact-form-7 id="88" title="Contact form 1"]'); ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
 
<?php get_footer(); ?>