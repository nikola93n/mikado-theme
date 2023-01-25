<?php get_header(); ?>


<!-- Start Hero Section -->
<section class="hero d-flex align-items-center">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-xs-12 col-lg-6">
                <?php $title = get_field( 'title', false, false ); ?>
                <?php if ( ! empty( $title ) ) : ?>
                <h1 class="mt-5 pt-3 mt-lg-0 pt-lg-0"><?php echo $title; ?></h1>
                <?php endif; ?>
                <?php $paragraph = get_field( 'paragraph', false, false ); ?>
                <?php if ( ! empty( $paragraph ) ) : ?>
                <p class="my-4 lh-lg"><?php echo $paragraph; ?></p>
                <?php endif; ?>
                <?php $button = get_field('button'); ?>
                <?php $button_url = get_field('button_url'); ?>
                <?php if(!empty($button)) : ?>
                <?php if(!empty($button_url)) : ?>
                <a href="<?php echo $button_url; ?>" class="btn btn-primary"><?php echo $button; ?></a>
                <?php endif; ?>
                <?php endif; ?>
            </div>
            <?php $activate_tilt = get_field ('activate_tilt');?>
            <div class="col-xs-12 col-lg-6 justify-content-evenly" <?php echo $activate_tilt; ?>>
                <?php $hero_image = get_field( 'hero_image' ); ?>
                <?php if ( ! empty( $hero_image ) ) : ?> <img src="<?php echo $hero_image['url']?>"
                    alt="<?php echo $hero_image['alt'] ?>" class="img-fluid hero-img mx-auto py-5 pb-lg-5">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
</div>
<!-- End Hero Section -->
<!-- Start Info Section -->
<section id="info" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php $about_image = get_field ( 'about_image' ); ?>
                <?php if(!empty($about_image)) : ?> <img src="<?php echo $about_image['url'] ?>"
                    alt="<?php echo $about_image['alt']; ?>" class="img-fluid">
                <?php endif;?>
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <?php $about_info = get_field('about_info'); ?>
                <?php if(!empty($about_info)) : ?>
                <p class="heading-top"><?php echo $about_info; ?></p>
                <?php endif; ?>
                <?php $about_title = get_field('about_title', false, false); ?>
                <?php if(!empty($about_title)) : ?>
                <h2><?php echo $about_title; ?></h2>
                <?php endif; ?>
                <?php $about_paragraph = get_field ( 'about_paragraph', false, false ); ?>
                <?php if(!empty($about_paragraph)) : ?>
                <p class="py-3"><?php echo $about_paragraph; ?></p>
                <?php endif; ?>
                <ul class="pe-5">

                    <?php $about_icons_first_line_icon = get_field ( 'about_icons_first_line_icon', false, false ); ?>
                    <?php $about_icons_first_line_text = get_field ( 'about_icons_first_line_text', false, false ); ?>
                    <?php if(!empty($about_icons_first_line_icon)) : ?>
                    <?php if(!empty($about_icons_first_line_text)) : ?>

                    <li class="d-flex align-items-center"><span><i
                                class="<?php echo $about_icons_first_line_icon; ?>"></i></span><span><?php echo $about_icons_first_line_text; ?></span>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>

                    <?php $about_icons_second_line_icon = get_field ( 'about_icons_second_line_icon', false, false ); ?>
                    <?php $about_icons_second_line_text = get_field ( 'about_icons_second_line_text', false, false ); ?>
                    <?php if(!empty($about_icons_second_line_icon)) : ?>
                    <?php if(!empty($about_icons_second_line_text)) : ?>

                    <li class="d-flex align-items-center"><span><i
                                class="<?php echo $about_icons_second_line_icon; ?>"></i></span><span><?php echo $about_icons_second_line_text; ?></span>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>

                    <?php $about_icons_third_line_icon = get_field ( 'about_icons_third_line_icon', false, false ); ?>
                    <?php $about_icons_third_line_text = get_field ( 'about_icons_third_line_text', false, false ); ?>
                    <?php if(!empty($about_icons_third_line_icon)) : ?>
                    <?php if(!empty($about_icons_third_line_text)) : ?>

                    <li class="d-flex align-items-center"><span><i
                                class="<?php echo $about_icons_third_line_icon; ?>"></i></span><span><?php echo $about_icons_third_line_text; ?></span>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>

                    <?php $about_icons_fourth_line_icon = get_field ( 'about_icons_fourth_line_icon', false, false ); ?>
                    <?php $about_icons_fourth_line_text = get_field ( 'about_icons_fourth_line_text', false, false ); ?>
                    <?php if(!empty($about_icons_fourth_line_icon)) : ?>
                    <?php if(!empty($about_icons_fourth_line_text)) : ?>

                    <li class="d-flex align-items-center"><span><i
                                class="<?php echo $about_icons_fourth_line_icon; ?>"></i></span><span><?php echo $about_icons_fourth_line_text; ?></span>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>

                    <?php $about_icons_fifth_line_icon = get_field ( 'about_icons_fifth_line_icon', false, false ); ?>
                    <?php $about_icons_fifth_line_text = get_field ( 'about_icons_fifth_line_text', false, false ); ?>
                    <?php if(!empty($about_icons_fifth_line_icon)) : ?>
                    <?php if(!empty($about_icons_fifth_line_text)) : ?>

                    <li class="d-flex align-items-center"><span><i
                                class="<?php echo $about_icons_fifth_line_icon; ?>"></i></span><span><?php echo $about_icons_fifth_line_text; ?></span>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>

                    <?php $about_icons_sixth_line_icon = get_field ( 'about_icons_sixth_line_icon', false, false ); ?>
                    <?php $about_icons_sixth_line_text = get_field ( 'about_icons_sixth_line_text', false, false ); ?>
                    <?php if(!empty($about_icons_sixth_line_icon)) : ?>
                    <?php if(!empty($about_icons_sixth_line_text)) : ?>

                    <li class="d-flex align-items-center"><span><i
                                class="<?php echo $about_icons_sixth_line_icon; ?>"></i></span><span><?php echo $about_icons_sixth_line_text; ?></span>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Info Section -->
