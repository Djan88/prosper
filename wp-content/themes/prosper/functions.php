<?php add_theme_support('post-thumbnails'); ?>
<?php
    if (function_exists('add_theme_support')) {
     add_theme_support('menus');
    }
?>
<?php
// Область виджетов на в футере I
  register_sidebar(array(
      'name' => __('I блок футера'),
      'id' => 'first-widget-area',
      'description' => __('Виджеты в первый блок'),
      'before_widget' => '<div class="widget block">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
  ));
?>
<?php
// Область виджетов на в футере II
  register_sidebar(array(
      'name' => __('II блок футера'),
      'id' => 'second-widget-area',
      'description' => __('Виджеты в первый блок'),
      'before_widget' => '<div class="widget block">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
  ));
?>
<?php
// Область виджетов на в футере III
  register_sidebar(array(
      'name' => __('III блок футера'),
      'id' => 'third-widget-area',
      'description' => __('Виджеты в первый блок'),
      'before_widget' => '<div class="widget block">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
  ));
?>
<?php require_once( dirname(__FILE__) . '/slickadmin/slickadmin.php' ); ?>
