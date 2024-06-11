document.addEventListener('DOMContentLoaded', function() {
    // IntersectionObserver pour les animations de titres
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    });

    document.querySelectorAll('.reveal').forEach(title => {
        observer.observe(title);
    });

    // Initialisation de skrollr
    skrollr.init();

});