<!-- Start Counter Section -->
<?php $background_image_and_color_background_image = get_field('background_image_and_color_background_image'); ?>
<?php $background_image_and_color_background_color = get_field('background_image_and_color_background_color'); ?>
<section id="awards" style="background-image: url(<?php echo $background_image_and_color_background_image['url']; ?>); background-color:
<?php echo $background_image_and_color_background_color; ?>">
    <div class="container">
        <div class="row">
            <?php $numbers_section_one_first_icon = get_field('numbers_section_one_first_icon'); ?>
            <?php $numbers_section_one_number = get_field('numbers_section_one_number'); ?>
            <?php $numbers_section_one_first_description = get_field('numbers_section_one_first_description'); ?>
            <?php if(!empty($numbers_section_one_first_icon)) : ?>

            <div class="col-md-3 d-flex flex-column align-items-center justify-content-center">
                <div class="icon"><i class="<?php echo $numbers_section_one_first_icon; ?>"></i></div>
                <div class="number"><span data-purecounter-start="0"
                        data-purecounter-end="<?php echo $numbers_section_one_number; ?>" class="purecounter"
                        data-purecounter-duration="1"
                        data-purecounter-once="false"><?php echo $numbers_section_one_number; ?></span></div>
                <div class="text"><?php echo $numbers_section_one_first_description; ?></div>
            </div>
            <?php endif; ?>


            <?php $numbers_section_two_first_icon = get_field('numbers_section_two_first_icon'); ?>
            <?php $numbers_section_two_number = get_field('numbers_section_two_number'); ?>
            <?php $numbers_section_two_first_description = get_field('numbers_section_two_first_description'); ?>
            <?php if(!empty($numbers_section_two_first_icon)) : ?>

            <div class="col-md-3 d-flex flex-column align-items-center justify-content-center">
                <div class="icon"><i class="<?php echo $numbers_section_two_first_icon; ?>"></i></div>
                <div class="number"><span data-purecounter-start="0"
                        data-purecounter-end="<?php echo $numbers_section_two_number; ?>" class="purecounter"
                        data-purecounter-duration="1"
                        data-purecounter-once="false"><?php echo $numbers_section_two_number; ?></span></div>
                <div class="text"><?php echo $numbers_section_two_first_description; ?></div>
            </div>
            <?php endif; ?>


            <?php $numbers_section_three_first_icon = get_field('numbers_section_three_first_icon'); ?>
            <?php $numbers_section_three_number = get_field('numbers_section_three_number'); ?>
            <?php $numbers_section_three_first_description = get_field('numbers_section_three_first_description'); ?>
            <?php if(!empty($numbers_section_three_first_icon)) : ?>

            <div class="col-md-3 d-flex flex-column align-items-center justify-content-center">
                <div class="icon"><i class="<?php echo $numbers_section_three_first_icon; ?>"></i></div>
                <div class="number"><span data-purecounter-start="0"
                        data-purecounter-end="<?php echo $numbers_section_three_number; ?>" class="purecounter"
                        data-purecounter-duration="1"
                        data-purecounter-once="false"><?php echo $numbers_section_three_number; ?></span></div>
                <div class="text"><?php echo $numbers_section_three_first_description; ?></div>
            </div>
            <?php endif; ?>


            <?php $numbers_section_four_first_icon = get_field('numbers_section_four_first_icon'); ?>
            <?php $numbers_section_four_number = get_field('numbers_section_four_number'); ?>
            <?php $numbers_section_four_first_description = get_field('numbers_section_four_first_description'); ?>
            <?php if(!empty($numbers_section_four_first_icon)) : ?>

            <div class="col-md-3 d-flex flex-column align-items-center justify-content-center">
                <div class="icon"><i class="<?php echo $numbers_section_four_first_icon; ?>"></i></div>
                <div class="number"><span data-purecounter-start="0"
                        data-purecounter-end="<?php echo $numbers_section_four_number; ?>" class="purecounter"
                        data-purecounter-duration="1"
                        data-purecounter-once="false"><?php echo $numbers_section_four_number; ?></span></div>
                <div class="text"><?php echo $numbers_section_four_first_description; ?></div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End Counter Section -->
