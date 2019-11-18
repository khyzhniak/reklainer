<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	// Default options page
	$basic_options_container = Container::make( 'theme_options', __( 'Theme Options' ) )
	                                    ->add_fields( array(
		                                    Field::make( 'header_scripts', 'ineed-print_header_script', __( 'Скрипты в шапке' ) ),
		                                    Field::make( 'footer_scripts', 'ineed-print_footer_script', __( 'Скрипты в футере' ) ),
	                                    ) );
	// Настройки хедера
	Container::make( 'theme_options', 'head', __( 'Настройки шапки' ) )
	         ->set_page_parent( $basic_options_container )// reference to a top level container
	         ->add_fields( array(
			Field::make( 'text', 'main_addr_bold', __( 'Главный адресс жырный' ) ),
			Field::make( 'text', 'main_addr_thin', __( 'Главный адресс тонкий' ) ),
			Field::make( 'text', 'main_phone_hidden', __( 'Главный телефон скрытый' ) ),
			Field::make( 'text', 'main_phone_eminent', __( 'Главный телефон видный' ) ),
			Field::make( 'text', 'main_phone_text', __( 'Текст под телефоном в шапке' ) ),
			Field::make( 'text', 'main_phone_text2', __( 'Текст заказать звонок' ) ),
		) );

	Container::make( 'theme_options', 'options_repeat_block', __( 'Настройка блоков' ) )
	         ->add_fields( array(
		         Field::make( 'complex', 'block_services', __( 'Настройка блока Услуги' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'block_services_h3', __( 'Заголовок' ) ),
			              Field::make( 'text', 'block_services_h3_link', __( 'Ссылка заголовка' ) ),
			              Field::make( 'image', 'block_services_background_img', __( 'Картинка блока' ) )
			                   ->set_value_type( 'url' ),
			              Field::make( 'text', 'block_services_price', __( 'Цена' ) ),
			              Field::make( 'complex', 'block_services_ul', __( 'Список' ) )
			                   ->add_fields( array(
				                   Field::make( 'text', 'block_services_li', __( 'Поле списка' ) ),
				                   Field::make( 'text', 'block_services_li_link', __( 'Ссылка списка' ) ),
			                   ) ),
		              ) ),
		         Field::make( 'complex', 'block_services_down', __( 'Услуги в низу' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'block_services_down_a', __( 'Название услуги' ) ),
			              Field::make( 'text', 'block_services_down_a_link', __( 'Название услуги ссылка' ) ),
			              )),
		         Field::make( 'complex', 'block_example_work_slider', __( 'Настройка блока "Примеры работ Слайд"' ) )
			         ->add_fields( array(
		         Field::make( 'complex', 'block_example_work', __( 'Настройка блока "Примеры работ"' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'block_example_work_text', __( 'Заголовок' ) ),
			              Field::make( 'text', 'block_example_work_characteristics', __( 'Характеристики' ) ),
			              Field::make( 'text', 'block_example_work_price', __( 'Цена' ) ),
			              Field::make( 'image', 'block_example_work_img', __( 'Картинка блока' ) )
			                   ->set_value_type( 'url' ),
			              )),
				         Field::make( 'text', 'block_example_work_consultation_link', __( 'Ссылка получить консультацию' ) ),
				         )),
		         Field::make( 'image', 'message_forms_manager_img', __( 'Фотография Менеджера' ) )
			         ->set_value_type( 'url' ),
		         Field::make( 'text', 'message_forms_manager_name', __( 'Имя' ) ),
		         Field::make( 'text', 'message_forms_manager_position', __( 'Должность' ) ),
		         Field::make( 'textarea', 'message_forms_heading', __( 'Заголовок формы' ) ),
		         Field::make( 'text', 'message_forms_name', __( 'Текст над "Имя"' ) ),
		         Field::make( 'text', 'message_forms_phone', __( 'Текст над "Телефоном"' ) ),
		         Field::make( 'text', 'message_forms_textarea', __( 'Текст над "Рассчитать стоимость"' ) ),
		         Field::make( 'complex', 'message_forms_right_block', __( 'Достоинства' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'message_forms_right_block_h', __( 'Заголовок' ) ),
			              Field::make( 'textarea', 'message_forms_right_block_p', __( 'Ваш текст' ) ),
		              )),
		         Field::make( 'textarea', 'question_desktop_a', __( 'Вопрос' ) ),
		         Field::make( 'textarea', 'question_desktop_p', __( 'Ответ' ) ),
		         Field::make( 'textarea', 'question_desktop_a1', __( 'Вопрос' ) ),
		         Field::make( 'textarea', 'question_desktop_p1', __( 'Ответ' ) ),
		         Field::make( 'textarea', 'question_desktop_a2', __( 'Вопрос' ) ),
		         Field::make( 'textarea', 'question_desktop_p2', __( 'Ответ' ) ),
		         Field::make( 'textarea', 'question_desktop_a3', __( 'Вопрос' ) ),
		         Field::make( 'textarea', 'question_desktop_p3', __( 'Ответ' ) ),
		         Field::make( 'complex', 'question_desktop_blog', __( 'Блог инфо>' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'question_desktop_blog_h', __( 'Заголовок' ) ),
			              Field::make( 'text', 'question_desktop_blog_data', __( 'Дата' ) ),
			              Field::make( 'text', 'question_desktop_blog_link', __( 'Ссылка на блог' ) ),
		              )),
	         ) );
	Container::make( 'theme_options', 'answer-forms', __( 'Настройки Ответим на вопросы' ) )
	         ->set_page_parent( $basic_options_container )// reference to a top level container
	         ->add_tab( __( 'Обратная связь' ), array(
			Field::make( 'text', 'answer__form_head', __( 'Текст "Ответим на вопросы"' ) ),
			Field::make( 'text', 'answer__form_head_name', __( 'Текст над полем "Имя"' ) ),
			Field::make( 'text', 'answer__form_head_phone', __( 'Текст над полем "Телефон"' ) ),
			Field::make( 'text', 'answer__form_head_button_text', __( 'Текст "Кнопки"' ) ),
			Field::make( 'text', 'answer__form_head_button_link', __( 'Ссылка "Кнопки"' ) ),
			Field::make( 'text', 'answer__form_head_down_text', __( 'Текст под кнопкой' ) ),
			Field::make( 'text', 'answer__form_head_down_a', __( 'Текст ссылки' ) ),
			Field::make( 'text', 'answer__form_head_down_a_link', __( 'Ссылка' ) ),
		));
	// Настройки Главной страницы
	Container::make( 'post_meta', 'main-page', __( 'Содержимое Главной страницы' ) )
	         ->where( 'post_type', '=', 'page' )
	         ->where( 'post_template', '=', 'main-page.php' )
	         ->add_fields( array(
		         Field::make( 'text', 'main_page_slag', __( 'Главный слоган на первой странице' ) ),
		         Field::make( 'text', 'main_page_video_link_text', __( 'Текст возле видеоссылки на первой странице' ) ),
		         Field::make( 'text', 'main_page_former__info_block-one', __( 'Текст на синем блоке на первой странице' ) ),
		         Field::make( 'complex', 'former__info_block_two', __( 'Список главных фич на первом экране' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'former__info_block_two_text_n', __( 'Фича текст' ) ),
		              ) ),
		         Field::make( 'text', 'main_page_about_company_slog', __( 'О компании "слоган"' ) ),
		         Field::make( 'textarea', 'main_page_about_company_text', __( 'О компании "текст"' ) ),
		         Field::make( 'image', 'main_page_about_company_img', __( 'Вставте картинку' ) )
		              ->set_value_type( 'url' ),
		         Field::make( 'complex', 'main_page_about_company_ul', __( 'Список о компании' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'main_page_about_company_li', __( 'Поле списка' ) ),
		              ) ),
		         Field::make( 'complex', 'main_page_about_company_ul_2', __( 'Список о компании' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'main_page_about_company_li_2', __( 'Поле списка' ) ),
		              ) ),

	         ) );
	Container::make('post_meta', ('Доп. поля товара'))
		 ->where('post_type', '=', 'product')
		 ->add_fields(array(
//				Field::make( 'rich_text', 'product_my_description', __( 'Описание' ) ),
				Field::make( 'rich_text', 'product_my_characteristic', __( 'Характеристики' ) ),
				Field::make( 'rich_text', 'product_my_assembly_instruction', __( 'Инструкция по сборке' ) ),
				Field::make( 'rich_text', 'product_my_care_information', __( 'Информация по уходу' ) ),
				Field::make( 'text', 'product_my_top_text', __( 'Строка над товаром на странце магазина' ) ),

		 ));
}
