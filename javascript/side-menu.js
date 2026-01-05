const sidebar = document.querySelector('.sidebar');
const menu = document.getElementById('hamburger');
const website = document.querySelector('.website');
const hamburger = document.querySelector('.hamburger-inner');

menu.addEventListener('click', () => {
    const classCheck = website.classList.contains('menu-is-active');

    if(classCheck != true) {
        sidebar.style.display = "block";
        website.classList.add('menu-is-active');
        hamburger.classList.add('close-menu');
    }

    website.addEventListener('click', () => {
    const classCheck = website.classList.contains('menu-is-active');

    if(classCheck == true) {
        sidebar.style.display = "none";
        website.classList.remove('menu-is-active');
        hamburger.classList.remove('close-menu');
    }
    });
});

