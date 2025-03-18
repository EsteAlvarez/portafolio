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

const copyText = document.getElementById("contact_mail").innerHTML;
const copyButton = document.getElementById("copy_button");
const copyMessage = document.getElementById("copy_message");

copyButton.addEventListener("click", async () => {
  try {
    await navigator.clipboard.writeText(copyText);
    copyMessage.innerText = "Email copiado correctamente.";
    setTimeout(() => {
      copyMessage.innerText = "";
    }, 2500);

    //console.log("Contenido copiado al portapapeles");
  } catch (err) {
    console.error("Error al copiar: ", err);
  }
});
