<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  <title><?php the_title(); ?></title>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/fav.ico">
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
            <picture>
              <source srcset="<?php bloginfo('template_url'); ?>/img/smal_logo.png" media="(max-width: 992px)">
              <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="">
            </picture>
          </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <form role="search" class="navbar-form navbar-right" method="get" id="searchform" action="<?php bloginfo('siteurl'); ?>">
            <div id="search-input" class="form-group">
              <input id="search_text" placeholder="Что искать?" class="form-control" type="text" value="" name="s" id="s">
            </div>
            <div id="jx-search-submit">
              <button type="submit" class="btn btn-default"><img src="<?php bloginfo('template_url'); ?>/img/search-icon.png" alt=""></i></button>
              <!-- Submit Button -->  
            </div>
          </form>
          <?php 
            $menu = wp_nav_menu(array('menu' => 'Main Navigation', 'container' => false, menu_class => 'nav navbar-nav' ));
            echo $menu;
          ?> 
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Header -->
  <main>
    <div class="contact contact_web">
      <div class="container">
        <div class="contact__block">
          <a href="#" data-toggle="modal" data-target="#backcall_form" class="zvonok">обратный звонок</a>
          <ul class="social__header">
            <li><a target="_blank" href="https://www.facebook.com/Prosper-1761892467170567/">
              <i class="fa fa-facebook"></i>
            </a></li>
            <li><a target="_blank" href="https://vk.com/public146936914">
              <i class="fa fa-vk"></i>
            </a></li>
            <li><a target="_blank" href="https://ok.ru/profile/587604532275">
              <i class="fa fa-odnoklassniki"></i>
            </a></li>
            <li><a target="_blank" href="https://www.instagram.com/prosper7100/">
              <i class="fa fa-instagram"></i>
            </a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Contact -->
    <?php
      // The Query
      $query = new WP_Query( 'page_id=98' );
      while ($query->have_posts()) : $query->the_post();

        if( have_rows('slider') ):
          echo '<section class="slider">';
            echo '<div class="slider__container" >';
            while( have_rows('slider') ): the_row();
              // vars
              $slider_img = get_sub_field('slider_img');
              $slider_video = get_sub_field('slider_video');
              $slider_title = get_sub_field('slider_title');
              $slider_subtitle = get_sub_field('slider_subtitle');
              $slider_btn_text = get_sub_field('slider_btn_text');
              $slider_btn_link = get_sub_field('slider_btn_link');

              echo '<div class="slider__item">';
                if( $slider_img ):
                  echo '<a href="';
                  echo $slider_btn_link;
                  echo '">';
                  echo '<img src="';
                  echo $slider_img;
                  echo '" alt="" class="slide__img">';
                elseif($slider_video):
                  echo '<div class="video_wrap">';
                  echo '<video id="slider_video" class="slider_video" width="100%" height="auto" controls preload="metadata">';
                  echo '<source src="';
                  echo $slider_video;
                  echo '" type="video/mp4">';
                  echo '<source src="movie.ogg" type="video/ogg">';
                  echo 'Ваш браузер не поддержвает видео.';
                  echo '</video>';
                  echo '</div>';
                endif;
                echo '<div class="content__slider">';
                  if( $slider_title ):
                    echo '<h1>';
                    echo $slider_title;
                    echo '</h1>';
                  endif;
                  if( $slider_subtitle ):
                    echo '<p>';
                    echo $slider_subtitle;
                    echo '</p>';
                  endif;
                echo '</div>';
                if( $slider_img ):
                  echo '</a>';
                endif;
              echo '</div>';
            endwhile;
            echo '</div>';
          echo '</section>';
        endif;
        // Slider
      endwhile;
      wp_reset_postdata(); 
    ?>
    <div class="contact contact_mobile">
      <div class="container">
        <div class="contact__block">
          <a href="#" data-toggle="modal" data-target="#backcall_form" class="zvonok">обратный звонок</a>
          <ul class="social__header">
            <li><a target="_blank" href="https://www.facebook.com/Prosper-1761892467170567/">
              <i class="fa fa-facebook"></i>
            </a></li>
            <li><a target="_blank" href="https://vk.com/public146936914">
              <i class="fa fa-vk"></i>
            </a></li>
            <li><a target="_blank" href="https://ok.ru/profile/587604532275">
              <i class="fa fa-odnoklassniki"></i>
            </a></li>
            <li><a target="_blank" href="https://www.instagram.com/prosper7100/">
              <i class="fa fa-instagram"></i>
            </a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Contact -->
