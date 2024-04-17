// Mobile Navigation Menu Toggle
const menuToggle = document.getElementById("hamburger");
const mobileNav = document.querySelector(".mobile-nav");

menuToggle.addEventListener("click", () => {
  mobileNav.classList.toggle("active");
  console.log("clicked");
});

// Monitor sections for fade in animations
const itemsToAppear = document.querySelectorAll(".appear");
const makeActive = function (entries) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("inview");
    } else {
      entry.target.classList.remove("inview");
    }
  });
};
const observer = new IntersectionObserver(makeActive);
for (let i = 0; i < itemsToAppear.length; i++) {
  observer.observe(itemsToAppear[i]);
}
