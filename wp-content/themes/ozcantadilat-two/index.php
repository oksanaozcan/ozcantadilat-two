<?php get_header(); ?>
  <div id="content" class="site-content">
      <div id="primary" class="content-area">
          <main id="main" class="site-main">
            <?php get_template_part('parts/main-slider'); ?>              
            <?php get_template_part('parts/icon-services'); ?>                          
            <section class="text-services">
              <div class="container bg-secondary-subtle">
                <div class="row px-4 py-4">
                  <div class="col-12 col-md-4">
                    <div class="works-wrapper">
                      <h6 class="text-center">Ne yapıyoruz</h6>
                      <div class="service-line"></div>
                    </div>
                    <div class="works-list">
                      <div class="list-group" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">      
                        
                        <?php
                          $work_list = get_posts( [
                            'numberposts' => -1,
                            'category_name' => 'works_list',
                            'orderby'     => 'date',
                            'order'       => 'ASC',                    
                            'post_type'   => 'post',
                            'suppress_filters' => true, // suppression of filters of SQL query change
                          ] );

                          foreach( $work_list as $post ){
                            setup_postdata( $post );
                        ?>

                        <a href="#" class="list-group-item list-group-item-action bg-secondary-subtle">
                          <i class="fa-solid fa-check"></i><span><?php the_title(); ?></span>
                        </a>             
                     
                        <?php
                          }
                          wp_reset_postdata(); // reset $post                   
                        ?>                      
                        
                      </div>
                    </div>                    
                  </div>
                  <div class="col-12 col-md-4">
                    <div data-aos="slide-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="900">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/works_img.jpg" alt="works"/>
                    </div>
                  </div>
                  <div class="col-12 col-md-4">
                    works2
                  </div>
                </div>
              </div>
            </section>
          </main>
      </div>
<?php get_footer(); ?>