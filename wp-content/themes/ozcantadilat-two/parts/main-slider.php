<section class="main-slider">
  <div class="container p-0">
    <div id="main-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">

      <?php
        $my_posts = get_posts( [
          'numberposts' => -1,
          'category_name' => 'main_slider',
          'orderby'     => 'date',
          'order'       => 'ASC',                    
          'post_type'   => 'post',
          'suppress_filters' => true, // suppression of filters of SQL query change
        ] );

        $slide_index = 0; // Variable to track slide index

        foreach( $my_posts as $post ){
          setup_postdata( $post );
      ?>

        <div class="carousel-item <?php echo ($slide_index == 0) ? 'active' : ''; ?>">
          <img src="<?php the_field('slider_image'); ?>" class="d-block w-100" alt="<?php the_title(); ?>">
          <div class="carousel-caption slide-animation">
            <div class="bg-dark p-4 text-light bg-opacity-75">
              <h5><?php the_title(); ?></h5>
            </div>              
            <div class="d-none d-md-block">
            <div class="slider-gap"></div>
              <div class="bg-dark p-4 text-light bg-opacity-50">
                <p><?php the_content(); ?></p>

                <?php 
                  $field = get_field('slider_btn');
                  if ($field == 'on') {
                    ?>
                    <a href="<?php the_field('slider_link'); ?>" class="btn btn-outline-warning"><?php the_field('button_title'); ?></a>
                    <?php
                  }                            
                ?>

              </div>              
            </div>                                   
          </div>
        </div>

      <?php
        $slide_index++; // Increment slide index
        }
        wp_reset_postdata(); // reset $post                   
      ?>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#main-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#main-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>                        
</section>