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
                    array( 'category_name' => 'news', 'posts_per_page' => '2' ) 
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
                          echo the_content('(Читать дальше...)');
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
                                <h3><?php echo sa_option( 'heading_field_one' ); ?></h3>
                                <p><?php echo sa_option( 'subheading_field_one' ); ?></p>
                            </div>
                            <div class="product__block__content">
                                <img src="<?php echo sa_option( 'img_field_one' ); ?>" alt="">
                            </div>
                            <div class="product__block__footer">
                                <a href="<?php echo sa_option( 'link_field_one' ); ?>">узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product__block">
                            <div class="product__block__header">
                                <h3><?php echo sa_option( 'heading_field_two' ); ?></h3>
                                <p><?php echo sa_option( 'subheading_field_two' ); ?></p>
                            </div>
                            <div class="product__block__content">
                                <img src="<?php echo sa_option( 'img_field_two' ); ?>" alt="">
                            </div>
                            <div class="product__block__footer">
                                <a href="<?php echo sa_option( 'link_field_two' ); ?>">узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product__block">
                            <div class="product__block__header">
                                <h3><?php echo sa_option( 'heading_field_three' ); ?></h3>
                                <p><?php echo sa_option( 'subheading_field_three' ); ?></p>
                            </div>
                            <div class="product__block__content">
                                <img src="<?php echo sa_option( 'img_field_three' ); ?>" alt="">
                            </div>
                            <div class="product__block__footer">
                                <a href="<?php echo sa_option( 'link_field_three' ); ?>">узнать больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product__block">
                            <div class="product__block__header">
                                <h3><?php echo sa_option( 'heading_field_four' ); ?></h3>
                                <p><?php echo sa_option( 'subheading_field_four' ); ?></p>
                            </div>
                            <div class="product__block__content">
                                <img src="<?php echo sa_option( 'img_field_four' ); ?>" alt="">
                            </div>
                            <div class="product__block__footer">
                                <a href="<?php echo sa_option( 'link_field_four' ); ?>">узнать больше</a>
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
