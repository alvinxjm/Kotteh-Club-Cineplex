var scrollToTopBtn = document.getElementById("scrollToTopBtn");

var rootElement = document.documentElement;

function scrollToTop() {
    // scroll to top logic
    rootElement.scrollTo({
        top: 0,
        behavior: "smooth"
      })
  };
  
  scrollToTopBtn.addEventListener("click", scrollToTop);