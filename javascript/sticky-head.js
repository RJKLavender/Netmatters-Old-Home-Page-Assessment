// javascript for sticky header funcionality
const stickyhead = document.querySelector(".sticky-head");
let lastScroll = window.scrollY; //gets the value of scroll postion of the y axis after the page loads

//runs the below code when and while scrolling upwards
window.addEventListener("scroll", () => { 
    const currentScroll = window.scrollY; //gets new value of scroll postion after scrolling amount
    
    //as the demo only had it be sticky while scrolling upwards and not downwards the below if statement sorts this

    if (currentScroll < lastScroll) { //compares the values of the two different scrolls to determine whether or not to make the header sticky
      stickyhead.classList.add("sticky");
    } else {
      stickyhead.classList.remove("sticky");
    }

    //once finished scrolling back upto the top of the page remove sticky
    if (currentScroll == 0) {
      stickyhead.classList.remove("sticky");
    }

    //this allows the sticky to stay as your scrolling 
    lastScroll = currentScroll;
   
});

