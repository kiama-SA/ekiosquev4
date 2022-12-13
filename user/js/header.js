const menuItems = document.querySelectorAll(".menu-item");
menuItems.forEach((menu) => {
  console.log(menu);
  if (menu.classList.contains("active")) {
    menu.firstElementChild.firstElementChild.setAttribute(
      "style",
      "color:black"
    );
  }
  menu.addEventListener("mouseover", function (e) {
    menu.firstElementChild.firstElementChild.setAttribute(
      "style",
      "color:black"
    );
  });
  menu.addEventListener("mouseout", function (e) {
    menu.firstElementChild.firstElementChild.setAttribute(
      "style",
      "color:#666666"
    );
  });
});

const menu_btn = document.querySelector("#menu-btn1");
const menu_btn2 = document.querySelector("#menu-btn2");
const sidebar = document.querySelector("#sidebar");
const container = document.querySelector(".my-container");
menu_btn.addEventListener("click", () => {
  sidebar.classList.toggle("active-nav");
  container.classList.toggle("active-cont");
});
menu_btn2.addEventListener("click", () => {
  sidebar.classList.toggle("active-nav");
  container.classList.toggle("active-cont");
});
