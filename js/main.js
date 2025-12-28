const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
};

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
};

const changeNavHeight = (height) => {
  navbar.style.height = height;
};

const openMenu = (event) => {
  // функция открытия меню
  menu.classList.add("isOpen"); // вешает класс isOpen
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden"; // запрещаем прокрутку сайта под меню
  lightModeOn();
};

const closeMenu = (event) => {
  // функция закрытия меню
  menu.classList.remove("isOpen"); // убирает класс isOpen
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = ""; // возвращаем прокрутку сайта под меню
  lightModeOff();
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("isOpen") ? closeMenu() : openMenu();
});

const swiper = new Swiper(".swiper.swiper-features", {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 4,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 5,
    },
  },
});

const swiperSteps = new Swiper(".swiper.swiper-steps", {
  speed: 400,
  autoHeight: true,
  slidesPerView: 1,
  navigation: {
    nextEl: ".slider-button-item-next",
    prevEl: ".slider-button-item-prev",
  },
  breakpoints: {
    350: {
      slidesPerView: 1,
    },
    // when window width is >= 320px
    768: {
      slidesPerView: 2,
    },
    // when window width is >= 480px
    992: {
      slidesPerView: 3,
    },
    // when window width is >= 640px
    1200: {
      slidesPerView: 4,
    },
    // // when window width is >= 1200px
    // 1200: {
    //   slidesPerView: 5,
    // },
  },
});

const swiperBlog = new Swiper(".swiper.blog-slider", {
  speed: 400,
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
  breakpoints: {
    350: {
      slidesPerView: 1,
    },
    500: {
      slidesPerView: 2,
    },
  },
});

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) &&
      modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
});

const forms = document.querySelectorAll("form"); // Собираем формы
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation
    .addField("[name=username]", [
      {
        rule: "required",
        errorMessage: "Укажите имя",
      },
      {
        rule: "maxLength",
        value: 50,
        errorMessage: "Максимально 50 символов",
      },
    ])
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "Укажите телефон",
      },
    ])
    .onSuccess((event) => {
      const thisForm = event.target; // наша форма
      const formData = new FormData(thisForm); //данные из нашей формы
      const ajaxSend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            // alert("Форма отправлена!");
            modalThanks.classList.toggle("is-open");
          } else {
            alert("Ошибка. Текст ошибки: ".response.statusText);
          }
        });
      };
      ajaxSend(formData);
    });
});

let elements = document.getElementsByClassName("input-phone-number");
for (let i = 0; i < elements.length; i++) {
  new IMask(elements[i], {
    mask: "+{0} (000) 000-00-00",
    eager: true,
  });
}

const modalThanks = document.querySelector(".modal-thanks");
const modalDialogThanks = document.querySelector(".modal-dialog-thanks");
const modalThanksButton = document.querySelector(".modal-form-button-thanks");

document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal-thanks" ||
    event.target.parentNode.dataset.toggle == "modal-thanks" ||
    (!event.composedPath().includes(modalDialogThanks) &&
      modalThanks.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modalThanks.classList.toggle("is-open");
  }
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modalThanks.classList.contains("is-open")) {
    modalThanks.classList.toggle("is-open");
  }
});
modalThanksButton.addEventListener("click", () => {
  modalThanks.classList.toggle("is-open");
  window.location.href = "./";
});
