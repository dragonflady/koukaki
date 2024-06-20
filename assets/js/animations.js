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
                //observer.unobserve(entry.target);
                return;
            }
            entry.target.classList.remove('active');
        });

    });
    const titles = document.querySelectorAll('.reveal');
    titles.forEach((element) => observer.observe(element));

    // Initialisation de skrollr
    if (typeof skrollr !== 'undefined') {
        var s = skrollr.init();
    }
});

