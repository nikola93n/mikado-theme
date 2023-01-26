<?php
/**
* Template Name: Single Project Page
*
* @package WordPress
*/
?>
<?php get_header(); ?>

<!-- Start Title Section -->
<section class="project-heading pt-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <?php $title_project_category = get_field('title_project_category'); ?>
                <?php if(!empty($title_project_category)): ?>
                <p class="heading-top"><?php echo $title_project_category; ?></p>
                <?php endif; ?>
                <?php $title_project_title = get_field('title_project_title'); ?>
                <?php if(!empty($title_project_title)): ?>
                <h1><?php echo $title_project_title; ?></h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- End Title Section -->
<!-- Start Project Section -->
<section class="single-project">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <?php $project_section_description_title = get_field('project_section_description_title'); ?>
                <?php if(!empty($project_section_description_title)): ?>
                <h3 class="pb-1"><?php echo $project_section_description_title; ?></h3>
                <?php endif; ?>

                <?php $project_section_first_paragraph = get_field('project_section_first_paragraph', false, false); ?>
                <?php if(!empty($project_section_first_paragraph)): ?>
                <p><?php echo $project_section_first_paragraph; ?></p>
                <?php endif; ?>

                <?php $project_section_second_paragraph = get_field('project_section_second_paragraph', false, false); ?>
                <?php if(!empty($project_section_second_paragraph)): ?>
                <p><?php echo $project_section_second_paragraph; ?></p>
                <?php endif; ?>

                <?php $project_section_third_paragraph = get_field('project_section_third_paragraph', false, false); ?>
                <?php if(!empty($project_section_third_paragraph)): ?>
                <p><?php echo $project_section_third_paragraph; ?></p>
                <?php endif; ?>

                <div class="meta">
                    <?php $project_image_and_meta_publish_date = get_field('project_image_and_meta_publish_date'); ?>
                    <p><b>Published On:</b> <?php echo $project_image_and_meta_publish_date; ?></p>
                    <?php $project_image_and_meta_technologies = get_field('project_image_and_meta_technologies'); ?>
                    <p><b>Technologies:</b> <?php echo $project_image_and_meta_technologies; ?></p>
                    <?php $project_image_and_meta_development_hours = get_field('project_image_and_meta_development_hours'); ?>
                    <p><b>Development hours:</b> <?php echo $project_image_and_meta_development_hours; ?></p>
                </div>
            </div>
            <div class="col-md-7 mt-5 mt-sm-5 mt-md-0">
                <div class="box-container px-5">
                    <?php $project_image_and_meta_image = get_field('project_image_and_meta_image'); ?>
                    <?php if(!empty($project_image_and_meta_image)): ?>
                    <div class="box"
                        style="background: url(<?php echo $project_image_and_meta_image['url']; ?>); background-size: cover; transition: ease-in-out 2s;">
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Related project Subsection -->
        <div class="row">
            <div class="related-projects d-flex justify-content-between align-items-center">
                <?php $title_and_link_title = get_field('title_and_link_title'); ?>
                <?php if(!empty($title_and_link_title)): ?>
                <h4><?php echo $title_and_link_title; ?></h4>
                <?php endif; ?>
                <?php $title_and_link_view_all = get_field('title_and_link_view_all'); ?>
                <?php if(!empty($title_and_link_view_all)): ?>
                <?php $title_and_link_view_all_url = get_field('title_and_link_view_all_url'); ?>
                <?php if(!empty($title_and_link_view_all_url)): ?>
                <a href="<?php echo $title_and_link_view_all_url; ?>"><?php echo $title_and_link_view_all; ?></a>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="row">
            <div class="swiper swiper-projects">
                <div class="swiper-wrapper">
                    <?php $related_project_one_image = get_field('related_project_one_image'); ?>
                    <?php if(!empty($related_project_one_image)): ?>
                    <div class="swiper-slide">
                        <div class="img-container px-4 pt-4"><img class="img-fluid"
                            src="<?php echo $related_project_one_image['url']; ?>" alt="">
                        </div>
                        <?php $related_project_one_name = get_field('related_project_one_name'); ?>
                        <?php if(!empty($related_project_one_name)): ?>
                        <h5><?php echo $related_project_one_name; ?></h5>
                        <?php endif; ?>
                        <?php $related_project_one_link_text = get_field('related_project_one_link_text'); ?>
                        <?php $related_project_one_url = get_field('related_project_one_url'); ?>
                        <a
                            href="<?php echo $related_project_one_url; ?>"><?php echo $related_project_one_link_text; ?></a>
                    </div>
                    <?php endif; ?>
                    <?php $related_project_two_image = get_field('related_project_two_image'); ?>
                    <?php if(!empty($related_project_two_image)): ?>
                        <div class="swiper-slide">
                            <div class="img-container px-4 pt-4"><img class="img-fluid"
                                    src="<?php echo $related_project_two_image['url']; ?>" alt=""></div>
                            <?php $related_project_two_name = get_field('related_project_two_name'); ?>
                            <?php if(!empty($related_project_two_name)): ?>
                            <h5><?php echo $related_project_two_name; ?></h5>
                            <?php endif; ?>
                            <?php $related_project_two_link_text = get_field('related_project_two_link_text'); ?>
                            <?php $related_project_two_url = get_field('related_project_two_url'); ?>
                            <a
                                href="<?php echo $related_project_two_url; ?>"><?php echo $related_project_two_link_text; ?></a>
                        </div>                        
                    <?php endif; ?>     
                    <?php $related_project_three_image = get_field('related_project_three_image'); ?>                    
                    <?php if(!empty($related_project_three_image)): ?>
                        <div class="swiper-slide">
                            <div class="img-container px-4 pt-4"><img class="img-fluid"
                                    src="<?php echo $related_project_three_image['url']; ?>" alt=""></div>
                            <?php $related_project_three_name = get_field('related_project_three_name'); ?>
                            <?php if(!empty($related_project_three_name)): ?>
                            <h5><?php echo $related_project_three_name; ?></h5>
                            <?php endif; ?>
                            <?php $related_project_three_link_text = get_field('related_project_three_link_text'); ?>
                            <?php $related_project_three_url = get_field('related_project_three_url'); ?>
                            <a
                                href="<?php echo $related_project_three_url; ?>"><?php echo $related_project_three_link_text; ?></a>
                        </div>                        
                    <?php endif; ?>              
                    <?php $related_project_four_image = get_field('related_project_four_image'); ?>                    
                    <?php if(!empty($related_project_four_image)): ?>
                        <div class="swiper-slide">
                            <div class="img-container px-4 pt-4"><img class="img-fluid"
                                    src="<?php echo $related_project_four_image['url']; ?>" alt=""></div>
                            <?php $related_project_four_name = get_field('related_project_four_name'); ?>
                            <?php if(!empty($related_project_four_name)): ?>
                            <h5><?php echo $related_project_four_name; ?></h5>
                            <?php endif; ?>
                            <?php $related_project_four_link_text = get_field('related_project_four_link_text'); ?>
                            <?php $related_project_four_url = get_field('related_project_four_url'); ?>
                            <a
                                href="<?php echo $related_project_four_url; ?>"><?php echo $related_project_four_link_text; ?></a>
                        </div>                        
                    <?php endif; ?>       
                    <?php $related_project_five_image = get_field('related_project_five_image'); ?>                    
                    <?php if(!empty($related_project_five_image)): ?>
                        <div class="swiper-slide">
                            <div class="img-container px-4 pt-4"><img class="img-fluid"
                                    src="<?php echo $related_project_five_image['url']; ?>" alt=""></div>
                            <?php $related_project_five_name = get_field('related_project_five_name'); ?>
                            <?php if(!empty($related_project_five_name)): ?>
                            <h5><?php echo $related_project_five_name; ?></h5>
                            <?php endif; ?>
                            <?php $related_project_five_link_text = get_field('related_project_five_link_text'); ?>
                            <?php $related_project_five_url = get_field('related_project_five_url'); ?>
                            <a
                                href="<?php echo $related_project_five_url; ?>"><?php echo $related_project_five_link_text; ?></a>
                        </div>                        
                    <?php endif; ?>              
                    <?php $related_project_six_image = get_field('related_project_six_image'); ?>                    
                    <?php if(!empty($related_project_six_image)): ?>
                        <div class="swiper-slide">
                            <div class="img-container px-4 pt-4"><img class="img-fluid"
                                    src="<?php echo $related_project_six_image['url']; ?>" alt=""></div>
                            <?php $related_project_six_name = get_field('related_project_six_name'); ?>
                            <?php if(!empty($related_project_six_name)): ?>
                            <h5><?php echo $related_project_six_name; ?></h5>
                            <?php endif; ?>
                            <?php $related_project_six_link_text = get_field('related_project_six_link_text'); ?>
                            <?php $related_project_six_url = get_field('related_project_six_url'); ?>
                            <a
                                href="<?php echo $related_project_six_url; ?>"><?php echo $related_project_six_link_text; ?></a>
                        </div>                        
                    <?php endif; ?>              
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- End Project Section -->

<?php get_footer(); ?>

