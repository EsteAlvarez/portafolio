// Manejo de preload
const bodyContent = document.getElementById("body_page");
const preloader = document.getElementById("preload");

window.addEventListener("load", () => {
  if (bodyContent && preloader) {
    setTimeout(() => {
      bodyContent.classList.remove("overflow-preload");
      preloader.classList.add("fade-out-preloader");
    }, 500);
  }
});

// Copiar email
const copyTextElement = document.getElementById("contact_mail");
const copyButton = document.getElementById("copy_button");
const copyMessage = document.getElementById("copy_message");

if (copyTextElement && copyButton && copyMessage) {
  const copyText = copyTextElement.innerText; // Usar innerText para evitar etiquetas HTML si las hay

  copyButton.addEventListener("click", async () => {
    try {
      await navigator.clipboard.writeText(copyText);
      copyMessage.innerText = "Email copiado correctamente.";
      setTimeout(() => {
        copyMessage.innerText = "";
      }, 2500);
    } catch (err) {
      console.error("Error al copiar: ", err);
    }
  });
}

const swiper = new Swiper(".projects-swiper", {
  loop: true,
  spaceBetween: 30,
  preventInteractionOnTransition: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const swiperEl = document.querySelector(".projects-swiper");

swiperEl.addEventListener("mouseenter", () => {
  swiper.autoplay.stop();
});

swiperEl.addEventListener("mouseleave", () => {
  swiper.autoplay.start();
});
