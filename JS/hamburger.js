
  const hamburger = document.querySelector(".hamburger");
  const nav = document.querySelector("nav");
  const subnav = document.querySelector(".subnav");
  const subnavToggle = document.querySelector(".subnav-toggle");

  hamburger.addEventListener("click", () => {
    nav.classList.toggle("active");
    hamburger.classList.toggle("active");
    subnav.classList.remove("open");
  });


