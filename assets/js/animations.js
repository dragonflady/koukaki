document.addEventListener('DOMContentLoaded', function() {

    // Ajout de la classe visible pour les sections lors du chargement de la page
    document.querySelectorAll('.fade-in').forEach(element => {
        element.classList.add('visible');
    });

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
    if (typeof skrollr !== 'undefined') {
        var s = skrollr.init();
    }
});
