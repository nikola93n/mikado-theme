<!-- Start Footer Section -->
<footer style="background-color: var(--secondary-color);">
    <div class="container mt-5">
        <div class="row py-5 d-flex align-items-center">
            <div class="d-flex justify-content-center">
                <ul class="d-flex">
                    <li><a href="<?php echo get_theme_mod('set_social_one_url'); ?>" target="_blank"><i
                                class="<?php echo get_theme_mod('set_social_one'); ?>"></i></a>
                    </li>
                    <li><a href="<?php echo get_theme_mod('set_social_two_url'); ?>" target="_blank"><i
                                class="<?php echo get_theme_mod('set_social_two'); ?>"></i></a>
                    </li>
                    <li><a href="<?php echo get_theme_mod('set_social_three_url'); ?>" target="_blank"><i
                                class="<?php echo get_theme_mod('set_social_three'); ?>"></i></a>
                    </li>
                    <li><a href="<?php echo get_theme_mod('set_social_four_url'); ?>" target="_blank"><i
                                class="<?php echo get_theme_mod('set_social_four'); ?>"></i></a>
                    </li>
                    <?php $set_social_five_url = get_theme_mod('set_social_five_url');?>
                    <?php if(!empty($set_social_five_url)): ?>
                    <?php $set_social_five = get_theme_mod('set_social_five');?>
                    <?php if(!empty($set_social_five)): ?>
                    <li><a href="<?php echo $set_social_five_url; ?>" target="_blank"><i
                                class="<?php echo $set_social_five; ?>"></i></a>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php $set_social_six_url = get_theme_mod('set_social_six_url');?>
                    <?php if(!empty($set_social_six_url)): ?>
                    <?php $set_social_six = get_theme_mod('set_social_six');?>
                    <?php if(!empty($set_social_six)): ?>
                    <li><a href="<?php echo $set_social_six_url; ?>" target="_blank"><i
                                class="<?php echo $set_social_six; ?>"></i></a>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="d-flex justify-content-center ">
                <p class="made mt-3 mt-0 text-center">© <?php echo date('Y'); ?>
                    <?php echo get_theme_mod('set_footer'); ?> | Powered By <a href="https://nnweb.net"
                        target="_blank">M!kado Theme</a></p>                        
            </div>
        </div>
    </div>
</footer>
<!-- Scroll to Top -->
<button id="scrollToTop"><a href="#home"><i class="bi bi-arrow-up"></i></a></button>
<!-- End Footer Section -->






<?php wp_footer(); ?>
</body>

</html>