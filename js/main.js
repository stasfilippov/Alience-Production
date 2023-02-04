const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logoBlack = document.querySelector(".logo-black");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page")

const lightModeOn = (event) => {
	navbar.classList.add("navbar-light front");
};

const lightModeOff = (event) => {
	navbar.classList.remove("navbar-light front");
};
const changeNavHeight = (height) => {
	navbar.style.height = height;
};

const openMenu = (event) => {
	menu.classList.add("is-open");
	mMenuToggle.classList.add("close-menu");
	document.body.style.overflow = "hidden";
	lightModeOn();
};
const closeMenu = (event) => {
	menu.classList.remove("is-open");
	mMenuToggle.classList.remove("close-menu");
	document.body.style.overflow = "";
	lightModeOff();
};

window.addEventListener('scroll', () => {
	this.scrollY > 1 ? changeNavHeight("4.625rem") : changeNavHeight("6rem");
	if (isFront) {
		this.scrollY > 1 ? lightModeOn() : lightModeOff();
	}
});
mMenuToggle.addEventListener("click", (event) => {
	event.preventDefault();
	menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

const swiperFeatures = new Swiper(".features-slider", {
	speed: 400,
	slidesPerView: 1,
	navigation: {
		nextEl: '.header-button-next',
		prevEl: '.header-button-prev',
	},
	breakpoints: {
		// when window width is >= 576px
		545: {
			slidesPerView: 2,
		},
		// when window width is >= 768px
		787: {
			slidesPerView: 3,
		},
		// when window width is >= 1024px
		1024: {
			slidesPerView: 4,
		},
		// when window width is >= 1200px
		1201: {
			slidesPerView: 5,
		},
	},
});

const swiperSteps = new Swiper(".steps-slider", {
	speed: 400,
	slidesPerView: 1,
    spaceBetween: 30,
	navigation: {
		nextEl: '.steps-button-next',
		prevEl: '.steps-button-prev',
	},
	
    breakpoints: {
        640: {
			slidesPerView: 2,
			spaceBetween: 20,
        },
        787: {
			slidesPerView: 4,
			spaceBetween: 40,
        },
        1024: {
			slidesPerView: 5,
			spaceBetween: 50,
        },
    },
});

const swiperBlog = new Swiper(".blog-slider", {
	speed: 400,
	slidesPerView: 1,
	spaceBetween: 30,
	navigation: {
		nextEl: '.blog-button-next',
		prevEl: '.blog-button-prev',
	},
	breakpoints: {
		// when window width is >= 576px
		545: {
			slidesPerView: 1,
		},
		// when window width is >= 768px
		787: {
			slidesPerView: 2,
		},
	},
});

const swiperCenter = new Swiper(".center-slider", {
	speed: 400,
	slidesPerView: "auto",
	centeredSlides: true,
	spaceBetween: 30,
	loop: true,
	navigation: {
		nextEl: '.center-button-next',
		prevEl: '.center-button-prev',
	},
	breakpoints: {
		319: {
			spaceBetween: 10,
			centeredSlides: true,
		},
		545: {
			slidesPerView: 1,
			centeredSlides: true,
		},
        780: {
			slidesPerView: 1,
			centeredSlides: true,
        },
		1024: {
			slidesPerView: 2,
		}
    },
});


let currentModal; /* текущее модольное окно */
let modalDialog; /* белое диологовое окно */
let alertModal = document.querySelector("#alert-modal"); // окно с предупреэжением или благодарностью

const modalButtons = document.querySelectorAll("[data-toggle=modal]"); /* создаем константы для всех кнопок, которые будут вызывать модальное окно */
modalButtons.forEach((button) => {  /*для каждой из кнопок запускаем цикл и для каждую текущую кнопку ставим прослушиватель*/
	button.addEventListener("click", (event) => {  /* клик по переключателю */
		event.preventDefault(); // убираю стандартное поведение при клике
		currentModal = document.querySelector(button.dataset.target);  /* определяем текущее открытое окно */
		currentModal.classList.toggle("is-open"); /* открываем текущее окно */
		modalDialog = currentModal.querySelector(".modal-dialog"); /* назначаем новое белое диалоговое окно */
		currentModal.addEventListener("click", event => { /* отслеживаем клик по окну и пустым облостям */
			if (!event.composedPath().includes(modalDialog)) { /* если клик в пустую область */
				currentModal.classList.remove("is-open"); /* закрываем окно */
			}
		});
	});
});
document.addEventListener("keyup", (event) => { /* отслеживаем нажатие кнопки */
	if (event.key == "Escape" && currentModal.classList.contains("is-open")) { /* проверяем, что это Esc И текущее окно открыто */
		currentModal.classList.toggle("is-open"); /* закрываем текущее открытое окно */
	}
}); 


const forms = document.querySelectorAll("form");
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
				rule: 'maxLength',
				value: 30,
				errorMessage: "Максимально 30 символов",
			},
		])
		.addField("[name=userphone]", [
			{
				rule: 'required',
				errorMessage: "Укажите телефон",
			},
		])
		.onSuccess((event) => {
			const thisForm = event.target; // наша функция
			const formData = new FormData(thisForm); // данные из нашей формы
			const ajaxSend = (formData) => {
				fetch(thisForm.getAttribute("action"), {
					method: thisForm.getAttribute("method"),
					body: formData, 
				}).then((response) => {
					if (response.ok) {
						thisForm.reset();
						currentModal.classList.remove("is-open");
						alertModal.classList.add("is-open");
						currentModal = alertModal;
						modalDialog = currentModal.querySelector(".modal-dialog"); /* назначаем новое белое диалоговое окно */
						currentModal.addEventListener("click", event => { /* отслеживаем клик по окну и пустым облостям */
							if (!event.composedPath().includes(modalDialog)) { /* если клик в пустую область */
								currentModal.classList.remove("is-open"); /* закрываем окно */
							}
						});
					} else {
						alert(response.statusText);
					}
				});
			};
			ajaxSend(formData);
		});
});

