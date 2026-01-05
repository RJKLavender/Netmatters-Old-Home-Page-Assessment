// javascript for sticky head function need more research
const stickyhead = document.querySelector(".sticky-head");
let lastScroll = window.scrollY;

window.addEventListener("scroll", () => { 
    const currentScroll = window.scrollY;
     cont
    if (currentScroll < lastScroll) { 
      stickyhead.classList.add("fixed");
    } else {
      stickyhead.classList.remove("fixed");
    }
    
    lastScroll = currentScroll;
});
