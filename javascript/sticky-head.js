// javascript for sticky head function need more research
const stickyhead = document.querySelector(".sticky-head");
let lastScroll = window.scrollY;

window.addEventListener("scroll", () => { 
    const currentScroll = window.scrollY;
     console.log('scrolled down');
    if (currentScroll < lastScroll) { 
      stickyhead.classList.add("sticky");

    } else {
      stickyhead.classList.remove("sticky");
    }
    
    lastScroll = currentScroll;
});