<!-- Start Team Section -->
<section id="team" class="py-5">
    <div class="container pt-5">
        <div class="row align-content-center">
            <div class="col-lg-6">
                <?php $about_team_suptitle = get_field('about_team_suptitle', false, false); ?>
                <p class="heading-top"><?php echo $about_team_suptitle; ?></p>
                <?php $about_team_title = get_field('about_team_title', false, false); ?>
                <h2><?php echo $about_team_title; ?></h2>
                <?php $about_team_paragraph = get_field('about_team_paragraph', false, false); ?>
                <p class="py-3"><?php echo $about_team_paragraph; ?></p>
            </div>
            <div class="col-lg-6">
                <ul class="services-skill">

                    <?php $first_progress_bar_title = get_field('first_progress_bar_title', false, false) ?>
                    <?php if(!empty($first_progress_bar_title)) : ?>

                    <?php $first_progress_bar_start_number = get_field('first_progress_bar_start_number', false, false) ?>
                    <?php if(!empty($first_progress_bar_start_number)) : ?>

                    <?php $first_progress_bar_end_number = get_field('first_progress_bar_end_number', false, false) ?>
                    <?php if(!empty($first_progress_bar_end_number)) : ?>

                    <?php $first_progress_bar_animation_duration = get_field('first_progress_bar_animation_duration', false, false) ?>
                    <?php if(!empty($first_progress_bar_animation_duration)) : ?>

                    <?php $first_progress_bar_animation_max_value = get_field('first_progress_bar_animation_max_value', false, false) ?>
                    <?php if(!empty($first_progress_bar_animation_max_value)) : ?>


                    <li class="progress-item">
                        <h6 class="d-flex justify-content-between">
                            <?php echo $first_progress_bar_title; ?>
                            <span><span data-purecounter-start="<?php echo $first_progress_bar_start_number; ?>"
                                    data-purecounter-end="<?php echo $first_progress_bar_end_number; ?>"
                                    class="purecounter"
                                    data-purecounter-duration="<?php echo $first_progress_bar_animation_duration; ?>"
                                    data-purecounter-once="true"><?php echo $first_progress_bar_end_number; ?></span>%</span>
                        </h6>
                        <div class="progress">
                            <span class="progress-bar" role="progressbar"
                                aria-valuenow="<?php echo $first_progress_bar_end_number; ?>"
                                aria-valuemin="<?php echo $first_progress_bar_start_number; ?>"
                                aria-valuemax="<?php echo $first_progress_bar_animation_max_value; ?>"
                                data-percent="<?php echo $first_progress_bar_end_number; ?>"></span>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>



                    <?php $second_progress_bar_title = get_field('second_progress_bar_title', false, false) ?>
                    <?php if(!empty($second_progress_bar_title)) : ?>

                    <?php $second_progress_bar_start_number = get_field('second_progress_bar_start_number', false, false) ?>
                    <?php if(!empty($second_progress_bar_start_number)) : ?>

                    <?php $second_progress_bar_end_number = get_field('second_progress_bar_end_number', false, false) ?>
                    <?php if(!empty($second_progress_bar_end_number)) : ?>

                    <?php $second_progress_bar_animation_duration = get_field('second_progress_bar_animation_duration', false, false) ?>
                    <?php if(!empty($second_progress_bar_animation_duration)) : ?>

                    <?php $second_progress_bar_animation_max_value = get_field('second_progress_bar_animation_max_value', false, false) ?>
                    <?php if(!empty($second_progress_bar_animation_max_value)) : ?>


                    <li class="progress-item">
                        <h6 class="d-flex justify-content-between">
                            <?php echo $second_progress_bar_title; ?>
                            <span><span data-purecounter-start="<?php echo $second_progress_bar_start_number; ?>"
                                    data-purecounter-end="<?php echo $second_progress_bar_end_number; ?>"
                                    class="purecounter"
                                    data-purecounter-duration="<?php echo $second_progress_bar_animation_duration; ?>"
                                    data-purecounter-once="true"><?php echo $second_progress_bar_end_number; ?></span>%</span>
                        </h6>
                        <div class="progress">
                            <span class="progress-bar" role="progressbar"
                                aria-valuenow="<?php echo $second_progress_bar_end_number; ?>"
                                aria-valuemin="<?php echo $second_progress_bar_start_number; ?>"
                                aria-valuemax="<?php echo $second_progress_bar_animation_max_value; ?>"
                                data-percent="<?php echo $second_progress_bar_end_number; ?>"></span>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>



                    <?php $third_progress_bar_title = get_field('third_progress_bar_title', false, false) ?>
                    <?php if(!empty($third_progress_bar_title)) : ?>

                    <?php $third_progress_bar_start_number = get_field('third_progress_bar_start_number', false, false) ?>
                    <?php if(!empty($third_progress_bar_start_number)) : ?>

                    <?php $third_progress_bar_end_number = get_field('third_progress_bar_end_number', false, false) ?>
                    <?php if(!empty($third_progress_bar_end_number)) : ?>

                    <?php $third_progress_bar_animation_duration = get_field('third_progress_bar_animation_duration', false, false) ?>
                    <?php if(!empty($third_progress_bar_animation_duration)) : ?>

                    <?php $third_progress_bar_animation_max_value = get_field('third_progress_bar_animation_max_value', false, false) ?>
                    <?php if(!empty($third_progress_bar_animation_max_value)) : ?>


                    <li class="progress-item">
                        <h6 class="d-flex justify-content-between">
                            <?php echo $third_progress_bar_title; ?>
                            <span><span data-purecounter-start="<?php echo $third_progress_bar_start_number; ?>"
                                    data-purecounter-end="<?php echo $third_progress_bar_end_number; ?>"
                                    class="purecounter"
                                    data-purecounter-duration="<?php echo $third_progress_bar_animation_duration; ?>"
                                    data-purecounter-once="true"><?php echo $third_progress_bar_end_number; ?></span>%</span>
                        </h6>
                        <div class="progress">
                            <span class="progress-bar" role="progressbar"
                                aria-valuenow="<?php echo $third_progress_bar_end_number; ?>"
                                aria-valuemin="<?php echo $third_progress_bar_start_number; ?>"
                                aria-valuemax="<?php echo $third_progress_bar_animation_max_value; ?>"
                                data-percent="<?php echo $third_progress_bar_end_number; ?>"></span>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>



                    <?php $fourth_progress_bar_title = get_field('fourth_progress_bar_title', false, false) ?>
                    <?php if(!empty($fourth_progress_bar_title)) : ?>

                    <?php $fourth_progress_bar_start_number = get_field('fourth_progress_bar_start_number', false, false) ?>
                    <?php if(!empty($fourth_progress_bar_start_number)) : ?>

                    <?php $fourth_progress_bar_end_number = get_field('fourth_progress_bar_end_number', false, false) ?>
                    <?php if(!empty($fourth_progress_bar_end_number)) : ?>

                    <?php $fourth_progress_bar_animation_duration = get_field('fourth_progress_bar_animation_duration', false, false) ?>
                    <?php if(!empty($fourth_progress_bar_animation_duration)) : ?>

                    <?php $fourth_progress_bar_animation_max_value = get_field('fourth_progress_bar_animation_max_value', false, false) ?>
                    <?php if(!empty($fourth_progress_bar_animation_max_value)) : ?>


                    <li class="progress-item">
                        <h6 class="d-flex justify-content-between">
                            <?php echo $fourth_progress_bar_title; ?>
                            <span><span data-purecounter-start="<?php echo $fourth_progress_bar_start_number; ?>"
                                    data-purecounter-end="<?php echo $fourth_progress_bar_end_number; ?>"
                                    class="purecounter"
                                    data-purecounter-duration="<?php echo $fourth_progress_bar_animation_duration; ?>"
                                    data-purecounter-once="true"><?php echo $fourth_progress_bar_end_number; ?></span>%</span>
                        </h6>
                        <div class="progress">
                            <span class="progress-bar" role="progressbar"
                                aria-valuenow="<?php echo $fourth_progress_bar_end_number; ?>"
                                aria-valuemin="<?php echo $fourth_progress_bar_start_number; ?>"
                                aria-valuemax="<?php echo $fourth_progress_bar_animation_max_value; ?>"
                                data-percent="<?php echo $fourth_progress_bar_end_number; ?>"></span>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <!-- Team People -->
        <div class="row py-5">

            <?php $team_member_one_image = get_field('team_member_one_image'); ?>
            <?php if(!empty($team_member_one_image)) : ?>

            <?php $team_member_one_name = get_field('team_member_one_name'); ?>

            <?php $team_member_one_position = get_field('team_member_one_position'); ?>

            <?php $team_member_one_first_network_icon = get_field('team_member_one_first_network_icon'); ?>
            <?php $team_member_one_first_network_url = get_field('team_member_one_first_network_url'); ?>

            <?php $team_member_one_second_network_icon = get_field('team_member_one_second_network_icon'); ?>
            <?php $team_member_one_second_network_url = get_field('team_member_one_second_network_url'); ?>

            <?php $team_member_one_third_network_icon = get_field('team_member_one_third_network_icon'); ?>
            <?php $team_member_one_third_network_url = get_field('team_member_one_third_network_url'); ?>

            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <img src="<?php echo $team_member_one_image['url']; ?>"
                        alt="<?php $team_member_one_image['alt']; ?>" class="img-fluid">
                    <div class="team-detail">
                        <h5 class="text-center"><?php echo $team_member_one_name; ?></h5>
                        <p class="text-center"><?php echo $team_member_one_position; ?></p>
                        <ul class="d-flex justify-content-center">
                            <li><a href="<?php echo $team_member_one_first_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_one_first_network_icon; ?>"></i></a></li>
                            <li><a href="<?php echo $team_member_one_second_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_one_second_network_icon; ?>"></i></a></li>
                            <li><a href="<?php echo $team_member_one_third_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_one_third_network_icon; ?>"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endif; ?>


            <?php $team_member_two_image = get_field('team_member_two_image'); ?>
            <?php if(!empty($team_member_two_image)) : ?>

            <?php $team_member_two_name = get_field('team_member_two_name'); ?>

            <?php $team_member_two_position = get_field('team_member_two_position'); ?>

            <?php $team_member_two_first_network_icon = get_field('team_member_two_first_network_icon'); ?>
            <?php $team_member_two_first_network_url = get_field('team_member_two_first_network_url'); ?>

            <?php $team_member_two_second_network_icon = get_field('team_member_two_second_network_icon'); ?>
            <?php $team_member_two_second_network_url = get_field('team_member_two_second_network_url'); ?>

            <?php $team_member_two_third_network_icon = get_field('team_member_two_third_network_icon'); ?>
            <?php $team_member_two_third_network_url = get_field('team_member_two_third_network_url'); ?>

            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <img src="<?php echo $team_member_two_image['url']; ?>"
                        alt="<?php $team_member_two_image['alt']; ?>" class="img-fluid">
                    <div class="team-detail">
                        <h5 class="text-center"><?php echo $team_member_two_name; ?></h5>
                        <p class="text-center"><?php echo $team_member_two_position; ?></p>
                        <ul class="d-flex justify-content-center">
                            <li><a href="<?php echo $team_member_two_first_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_two_first_network_icon; ?>"></i></a></li>
                            <li><a href="<?php echo $team_member_two_second_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_two_second_network_icon; ?>"></i></a></li>
                            <li><a href="<?php echo $team_member_two_third_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_two_third_network_icon; ?>"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endif; ?>



            <?php $team_member_three_image = get_field('team_member_three_image'); ?>
            <?php if(!empty($team_member_three_image)) : ?>

            <?php $team_member_three_name = get_field('team_member_three_name'); ?>

            <?php $team_member_three_position = get_field('team_member_three_position'); ?>

            <?php $team_member_three_first_network_icon = get_field('team_member_three_first_network_icon'); ?>
            <?php $team_member_three_first_network_url = get_field('team_member_three_first_network_url'); ?>

            <?php $team_member_three_second_network_icon = get_field('team_member_three_second_network_icon'); ?>
            <?php $team_member_three_second_network_url = get_field('team_member_three_second_network_url'); ?>

            <?php $team_member_three_third_network_icon = get_field('team_member_three_third_network_icon'); ?>
            <?php $team_member_three_third_network_url = get_field('team_member_three_third_network_url'); ?>

            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <img src="<?php echo $team_member_three_image['url']; ?>"
                        alt="<?php $team_member_three_image['alt']; ?>" class="img-fluid">
                    <div class="team-detail">
                        <h5 class="text-center"><?php echo $team_member_three_name; ?></h5>
                        <p class="text-center"><?php echo $team_member_three_position; ?></p>
                        <ul class="d-flex justify-content-center">
                            <li><a href="<?php echo $team_member_three_first_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_three_first_network_icon; ?>"></i></a></li>
                            <li><a href="<?php echo $team_member_three_second_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_three_second_network_icon; ?>"></i></a></li>
                            <li><a href="<?php echo $team_member_three_third_network_url; ?>" target="_blank">
                                    <i class="<?php echo $team_member_three_third_network_icon; ?>"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End Team Section -->
