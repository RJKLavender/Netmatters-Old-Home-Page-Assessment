// javascript for sticky header funcionality
const header = document.querySelector(".sticky-head");
const stickyheader = document.querySelector(".sticky-header");
let lastScroll = window.scrollY; //gets the value of scroll postion of the y axis after the page loads

//runs the below code when and while scrolling upwards
window.addEventListener("scroll", () => {
    stickyheader.classList.add('hidden-header');
    stickyheader.classList.remove('is-hidden');
    const currentScroll = window.scrollY; //gets new value of scroll postion after scrolling amount
    
    //as the demo only had it be sticky while scrolling upwards and not downwards the below if statement sorts this
    if (window.scrollY > 0) {
      stickyheader.classList.remove('is-hidden');
    if (currentScroll < lastScroll)  { 
      //compares the values of the two different scrolls to determine whether or not to make the header sticky
     
      stickyheader.classList.remove('hidden-header');
      stickyheader.classList.add('visible-header');
    } else {
     
      stickyheader.classList.remove('visible-header');
      stickyheader.classList.add('hidden-header');
    }
    //once finished scrolling back upto the top of the page remove stickyheader
  } else {
      stickyheader.classList.add('is-hidden');
    }
   
    //this allows the sticky to stay as your scrolling 
    lastScroll = currentScroll;
   
});

