const sidebar = document.querySelector('.sidebar');
const menu = document.getElementById('hamburger');
const website = document.querySelector('.website');
const hamburger = document.querySelector('.hamburger-inner');
//const classCheck = website.classList.contains('menu-is-active');

let sidebarActive = false;

// menu.addEventListener('click', () => {
//    // const classCheck = website.classList.contains('menu-is-active');
//    console.log('menu clicked');
//     if(!sidebarActive) {
//         console.log('menu has appeared');
//         sidebar.style.display = "block";
//         website.classList.add('menu-is-active');
//         hamburger.classList.add('close-menu');
//         sidebarActive = true;
//         const menuActive = document.querySelector('.menu-is-active');
//     }
 
// });

// menuActive.addEventListener('click', () => {
//     console.log('website clicked');
//     if(sidebarActive) {
//         console.log('menu has been closed');
//         sidebar.style.display = "none";
//         website.classList.remove('menu-is-active');
//         hamburger.classList.remove('close-menu');
//        sidebarActive = false;
//     }

// }); 
const menuHandler = (e) => {

    if (e.target === menu) {
        sidebar.style.display = "block";
      website.classList.add('menu-is-active');
      hamburger.classList.add('close-menu');
       sidebarActive = true;
    }

}


website.addEventListener('click', menuHandler);