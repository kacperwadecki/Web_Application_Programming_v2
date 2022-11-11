var colorPicker = document.querySelector(".color-picker");

colorPicker.addEventListener("input", () => {
    document.body.style.background = "none";
    document.body.style.backgroundColor = colorPicker.value;
})

const switchColor = (color) => {
    document.body.style.background = "none";
    document.body.style.backgroundColor = color;
    colorPicker.value = color;
    if(color=="123"){
        document.body.style.background = "linear-gradient(var(--gradient-color), var(--gradient-color)), url('../img/index-01.jpg')"; 
    }
}