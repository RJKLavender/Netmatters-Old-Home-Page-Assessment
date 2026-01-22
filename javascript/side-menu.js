//javascript for sidebar menu function with the hamburger
const sidebar = document.querySelector('.sidebar');
const menu = document.getElementById('hamburger');
const menu2 = document.getElementById('hamburger2');
const website = document.querySelector('.website');
const hamburger = document.querySelector('.hamburger-inner');
const hamburger2 = document.getElementById('hamburger-inner2');
const stickyheader2 = document.querySelector('.sticky-header');

//menu active is used to determine wether the menu is active or not
let menuActive = false;

//when sticky header is shown if it recives a click it runs the code below like the code for the website click
stickyheader2.addEventListener('click', (event) => { 
        if (!menuActive) { // Check if Menu is not active
        // Check if target of the user's click is the hamburger menu  of the sticky header or if event target is a child of hamberger menu from the sticky header as sometimes the click function wouldint register because of the spans
        if (event.target == menu2 || menu2.contains(event.target)) { 
            //opens side bar and applies styling for the website and sticky header
            
            website.classList.add('menu-is-active');
            stickyheader.classList.add('stickyhead-menu-is-active');
            hamburger2.classList.add('close-menu'); //alters the styling of the hamburger buttons
            hamburger.classList.add('close-menu');
            menuActive = true;
        }
        //if the hamburger wasnt the target of the user's click run code below to close the menu and remove the styling for the stick head and website
    } else {
        
        website.classList.remove('menu-is-active');
        stickyheader.classList.remove('stickyhead-menu-is-active');
        hamburger2.classList.remove('close-menu');
        hamburger.classList.remove('close-menu');
        menuActive = false;
    }
});

//when the website recives a click it runs the code below the reason this is done as on the demo anywhere on the website is clicked it closes the menu
website.addEventListener('click', (event) => { 
    if (!menuActive) { // Check if Menu is not active
        // Check if target of the user's click is the hamburger menu or if event target is a child of hamberger menu as sometimes the click function wouldint register because of the spans
        if (event.target == menu || menu.contains(event.target)) { 
            //opens side bar and applies styling for the website and sticky header
            
            website.classList.add('menu-is-active');
            stickyheader.classList.add('stickyhead-menu-is-active');
            hamburger.classList.add('close-menu'); //alters the styling of the hamburger buttons
            hamburger2.classList.add('close-menu');
            menuActive = true;
        }
        //if the hamburger wasnt the target of the user's click run code below to close the menu and remove the styling for the stick head and website
    } else {
        
        website.classList.remove('menu-is-active');
        stickyheader.classList.remove('stickyhead-menu-is-active');
        hamburger.classList.remove('close-menu');
        hamburger2.classList.remove('close-menu');
        menuActive = false;
    }
});
