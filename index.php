<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/swiper-bundle.min.css">
		<link rel="stylesheet" href="normalize.css">
		<link rel="stylesheet" href="css/index.css">
		<title>Alience Production</title>
	</head>

	<body class="front-page">
		<div class="mobile-menu">
			<ul class="mobile-menu-nav">
				<li class="mobile-menu-nav-item">
					<a href="#" class="moble-menu-nav-link">О компании</a>
				</li>
				<li class="mobile-menu-nav-item">
					<a href="#" class="moble-menu-nav-link">Контрактное производство</a>
					<ul class="mobile-submenu">
						<li class="mobile-submenu-item">
							<a class="mobile-submenu-link" href="#">Автомобильная химия</a>
						</li>
						<li class="mobile-submenu-item">
							<a class="mobile-submenu-link" href="#">Бытовая химия</a>
						</li>
						<li class="mobile-submenu-item">
							<a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a></li>
						<li class="mobile-submenu-item">
							<a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
						</li>
						<li class="mobile-submenu-item">
							<a class="mobile-submenu-link" href="#">Косметическая продукция</a>
						</li>
						<li class="mobile-submenu-item">
							<a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
						</li>
					</ul>
				</li>
				<li class="mobile-menu-nav-item">
					<a href="#" class="moble-menu-nav-link">Собственные торговые марки</a>
					<ul class="mobile-submenu">
						<li class="mobile-submenu-item">
							<a class="mobile-submenu-link" href="#">Автохимия AG-Tech</a>
						</li>
						<li class="mobile-submenu-item">
							<a class="mobile-submenu-link" href="#">Автохимия AP</a>
						</li>
					</ul>
				</li>
				<li class="mobile-menu-nav-item">
					<a href="#" class="moble-menu-nav-link">Новости</a>
				</li>
				<li class="mobile-menu-nav-item">
					<a href="#" class="moble-menu-nav-link">Контакты</a>
				</li>
			</ul>
			<a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
			<div class="mobile-info">
				<svg class="adress">
					<use href="icon/sprite.svg#adress"></use>
				</svg>
				<address class="mobile-info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
			</div>
			<div class="mobile-info">
				<svg class="mail">
					<use href="icon/sprite.svg#mail"></use>
				</svg>
				<a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">a.dragunov@tdaliance.ru</a>
			</div>
			<div class="mobile-social">
				<a href="#" class="mobile-social-link">
					<svg class="vk">
					<use href="icon/sprite.svg#vk"></use>
					</svg>
				</a>
				<a href="#" class="mobile-social-link">
					<svg class="instagram">
						<use href="icon/sprite.svg#instagram"></use>
					</svg>
				</a>
			</div>
		</div>
		<!-- /.mobile-menu -->

		<nav class="navbar">
			<a href="" class="mobile-menu-toggle">
				<span class="mobile-menu-line"></span>
				<span class="mobile-menu-line"></span>
				<span class="mobile-menu-line"></span>
			</a>
			<!-- /.mobile-menu-toggle -->
			<a href="./" class="header-logo">
				<svg class="logo-svg logo-light">
					<use href="icon/sprite.svg#logo-light"></use>
				</svg>
				<svg class="logo-svg logo-black">
					<use href="icon/sprite.svg#logo-black"></use>
				</svg>
			</a>
			<!-- /.header-logo -->
			<ul class="header-nav">
				<li class="header-nav-item">
					<a href="/about.php" class="header-nav-link">О компании</a>
				</li>
				<li class="header-nav-item">
					<a href="#" class="header-nav-link">Контрактное производство</a>
				</li>
				<li class="header-nav-item">
					<a href="#" class="header-nav-link">Собственные торговые марки</a>
				</li>
				<li class="header-nav-item">
					<a href="#" class="header-nav-link">Новости</a>
				</li>
				<li class="header-nav-item">
					<a href="#" class="header-nav-link">Контакты</a>
				</li>
			</ul>
			<!-- /.header-nav -->
			<div class="header-phone">
				<svg class="phone">
					<use href="icon/sprite.svg#phone"></use>
				</svg>
				<a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
			</div>
			<!-- /.header-phone -->
			<button class="header-button" data-toggle="modal">
				<svg class="header-button-icon">
					<use href="icon/sprite.svg#phone"></use>
				</svg>
				<span class="header-button-text">
					Получить консультацию
				</span>
			</button>
			<!-- /.header-button -->
		</nav>
		<!-- /.navbar -->

		<header class="header header-image">
			<div class="container">
				<div class="header-content">
					<div class="seporator"></div>
					<!-- /.seporator -->
					<h1 class="header-title">Комплексное обеспечение товарами и расходными материалами бизнеса</h1>
					<p class="header-text">
						Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого
						факта: высококачественный прототип будущего проекта напрямую зависит от анализа существующих
						паттернов поведения.
					</p>
					<button class="btn" data-toggle="modal">Подробнее о компании</button>
				</div>
				<!-- /.header-content -->
				<!-- Слайдер-header -->
				<div class="swiper features-slider">
					<ul class=" swiper-wrapper header-features light">
						<li class="swiper-slide haeder-features-items">
							<svg class="header-features-svg">
								<use href="icon/sprite.svg#time"></use>
							</svg>
							<p class="haeder-features-text">Непрерывная работа c 2017 года</p>
						</li>
						<li class="swiper-slide haeder-features-items">
							<svg class="header-features-svg">
								<use href="icon/sprite.svg#certificate"></use>
							</svg>
							<p class="haeder-features-text">Вся продукция сертифицирована</p>
						</li>
						<li class="swiper-slide haeder-features-items">
							<svg class="header-features-svg">
								<use href="icon/sprite.svg#control"></use>
							</svg>
							<p class="haeder-features-text">Контроль качества на всех этапах</p>
						</li>
						<li class="swiper-slide haeder-features-items">
							<svg class="header-features-svg">
								<use href="icon/sprite.svg#delivery"></use>
							</svg>
							<p class="haeder-features-text">Возможны поставки по всей России</p>
						</li>
						<li class="swiper-slide haeder-features-items">
							<svg class="header-features-svg">
								<use href="icon/sprite.svg#speed"></use>
							</svg>
							<p class="haeder-features-text">Оперативное производство</p>
						</li>
					</ul>
					<!-- Кнопки слайдера -->
					<div class="header-buttons header-slider-buttons white-arrows">
						<div class="header-button-prev header-button-prev">
							<svg class="arrow-prev" height="24px" width="36px">
								<use href="icon/sprite.svg#arrow-prev"></use>
							</svg>
						</div>
						<div class="header-button-next header-button-next">
							<svg class="arrow-next" height="24px" width="36px">
								<use href="icon/sprite.svg#arrow-next"></use>
							</svg>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container -->
		</header>
		<!-- /.header -->

		<section class="section section-steps">
			<div class="container">
				<div class="seporator"></div>
				<!-- /.seporator -->
				<h2 class="section-steps-title">схема работы</h2>
				<!-- /.section-light-title -->
				<div class="swiper steps-slider">
					<ol class="swiper-wrapper steps-list">
						<li class="swiper-slide step-item">
							<span class="step-numb">01</span>
							<!-- /.step-numb -->
							<div class="step-item-w">
								<h2 class="step-text">Знакомство</h2>
								<!-- /.step-text -->
								<p class="step-descr">Безусловно, сплочённость команды профессионалов позволяет оценить
									значение форм воздействия.</p>
								<!-- /.step-descr -->
								<a href="#" class="button-link">Оставить заявку</a>
							</div>
							<!-- /.step-item-w -->
						</li>
						<!-- /.step-item -->
						<li class="swiper-slide step-item">
							<span class="step-numb">02</span>
							<!-- /.step-numb -->
							<div class="step-item-w">
								<h2 class="step-text">Заключение договора</h2>
								<!-- /.step-text -->
								<p class="step-descr">Лишь интерактивные прототипы призваны к ответу.</p>
								<!-- /.step-descr -->
							</div>
							<!-- /.step-item-w -->
						</li>
						<!-- /.step-item -->
						<li class="swiper-slide step-item">
							<span class="step-numb">03</span>
							<!-- /.step-numb -->
							<div class="step-item-w">
								<h2 class="step-text">Производство</h2>
								<!-- /.step-text -->
								<p class="step-descr">А также стремящиеся вытеснить традиционное производство, нанотехнологии
									функционально разнесены на независимые элементы.</p>
								<!-- /.step-descr -->
							</div>
							<!-- /.step-item-w -->
						</li>
						<!-- /.step-item -->
						<li class="swiper-slide step-item">
							<span class="step-numb">04</span>
							<!-- /.step-numb -->
							<div class="step-item-w">
								<h2 class="step-text">Доставка</h2>
								<!-- /.step-text -->
								<p class="step-descr">В частности, экономическая повестка сегодняшнего дня говорит о
									возможностях приоритизации разума над эмоциями.</p>
								<!-- /.step-descr -->
							</div>
							<!-- /.step-item-w -->
						</li>
						<!-- /.step-item -->
					</ol>
					<!-- /.steps-list -->
					<div class="steps-buttons primary-buttons-wrapper">
						<div class="steps-button-prev primary-button-prev">
							<svg class="arrow-prev" height="13" width="25">
								<use href="icon/sprite.svg#arrow-prev"></use>
							</svg>
						</div>
						<div class="steps-button-next primary-button-next">
							<svg class="arrow-next" height="13" width="25">
								<use href="icon/sprite.svg#arrow-next"></use>
							</svg>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.section -->

		<section class="section production">
			<div class="container">
				<div class="seporator"></div>
				<!-- /.seporator -->
				<h2 class="section-production-title">Контрактное производство</h2>
				<div class="production-cards">
					<a href="#" class="production-card">
						<div class="production-card-content">
							<h3 class="production-card-title">Автомобильная химия</h3>
							<p class="production-card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p>
						</div>
						<!-- /.production-card-content -->
						<img src="image/product_1.png" alt="Автомобильная химия" class="production-card-img">
					</a>
					<a href="#" class="production-card">
						<div class="production-card-content">
							<h3 class="production-card-title">Бытовая химия</h3>
							<p class="production-card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
						</div>
						<!-- /.production-card-content -->
						<img src="image/product_2.png" alt="Бытовая химия" class="production-card-img">
					</a>
					<a href="#" class="production-card">
						<div class="production-card-content">
							<h3 class="production-card-title">Дезинфицирующие средства</h3>
							<p class="production-card-text">Лишь интерактивные прототипы призваны к ответу.</p>
						</div>
						<!-- /.production-card-content -->
						<img src="image/product_3.png" alt="Дезинфицирующие средства" class="production-card-img">
					</a>
					<a href="#" class="production-card">
						<div class="production-card-content">
							<h3 class="production-card-title">Пищевые аэрозоли</h3>
							<p class="production-card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p>
						</div>
						<!-- /.production-card-content -->
						<img src="image/product_4.png" alt="Пищевые аэрозоли" class="production-card-img">
					</a>
					<a href="#" class="production-card">
						<div class="production-card-content">
							<h3 class="production-card-title">Косметическая продукция</h3>
							<p class="production-card-text">Лишь интерактивные прототипы призваны к ответу.</p>
						</div>
						<!-- /.production-card-content -->
						<img src="image/product_5.png" alt="Косметическая продукция" class="production-card-img">
					</a>
					<a href="#" class="production-card">
						<div class="production-card-content">
							<h3 class="production-card-title">Краски аэрозольные</h3>
							<p class="production-card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
						</div>
						<!-- /.production-card-content -->
						<img src="image/product_6.png" alt="Краски аэрозольные" class="production-card-img">
					</a>
				</div>
			</div>
		</section>
		<!-- /.section production-->

		<div class="section-labels">
			<div class="container">
				<div class="seporator"></div>
				<!-- /.seporator -->
				<h2 class="section-labels-title">Cобственные марки</h2>
				<div class="labels-cards">
					<div href="#" class="labels-card">
						<svg class="labels-card-image">
							<use href="icon/sprite.svg#agtech"></use>
						</svg>
						<h3 class="labels-card-title">Автохимия AG-Tech</h3>
						<div class="labels-card-text-w">
							<p class="labels-card-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
						</div>
					</div>
					<div href="#" class="labels-card">
						<svg class="labels-card-image">
							<use href="icon/sprite.svg#AP"></use>
						</svg>
						<h3 class="labels-card-title">Автохимия AP</h3>
						<div class="labels-card-text-w">
							<p class="labels-card-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
						</div>
					</div>
				</div>
				<!-- /.labels-cards -->
			</div>
			<!-- /.container -->
		</div>
	<!-- /.section-labels -->

		<section class="section founder">
			<img src="image/fonder.jpg" alt="founder" class="founder-image">
			<div class="container">
				<div class="founder-content-wrapper">
					<div class="founder-content">
						<div class="seporator"></div>
						<h2 class="founder-title">Отношение к делу и к клиентам</h2>
						<p class="founder-text">Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает, что укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно, независимые государства, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, синтетическое тестирование выявляет срочную потребность системы массового участия.</p>
						<p class="founder-text">А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в значительной степени обусловливает важность дальнейших направлений развития.</p>
						<a href="#" class="button-link">О нашей миссии</a>
					</div>
					<!-- /.founder-content -->
				</div>
				<!-- /.founder-content-wrappper -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.section founder -->

		<section class="section clients">
			<div class="container">
				<div class="seporator"></div>
				<div class="clients-wrapper">
					<div class="clients-content">
						<h2 class="clients-title">Производим аэрозольную продукцию для разных сфер</h2>
						<ul class="clients-list">
							<li class="clients-item">
								<svg height="30" width="30" class="clients-item-img">
									<use href="icon/sprite.svg#him"></use>
								</svg>
								Химические производства
							</li>
							<li class="clients-item">
								<svg height="30" width="30" class="clients-item-img">
									<use href="icon/sprite.svg#car"></use>
								</svg>
								Автомойки
							</li>
							<li class="clients-item">
								<svg height="30" width="30" class="clients-item-img">
									<use href="icon/sprite.svg#eat"></use>
								</svg>
								Пищевая продукция
							</li>
							<li class="clients-item">
								<svg height="30" width="30" class="clients-item-img">
									<use href="icon/sprite.svg#brush"></use>
								</svg>
								Лаки и краски
							</li>
							<li class="clients-item">
								<svg height="30" width="30" class="clients-item-img">
									<use href="icon/sprite.svg#cosmetic"></use>
								</svg>
								Косметические средства
							</li>
							<li class="clients-item">
								<svg height="30" width="30" class="clients-item-img">
									<use href="icon/sprite.svg#car-cosm"></use>
								</svg>
								Автомобильная косметика
							</li>
							<li class="clients-item">
								<svg height="30" width="30" class="clients-item-img">
									<use href="icon/sprite.svg#shirt"></use>
								</svg>
								Косметика по уходу за одеждой
							</li>
							<li class="clients-item">
								<svg height="30" width="30" class="clients-item-img">
									<use href="icon/sprite.svg#boots"></use>
								</svg>
								Косметика по уходу за обувью
							</li>
							<li class="clients-item">
								<svg height="30" width="30" class="clients-item-img">
									<use href="icon/sprite.svg#bricks"></use>
								</svg>
								Строительные материалы
							</li>
							<li class="clients-item">
								<svg height="30" width="30" class="clients-item-img">
									<use href="icon/sprite.svg#more"></use>
								</svg>
								И многих других
							</li>
						</ul>
					</div>
					<!-- /.clients-content -->
					<div class="clients-logo-list">
						<a href="#" class="client-logo-item">
							<img class="client-logo" src="image/clients-logo.png" alt="client-logo">
						</a>
						<a href="#" class="client-logo-item">
							<img class="client-logo" src="image/clients-logo.png" alt="client-logo">
						</a>
						<a href="#" class="client-logo-item">
							<img class="client-logo" src="image/clients-logo.png" alt="client-logo">
						</a>
						<a href="#" class="client-logo-item">
							<img class="client-logo" src="image/clients-logo.png" alt="client-logo">
						</a>
						<a href="#" class="client-logo-item">
							<img class="client-logo" src="image/clients-logo.png" alt="client-logo">
						</a>
						<a href="#" class="client-logo-item">
							<img class="client-logo" src="image/clients-logo.png" alt="client-logo">
						</a>
						<a href="#" class="client-logo-item">
							<img class="client-logo" src="image/clients-logo.png" alt="client-logo">
						</a>
						<a href="#" class="client-logo-item">
							<img class="client-logo" src="image/clients-logo.png" alt="client-logo">
						</a>
						<a href="#" class="client-logo-item">
							<img class="client-logo" src="image/clients-logo.png" alt="client-logo">
						</a>
					</div>
					<!-- /.clients-logo-wrapper -->
				</div>
				<!-- /.clients-wrapper -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.section clients -->

		<section class="section blog">
			<div class="container">
				<div class="seporator"></div>
				<!-- /.seporator -->
				<h2 class="section-steps-title">Блог экспертов в области производства</h2>
				<!-- /.section-blog -->
				<!-- Slider main container -->
				<div class="swiper blog-slider">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<a href="#" class="swiper-slide blog-card">
							<img src="/image/blog-photo.jpg" alt="blog-photo" class="blog-card-img">
							<h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
							<p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
						</a>
						<a href="#" class="swiper-slide blog-card">
							<img src="/image/blog-post.jpg" alt="blog-photo" class="blog-card-img">
							<h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
							<p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
						</a>
						<a href="#" class="swiper-slide blog-card">
							<img src="/image/blog-photo.jpg" alt="blog-photo" class="blog-card-img">
							<h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
							<p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены... </p>
						</a>
					</div>
					<!-- If we need navigation buttons -->
					<div class="blog-slider-footer">
						<a href="#" class="button-link">Весь Блог</a>
						<div class="blog-buttons primary-buttons-wrapper">
							<div class="blog-button-prev primary-button-prev">
								<svg class="arrow-prev" height="13" width="25">
									<use href="icon/sprite.svg#arrow-prev"></use>
								</svg>
							</div>
							<div class="blog-button-next primary-button-next">
								<svg class="arrow-next" height="13" width="25">
									<use href="icon/sprite.svg#arrow-next"></use>
								</svg>
							</div>
						</div>
					</div>
					<!-- /.blog-slider-footer -->
				</div>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.section blog -->

		<?php include_once('footer.php')?>