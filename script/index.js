try {
  let prevScrollpos = window.scrollY;

  /* Get the header element and it's position */
  const header = document.querySelector("header");
  const headerBottom = header.offsetTop + header.offsetHeight;

  window.onscroll = function () {
    const currentScrollPos = window.scrollY;

    if (currentScrollPos > 150) {
      /* if scrolling down, let it scroll out of view as normal */
      if (prevScrollpos <= currentScrollPos) {
        header.style.top = "-100%";
      } else {
        header.style.top = "0";
      }
    } else {
      header.style.top = "0";
    }

    prevScrollpos = currentScrollPos;
  };
} catch (error) {}

try {
  const ModalMobileNav = document.querySelector(".modal-mobile-nav");
  const ModalMobileNavClose = document.querySelector(".modal-mobile-nav-close");
  const ModalMobileNavOpen = document.querySelector(".modal-mobile-nav-open");
  const ModalMobileNavOverlay = document.querySelector(
    ".modal-mobile-nav-overlay"
  );

  ModalMobileNavClose.addEventListener("click", () => {
    ModalMobileNav.classList.remove("active");
    ModalMobileNavOverlay.classList.remove("active");
  });

  ModalMobileNavOpen.addEventListener("click", () => {
    ModalMobileNav.classList.add("active");
    ModalMobileNavOverlay.classList.add("active");
  });

  ModalMobileNavOverlay.addEventListener("click", () => {
    ModalMobileNav.classList.remove("active");
    ModalMobileNavOverlay.classList.remove("active");
  });
} catch (error) {}

try {
  addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll("[data-modal-id]");
    const modals = document.querySelectorAll(".modal");
    const closeModalsButton = document.querySelectorAll(".close-modals");
    const html = document.querySelector("html");
    const header = document.querySelector("header");

    buttons.forEach((button) => {
      button.addEventListener("click", () => {
        const modalId = button.dataset.modalId;
        const modal = document.getElementById(modalId);
        modal.classList.remove("hidden");
        modal.classList.add("flex");
        html.style.overflow = "hidden";
        header.style.zIndex = "-1";
      });
    });

    closeModalsButton.forEach((element) => {
      element.addEventListener("click", () => {
        html.style.overflow = "auto";
        header.style.zIndex = "40";
        for (let index = 0; index < modals.length; index++) {
          modals[index].classList.add("hidden");
          modals[index].classList.remove("flex");
        }
      });
    });
  });
} catch (error) {}

try {
  document.addEventListener("scroll", function () {
    let y = window.scrollY;
    const header = document.querySelector("header");
    if (y > 100) {
      header.classList.add("scrollActive");
    } else {
      header.classList.remove("scrollActive");
    }
  });
} catch (error) {}

try {
  document.addEventListener("DOMContentLoaded", function () {
    // Get all buttons and add click event
    var buttons = document.querySelectorAll(".tab-button");

    buttons.forEach(function (button) {
      button.addEventListener("click", function () {
        // Hide all forms
        var forms = document.querySelectorAll("#form-1, #form-2");
        forms.forEach(function (form) {
          form.style.display = "none";
        });

        // Remove active class from all buttons
        buttons.forEach(function (btn) {
          btn.classList.remove("active");
        });

        // Add active class to clicked button
        button.classList.add("active");

        // Show the form associated with the clicked button
        var targetForm = document.getElementById(
          button.getAttribute("data-target")
        );
        targetForm.style.display = "block";
      });
    });
  });
} catch (error) {}

try {
  // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
  let vh = window.innerHeight * 0.01;
  // Then we set the value in the --vh custom property to the root of the document
  document.documentElement.style.setProperty("--vh", `${vh}px`);

  // We listen to the resize event
  window.addEventListener("resize", () => {
    // We execute the same script as before
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty("--vh", `${vh}px`);
  });
} catch (error) {}
