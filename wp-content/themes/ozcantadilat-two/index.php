<?php get_header(); ?>
  <div id="content" class="site-content">
      <div id="primary" class="content-area">
          <main id="main" class="site-main">
            <?php get_template_part('parts/main-slider'); ?>              
            <?php get_template_part('parts/icon-services'); ?>                          
            <section class="text-services">
              <div class="container bg-secondary-subtle">
                <div class="row px-4 py-0">
                  <div class="col-12 col-md-3 g-0 pt-4">
                    <div class="works-wrapper" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
                      <h6 class="text-center">Ne yapıyoruz</h6>
                      <div class="service-line"></div>
                    </div>
                    <?php get_template_part('parts/work-list'); ?>                                       
                  </div>
                  <div class="col-12 col-md-4 g-0">
                    <div data-aos="slide-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="900">
                      <img class="w-100 object-fit-fill" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/works_img.jpg" alt="works"/>
                    </div>
                  </div>                  
                  <div class="col-12 col-md-5 g-0 pt-4">
                    <?php get_template_part('parts/progress-bars'); ?>  
                  </div>
                </div>
              </div>
            </section>
            <?php get_template_part('parts/recent-posts-section'); ?>                                      
            <?php get_template_part('parts/review-slider'); ?>
            <?php get_template_part('parts/footer-info'); ?>            
            <section>
              Copyright
            </section>
          </main>
      </div>
<?php get_footer(); ?>