const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logoBlack = document.querySelector(".logo-black");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
	navbar.classList.add("navbar-light");
	logoBlack.style.display = "block";
	logoLight.style.display = "none";
};

const lightModeOff = (event) => {
	navbar.classList.remove("navbar-light");
	logoBlack.style.display = "none";
	logoLight.style.display = "block";
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
	this.scrollY > 1 ? lightModeOn() : lightModeOff();
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

/* const modalToggle = document.querySelectorAll("[data-toggle=modal]");
const modalClose = document.querySelector(".modal-close");

modalToggle.forEach((element) => {
	element.addEventListener("click", (event) => {
		event.preventDefault();
		modal.classList.add("is-open");
	});
});
modalClose.addEventListener("click", (event) => {
	event.preventDefault();
	modal.classList.remove("is-open");
});
modal.addEventListener("click", (e) => {
	if (e.target === modal) {
		modal.classList.remove("is-open");
	}
});
document.addEventListener('keydown', (e) => {
	if (e.code === "Escape" && modal.classList.remove("is-open")) {
		closeModal(); 
	}
}); */