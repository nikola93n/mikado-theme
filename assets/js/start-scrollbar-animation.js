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
observer.observe( element );
