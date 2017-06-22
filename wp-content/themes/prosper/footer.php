    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php if (!dynamic_sidebar("first-widget-area") ) : ?><?php endif; ?>
                </div>
                <div class="col-md-4">
                    <div class="social__footer">
                        <a target="_blank" href="https://www.facebook.com/Prosper-1761892467170567/">
                            <span>
                                <i class="fa fa-facebook"></i>
                            </span>
                        </a>
                        <a target="_blank" href="https://vk.com/public146936914">
                            <span>
                                <i class="fa fa-vk"></i>
                            </span>
                        </a>
                        <a target="_blank" href="https://ok.ru/profile/587604532275">
                            <span>
                                <i class="fa fa-odnoklassniki"></i>
                            </span>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/prosper7100/">
                            <span>
                                <i class="fa fa-instagram"></i>
                            </span>
                        </a>
                    </div>
                    <div class="list__link">
                        <?php if (!dynamic_sidebar("second-widget-area") ) : ?><?php endif; ?>
                    </div>

                </div>
                <div class="col-md-4 footer_last_block">
                    <div class="phone">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        +7 (495) <span>134 37 73</span>
                    </div>
                    <div class="list__link">
                        <?php if (!dynamic_sidebar("third-widget-area") ) : ?><?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade bs-example-modal-sm_other" id="backcall_form" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title" id="mySmallModalLabel">Пожалуйста заполните форму</h4>
                </div>
                <div class="modal-body">
                  <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
                </div>
            </div>
          </div>
        </div>
    </footer>
    <!-- Footer -->
    <?php wp_footer(); ?>
    <script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/slick.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider__container').slick({
                    autoplay: true,
                <?php if (is_front_page()) { ?>
                    autoplaySpeed: 30000,
                    prevArrow: '<button type="button" class="hovered slick-prev"><img src="<?php bloginfo('template_url'); ?>/img/left.png" alt="" /></button>',
                    nextArrow: '<button type="button" class="hovered slick-next"><img src="<?php bloginfo('template_url'); ?>/img/right.png" alt="" /></button>'
                <?php } else { ?>
                    autoplaySpeed: 5000,
                    prevArrow: '<button type="button" class="slick-prev"><img src="<?php bloginfo('template_url'); ?>/img/left.png" alt="" /></button>',
                    nextArrow: '<button type="button" class="slick-next"><img src="<?php bloginfo('template_url'); ?>/img/right.png" alt="" /></button>'
                <?php } ?>
            });
        });
    </script>
    <script>
        jQuery( document ).ready(function($) {
            <?php if (is_front_page()) { ?>
                $('.slider_video').each(function(index, el) {
                    $(this).get(0).play();
                });
            <?php } ?>
            var vid = document.getElementById("slider_video");
            vid.volume = 0.5;
            $('.slick-cloned').find('.slider_video').each(function(index, el) {
                $(this).get(0).pause();
            });
            $('.slider_video').click(function() {
                this.paused ? this.play() : this.pause();
            });
            $('.slick-arrow').click(function() {
                $('.slider_video').each(function(index, el) {
                    this.pause();
                });
            });
        });
        $('.slider__container').slick({
            autoplay: true,
            
            <?php if (is_front_page()) { ?>
                autoplaySpeed: 30000,
            <?php } else { ?>
                autoplaySpeed: 3000,
            <?php } ?>
            prevArrow: '<button type="button" class="slider_nav slick-prev"><img src="<?php bloginfo('template_url'); ?>/img/left.png" alt="" /></button>',
            nextArrow: '<button type="button" class="slider_nav slick-next"><img src="<?php bloginfo('template_url'); ?>/img/right.png" alt="" /></button>'
        });
    </script>
</body>
</html>
