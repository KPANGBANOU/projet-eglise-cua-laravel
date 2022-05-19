var loader = document.querySelector(".loader");

var header = document.querySelector(".header");

window.addEventListener("load", function(event) {
    loader.classList.add("fond");
    header.style.display = "block";
    this.document.body.classList.add("change-body-background-image");
});