document.addEventListener('DOMContentLoaded', function() {
    const trigger = document.querySelector('.out-of-hours h4 a');
    const details = document.querySelector('.OOH-Details');

    if (trigger && details) {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            details.classList.toggle('active');
        });
    } else {
        console.error("Could not find the trigger or details container in the HTML.");
    }
});