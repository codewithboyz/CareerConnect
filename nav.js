const dropdownLinks = document.querySelectorAll(".dropdown");

dropdownLinks.forEach(drop => {

drop.addEventListener("mouseenter", () => {
    drop.querySelector(".custom-dropdown").style.display = "block";
});

drop.addEventListener("mouseleave", () => {
    drop.querySelector(".custom-dropdown").style.display = "none";
});

});