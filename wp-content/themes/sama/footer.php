  <div class="container-fluid">
        <div class="row footer_area">
            <div class="container">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="foot_fst">
                        <img src="<?php bloginfo('template_directory'); ?>/images/logob.png" alt="img">
                        <p>We produce data and provide insights on social and environmental issues affecting communities around the world.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="foot_midd">

                        <ul>
                            <li><a href="<?php bloginfo('home'); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Home</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/about"><i class="fa fa-angle-right" aria-hidden="true"></i> About</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/reports"><i class="fa fa-angle-right" aria-hidden="true"></i> Reports</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/our-works"><i class="fa fa-angle-right" aria-hidden="true"></i> Publications</a></li>
                            <li><a href="<?php bloginfo('home'); ?>/privacy-policy"><i class="fa fa-angle-right" aria-hidden="true"></i> Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="foot_lst">
                        <div class="social_area">
                            <h3>Social Links</h3>
                            <ul>
                                <li><a target="_blank" href="<?php echo get_field('facebook', 'option') ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="<?php echo get_field('instagram', 'option') ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="<?php echo get_field('linkedin', 'option') ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="<?php echo get_field('twitter', 'option') ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="getintuch_area">
                            <h3>Get in touch with us</h3>
                            <ul>
                                <li><a href="mailto:<?php echo get_field('email', 'option') ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo get_field('email', 'option') ?></a></li>
                                <li><a href="tel:<?php echo get_field('mobile', 'option') ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_field('mobile', 'option') ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy_right">
                <p><i class="fa fa-copyright" aria-hidden="true"></i> Sama Consulting 2021</p>
            </div>
        </div>
    </div>



        
   <script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
   <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
   <script src="<?php bloginfo('template_directory'); ?>/js/slick.js"></script>
   <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
  </body>
</html>