/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
	/* если вводят семерку, добавляем ей скобку */
	if (str === "7") {
	  return "7 (";
	}
	/* если вводят восьмерку, ставим вместо нее +7 ( */
	if (str === "8") {
	  return "+7 (";
	}
	/* если пишут девятку, заменяем на +7 (9  */
	if (str === "9") {
	  return "7 (9";
	}
	/* в других случаях просто 7 (  */
	return "7 (";
  }; /* профикс в любом раскладе будет +7 () */
  
  /* Ловим события ввода в любом поле */
  document.addEventListener("input", (e) => {
	/* Проверяем, что это поле имеет класс phone-mask */
	if (e.target.classList.contains("phone-mask")) {
	  /* поле с телефоном помещаем в переменную input */
	  const input = e.target;
	  /* вставляем плюс в начале номера */
	  const value = input.value.replace(/\D+/g, "");
	  /* длинна номера 11 символов */
	  const numberLength = 11;
  
	  /* Создаем переменную, куда будем записывать номер */
	  let result;
	  /* Если пользователь ввел 8... */
	  if (input.value.includes("+8") || input.value[0] === "8") {
		/* Стираем восьмерку */
		result = "";
	  } else {
		/* Оставляем плюсик в поле */
		result = "+";
	  }
  
	  /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
	  for (let i = 0; i < value.length && i < numberLength; i++) {
		switch (i) {
		  case 0:
			/* в самом начале ставим префикс +7 ( */
			result += prefixNumber(value[i]);
			continue;
		  case 4:
			/* добавляем после "+7 (" круглую скобку ")" */
			result += ") ";
			break;
		  case 7:
			/* дефис после 7 символа */
			result += "-";
			break;
		  case 9:
			/* еще дефис  */
			result += "-";
			break;
		  default:
			break;
		}
		/* на каждом шаге цикла добавляем новую цифру к номеру */
		result += value[i];
	  }
	  /* итог: номер в формате +7 (999) 123-45-67 */
	  input.value = result;
	}
  });