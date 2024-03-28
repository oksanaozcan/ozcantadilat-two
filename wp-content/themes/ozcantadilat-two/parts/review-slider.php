<section class="review-slider">
  <div class="container bg-secondary-subtle px-4 py-4">

  <div class="row">
    <div class="col">
      <div class="works-wrapper" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
        <h6 class="text-center text-uppercase">Görüşler</h6>
        <div class="service-line mb-4"></div>
      </div>                    
    </div>
  </div>     

  <div class="row ">
    <div id="review-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">

        <?php
          $my_posts = get_posts( [
            'numberposts' => -1,
            'category_name' => 'reviews',
            'orderby'     => 'date',
            'order'       => 'ASC',                    
            'post_type'   => 'post',
            'suppress_filters' => true, // suppression of filters of SQL query change
          ] );

          $slide_index = 0; // Variable to track slide index

          foreach( $my_posts as $post ){
            setup_postdata( $post );
        ?>

          <div class="w-100 carousel-item <?php echo ($slide_index == 0) ? 'active' : ''; ?>" style="height: 350px;">
            <div class="w-100 d-flex flex-column justify-content-center align-items-center">
              <div class="w-75 bg-white px-4 py-4 border border-secondary border-2 rounded" style="height: 250px;">
                <q><?php the_excerpt(); ?></q>
              </div>
            </div>
          </div>

        <?php
          $slide_index++; // Increment slide index
          }
          wp_reset_postdata(); // reset $post                   
        ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#review-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#review-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>   
  </div>                        
</section>