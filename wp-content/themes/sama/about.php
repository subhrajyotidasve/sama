<?php/* Template Name: About Page */ ?>
<?php get_header(); ?>
<div class="container-fluid">
        <div class="row about_area_inner">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="abot_innrlft">
                        <h3>WHAT WE DO</h3>
                        <h4><?php echo  get_field('what_we_do', 'option'); ?></h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="abot_innrit">
                        <?php $image = get_field('we_do_image', 'option'); ?>
                        <img src="<?php echo $image['url']; ?>" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row project_area">
            <div class="container">
                <?php if( have_rows('about_icon', 'option') ): ?>
                    <?php while( have_rows('about_icon', 'option') ): the_row(); 

                        $icontitle = get_sub_field('icon_title');
                        $iconcontent = get_sub_field('icon_content');
                        $iconimage = get_sub_field('icon_image'); ?>


                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                   <div class="abut_main_proj_area">
                    <div class="btm_proj">
                        <div class="abserv_img">
                            <img src="<?php echo $iconimage['url']; ?>" alt="img">
                        </div>
                        <h3><?php echo $icontitle; ?></h3>
                        <p><?php echo $iconcontent; ?></p>
                    </div>
                   </div> 
                </div>

                <?php endwhile; endif; ?>
                
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row helpcrt_area">
            <div class="container">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="helpcrt_area_left">
                        <h3><?php echo get_field('what_feature_title', 'option') ?></h3>
                        <p><?php echo get_field('what_feature_content', 'option')  ?></p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="helpcrt_area_right">
                        <?php $featureimage = get_field('what_feature_image', 'option') ?>
                        <img src="<?php echo $featureimage['url']; ?>" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="container-fluid">
        <div class="row whtmks_diffrnt">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="whtmks_diffrnt_all">
                        <h3><?php echo get_field('what_makes_us_title', 'option') ?></h3>
                        <p><?php echo get_field('what_makes_us_content', 'option') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row meetteam_area">
            <div class="container">
                <div class="heading">
                    <h3>MEET THE TEAM</h3>
                </div>
               <!--  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   <div class="meetteam_proj_area">
                    <div class="top_meetteam">
                        <img src="<?php bloginfo('template_directory'); ?>/images/team_icon.png" alt="img">
                    </div>
                    <div class="testm_text">
                        <h3>JUDE SAJDI</h3>
                        <h4>Founder</h4>
                    </div>
                    <div class="btm_meetteam">
                        <p>This is a project about this subject this is an project about. This is a project about this subject this is an project about.I am the founder and Managing Director of Sama Consulting. Over the past ten years I have worked on managing and implementing research and advocacy projects focusing on human rights, ender, social justice, youth, and refugees. During my work as a researcher, and later as the Head of Research at the Information and Research Center – King Hussein Foundation, I had the privilege of working in different settings all over Jordan including urban centers, refugee camps and rural villages, documenting firsthand the stories of children, youth, men, and women, living in the most difficult of circumstances and facing myriad vulnerabilities. I explored complex issues such as patriarchy, the gendered experiences of Palestinian and Syrian refugee youth living in camps. </p>
                    </div>
                    <div class="linkdin_area">
                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        <a href="mainto:jude@samaconsulting.com">jude@samaconsulting.com</a>
                    </div>
                   </div> 
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   <div class="meetteam_proj_area">
                    <div class="top_meetteam">
                        <img src="<?php bloginfo('template_directory'); ?>/images/team_icon.png" alt="img">
                    </div>
                    <div class="testm_text">
                        <h3>JUDE SAJDI</h3>
                        <h4>Lead Researcher</h4>
                    </div>
                    <div class="btm_meetteam">
                        <p>This is a project about this subject this is an project about. This is a project about this subject this is an project about.I am the founder and Managing Director of Sama Consulting  Over the past ten years I have worked on managing and implementing research and advocacy projects focusing on human rights, gender, social justice, youth, and refugees. During my work as a researcher, and later as the Head of Research at the Information and Research Center – King Hussein Foundation, I had the privilege of working in different settings all over Jordan including urban centers, refugee camps and rural villages, documenting firsthand</p>
                    </div>
                    <div class="linkdin_area">
                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        <a href="mainto:jude@samaconsulting.com">jude@samaconsulting.com</a>
                    </div>
                   </div> 
                </div> -->

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row meetteam_area meetteam_area2">
            <div class="container">
               <?php if( have_rows('meet_teams', 'option') ): ?>
                    <?php while( have_rows('meet_teams', 'option') ): the_row();  

                    $teamname = get_sub_field('member_name');
                    $teamdesignation = get_sub_field('team_designation');
                    $teammimage = get_sub_field('member_image');

                    $teamdescription =get_sub_field('team_description');
                    $teamlinkdine =get_sub_field('linkedin_name');
                    $teamlinkurl =get_sub_field('linkedin_url');
                    ?>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                   <div class="meetteam_proj_area">
                    <div class="top_meetteam top_meetteam2">
                        <img src="<?php echo $teammimage['url'];?>" alt="img">
                    </div>
                    <div class="testm_text">
                        <h3><?php echo $teamname; ?></h3>
                        <h4><?php echo $teamdesignation; ?></h4>
                    </div>
                    <div class="btm_meetteam">
                        <p><?php echo $teamdescription; ?></p>
                    </div>
                    <div class="linkdin_area">
                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        <a href="<?php echo $teamlinkurl; ?>" target="_blank"><?php echo $teamlinkdine; ?></a>
                    </div>
                   </div> 
                </div>
            <?php endwhile; endif; ?>
                

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row impact_area">
            <div class="container">
                <div class="heading">
                    <h3>IMPACT</h3>
                </div>
                 <?php if( have_rows('impact', 'option') ): ?>
                    <?php while( have_rows('impact', 'option') ): the_row();  

                    $impacttitle = get_sub_field('impact_title');
                    $impactdescription = get_sub_field('impact_description');
                    

                   
                    ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="impct_sing">
                        <h2><?php echo $impacttitle; ?></h2>
                        <p><?php echo $impactdescription; ?></p>
                    </div>
                </div>
            <?php endwhile; endif; ?>
                
            </div>
        </div>
    </div>
<?php get_footer(); ?>