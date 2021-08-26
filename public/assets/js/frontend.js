const navbarOverlay = document.getElementById('navbar-overlay');
const navList = document.querySelectorAll('#desktop-menu > *');

navList.forEach(navItem => {
    navItem.addEventListener('mouseover', () => {
        navbarOverlay.classList.add('active');
        let position = navItem.getBoundingClientRect();
        navbarOverlay.style.left = position.left + 'px';
        navbarOverlay.style.top = position.top + 'px';
        navbarOverlay.style.width = position.width + 'px';
        navbarOverlay.style.height = position.height + 'px';
    });

    navItem.addEventListener('mouseout', () => {
        navbarOverlay.classList.remove('active');
    });
});