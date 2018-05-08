(function () {
  const NavSection = document.querySelectorAll(".navigation--container--items");
  const Button = {
    left: document.querySelector(".navigation--container--items--left"),
    right: document.querySelector(".navigation--container--items--right"),
  }

  Button.left.addEventListener("click", leftMenu);
  Button.right.addEventListener("click", rightMenu);

  function leftMenu() {
    NavSection[0].style.display = "flex";
    NavSection[1].style.display = "none";
  }

  function rightMenu() {
    NavSection[0].style.display = "none";
    NavSection[1].style.display = "flex";
  }
})();