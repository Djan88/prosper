<?php
/**
 * Slick Admin theme options
 *
 * Used to set default theme options
 */
function sa_theme_options() {

    $options = array(
    //Основные
        array(
            'name' => __( 'Настройки главной', 'slickadmin' ),
            'id' => 'tab_main',
            'type' => 'opentab',
        ),

        array(
            'name' => __( 'Заголовок №1', 'slickadmin' ),
            'type' => 'text',
            'desc' => 'Впишите заголовок',
            'id' => 'heading_field_one',
        ),

        array(
            'name' => __( 'Подзаголовок №1', 'slickadmin' ),
            'type' => 'text',
            'desc' => 'Добавьте текст описания к видеоролику',
            'id' => 'subheading_field_one',
        ),

        array(
            'name' => __( 'Изображение №1', 'slickadmin' ),
            'type' => 'text',
            'desc' => 'Добавьте текст описания к видеоролику',
            'id' => 'img_field_one',
        ),

        array(
            'name' => __( 'Ссылка №1', 'slickadmin' ),
            'type' => 'text',
            'desc' => 'Добавьте текст описания к видеоролику',
            'id' => 'link_field_one',
        ),

        array(
            'name' => __( 'Заголовок №2', 'slickadmin' ),
            'type' => 'text',
            'desc' => 'Впишите заголовок',
            'id' => 'heading_field_two',
        ),

        array(
            'name' => __( 'Подзаголовок №2', 'slickadmin' ),
            'type' => 'text',
            'desc' => 'Добавьте текст описания к видеоролику',
            'id' => 'subheading_field_two',
        ),

        array(
            'name' => __( 'Изображение №2', 'slickadmin' ),
            'type' => 'text',
            'desc' => 'Добавьте текст описания к видеоролику',
            'id' => 'img_field_two',
        ),

        array(
            'name' => __( 'Ссылка №2', 'slickadmin' ),
            'type' => 'text',
            'desc' => 'Добавьте текст описания к видеоролику',
            'id' => 'link_field_two',
        ),

        array(
            'name' => __( 'Заголовок №3', 'slickadmin' ),
            'type' => 'text',
            'desc' => 'Впишите заголовок',
            'id' => 'heading_field_three',
        ),

        array(
            'name' => __( 'Подзаголовок №3', 'slickadmin' ),
            'type' => 'text',
            'desc' => 'Добавьте текст описания к видеоролику',
            'id' => 'subheading_field_three',
        ),

        array(
            'name' => __( 'Изображение №3', 'slickadmin' ),
            'type' => 'text',
            'desc' => 'Добавьте текст описания к видеоролику',
            'id' => 'img_field_three',
        ),

        array(
            'name' => __( 'Ссылка №3', 'slickadmin' ),
            'type' => 'text',
            'desc' => 'Добавьте текст описания к видеоролику',
            'id' => 'link_field_three',
        ),

        array(
            'name' => __( 'Заголовок №4', 'slickadmin' ),
            'type' => 'text',
            'desc' => 'Впишите заголовок',
            'id' => 'heading_field_four',
        ),

        array(
            'name' => __( 'Подзаголовок №4', 'slickadmin' ),
            'type' => 'text',
            'desc' => 'Добавьте текст описания к видеоролику',
            'id' => 'subheading_field_four',
        ),

        array(
            'name' => __( 'Изображение №4', 'slickadmin' ),
            'type' => 'text',
            'desc' => 'Добавьте текст описания к видеоролику',
            'id' => 'img_field_four',
        ),

        array(
            'name' => __( 'Ссылка №4', 'slickadmin' ),
            'type' => 'text',
            'desc' => 'Добавьте текст описания к видеоролику',
            'id' => 'link_field_four',
        ),

        array(
            'type' => 'closetab',
        )

    );

    return $options;

}

?>
