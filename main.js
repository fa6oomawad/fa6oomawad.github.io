const menuBtn = document.querySelector(".multiLines");
const menu = document.querySelector(".side-menu");

let menuToggle = 0;

menuBtn.addEventListener("click", toggleMenu);

function toggleMenu() {
  if (menuToggle == 0) {
    menuBtn.classList.add("cross");

    menu.classList.remove("hide");
    menu.classList.add("show");

    menuToggle = 1;
  } else {
    menuBtn.classList.remove("cross");

    menu.classList.remove("show");
    menu.classList.add("hide");

    menuToggle = 0;
  }
}
