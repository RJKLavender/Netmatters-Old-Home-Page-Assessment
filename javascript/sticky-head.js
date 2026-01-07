// javascript for sticky head
const stickyhead = document.querySelector(".sticky-head");
let lastScroll = window.scrollY;

window.addEventListener("scroll", () => { 
    const currentScroll = window.scrollY;
    
    if (currentScroll < lastScroll) { 
      stickyhead.classList.add("sticky");
    } else {
      stickyhead.classList.remove("sticky");
    }

    if (currentScroll == 0) {
      stickyhead.classList.remove("sticky");
    }

    lastScroll = currentScroll;
   
});

