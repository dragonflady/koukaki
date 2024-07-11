document.addEventListener('DOMContentLoaded', function() {
    const menuBurger = document.getElementById("menu_burger");
    const openBtn = document.getElementById("openBtn");
    const closeBtn = document.getElementById("closeBtn");
    const siteTitle = document.querySelector('.site-title');

    openBtn.onclick = openMenu;
    closeBtn.onclick = closeMenu;

    function openMenu() {
        menuBurger.classList.add("active");
        siteTitle.classList.add("site-title-mask");
    }

    function closeMenu() {
        menuBurger.classList.remove("active");
        siteTitle.classList.remove("site-title-mask");
    }

    document.querySelectorAll(".lien_burger").forEach(n => n.addEventListener("click", () => {
        menuBurger.classList.remove("active");
        siteTitle.classList.remove("site-title-mask");
    }));
});
