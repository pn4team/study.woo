<?php 
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Add second options page under 'Basic Options'
Container::make( 'theme_options', 'Настройки темы' )
    ->set_icon( 'dashicons-carrot' )
    ->add_tab( __('Шапка'), array(
        Field::make( 'image', 'est_header_logo', 'Логотип' )
          ->set_width( 10 ),
        Field::make( 'text', 'crb_first_name', 'First Name' ),
        Field::make( 'text', 'crb_last_name', 'Last Name' ),
        Field::make( 'text', 'crb_position', 'Position' ),
    ) )
    ->add_tab( __('Подвал'), array(
        Field::make( 'text', 'crb_email', 'Notification Email' ),
        Field::make( 'text', 'crb_phone', 'Phone Number' ),
    ) );
?>