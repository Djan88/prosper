<?php get_header(); ?>
    <section class="news">
      <div class="title-bg">
        <div class="container">
          <h2<?php if (is_page('10')) { ?>
            style="padding-left: 22px;"
          <?php };?>>
            <?php if (is_category()) { ?>
              <?php single_cat_title(); ?>
            <?php } else {?>
              <?php the_title(); ?>
            <?php } ?>
          </h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <?php if (is_category('2') || is_category('3') || is_category('4') || is_category('5') || is_category('6') || is_category('7') || is_category('8') || is_category('9') || is_category('10')) { ?>
            <div class="col-md-4 col-xs-12">
              <?php 
                $menu_sub = wp_nav_menu(array('menu' => 'Sub Navigation', 'container' => false, menu_class => 'sub_nav' ));
                echo $menu_sub;
              ?>
            </div>
            <div class="col-md-8 col-xs-12">
              <div class="row">
                <div class="category_description">
                  <?php echo category_description(); ?>
                </div>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <div class="col-md-4 product_item">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail(array(300, 300)); ?>
                      <h4><?php the_title(); ?></h4>
                    </a>
                  </div>
                <?php endwhile; else: ?>
                  <section>
                    <div class="container">
                      <div class="row" style="text-align: center;">
                        <?php _e('Эта категория скоро будет добавлена'); ?>
                      </div>
                    </div>
                  </section> 
                <?php endif; ?>
              </div>
            </div>
          <?php } elseif (is_single()) { ?>
            <div class="col-md-4 col-xs-12">
              <?php 
                $menu_sub = wp_nav_menu(array('menu' => 'Sub Navigation', 'container' => false, menu_class => 'sub_nav' ));
                echo $menu_sub;
              ?>
            </div>
            <div class="col-md-8 col-xs-12 inner__page product">
              <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <div class="col-xs-12 col-md-4 col-sm-12 col-lg-4">
                    <div class="view__product">
                      <a href="<?php the_post_thumbnail_url( 'full' ); ?>" class="cboxElement">
                        <?php the_post_thumbnail(array(300, 300), array('class' => "product__image")); ?>
                      </a>
                      
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-8 col-sm-12 col-lg-8">
                    <div class="product__content">
                      <div class="opisanie opisanie_product">
                        <?php the_content();?>
                      </div>
                    </div>
                  </div>
                  <?php if( have_rows('params') ): ?>
                    <div class="col-xs-12 product_table__wrap delivery_params">
                      <div class="opisanie">
                        <table class="table table-striped product_table">
                          <thead>
                            <tr>
                              <th>Артикул</th>
                              <th>Номенклатура</th>
                              <th>Кол-во стирок</th>
                              <th>Упаковка</th>
                              <th>Общая упаковка</th>
                              <th>Кол-во в упаковке</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php while( have_rows('params') ): the_row();?>
                              <tr>
                                <td><?php the_sub_field('params_articul');?></td>
                                <td><?php the_sub_field('params_nom');?></td>
                                <td><?php the_sub_field('params_col');?></td>
                                <td><?php the_sub_field('params_korob');?></td>
                                <td><?php the_sub_field('params_pack');?></td>
                                <td><?php the_sub_field('params_in_pack');?></td>
                              </tr>
                            <?php endwhile; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  <?php endif; ?>
                  <?php if( have_rows('property_images') ): ?>
                    <div class="col-xs-12 product_table__wrap">
                      <div class="opisanie">
                        <table class="table table-striped product_table">
                          <tbody>
                            <tr>
                            <?php while( have_rows('property_images') ): the_row();?>
                                <td>
                                  <img src="<?php the_sub_field('property_image');?>" alt="property">
                                </td>
                            <?php endwhile; ?>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  <?php endif; ?>
                <?php endwhile; else: ?>
                  <section>
                    <div class="container">
                      <div class="row" style="text-align: center;">
                        <?php _e('Эта категория скоро будет добавлена'); ?>
                      </div>
                    </div>
                  </section> 
                <?php endif; ?>
              </div>
            </div>
          <?php } else { ?>
            <div class="col-md-12">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="row loop_item">
                  <?php if (get_the_post_thumbnail()) { ?>
                    <div class="col-md-2 img_st">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                      </a>
                    </div>
                    <div class="col-md-10">
                      <?php if (!is_page()) { ?>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <?php } ?>
                        <?php
                          echo the_content();
                        ?>
                    </div>
                  <?php } else { ?>
                    <div class="col-md-12">
                      <?php if (!is_page()) { ?>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <?php } ?>
                        <?php
                          echo the_content();
                        ?>
                    </div>
                  <?php } ?>
                </div>
              <?php endwhile; else: ?>
                <section>
                  <div class="container">
                    <div class="row" style="text-align: center;">
                      <?php _e('Извините, эта категоря пуста'); ?>
                    </div>
                  </div>
                </section> 
              <?php endif; ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
  <!-- o-brende -->
</main>
<!-- Main -->
<?php get_footer(); ?>
