(function () {
  const Button = document.querySelector(".sidebar--toggle");
  const ButtonImg = document.querySelector(".sidebar--toggle--img");
  const Sidebar = document.querySelector(".sidebar--container");
  let sidebarDisplay;

  Button.addEventListener("click", toggleSidebar);

  function toggleSidebar() {
    sidebarDisplay = window.getComputedStyle(Sidebar).getPropertyValue("display");

    if (sidebarDisplay === "none") {
      Sidebar.style.display = "block";
      ButtonImg.style.transform = "rotate(180deg)";
    } else {
      Sidebar.style.display = "none";
      ButtonImg.style.transform = "rotate(0deg)";
    }
  }
})();