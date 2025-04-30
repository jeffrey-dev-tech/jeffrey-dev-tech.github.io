let lastScrollTop = 0;
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', function () {
  const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
  
  if (currentScroll > lastScrollTop) {
    // Scrolling down
    navbar.style.top = "-288px"; // Hide navbar by 90px
  } else {
    // Scrolling up
    navbar.style.top = "0"; // Reset navbar position
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
});