<!-- Start Partners Section -->
<section id="partners">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="swiper mySwiper" id="benefits">
                    <div class="swiper-wrapper">
                        <?php $partners_partner_one = get_field('partners_partner_one'); ?>
                        <?php if(!empty($partners_partner_one)) : ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $partners_partner_one['url']; ?>"
                                alt="<?php $partners_partner_one['alt']; ?>">
                        </div>
                        <?php endif; ?>
                        <?php $partners_partner_two = get_field('partners_partner_two'); ?>
                        <?php if(!empty($partners_partner_two)) : ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $partners_partner_two['url']; ?>"
                                alt="<?php $partners_partner_two['alt']; ?>">
                        </div>
                        <?php endif; ?>
                        <?php $partners_partner_three = get_field('partners_partner_three'); ?>
                        <?php if(!empty($partners_partner_three)) : ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $partners_partner_three['url']; ?>"
                                alt="<?php $partners_partner_three['alt']; ?>">
                        </div>
                        <?php endif; ?>
                        <?php $partners_partner_four = get_field('partners_partner_four'); ?>
                        <?php if(!empty($partners_partner_four)) : ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $partners_partner_four['url']; ?>"
                                alt="<?php $partners_partner_four['alt']; ?>">
                        </div>
                        <?php endif; ?>
                        <?php $partners_partner_five = get_field('partners_partner_five'); ?>
                        <?php if(!empty($partners_partner_five)) : ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $partners_partner_five['url']; ?>"
                                alt="<?php $partners_partner_five['alt']; ?>">
                        </div>
                        <?php endif; ?>
                        <?php $partners_partner_six = get_field('partners_partner_six'); ?>
                        <?php if(!empty($partners_partner_six)) : ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $partners_partner_six['url']; ?>"
                                alt="<?php $partners_partner_six['alt']; ?>">
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Partners Section -->
<!-- Start Portfolio Section -->
<section id="portfolio">
    <div class="container my-5">
        <div class="row">
            <?php $portfolio_header_suptitle = get_field('portfolio_header_suptitle'); ?>
            <?php $portfolio_header_title = get_field('portfolio_header_title', false, false); ?>
            <?php $portfolio_header_paragraph = get_field('portfolio_header_paragraph', false, false); ?>
            <div class="col-md-12 text-center mx-550">
                <p class="heading-top"><?php echo $portfolio_header_suptitle; ?></p>
                <h2><?php echo $portfolio_header_title; ?></h2>
                <p class="pt-3"><?php echo $portfolio_header_paragraph; ?></p>
            </div>
        </div>
        <div class="row mb-5 mt-4 button-group filter-button-group">
            <div class="col d-flex justify-content-center flex-wrap">

                <?php $group_names_all = get_field('group_names_all'); ?>
                <?php if(!empty($group_names_all)) : ?>

                <button type="button" data-filter="*" class="mx-3"
                    id="automatic-click"><?php echo $group_names_all; ?></button>

                <?php $group_names_first_portfolio_group = get_field('group_names_first_portfolio_group'); ?>
                <?php $group_names_first_portfolio_group_data_filter = get_field('group_names_first_portfolio_group_data_filter'); ?>
                <?php if(!empty($group_names_first_portfolio_group)) : ?>
                <?php if(!empty($group_names_first_portfolio_group_data_filter)) : ?>
                <button type="button" data-filter=".<?php echo $group_names_first_portfolio_group_data_filter; ?>"
                    class="mx-3"><?php echo $group_names_first_portfolio_group; ?></button>
                <?php endif; ?>
                <?php endif; ?>


                <?php $group_names_second_portfolio_group = get_field('group_names_second_portfolio_group'); ?>
                <?php $group_names_second_portfolio_group_data_filter = get_field('group_names_second_portfolio_group_data_filter'); ?>
                <?php if(!empty($group_names_second_portfolio_group)) : ?>
                <?php if(!empty($group_names_second_portfolio_group_data_filter)) : ?>

                <button type="button" data-filter=".<?php echo $group_names_second_portfolio_group_data_filter; ?>"
                    class="mx-3"><?php echo $group_names_second_portfolio_group; ?></button>
                <?php endif; ?>
                <?php endif; ?>


                <?php $group_names_third_portfolio_group = get_field('group_names_third_portfolio_group'); ?>
                <?php $group_names_third_portfolio_group_data_filter = get_field('group_names_third_portfolio_group_data_filter'); ?>
                <?php if(!empty($group_names_third_portfolio_group)) : ?>
                <?php if(!empty($group_names_third_portfolio_group_data_filter)) : ?>
                <button type="button" data-filter=".<?php echo $group_names_third_portfolio_group_data_filter; ?>"
                    class="mx-3"><?php echo $group_names_third_portfolio_group; ?></button>
                <?php endif; ?>
                <?php endif; ?>


                <?php $group_names_fourth_portfolio_group = get_field('group_names_fourth_portfolio_group'); ?>
                <?php $group_names_fourth_portfolio_group_data_filter = get_field('group_names_fourth_portfolio_group_data_filter'); ?>
                <?php if(!empty($group_names_fourth_portfolio_group)) : ?>
                <?php if(!empty($group_names_fourth_portfolio_group_data_filter)) : ?>
                <button type="button" data-filter=".<?php echo $group_names_fourth_portfolio_group_data_filter; ?>"
                    class="mx-3"><?php echo $group_names_fourth_portfolio_group; ?></button>
                <?php endif; ?>
                <?php endif; ?>


                <?php $group_names_fiveth_portfolio_group = get_field('group_names_fiveth_portfolio_group'); ?>
                <?php $group_names_fiveth_portfolio_group_data_filter = get_field('group_names_fiveth_portfolio_group_data_filter'); ?>
                <?php if(!empty($group_names_fiveth_portfolio_group)) : ?>
                <?php if(!empty($group_names_fiveth_portfolio_group_data_filter)) : ?>
                <button type="button" data-filter=".<?php echo $group_names_fiveth_portfolio_group_data_filter; ?>"
                    class="mx-3"><?php echo $group_names_fiveth_portfolio_group; ?></button>
                <?php endif; ?>
                <?php endif; ?>


                <?php $group_names_sixth_portfolio_group = get_field('group_names_sixth_portfolio_group'); ?>
                <?php $group_names_sixth_portfolio_group_data_filter = get_field('group_names_sixth_portfolio_group_data_filter'); ?>
                <?php if(!empty($group_names_sixth_portfolio_group)) : ?>
                <?php if(!empty($group_names_sixth_portfolio_group_data_filter)) : ?>
                <button type="button" data-filter=".<?php echo $group_names_sixth_portfolio_group_data_filter; ?>"
                    class="mx-3"><?php echo $group_names_sixth_portfolio_group; ?></button>
                <?php endif; ?>
                <?php endif; ?>
                <?php endif; ?>


            </div>
        </div>

        <div class="row justify-content-center g-0" id="portfolio-list">

            <?php $portfolio_items_portfolio_one_image = get_field('portfolio_items_portfolio_one_image'); ?>
            <?php if(!empty('$portfolio_items_portfolio_one_image')) : ?>

            <?php $portfolio_items_portfolio_one_icon = get_field('portfolio_items_portfolio_one_icon'); ?>
            <?php if(!empty('$portfolio_items_portfolio_one_icon')) : ?>

            <?php $portfolio_items_portfolio_one_title = get_field('portfolio_items_portfolio_one_title'); ?>
            <?php if(!empty('$portfolio_items_portfolio_one_title')) : ?>

            <?php $portfolio_items_portfolio_one_read_more_link = get_field('portfolio_items_portfolio_one_read_more_link'); ?>
            <?php if(!empty('$portfolio_items_portfolio_one_read_more_link')) : ?>

            <?php $portfolio_items_portfolio_one_read_more_url = get_field('portfolio_items_portfolio_one_read_more_url'); ?>
            <?php if(!empty('$portfolio_items_portfolio_one_read_more_url')) : ?>

            <?php $portfolio_items_portfolio_one_class = get_field('portfolio_items_portfolio_one_class'); ?>
            <?php if(!empty('$portfolio_items_portfolio_one_class')) : ?>



            <div class="col-lg-4 col-md-6 <?php echo $portfolio_items_portfolio_one_class; ?> grid-item">
                <figure class="product-item">
                    <img src="<?php echo $portfolio_items_portfolio_one_image['url']; ?>"
                        alt="<?php echo $portfolio_items_portfolio_one_image['alt']; ?>" class="img-fluid">
                    <figcaption class="fig-caption">
                        <i class="<?php echo $portfolio_items_portfolio_one_icon; ?>"></i>
                        <h5 class="title mt-1"><?php echo $portfolio_items_portfolio_one_title; ?></h5>
                        <span class="sub-title"><a href="<?php echo $portfolio_items_portfolio_one_read_more_url; ?>"
                                target="_blank"><?php echo $portfolio_items_portfolio_one_read_more_link; ?></a></span>
                    </figcaption>
                </figure>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>


            <?php $portfolio_items_portfolio_two_image = get_field('portfolio_items_portfolio_two_image'); ?>
            <?php if(!empty('$portfolio_items_portfolio_two_image')) : ?>

            <?php $portfolio_items_portfolio_two_icon = get_field('portfolio_items_portfolio_two_icon'); ?>
            <?php if(!empty('$portfolio_items_portfolio_two_icon')) : ?>

            <?php $portfolio_items_portfolio_two_title = get_field('portfolio_items_portfolio_two_title'); ?>
            <?php if(!empty('$portfolio_items_portfolio_two_title')) : ?>

            <?php $portfolio_items_portfolio_two_read_more_link = get_field('portfolio_items_portfolio_two_read_more_link'); ?>
            <?php if(!empty('$portfolio_items_portfolio_two_read_more_link')) : ?>

            <?php $portfolio_items_portfolio_two_read_more_url = get_field('portfolio_items_portfolio_two_read_more_url'); ?>
            <?php if(!empty('$portfolio_items_portfolio_two_read_more_url')) : ?>

            <?php $portfolio_items_portfolio_two_class = get_field('portfolio_items_portfolio_two_class'); ?>
            <?php if(!empty('$portfolio_items_portfolio_two_class')) : ?>



            <div class="col-lg-4 col-md-6 <?php echo $portfolio_items_portfolio_two_class; ?> grid-item">
                <figure class="product-item">
                    <img src="<?php echo $portfolio_items_portfolio_two_image['url']; ?>"
                        alt="<?php echo $portfolio_items_portfolio_two_image['alt']; ?>" class="img-fluid">
                    <figcaption class="fig-caption">
                        <i class="<?php echo $portfolio_items_portfolio_two_icon; ?>"></i>
                        <h5 class="title mt-1"><?php echo $portfolio_items_portfolio_two_title; ?></h5>
                        <span class="sub-title"><a href="<?php echo $portfolio_items_portfolio_two_read_more_url; ?>"
                                target="_blank"><?php echo $portfolio_items_portfolio_two_read_more_link; ?></a></span>
                    </figcaption>
                </figure>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>



            <?php $portfolio_items_portfolio_three_image = get_field('portfolio_items_portfolio_three_image'); ?>
            <?php if(!empty('$portfolio_items_portfolio_three_image')) : ?>

            <?php $portfolio_items_portfolio_three_icon = get_field('portfolio_items_portfolio_three_icon'); ?>
            <?php if(!empty('$portfolio_items_portfolio_three_icon')) : ?>

            <?php $portfolio_items_portfolio_three_title = get_field('portfolio_items_portfolio_three_title'); ?>
            <?php if(!empty('$portfolio_items_portfolio_three_title')) : ?>

            <?php $portfolio_items_portfolio_three_read_more_link = get_field('portfolio_items_portfolio_three_read_more_link'); ?>
            <?php if(!empty('$portfolio_items_portfolio_three_read_more_link')) : ?>

            <?php $portfolio_items_portfolio_three_read_more_url = get_field('portfolio_items_portfolio_three_read_more_url'); ?>
            <?php if(!empty('$portfolio_items_portfolio_three_read_more_url')) : ?>

            <?php $portfolio_items_portfolio_three_class = get_field('portfolio_items_portfolio_three_class'); ?>
            <?php if(!empty('$portfolio_items_portfolio_three_class')) : ?>



            <div class="col-lg-4 col-md-6 <?php echo $portfolio_items_portfolio_three_class; ?> grid-item">
                <figure class="product-item">
                    <img src="<?php echo $portfolio_items_portfolio_three_image['url']; ?>"
                        alt="<?php echo $portfolio_items_portfolio_three_image['alt']; ?>" class="img-fluid">
                    <figcaption class="fig-caption">
                        <i class="<?php echo $portfolio_items_portfolio_three_icon; ?>"></i>
                        <h5 class="title mt-1"><?php echo $portfolio_items_portfolio_three_title; ?></h5>
                        <span class="sub-title"><a href="<?php echo $portfolio_items_portfolio_three_read_more_url; ?>"
                                target="_blank"><?php echo $portfolio_items_portfolio_three_read_more_link; ?></a></span>
                    </figcaption>
                </figure>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>



            <?php $portfolio_items_portfolio_four_image = get_field('portfolio_items_portfolio_four_image'); ?>
            <?php if(!empty('$portfolio_items_portfolio_four_image')) : ?>

            <?php $portfolio_items_portfolio_four_icon = get_field('portfolio_items_portfolio_four_icon'); ?>
            <?php if(!empty('$portfolio_items_portfolio_four_icon')) : ?>

            <?php $portfolio_items_portfolio_four_title = get_field('portfolio_items_portfolio_four_title'); ?>
            <?php if(!empty('$portfolio_items_portfolio_four_title')) : ?>

            <?php $portfolio_items_portfolio_four_read_more_link = get_field('portfolio_items_portfolio_four_read_more_link'); ?>
            <?php if(!empty('$portfolio_items_portfolio_four_read_more_link')) : ?>

            <?php $portfolio_items_portfolio_four_read_more_url = get_field('portfolio_items_portfolio_four_read_more_url'); ?>
            <?php if(!empty('$portfolio_items_portfolio_four_read_more_url')) : ?>

            <?php $portfolio_items_portfolio_four_class = get_field('portfolio_items_portfolio_four_class'); ?>
            <?php if(!empty('$portfolio_items_portfolio_four_class')) : ?>



            <div class="col-lg-4 col-md-6 <?php echo $portfolio_items_portfolio_four_class; ?> grid-item">
                <figure class="product-item">
                    <img src="<?php echo $portfolio_items_portfolio_four_image['url']; ?>"
                        alt="<?php echo $portfolio_items_portfolio_four_image['alt']; ?>" class="img-fluid">
                    <figcaption class="fig-caption">
                        <i class="<?php echo $portfolio_items_portfolio_four_icon; ?>"></i>
                        <h5 class="title mt-1"><?php echo $portfolio_items_portfolio_four_title; ?></h5>
                        <span class="sub-title"><a href="<?php echo $portfolio_items_portfolio_four_read_more_url; ?>"
                                target="_blank"><?php echo $portfolio_items_portfolio_four_read_more_link; ?></a></span>
                    </figcaption>
                </figure>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>

            <?php $portfolio_items_portfolio_five_image = get_field('portfolio_items_portfolio_five_image'); ?>
            <?php if(!empty('$portfolio_items_portfolio_five_image')) : ?>

            <?php $portfolio_items_portfolio_five_icon = get_field('portfolio_items_portfolio_five_icon'); ?>
            <?php if(!empty('$portfolio_items_portfolio_five_icon')) : ?>

            <?php $portfolio_items_portfolio_five_title = get_field('portfolio_items_portfolio_five_title'); ?>
            <?php if(!empty('$portfolio_items_portfolio_five_title')) : ?>

            <?php $portfolio_items_portfolio_five_read_more_link = get_field('portfolio_items_portfolio_five_read_more_link'); ?>
            <?php if(!empty('$portfolio_items_portfolio_five_read_more_link')) : ?>

            <?php $portfolio_items_portfolio_five_read_more_url = get_field('portfolio_items_portfolio_five_read_more_url'); ?>
            <?php if(!empty('$portfolio_items_portfolio_five_read_more_url')) : ?>

            <?php $portfolio_items_portfolio_five_class = get_field('portfolio_items_portfolio_five_class'); ?>
            <?php if(!empty('$portfolio_items_portfolio_five_class')) : ?>



            <div class="col-lg-4 col-md-6 <?php echo $portfolio_items_portfolio_five_class; ?> grid-item">
                <figure class="product-item">
                    <img src="<?php echo $portfolio_items_portfolio_five_image['url']; ?>"
                        alt="<?php echo $portfolio_items_portfolio_five_image['alt']; ?>" class="img-fluid">
                    <figcaption class="fig-caption">
                        <i class="<?php echo $portfolio_items_portfolio_five_icon; ?>"></i>
                        <h5 class="title mt-1"><?php echo $portfolio_items_portfolio_five_title; ?></h5>
                        <span class="sub-title"><a href="<?php echo $portfolio_items_portfolio_five_read_more_url; ?>"
                                target="_blank"><?php echo $portfolio_items_portfolio_five_read_more_link; ?></a></span>
                    </figcaption>
                </figure>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>

            <?php $portfolio_items_portfolio_six_image = get_field('portfolio_items_portfolio_six_image'); ?>
            <?php if(!empty('$portfolio_items_portfolio_six_image')) : ?>

            <?php $portfolio_items_portfolio_six_icon = get_field('portfolio_items_portfolio_six_icon'); ?>
            <?php if(!empty('$portfolio_items_portfolio_six_icon')) : ?>

            <?php $portfolio_items_portfolio_six_title = get_field('portfolio_items_portfolio_six_title'); ?>
            <?php if(!empty('$portfolio_items_portfolio_six_title')) : ?>

            <?php $portfolio_items_portfolio_six_read_more_link = get_field('portfolio_items_portfolio_six_read_more_link'); ?>
            <?php if(!empty('$portfolio_items_portfolio_six_read_more_link')) : ?>

            <?php $portfolio_items_portfolio_six_read_more_url = get_field('portfolio_items_portfolio_six_read_more_url'); ?>
            <?php if(!empty('$portfolio_items_portfolio_six_read_more_url')) : ?>

            <?php $portfolio_items_portfolio_six_class = get_field('portfolio_items_portfolio_six_class'); ?>
            <?php if(!empty('$portfolio_items_portfolio_six_class')) : ?>



            <div class="col-lg-4 col-md-6 <?php echo $portfolio_items_portfolio_six_class; ?> grid-item">
                <figure class="product-item">
                    <img src="<?php echo $portfolio_items_portfolio_six_image['url']; ?>"
                        alt="<?php echo $portfolio_items_portfolio_six_image['alt']; ?>" class="img-fluid">
                    <figcaption class="fig-caption">
                        <i class="<?php echo $portfolio_items_portfolio_six_icon; ?>"></i>
                        <h5 class="title mt-1"><?php echo $portfolio_items_portfolio_six_title; ?></h5>
                        <span class="sub-title"><a href="<?php echo $portfolio_items_portfolio_six_read_more_url; ?>"
                                target="_blank"><?php echo $portfolio_items_portfolio_six_read_more_link; ?></a></span>
                    </figcaption>
                </figure>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>

            <?php $portfolio_items_portfolio_seven_image = get_field('portfolio_items_portfolio_seven_image'); ?>
            <?php if(!empty('$portfolio_items_portfolio_seven_image')) : ?>

            <?php $portfolio_items_portfolio_seven_icon = get_field('portfolio_items_portfolio_seven_icon'); ?>
            <?php if(!empty('$portfolio_items_portfolio_seven_icon')) : ?>

            <?php $portfolio_items_portfolio_seven_title = get_field('portfolio_items_portfolio_seven_title'); ?>
            <?php if(!empty('$portfolio_items_portfolio_seven_title')) : ?>

            <?php $portfolio_items_portfolio_seven_read_more_link = get_field('portfolio_items_portfolio_seven_read_more_link'); ?>
            <?php if(!empty('$portfolio_items_portfolio_seven_read_more_link')) : ?>

            <?php $portfolio_items_portfolio_seven_read_more_url = get_field('portfolio_items_portfolio_seven_read_more_url'); ?>
            <?php if(!empty('$portfolio_items_portfolio_seven_read_more_url')) : ?>

            <?php $portfolio_items_portfolio_seven_class = get_field('portfolio_items_portfolio_seven_class'); ?>
            <?php if(!empty('$portfolio_items_portfolio_seven_class')) : ?>



            <div class="col-lg-4 col-md-6 <?php echo $portfolio_items_portfolio_seven_class; ?> grid-item">
                <figure class="product-item">
                    <img src="<?php echo $portfolio_items_portfolio_seven_image['url']; ?>"
                        alt="<?php echo $portfolio_items_portfolio_seven_image['alt']; ?>" class="img-fluid">
                    <figcaption class="fig-caption">
                        <i class="<?php echo $portfolio_items_portfolio_seven_icon; ?>"></i>
                        <h5 class="title mt-1"><?php echo $portfolio_items_portfolio_seven_title; ?></h5>
                        <span class="sub-title"><a href="<?php echo $portfolio_items_portfolio_seven_read_more_url; ?>"
                                target="_blank"><?php echo $portfolio_items_portfolio_seven_read_more_link; ?></a></span>
                    </figcaption>
                </figure>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End Portfolio Section -->

