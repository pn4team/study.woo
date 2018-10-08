<?php 
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Add second options page under 'Basic Options'
Container::make( 'theme_options', 'Настройки темы' )
    ->set_icon( 'dashicons-carrot' )
    ->add_tab( __('Шапка'), array(
        Field::make( 'select', 'est_header_logic', 'Будет ли использоваться логотип?' )
		->add_options(array(
		  'yes' => 'Да, буду использовать лого',
		  'no' => 'Нет, буду использовать текст'
		)),
		Field::make( 'image', 'est_header_logo', 'Логотип' )
		->set_conditional_logic(array(
			  'relation' => 'AND',
			  array(
				  'field' => 'est_header_logic',
				  'value' => 'yes',
				  'compare' => '=',
			  )
		  )),
        Field::make( 'text', 'est_header_site_name', 'Название сайта' )
		->set_conditional_logic(array(
			  'relation' => 'AND',
			  array(
				  'field' => 'est_header_logic',
				  'value' => 'no',
				  'compare' => '=',
			  )
		  )),
        Field::make( 'text', 'est_header_site_desc', 'Описание сайта' )
		->set_conditional_logic(array(
			  'relation' => 'AND',
			  array(
				  'field' => 'est_header_logic',
				  'value' => 'no',
				  'compare' => '=',
			  )
		  )),
    ) )
    ->add_tab( __('Подвал'), array(
        Field::make( 'text', 'crb_email', 'Notification Email' ),
        Field::make( 'text', 'crb_phone', 'Phone Number' ),
    ) );
?>