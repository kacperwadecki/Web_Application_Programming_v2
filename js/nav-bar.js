const hamburger = document.querySelector(".hamburger");
const navBar = document.querySelector(".nav-bar");
const nav = document.querySelector(".nav");

hamburger.addEventListener("click", () => {
    navBar.classList.toggle("nav-bar-active");
    nav.classList.toggle("nav-active");
})