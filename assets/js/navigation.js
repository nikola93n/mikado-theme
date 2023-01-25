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

