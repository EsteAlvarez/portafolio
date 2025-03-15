// Preloader
window.addEventListener("load", () => {
  const bodyContent = document.getElementById("body_page");
  const preloader = document.getElementById("preload");

  if (bodyContent) bodyContent.classList.remove("overflow-preload");
  if (preloader) preloader.style.display = "none";
});

var typed = new Typed("#typed_element", {
  stringsElement: "#typed-strings",
  typeSpeed: 25,
  backSpeed: 25,
  startDelay: 2000,
  backDelay: 1000,
  showCursor: true,
  cursorChar: "|",
});
