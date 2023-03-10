const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logoBlack = document.querySelector(".logo-black");
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
const swiperStep = new Swiper(".steps-slider", {
	speed: 400,
	freeMode: true,
	spaceBetween: 30,
	navigation: {
	  nextEl: ".steps-button-next",
	  prevEl: ".steps-button-prev",
	},
	breakpoints: {
	  // when window width is >= 576px
	  0: {
		slidesPerView: "auto",
	  },
	  // when window width is >= 768px
	  768: {
		slidesPerView: 2,
	  },
	  // when window width is >= 1024px
	  1024: {
		slidesPerView: 3,
	  },
	  1200: {
		slidesPerView: 4,
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
	loop: true,
	spaceBetween: 30,
	navigation: {
	  nextEl: ".center-button-next",
	  prevEl: ".center-button-prev",
	},
	breakpoints: {
	  // when window width is >= 992px
	  992: {
		slidesPerView: 2,
	  },
	},
});

let currentModal; /* ?????????????? ?????????????????? ???????? */
let modalDialog; /* ?????????? ???????????????????? ???????? */
let alertModal = document.querySelector("#alert-modal"); // ???????? ?? ?????????????????????????????? ?????? ????????????????????????????

const modalButtons = document.querySelectorAll("[data-toggle=modal]"); /* ?????????????? ?????????????????? ?????? ???????? ????????????, ?????????????? ?????????? ???????????????? ?????????????????? ???????? */
modalButtons.forEach((button) => {  /*?????? ???????????? ???? ???????????? ?????????????????? ???????? ?? ?????? ???????????? ?????????????? ???????????? ???????????? ????????????????????????????*/
	button.addEventListener("click", (event) => {  /* ???????? ???? ?????????????????????????? */
		event.preventDefault(); // ???????????? ?????????????????????? ?????????????????? ?????? ??????????
		currentModal = document.querySelector(button.dataset.target);  /* ???????????????????? ?????????????? ???????????????? ???????? */
		currentModal.classList.toggle("is-open"); /* ?????????????????? ?????????????? ???????? */
		modalDialog = currentModal.querySelector(".modal-dialog"); /* ?????????????????? ?????????? ?????????? ???????????????????? ???????? */
		currentModal.addEventListener("click", event => { /* ?????????????????????? ???????? ???? ???????? ?? ???????????? ???????????????? */
			if (!event.composedPath().includes(modalDialog)) { /* ???????? ???????? ?? ???????????? ?????????????? */
				currentModal.classList.remove("is-open"); /* ?????????????????? ???????? */
			}
		});
	});
});
document.addEventListener("keyup", (event) => { /* ?????????????????????? ?????????????? ???????????? */
	if (event.key == "Escape" && currentModal.classList.contains("is-open")) { /* ??????????????????, ?????? ?????? Esc ?? ?????????????? ???????? ?????????????? */
		currentModal.classList.toggle("is-open"); /* ?????????????????? ?????????????? ???????????????? ???????? */
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
				errorMessage: "?????????????? ??????",
			},
			{
				rule: 'maxLength',
				value: 30,
				errorMessage: "?????????????????????? 30 ????????????????",
			},
		])
		.addField("[name=userphone]", [
			{
				rule: 'required',
				errorMessage: "?????????????? ??????????????",
			},
			{
				rule: 'minLength',
        		value: 16,
       			errorMessage: '?????????????????? ??????????????????',
			}
			
		])
		.onSuccess((event) => {
			const thisForm = event.target; // ???????? ??????????????
			const formData = new FormData(thisForm); // ???????????? ???? ?????????? ??????????
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
						modalDialog = currentModal.querySelector(".modal-dialog"); /* ?????????????????? ?????????? ?????????? ???????????????????? ???????? */
						currentModal.addEventListener("click", event => { /* ?????????????????????? ???????? ???? ???????? ?? ???????????? ???????????????? */
							if (!event.composedPath().includes(modalDialog)) { /* ???????? ???????? ?? ???????????? ?????????????? */
								currentModal.classList.remove("is-open"); /* ?????????????????? ???????? */
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

/* ?????????????? ?????????????? +7, ???????? ???????? ???????????? 8 ?????? 9 */
const prefixNumber = (str) => {
	/* ???????? ???????????? ??????????????, ?????????????????? ???? ???????????? */
	if (str === "7") {
	  return "7 (";
	}
	/* ???????? ???????????? ??????????????????, ???????????? ???????????? ?????? +7 ( */
	if (str === "8") {
	  return "+7 (";
	}
	/* ???????? ?????????? ??????????????, ???????????????? ???? +7 (9  */
	if (str === "9") {
	  return "7 (9";
	}
	/* ?? ???????????? ?????????????? ???????????? 7 (  */
	return "7 (";
  }; /* ?????????????? ?? ?????????? ???????????????? ?????????? +7 () */
  
  /* ?????????? ?????????????? ?????????? ?? ?????????? ???????? */
  document.addEventListener("input", (e) => {
	/* ??????????????????, ?????? ?????? ???????? ?????????? ?????????? phone-mask */
	if (e.target.classList.contains("phone-mask")) {
	  /* ???????? ?? ?????????????????? ???????????????? ?? ???????????????????? input */
	  const input = e.target;
	  /* ?????????????????? ???????? ?? ???????????? ???????????? */
	  const value = input.value.replace(/\D+/g, "");
	  /* ???????????? ???????????? 11 ???????????????? */
	  const numberLength = 11;
  
	  /* ?????????????? ????????????????????, ???????? ?????????? ???????????????????? ?????????? */
	  let result;
	  /* ???????? ???????????????????????? ???????? 8... */
	  if (input.value.includes("+8") || input.value[0] === "8") {
		/* ?????????????? ?????????????????? */
		result = "";
	  } else {
		/* ?????????????????? ???????????? ?? ???????? */
		result = "+";
	  }
  
	  /* ?????????????????? ????????, ?????? ?????????????????? ???????????? ?????????? ???? 0 ???? 11 */
	  for (let i = 0; i < value.length && i < numberLength; i++) {
		switch (i) {
		  case 0:
			/* ?? ?????????? ???????????? ???????????? ?????????????? +7 ( */
			result += prefixNumber(value[i]);
			continue;
		  case 4:
			/* ?????????????????? ?????????? "+7 (" ?????????????? ???????????? ")" */
			result += ") ";
			break;
		  case 7:
			/* ?????????? ?????????? 7 ?????????????? */
			result += "-";
			break;
		  case 9:
			/* ?????? ??????????  */
			result += "-";
			break;
		  default:
			break;
		}
		/* ???? ???????????? ???????? ?????????? ?????????????????? ?????????? ?????????? ?? ???????????? */
		result += value[i];
	  }
	  /* ????????: ?????????? ?? ?????????????? +7 (999) 123-45-67 */
	  input.value = result;
	}
  });

function hasTouch() {
	return 'ontouchstart' in document.documentElement
			|| navigator.maxTouchPoints > 0
			|| navigator.msMaxTouchPoints > 0;
	}

	if (hasTouch()) { // remove all the :hover stylesheets
	try { // prevent exception on browsers not supporting DOM styleSheets properly
		for (var si in document.styleSheets) {
		var styleSheet = document.styleSheets[si];
		if (!styleSheet.rules) continue;

		for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
			if (!styleSheet.rules[ri].selectorText) continue;

			if (styleSheet.rules[ri].selectorText.match(':hover')) {
			styleSheet.deleteRule(ri);
			}
		}
		}
	} catch (ex) {}
}