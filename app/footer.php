<footer class="footer">
		<div class="container">
			 <div class="footer-logo">
				 <a href="index.php" class="footer-logo__link">
					 <img src="img/footer-logo.png" alt="Логотип типографии">
				 </a>
			 </div>
			 <nav class="footer-nav">
				 <ul class="footer-nav__list">
					 <li class="footer-nav__list-item">
							<a href="#" class="footer-nav__link">О компании</a>
					 </li>
					 <li class="footer-nav__list-item">
							<a href="services.php" class="footer-nav__link">Услуги</a>
					 </li>
					 <li class="footer-nav__list-item">
							<a href="#" class="footer-nav__link">Продукция</a>
					 </li>
					 <li class="footer-nav__list-item">
							<a href="#" class="footer-nav__link">Клиентам</a>
					 </li>
					 <li class="footer-nav__list-item">
							<a href="#" class="footer-nav__link">Вакансии</a>
					 </li>
					 <li class="footer-nav__list-item">
							<a href="#" class="footer-nav__link">Оборудование</a>
					 </li>
					 <li class="footer-nav__list-item">
							<a href="#" class="footer-nav__link">Новости</a>
					 </li>
					 <li class="footer-nav__list-item">
							<a href="#" class="footer-nav__link">Контакты</a>
					 </li>
				 </ul>
			 </nav>
			 <div class="footer-contacts">
					<div class="footer-contacts__block">
						<a href="tel:+78123092430" class="footer-contacts__link footer-block__phone">+7 (812) 30-924-30</a>
						<a href="mailto:sergey.s@radiusink.ru" class="footer-contacts__link footer-block__email">sergey.s@radiusink.ru</a>
					</div>

					<div class="footer-contacts__block">
						<div class="footer-block__location">
							Санкт-Петербург, Малая Зеленина д. 10
						</div>
						<a href="mailto:sergey.s@radiusink.ru" class="footer-contacts__link footer-block__time">Пн-Пт: 10:00-18:00	Сб-Вс:  выходные</a>
					</div>
			 </div> <!-- /.footer-cotacts -->
			 <div class="footer-copy">
				 <div class="payment">
						<span class="payment-underline">Оплата безналом</span>
						(только для юр. лиц)
				 </div>
				 <div class="copy">
						&copy; r-print.net, 2018
				 </div>
			 </div>
		</div> <!-- /container -->
	</footer>

	<!-- modal windows -->
	<div class="popup-overlay">
		<div class="popup-consultation__dialog">
			<div class="popup-close"></div>
			<div class="popup-content">
				<div class="popup-title">
					заявкА на консультацию
				</div>
				<form action="#" class="popup-form">
					<input type="text" class="popup-form__input" placeholder="Ваше имя*">
					<input type="tel" class="popup-form__input" placeholder="Ваш номер телефона*">
					<input type="email" class="popup-form__input" placeholder="Ваша почта*">
					<div class="feedback-form__agreement">
						* - обязательные поля для заполнения
					</div>
					<button class="btn">
						Отправить
					</button>
				</form>
			</div>
		</div>
	</div>

	<div class="popup-feedback-overlay">
		<div class="popup-feedback__dialog">
			<div class="popup-close"></div>
			<div class="popup-content">
				<div class="popup-title">
						Написать отзыв
				</div>
				<form action="#" class="popup-form">
					<input type="text" class="popup-form__input" placeholder="Ваше имя*">
					<input type="tel" class="popup-form__input" placeholder="Ваш номер телефона*">
					<input type="email" class="popup-form__input" placeholder="Ваша почта*">
					<input type="text" class="popup-form__input" placeholder="Ссылка на ваш профииль в Facebook / Vk">
					<textarea class="popup-form__textarea" placeholder="Ваш отзыв*"></textarea>
					<div class="feedback-form__agreement">
						<div class="feedback-form__agreement-item">
							* - обязательные поля для заполнения
						</div>
						<div class="feedback-form__agreement">
							Нажимая на кнопку отправить, я даю свое согласие на обработку персональных данных и разрешаю опубликовать мой отзыв.
						</div>
					</div>
					<button class="btn">
						Отправить
					</button>
				</form>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.responsiveTabs.min.js"></script>
	<script src="https://unpkg.com/tippy.js@3/dist/tippy.all.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>