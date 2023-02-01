const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logoBlack = document.querySelector(".logo-black");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page")

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

const swiperSteps = new Swiper(".steps-slider", {
	speed: 400,
	slidesPerView: "auto",
	spaceBetween: 30,
	navigation: {
		nextEl: '.steps-button-next',
		prevEl: '.steps-button-prev',
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

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) => {
	if (
		event.target.dataset.toggle == "modal" || 
		event.target.parentNode.dataset.toggle == "modal" ||
		(!event.composedPath().includes(modalDialog) && modal.classList.contains("is-open"))
	) {
		event.preventDefault();
		modal.classList.toggle("is-open");
	};
});
document.addEventListener("keyup", (event) => {
	if (event.key == "Escape" && modal.classList.contains("is-open")) {
		modal.classList.toggle("is-open");
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
						alert("Форма отправлена!");
					} else {
						alert(response.statusText);
					}
				});
			};
			ajaxSend(formData);
		});
});

window.addEventListener("DOMContentLoaded", function() {
    [].forEach.call( document.querySelectorAll('.tel'), function(input) {
    var keyCode;
    function mask(event) {
        event.keyCode && (keyCode = event.keyCode);
        var pos = this.selectionStart;
        if (pos < 3) event.preventDefault();
        var matrix = "+7 (___) ___ ____",
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, ""),
            new_value = matrix.replace(/[_\d]/g, function(a) {
                return i < val.length ? val.charAt(i++) || def.charAt(i) : a
            });
        i = new_value.indexOf("_");
        if (i != -1) {
            i < 5 && (i = 3);
            new_value = new_value.slice(0, i)
        }
        var reg = matrix.substr(0, this.value.length).replace(/_+/g,
            function(a) {
                return "\\d{1," + a.length + "}"
            }).replace(/[+()]/g, "\\$&");
        reg = new RegExp("^" + reg + "$");
        if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
        if (event.type == "blur" && this.value.length < 5)  this.value = ""
    }

    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
    input.addEventListener("keydown", mask, false)
  });
});
