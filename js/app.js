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

document.addEventListener('DOMContentLoaded', () => {
    const target = document.querySelector('.parent-div');
  
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          target.classList.add('visible');
        }
      });
    }, {
      threshold: 0.2 // Trigger when 20% is visible
    });
  
    observer.observe(target);
  });
  