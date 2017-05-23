<?php get_header(); ?>
        <section class="news">
          <div class="title-bg">
              <div class="container">
                  <h2>Новости</h2>
              </div>
          </div>
          <div class="container">
            <div class="row">
                <?php
                  // The Query
                  $query = new WP_Query( 
                    array( 'category_name' => 'novosti-i-stati', 'posts_per_page' => '2' ) 
                  );
                  while ($query->have_posts()) : $query->the_post();
                    echo '<div class="col-md-6">';
                      echo '<div class="news__block">';
                        echo '<div class="col-md-4 img_st">';
                          echo the_post_thumbnail(array(200,200));
                        echo '</div>';
                        echo '<div class="col-md-8">';
                          echo '<h3>';
                          echo '<a href="';
                          echo the_permalink();
                          echo '">';
                          echo the_time('d.m.Y');
                          echo ' ';
                          echo the_title();
                          echo '</a>';
                          echo '</h3>';
                          echo '<p>';
                          echo the_content();
                          echo '</p>';
                          echo '<a href="';
                          echo the_permalink();
                          echo '"> > </a>';
                        echo '</div>';
                      echo '</div>';
                    echo '</div>';
                endwhile;
                wp_reset_postdata(); 
              ?>
            </div>
          </div>
        </section>
        <!-- News -->

        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product__block">
                            <div class="product__block__header">
                                <h3>порошок</h3>
                                <p>Hand Wash Lemon</p>
                            </div>
                            <div class="product__block__content">
                                <img src="<?php bloginfo('template_url'); ?>/img/poroshok.png" alt="">
                            </div>
                            <div class="product__block__footer">
                                <a href="/stiralnyj-poroshok-prosper-hand-wash-lemon/">узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product__block">
                            <div class="product__block__header">
                                <h3>Гель</h3>
                                <p>ДЛЯ СТИРКИ</p>
                            </div>
                            <div class="product__block__content">
                                <img src="<?php bloginfo('template_url'); ?>/img/gel.png" alt="">
                            </div>
                            <div class="product__block__footer">
                                <a href="/gel-dlya-stirki-cvetnogo-belya-prosper/">узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product__block">
                            <div class="product__block__header">
                                <h3>капсулы</h3>
                                <p>для стирки</p>
                            </div>
                            <div class="product__block__content">
                                <img src="<?php bloginfo('template_url'); ?>/img/capsuly.png" alt="">
                            </div>
                            <div class="product__block__footer">
                                <a href="/kapsuly-dlya-stirki-prosper-eco-friendly/">узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product__block">
                            <div class="product__block__header">
                                <h3>кондиционер</h3>
                                <p>для черного белья</p>
                            </div>
                            <div class="product__block__content">
                                <img src="<?php bloginfo('template_url'); ?>/img/conditioner.png" alt="">
                            </div>
                            <div class="product__block__footer">
                                <a href="/kondicioner-dlya-chernogo-belya-prosper/">узнать больше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product -->

        <section class="o-brende">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                          <?php
                            echo the_content();
                          ?>
                      <?php endwhile; else: ?>
                          <section>
                            <div class="container">
                              <div class="row" style="text-align: center;">
                                <?php _e('Sorry, no posts matched your criteria.'); ?>
                              </div>
                            </div>
                          </section> 
                      <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- o-brende -->

    </main>
    <!-- Main -->
<?php get_footer(); ?>
