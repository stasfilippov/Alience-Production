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
array.forEach((form) => {
	const validation = new JustValidate(form, {
		errorFieldCssClass: 'is-invalid',
	})
	.validation
		.addField("[name=username]", [
			{
				rule: 'minLength',
				value: 3,
			},
			{
				rule: 'maxLength',
				value: 30,
			},
		])
		.addField("[name=userphone]", [
			{
				rule: 'required',
				errorMessage: 'Field is required',
			},
			{
				rule: 'email',
				errorMessage: 'Email is invalid!',
			},
		])

});
