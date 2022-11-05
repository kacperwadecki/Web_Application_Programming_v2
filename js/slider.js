const leftArrow = document.querySelector(".fa-circle-arrow-left");
const rightArrow = document.querySelector(".fa-circle-arrow-right");
const img = document.getElementById("slider-img");

let counter = 1;

rightArrow.addEventListener('click', () => {
    counter++;
    img.src = "../img/shop-0" + counter + ".jpg";
});

leftArrow.addEventListener('click', () => {
    counter--;
    img.src = "../img/shop-0" + counter + ".jpg";
});