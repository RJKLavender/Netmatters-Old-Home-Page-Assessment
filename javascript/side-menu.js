const sidebar = document.querySelector('.sidebar');
const menu = document.getElementById('hamburger');
const website = document.querySelector('.website');
const hamburger = document.querySelector('.hamburger-inner');
const stickyheader = document.querySelector('.sticky-head');
//const classCheck = website.classList.contains('menu-is-active');

let menuActive = false;

website.addEventListener('click', (event) => { // declare event listner for website not including sidebar
    if (!menuActive) { // Check if Menu is not active
        if (event.target == menu || menu.contains(event.target)) { // Check if click target is the hamburger menu or if event target is a child of hamberger menu
            sidebar.style.display = "block";
            website.classList.add('menu-is-active');
            stickyheader.classList.add('stickyhead-menu-is-active');
            hamburger.classList.add('close-menu');
            menuActive = true;
        }
    } else {
        sidebar.style.display = "none";
        website.classList.remove('menu-is-active');
        stickyheader.classList.remove('stickyhead-menu-is-active');
        hamburger.classList.remove('close-menu');
        menuActive = false;
    }
});
