function btnExpandir(e) {
    var navBar = document.querySelector(".hero-section");
    navBar.hidden = e.getAttribute("aria-expanded") === "true"; 
}