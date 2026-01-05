//javascript for cookie consent functionality
const cookieApp = document.getElementById('cookiesConsent');
const cookieConsent = document.querySelector('.cookies-button-accept');

let cookies = localStorage.getItem('cookiesConsent');

function setcookies() {
    localStorage.setItem('cookiesConsent', 'accepted');
    cookieApp.classList.add('hidden');
    return cookies;
}

document.addEventListener('DOMContentLoaded', () => {

if (!localStorage.getItem("cookiesConsent")) {

    if (cookieApp.classList.contains('hidden')) {
    cookieApp.classList.remove('hidden');
    }
    
    cookieConsent.addEventListener('click', () => {
        setcookies();
    });
} else {
    return cookies;
}

});