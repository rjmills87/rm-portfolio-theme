// Mobile Navigation Menu Toggle
const menuToggle = document.getElementById("hamburger");
const mobileNav = document.querySelector(".mobile-nav");

menuToggle.addEventListener("click", () => {
  mobileNav.classList.toggle("active");
  console.log("clicked");
});
