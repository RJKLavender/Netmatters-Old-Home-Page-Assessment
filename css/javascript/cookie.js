//javascript for cookie consent functionality
const cookieApp = document.getElementById('cookiesConsent');
const cookieConsent = document.querySelector('.cookies-button-accept');
const overflow = document.querySelector('body');

//this is used to determine where the details of cookies is being stored
let cookies = localStorage.getItem('cookiesConsent');

//this function updates the local store and removes the popup prompt
function setcookies() {
    localStorage.setItem('cookiesConsent', 'accepted');
    cookieApp.classList.add('hidden');
    overflow.style.overflow = '';
    return cookies;
}

//waits for page to load before running the below code
document.addEventListener('DOMContentLoaded', () => {

    //checks if there is not a value in the local storage
if (!localStorage.getItem("cookiesConsent")) {

    //puts the prompt back if it somehow dispeaered
    if (cookieApp.classList.contains('hidden')) {
    cookieApp.classList.remove('hidden');
    }
overflow.style.overflow = 'hidden';
    //once accept is clicked it runs the setcookies function
    cookieConsent.addEventListener('click', () => {
        setcookies();
    });
    
    //if there is a value in local storage run below code
} else {
    cookieApp.classList.add('hidden');
    overflow.style.overflow = '';
    return cookies;
}

});