<!-- Start Testimonials Section -->
<?php $clients_background_image = get_field('clients_background_image'); ?>
<section id="testimonials" class="parallax"
    style="background-image: url(<?php echo $clients_background_image['url']; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6 p-5">
                <div class="swiper swiper-testimonials">
                    <div class="swiper-wrapper">
                        <?php $testimonials_testimonial_one_text = get_field('testimonials_testimonial_one_text', false, false); ?>
                        <?php if(!empty('$testimonials_testimonial_one_text')): ?>
                        <?php $testimonials_testimonial_one_name = get_field('testimonials_testimonial_one_name'); ?>
                        <?php if(!empty('$testimonials_testimonial_one_name')): ?>
                        <?php $testimonials_testimonial_one_position = get_field('testimonials_testimonial_one_position'); ?>
                        <div class="swiper-slide p-4">
                            <i class="bi bi-chat-square-quote"></i>
                            <p><?php echo $testimonials_testimonial_one_text; ?></p>
                            <div class="client d-flex pt-3">
                                <?php $testimonials_testimonial_one_image = get_field('testimonials_testimonial_one_image');
                            if( !empty( $testimonials_testimonial_one_image ) ): ?>
                                <img src="<?php echo esc_url($testimonials_testimonial_one_image['url']); ?>"
                                    alt="<?php echo esc_attr($testimonials_testimonial_one_image['alt']); ?>" />
                                <?php endif; ?>
                                <div class="rating ps-4 d-flex flex-column justify-content-center">
                                    <p class="m-0"><?php echo $testimonials_testimonial_one_name; ?></p>
                                    <p class="m-0"><?php echo $testimonials_testimonial_one_position; ?></p>
                                    <div class="stars">
                                        <?php $testimonials_testimonial_one_stars = get_field('testimonials_testimonial_one_stars', false, false); ?>
                                        <?php if($testimonials_testimonial_one_stars == 'one') : ?>
                                        <span><i class="bi bi-star-fill"></i></span>
                                        <?php elseif ($testimonials_testimonial_one_stars == 'two') : ?>
                                        <?php echo str_repeat('<span><i class="bi bi-star-fill"></i></span>', 2); ?>
                                        <?php elseif ($testimonials_testimonial_one_stars == 'three') : ?>
                                        <?php echo str_repeat('<span><i class="bi bi-star-fill"></i></span>', 3); ?>
                                        <?php elseif ($testimonials_testimonial_one_stars == 'four') : ?>
                                        <?php echo str_repeat('<span><i class="bi bi-star-fill"></i></span>', 4); ?>
                                        <?php elseif ($testimonials_testimonial_one_stars == 'five') : ?>
                                        <?php echo str_repeat('<span><i class="bi bi-star-fill"></i></span>', 5); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>

                        <?php $testimonials_testimonial_twoo_text = get_field('testimonials_testimonial_twoo_text', false, false); ?>
                        <?php if(!empty('$testimonials_testimonial_twoo_text')): ?>
                        <?php $testimonials_testimonial_twoo_name = get_field('testimonials_testimonial_twoo_name'); ?>
                        <?php if(!empty('$testimonials_testimonial_twoo_name')): ?>
                        <?php $testimonials_testimonial_twoo_position = get_field('testimonials_testimonial_twoo_position'); ?>
                        <div class="swiper-slide p-4">
                            <i class="bi bi-chat-square-quote"></i>
                            <p><?php echo $testimonials_testimonial_twoo_text; ?></p>
                            <div class="client d-flex pt-3">
                                <?php $testimonials_testimonial_twoo_image = get_field('testimonials_testimonial_twoo_image');
                            if( !empty( $testimonials_testimonial_twoo_image ) ): ?>
                                <img src="<?php echo esc_url($testimonials_testimonial_twoo_image['url']); ?>"
                                    alt="<?php echo esc_attr($testimonials_testimonial_twoo_image['alt']); ?>" />
                                <?php endif; ?>
                                <div class="rating ps-4 d-flex flex-column justify-content-center">
                                    <p class="m-0"><?php echo $testimonials_testimonial_twoo_name; ?></p>
                                    <p class="m-0"><?php echo $testimonials_testimonial_twoo_position; ?></p>
                                    <div class="stars">
                                        <?php $testimonials_testimonial_twoo_stars = get_field('testimonials_testimonial_twoo_stars', false, false); ?>
                                        <?php if($testimonials_testimonial_twoo_stars == 'one') : ?>
                                        <span><i class="bi bi-star-fill"></i></span>
                                        <?php elseif ($testimonials_testimonial_twoo_stars == 'two') : ?>
                                        <?php echo str_repeat('<span><i class="bi bi-star-fill"></i></span>', 5); ?>
                                        <?php elseif ($testimonials_testimonial_twoo_stars == 'three') : ?>
                                        <?php echo str_repeat('<span><i class="bi bi-star-fill"></i></span>', 3); ?>
                                        <?php elseif ($testimonials_testimonial_twoo_stars == 'four') : ?>
                                        <?php echo str_repeat('<span><i class="bi bi-star-fill"></i></span>', 4); ?>
                                        <?php elseif ($testimonials_testimonial_twoo_stars == 'five') : ?>
                                        <?php echo str_repeat('<span><i class="bi bi-star-fill"></i></span>', 5); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>

                        <?php $testimonials_testimonial_threee_text = get_field('testimonials_testimonial_threee_text', false, false); ?>
                        <?php if(!empty('$testimonials_testimonial_threee_text')): ?>
                        <?php $testimonials_testimonial_threee_name = get_field('testimonials_testimonial_threee_name'); ?>
                        <?php if(!empty('$testimonials_testimonial_threee_name')): ?>
                        <?php $testimonials_testimonial_threee_position = get_field('testimonials_testimonial_threee_position'); ?>
                        <div class="swiper-slide p-4">
                            <i class="bi bi-chat-square-quote"></i>
                            <p><?php echo $testimonials_testimonial_threee_text; ?></p>
                            <div class="client d-flex pt-3">
                                <?php 
                            $testimonials_testimonial_threee_image = get_field('testimonials_testimonial_threee_image');
                            if( !empty( $testimonials_testimonial_threee_image ) ): ?>
                                <img src="<?php echo esc_url($testimonials_testimonial_threee_image['url']); ?>"
                                    alt="<?php echo esc_attr($testimonials_testimonial_threee_image['alt']); ?>" />
                                <?php endif; ?>
                                <div class="rating ps-4 d-flex flex-column justify-content-center">
                                    <p class="m-0"><?php echo $testimonials_testimonial_threee_name; ?></p>
                                    <p class="m-0"><?php echo $testimonials_testimonial_threee_position; ?></p>
                                    <div class="stars">
                                        <?php $testimonials_testimonial_threee_stars = get_field('testimonials_testimonial_threee_stars', false, false); ?>
                                        <?php if($testimonials_testimonial_threee_stars == 'one') : ?>
                                        <span><i class="bi bi-star-fill"></i></span>
                                        <?php elseif ($testimonials_testimonial_threee_stars == 'two') : ?>
                                        <?php echo str_repeat('<span><i class="bi bi-star-fill"></i></span>', 2); ?>
                                        <?php elseif ($testimonials_testimonial_threee_stars == 'three') : ?>
                                        <?php echo str_repeat('<span><i class="bi bi-star-fill"></i></span>', 3); ?>
                                        <?php elseif ($testimonials_testimonial_threee_stars == 'four') : ?>
                                        <?php echo str_repeat('<span><i class="bi bi-star-fill"></i></span>', 4); ?>
                                        <?php elseif ($testimonials_testimonial_threee_stars == 'five') : ?>
                                        <?= str_repeat('<span><i class="bi bi-star-fill"></i></span>', 5) ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials Section -->
<!-- Start CTA Section -->
<?php $contact_background_color = get_field('contact_background_color'); ?>
<?php $contact_button_text = get_field('contact_button_text'); ?>
<?php $contact_button_url = get_field('contact_button_url'); ?>
<?php $contact_paragraph = get_field('contact_paragraph'); ?>
<?php if(!empty('$contact_paragraph')) : ?>
<section class="cta py-5" style="background-color: <?php echo $contact_background_color; ?>;">
    <div class="container d-flex justify-content-between align-items-center">
        <p><?php echo $contact_paragraph; ?></p>
        <a href="<?php echo $contact_button_url; ?>"
            class="btn-primary text-nowrap"><?php echo $contact_button_text; ?></a>
    </div>
</section>
<?php endif; ?>
<!-- End CTA Section -->

<!-- Start Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row text-center py-5">
            <p class="heading-top">For Support Contact Us</p>
            <h2>Let's Get In Touch</h2>
        </div>
        <!-- Form -->
        <?php $contact_contact_form = get_field('contact_contact_form'); ?>
        <div class="contact-form">
            <?php echo do_shortcode(get_field('contact_contact_form')); ?>

        </div>
    </div>
</section>
<!-- End Contact Section -->

<?php get_footer(); ?>

