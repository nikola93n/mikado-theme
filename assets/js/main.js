// Animation for hamburger menu
const hamburger = document.querySelector('.hamburger');
hamburger.addEventListener('click', function () {
    this.classList.toggle('is-active');
});

// Animation for navigation on tablet and mobile
document.querySelector(".hamburger")
    .addEventListener("click", () =>
        document.querySelector(".main-menu").classList.toggle("show")
    );

//Back to top
jQuery(document).ready(function () {
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 1240) {
            jQuery("#scrollToTop").fadeIn();
        } else {
            jQuery("#scrollToTop").fadeOut();
        }
    });
    jQuery("#scrollToTop").click(function () {
        jQuery("html, body").animate({ scrollTop: 0 }, 800);
    });
});

// Scrollbar animation
const element = document.querySelector('.services-skill');
const observer = new IntersectionObserver(entries => {
    if (entries[0].isIntersecting) {
        setTimeout(() => {
            document.querySelectorAll('.progress-bar').forEach((element) => {
                element.style.width = element.getAttribute('data-percent') + '%';
                element.classList.add('animation');
            });
        }, 500);
    }
});
observer.observe(element);

//Isotope control
// init Isotope
var $grid = jQuery('#portfolio-list').isotope({
    // options
    filter: '*',
    resizable: false,
});
$grid.imagesLoaded().progress(function () {
    $grid.isotope('layout');
});
// filter items on button click
jQuery('.filter-button-group').on('click', 'button', function () {
    var filterValue = jQuery(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
});







