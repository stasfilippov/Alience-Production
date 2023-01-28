<section class="section cta">
		<div class="bg-gray section-cta">
			<img src="/image/cta.png" alt="cta" class="cta-img">
			<div class="cta-form-wrapper container">
				<form action="./handler.php" method="POST" class="cta-form">
					<h2 class="cta-form-title">Хотите сотрудничать?</h2>
					<p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
					<div class="input-group-wrapper">
						<div class="input-group">
							<input 
								id="user-name" 
								type="text"
                                name="username" 
								class="input" 
								placeholder=" "
                                maxlength="100"
                                required
                                >
							<label class="input-group-label" for="user-name">Имя</label>
						</div>
						<div class="input-group">
							<input 
								id="user-phone" 
								type="tel"
                                name="userphone" 
								class="input"
								placeholder=" "
                                maxlength="30"
                                required>
							<label class="input-group-label" for="user-phone">Номер телефона</label>
						</div>
					</div>
					<div class="cta-form-footer">
						<button type="submit" class="btn cta-form-button">Отправить заявку</button>
						<div class="notify">
							<svg class="notify-icon" height="14" width="14">
								<use href="icon/sprite.svg#notify"></use>
							</svg>
							<p class="notify-text">
								Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
							</p>
						</div>
					</div>
					<!-- /.cta-form-footer -->
				</form>
				<!-- /.cta-form -->
			</div>
			<!-- /.cta-from-wrapper -->
		</div>
		<!-- /.bg-gray -->
	</section>

	<footer class="footer">
		<div class="container">
			<div class="footer-top">
				<svg class="logo-svg logo-footer">
					<use href="icon/sprite.svg#logo-black"></use>
				</svg>
				<a class="footer-phone" href="tel:+79996861014">+7 (499) 686-10-14</a>
				<div class="footer-info">
					<svg class="footer-adress" width="12" height="16">
						<use href="icon/sprite.svg#adress"></use>
					</svg>
					<address class="footer-info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
				</div>
				<div class="footer-info">
					<svg class="footer-mail" width="16" height="12">
						<use href="icon/sprite.svg#mail"></use>
					</svg>
					<a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">a.dragunov@tdaliance.ru</a>
				</div>
				<div class="footer-social">
					<a href="#" class="footer-social-link">
						<svg class="footer-social-icon" width="20" height="12">
						<use href="icon/sprite.svg#vk"></use>
						</svg>
					</a>
					<a href="#" class="footer-social-link">
						<svg class="footer-social-icon" width="16" height="16">
							<use href="icon/sprite.svg#instagram"></use>
						</svg> 
					</a>
				</div>
			</div>
			<!-- /.footer-top -->
		</div>
		<!-- /.container -->
		<hr class="footer-seporator">
		<div class="container">
			<div class="footer-bottom">
				<div class="footer-menu-wrapper footer-menu-bottom-1">
					<h2 class="footer-menu-title">Контрактное производство</h2>
					<ul class="footer-menu-list footer-menu-column">
						<li class="footer-menu-item">
							<a href="#" class="footer-menu-link">Автомобильная химия</a>
						</li>
						<li class="footer-menu-item">
							<a href="#" class="footer-menu-link">Бытовая химия</a>
						</li>
						<li class="footer-menu-item">
							<a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
						</li>
						<li class="footer-menu-item">
							<a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
						</li>
						<li class="footer-menu-item">
							<a href="#" class="footer-menu-link">Косметическая продукция</a>
						</li>
						<li class="footer-menu-item">
							<a href="#" class="footer-menu-link">Краски аэрозольные</a>
						</li>
					</ul>
				</div>
				<!-- /.footer-menu-wrapper -->
				<div class="footer-menu-wrapper footer-menu-bottom-2">
					<h2 class="footer-menu-title">Собственные марки</h2>
					<ul class="footer-menu-list">
						<li class="footer-menu-item">
							<a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
						</li>
						<li class="footer-menu-item">
							<a href="#" class="footer-menu-link">Автохимия AP</a>
						</li>
					</ul>
				</div>
				<!-- /.footer-menu-wrapper -->
				<div class="footer-menu-wrapper footer-menu-bottom-3">
					<ul class="footer-menu-list">
						<li class="footer-menu-item">
							<a href="#" class="footer-menu-link footer-menu-link-b">О компании</a>
						</li>
						<li class="footer-menu-item">
							<a href="#" class="footer-menu-link footer-menu-link-b">Новости</a>
						</li>
						<li class="footer-menu-item">
							<a href="#" class="footer-menu-link footer-menu-link-b">Контакты</a>
						</li>
					</ul>
				</div>
				<!-- /.footer-menu-wrapper -->
			</div>
			<!-- /.footer-bottom -->
		</div>
		<hr class="footer-seporator">
		<div class="container">
			<div class="footer-legal-wrapper">
				<div class="footer-legal">
					<p class="footer-copyright">
						&copy; <?php echo date('Y')?> «Aliance Production». Все права защищены.
					</p>
					<!-- /.copyright -->
					<a href="#" class="footer-policy">Политики конфиденциальности </a>
					<!-- /.footer-policy -->
				</div>
				<!-- /.footer-legal -->
				<div class="footer-author">
					<span class="made-in">
						Сделано в
					</span>
					<svg class="author-logo" width="52" height="11">
						<use href="icon/sprite.svg#ruso"></use>
					</svg> 
				</div>
				<!-- /.footer-avtor -->
			</div>
		</div>
		<!-- /.container -->
	</footer> 
	<!-- /.footer -->

	<div class="modal">
		<div class="modal-dialog">
			<h2 class="modal-title">Есть вопросы?</h2>
			<a href="#" class="modal-close" data-toggle="modal">
				<svg class="close-icon">
					<use href="icon/sprite.svg#close"></use>
				</svg> 
			</a>
			<p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
			<form action="./handler.php" method="POST" class="modal-form">
				<div class="input-group-wrapper input-group-vertical">
					<div class="input-group modal-input-group">
						<input 
							id="modal-user-name" 
							type="text" 
                            name="username"
							class="input modal-input" 
							placeholder=" "
                            maxlength="100"
                            required>
						<label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
					</div>
					<div class="input-group modal-input-group">
						<input 
							id="modal-user-phone" 
							type="tel"
                            name="userphone" 
							class="input modal-input"
							placeholder=" "
                            maxlength="30"
                            required>
						<label class="input-group-label modal-input-label" for="modal-user-phone">Номер телефона</label>
					</div>
				</div>
				<div class="modal-form-footer">
					<button type="submit" class="btn modal-form-button">Отправить заявку</button>
					<div class="notify">
						<svg class="notify-icon" height="14" width="14">
							<use href="icon/sprite.svg#notify"></use>
						</svg>
						<p class="notify-text">
							Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
						</p>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script src="js/swiper-bundle.min.js"></script>
	<script src="js/just-validate.production.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>