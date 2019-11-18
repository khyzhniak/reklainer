<?php /* Template Name: review */

get_header();
?>


	<div id="middle">

		<div class="banner-catalog banner-catalog_wrapp4" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/banner11.jpg);">
			<div class="container">
				<div class="banner-catalog-content">
					<div class="banner-catalog-content__right">
						<div class="title-site text_uppercase title-site_big title-site_bodoni title-site_h1">Отзывы</div>
					</div>
					<div class="banner-catalog-content__left">
						<div class="title-site title-site_lg text_shadow text_gradient title-site_h1">Отзывы </div>
						<ul class="bread-crumbs">
							<li><a href="#">Главная</a></li>
							<li>Отзывы</li>
						</ul>
					</div>
				</div>
			</div>
		</div>


		<div class="container">
			<div class="main-bl main-bl_sm br-bottom">
				<div class="bodoni-txt bodoni-txt_md bodoni-txt_center">Ваш вклад важен для нас. Пожалуйста, укажите ваш отзыв.</div>
			</div>

			<div class="s-box s-box_sm">
				<div class="title-site text_center title-site_h5">Вот некоторые отзывы от наших клиентов:</div>

				<div class="review-bl">
					<ul class="review-boxes">
						<li class="review-box">
							<div class="review-box__personal">
								<div class="review-box__img"></div>
								<div class="review-box__name">Александр</div>
							</div>
							<div class="review-box__content">
								<p><i>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna magna aliqua. Lorem ipsumdolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna magna aliqua.Lorem ipsumdolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna magna aliqua.”</i></p>
								<div class="review-box__info">
									<div class="box-rating">
										<div class="stars-st">
											<span class="icon icon-star"></span>
											<span class="icon icon-star"></span>
											<span class="icon icon-star"></span>
											<span class="icon icon-star"></span>
											<span class="icon icon-star-2"></span>
										</div>
										<div class="box-rating__value">4/5</div>
									</div>
									<div class="review-time">Опубликовано 54 минут назад</div>
								</div>
							</div>
						</li>
						<li class="review-box">
							<div class="review-box__personal">
								<div class="review-box__img"></div>
								<div class="review-box__name">Александр </div>
							</div>
							<div class="review-box__content">
								<p><i>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna magna aliqua. Lorem ipsumdolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna magna aliqua.Lorem ipsumdolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna magna aliqua.”</i></p>
								<div class="review-box__info">
									<div class="box-rating">
										<div class="stars-st">
											<span class="icon icon-star"></span>
											<span class="icon icon-star"></span>
											<span class="icon icon-star"></span>
											<span class="icon icon-star"></span>
											<span class="icon icon-star-2"></span>
										</div>
										<div class="box-rating__value">4/5</div>
									</div>
									<div class="review-time">Опубликовано 54 минут назад</div>
								</div>
							</div>
						</li>
						<li class="review-box">
							<div class="review-box__personal">
								<div class="review-box__img"></div>
								<div class="review-box__name">Александр</div>
							</div>
							<div class="review-box__content">
								<p><i>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna magna aliqua. Lorem ipsumdolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna magna aliqua.Lorem ipsumdolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna magna aliqua.”</i></p>
								<div class="review-box__info">
									<div class="box-rating">
										<div class="stars-st">
											<span class="icon icon-star"></span>
											<span class="icon icon-star"></span>
											<span class="icon icon-star"></span>
											<span class="icon icon-star"></span>
											<span class="icon icon-star-2"></span>
										</div>
										<div class="box-rating__value">4/5</div>
									</div>
									<div class="review-time">Опубликовано 54 минут назад</div>
								</div>
							</div>
						</li>
					</ul>
					<ul class="pagination">
						<li class="pagination__prev"><a href="#"><span class="fa fa-chevron-left"></span></a></li>
						<li class="pagination__active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li>...</li>
						<li><a href="#">7</a></li>
						<li class="pagination__next"><a href="#"><span class="fa fa-chevron-right"></span></a></li>
					</ul>
				</div>

				<form action="#" class="review-form form-inline">
					<div class="title-site text_center title-site_h2">Оставить отзыв</div>
					<div class="review-form__inner">

						<div class="form-group form-group_md-desc form-group_inline">
							<label for="formName" class="form-group__label">Ваше имя:<span>*</span></label>
							<input id="formName" class="form-group__field" type="text" required>
						</div>
						<div class="form-group form-group_md-desc form-group_inline">
							<label for="formEmail" class="form-group__label">Ваш Email:<span>*</span></label>
							<input id="formEmail" class="form-group__field" type="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" required>
						</div>
						<div class="form-group form-group_md-desc form-group_inline">
							<label for="formFile" class="form-group__label">Ваше изображение:</label>
							<input id="formFile" type="file">
						</div>
						<div class="form-group form-group_md-desc form-group_inline">
							<label for="formCapcha" class="form-group__label">Секретный код:<span>*</span></label>
							<div class="form-grou-capcha">
								<input id="formCapcha" class="form-grou-capcha__field" type="text">
								<span class="form-grou-capcha__btn">4D3TR</span>
							</div>
						</div>
						<div class="form-group form-group_md-desc form-group_inline">
							<label for="formComment" class="form-group__label">Ваш комментарий:<span>*</span></label>
							<textarea id="formComment" class="form-group__field" required></textarea>
						</div>
						<div class="form-group form-group_md-desc text_center form-group_btn">
							<input type="submit" value="Оставить отзыв" class="btn btn_lg btn_min-width">
						</div>
					</div>
				</form>
			</div>

		</div>

</div>
<?php
get_footer();
