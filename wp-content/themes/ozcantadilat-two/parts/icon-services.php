<section class="services">
  <div class="container bg-light py-4">
    <div class="row justify-content-md-center px-4">    

    <?php
        $service_icons = get_posts( [
          'numberposts' => -1,
          'category_name' => 'icon_service',
          'orderby'     => 'date',
          'order'       => 'ASC',                    
          'post_type'   => 'post',
          'suppress_filters' => true, // suppression of filters of SQL query change
        ] );

        foreach( $service_icons as $post ){
          setup_postdata( $post );
      ?>

      <div class="col-12 col-md-6"
        data-aos="fade-zoom-in" 
        data-aos-offset="200" 
        data-aos-easing="ease-in-sine" 
        data-aos-duration="700"
      >
        <div class="service-item">
          <div class="service-icon d-flex justify-content-center align-items-center">
            <div class="text-center">
              <i class="<?php the_field('fa_icon_classes'); ?>"></i>
            </div>                         
          </div>
          <div class="ornament">
            <div class="ornament-line"></div>
            <div></div>
          </div>
          <div class="service-content mt-2">
            <h6 class="text-center"><?php the_title(); ?></h6>
            <div class="service-line"></div>
            <div class="">
              <p><?php the_content(); ?></p>                          
            </div>                        
          </div>                  
        </div>
      </div>            

    <?php
      }
      wp_reset_postdata(); // reset $post                   
    ?>
    </div>
  </div>
</section>