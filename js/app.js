let count = 1;
document.getElementById("radio01").checked = true;

setInterval(function () {
    nextImage();
}, 3000);

function nextImage() {
    count++;
    if (count > 4) {
        count = 1;
    }

    document.getElementById("radio0" + count).checked = true;
}

const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector(".nav");

hamburger.addEventListener("click", () => nav.classList.toggle("active"));
