function toggle() {
    "use strict";
    
    var x = document.querySelector(".menu_hamburger");

    if (x.className === "menu_hamburger") {
        x.className += " affiche";
    } else {
        x.className = "menu_hamburger";
    }
}