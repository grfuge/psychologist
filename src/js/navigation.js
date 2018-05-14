(function () {
  /**
   * Mobile Navigation Buttons
   */
  const NavSection = document.querySelectorAll(".navigation--container--items");
  const Button = {
    left: document.querySelector(".navigation--container--items--left"),
    right: document.querySelector(".navigation--container--items--right"),
  }

  Button.left.addEventListener("click", leftMenu);
  Button.right.addEventListener("click", rightMenu);

  function leftMenu() {
    NavSection[0].classList.remove("d-none");
    NavSection[1].classList.remove("d-flex");
    NavSection[0].classList.add("d-flex");
    NavSection[1].classList.add("d-none");
  }

  function rightMenu() {
    NavSection[0].classList.remove("d-flex");
    NavSection[1].classList.remove("d-none");
    NavSection[0].classList.add("d-none");
    NavSection[1].classList.add("d-flex");
  }

  /**
   * Active Navigation Items
   */
  const pages = [
    document.querySelector(".page-home"),
    document.querySelector(".page-about"),
    document.querySelector(".page-services"),
    document.querySelector(".page-articles"),
    document.querySelector(".page-contact"),
    document.querySelector(".page-testimonials"),
    document.querySelector(".page-questionnaires")
  ];
  const link = document.getElementsByClassName("link-mobile");
  const linkDesktop = document.getElementsByClassName("link-desktop");

  pages.forEach(function (page, i) {
    if (page !== null) {
      link[i].classList.add("active");
      linkDesktop[i].classList.add("active");
      if (window.innerWidth < 568 && i >= 4) {
        rightMenu();
      }
    }
  });
})();