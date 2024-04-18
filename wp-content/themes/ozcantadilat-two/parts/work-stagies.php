<section>
    <div class="container bg-light px-4">

      <div class="row py-4 text-center" data-aos="zoom-in-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
          <h1 class="text-uppercase fs-3"><?php echo esc_html(get_theme_mod('set_work_stages_title')); ?></h1>
          <div class="service-line"></div>  
          <p><?php echo esc_html(get_theme_mod('set_work_stages_subtitle')); ?></p>
        </div>       
      </div>

      <div class="row row-cols-1 row-cols-md-2 g-4">

      <?php
        $delay_counter = 100;

        $work_stages = get_posts( [
          'numberposts' => -1,
          'category_name' => 'work_stages',
          'orderby'     => 'date',
          'order'       => 'ASC',                    
          'post_type'   => 'post',
          'suppress_filters' => true, // suppression of filters of SQL query change
        ] );

        foreach( $work_stages as $post ){
          setup_postdata( $post );
          $delay = ($delay_counter === 100) ? 100 : 200;    
          $delay_counter = ($delay_counter === 100) ? 200 : 100;
      ?>

        <div class="col" data-aos="slide-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="<?php echo esc_attr($delay); ?>">
          <div class="card h-100">
            <div class="d-flex justify-content-center align-items-center">
              <div class="icon-wrapper m-2 d-flex justify-content-center align-items-center">              
                <div>
                  <i class="<?php esc_attr(the_field('work_stage_icon')); ?>"></i>               
                </div>                          
              </div>   
            </div>               
            <div class="card-body">
              <h5 class="card-title"><?php esc_html(the_title()); ?></h5>
              <p class="card-text"><?php esc_html(the_content()); ?></p>
            </div>
          </div>
        </div>        

      <?php
      }
      wp_reset_postdata(); // reset $post                   
      ?>

    </div>
  </section>