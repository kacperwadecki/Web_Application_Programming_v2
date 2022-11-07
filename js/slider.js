const leftArrow = document.querySelector(".fa-circle-arrow-left");
const rightArrow = document.querySelector(".fa-circle-arrow-right");
const imgs = document.querySelectorAll('img');

var indexValue = 2;

showImg();

function showImg() {
    if(indexValue > 4) indexValue = 1;
    else if(indexValue < 1) indexValue = 4;

    for(var i = 0; i < 4; i++){
        imgs[i].style.display = 'none';
    }

    imgs[indexValue - 1].style.display = 'block';
}

leftArrow.addEventListener('click', () => {
    indexValue--;
    showImg();
})

rightArrow.addEventListener('click', () => {
    indexValue++;
    showImg();
})