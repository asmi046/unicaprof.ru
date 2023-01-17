<!-- В этом файле описываем все  всплывающие окна -->

<!-- Popup-JS -->
<div class="popup popup_callback">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close" aria-label="Закрыть модальное окно"></div>
			<div class="popup__item d-flex">
				<div class="popup__img">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/img/popup.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/img/popup.jpg?_v=1632757662937" alt="">
					</picture>
				</div>
				<div class="popup__form-block">   
					<h2>Заказать звонок</h2> 
					
					<div class="headen_form_blk">
						<p class="popup__notific">Оставьте заявку и мы свяжемся с Вами в течении 15 минут</p>
						<form id="callback_form" class="form">
							
							<div class="SendetMsg" style="display:none">
								Ваше сообщение успешно отправлено.
							</div>

							<div class="form__line headen_form_blk">
								<input type="hidden" name = "form_name" data-valuem = "Название формы" value = "Заказать звонок">
								<input type="hidden" name = "page_lnk" data-valuem = "Адрес страницы" value = "<? echo (is_home())?"https://unicaprof.ru/":get_the_permalink()?>">
								<input type="text" name="name" required data-valuem = "Имя" placeholder="Имя*" class="popup__form-input input">
								<input type="tel" name="tel" required data-valuem = "Телефон" placeholder="Телефон*" class="popup__form-input input">
								<input type="email" name="email" required data-valuem = "Email" placeholder="Email*" class="popup__form-input input">

								<p class="popup__policy">Заполняя данную форму вы соглашаетесь с <a href="#">политикой
									конфиденциальности</a></p>
								<button type="submit" class="popup__form-btn btn new_send_btn"
	          			data-formid="callback_form">Заказать</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <a href="#callback" class="header__popup-link _popup-link">ЗАКАЗАТЬ ЗВОНОК</a> -->
<!-- Popup-JS End -->

<div style="display: none;">
	<div class="box-modal" id="messgeModal">
		<div class="box-modal_close arcticmodal-close"><? _e("закрыть", "rubex"); ?></div>

		<div class="modalline" id="lineIcon">
		</div>

		<div class="modalline" id="lineMsg">
		</div>
	</div>
</div>

<div style="display: none;">
	<div class="box-modal box-modal-new box-modal-new__cust" id="question">
		<div class="box-modal_close box-modal_close_new arcticmodal-close">X</div>
		<img src="<?php bloginfo("template_url") ?>/img/similar-01.jpg" loading="lazy" />
		<div class="formArctikBlk mod-zagr-tur">
			<h2>Заказать звонок <span class='tkName'></span></h2>
			<p>Наши специалисты свяжутся с Вами в течение 15 минут</p>

			<form action="#" class="form-question">
				<div class="SendetMsg" style="display:none">
					Ваше сообщение успешно отправлено.
				</div>
				<div class="headen_form_blk">
					<input type="text" name="name" placeholder="Имя*" id="form-question-name" class="form-question__input input">
					<input type="tel" name="tel" placeholder="Телефон*" id="form-question-tel" class="form-question__input input">
				</div>
				<div class="callback-note mod-zagr-tur__note">Нажимая на кнопку "Отправить", вы соглашаетесь с <a class="tdu" href="<?php echo get_permalink(1312); ?>">условиями обработки персональных данных</a>.</div>
				<button type="submit" class="newButton btn">Отправить</button>
			</form>

		</div>
	</div>
</div>