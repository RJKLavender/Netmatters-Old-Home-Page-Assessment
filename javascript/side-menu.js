//javascript for sidebar menu function with the hamburger
const sidebar = document.querySelector('.sidebar');
const menu = document.getElementById('hamburger');
const website = document.querySelector('.website');
const hamburger = document.querySelector('.hamburger-inner');
const stickyheader = document.querySelector('.sticky-head');

//menu active is used to determine wether the menu is active or not
let menuActive = false;

//when the website recives a click it runs the code below the reason this is done as on the demo anywhere on the website is clicked it closes the menu
website.addEventListener('click', (event) => { 
    if (!menuActive) { // Check if Menu is not active
        // Check if target of the user's click is the hamburger menu or if event target is a child of hamberger menu as sometimes the click function wouldint register because of the spans
        if (event.target == menu || menu.contains(event.target)) { 
            //opens side bar and applies styling for the website and sticky header
            sidebar.style.display = "block";
            website.classList.add('menu-is-active');
            stickyheader.classList.add('stickyhead-menu-is-active');
            hamburger.classList.add('close-menu'); //alters the styling of the hamburger button
            menuActive = true;
        }
        //if the hamburger wasnt the target of the uer's click run code below to close the menu and remove the styling for the stick head and website
    } else {
        sidebar.style.display = "none";
        website.classList.remove('menu-is-active');
        stickyheader.classList.remove('stickyhead-menu-is-active');
        hamburger.classList.remove('close-menu');
        menuActive = false;
    }
});
