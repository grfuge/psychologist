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
  const pages = ["/", "/about", "/services", "/articles", "/contact", "/testimonials", "/questionnaires"];
  const page = window.location.pathname;
  const link = document.getElementsByClassName("link-mobile");
  const linkDesktop = document.getElementsByClassName("link-desktop");

  for (i = 0; i < pages.length; i++) {
    if (page.includes(pages[i])) {
      link[i].classList.add("active");
      linkDesktop[i].classList.add("active");
    }
  }
})();