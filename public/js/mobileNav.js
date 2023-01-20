let toggleMenuButton = document.getElementById('toggleMobileHeader');
let menuCounter = true;

toggleMenuButton.addEventListener('click', function() {
    if (menuCounter) {
        document.querySelector('.header-mobile').style.right = "0";
    } else {
        document.querySelector('.header-mobile').style.right = "-150%";
    }
    menuCounter = !menuCounter;
});
