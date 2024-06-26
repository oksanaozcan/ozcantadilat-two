<section>
    <div class="container px-4 py-4 bg-body-tertiary">
      <div class="row row-cols-md-auto justify-content-md-center">

        <?php
          $delay_counter = 100;
          $my_posts = get_posts( [
            'numberposts' => -1,
            'category_name' => 'services',
            'orderby'     => 'date',
            'order'       => 'ASC',                    
            'post_type'   => 'post',
            'suppress_filters' => true, // suppression of filters of SQL query change
          ] );

          foreach( $my_posts as $post ){
            setup_postdata( $post );
            $delay = ($delay_counter === 100) ? 100 : 200;    
            $delay_counter = ($delay_counter === 100) ? 200 : 100;
        ?>      

          <div class="col my-2">
              <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" class="link-offset-2 link-underline link-underline-opacity-0"
                data-aos="zoom-in-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600" data-aos-delay="<?php echo esc_attr($delay); ?>"
              >
                  <div class="card" style="width: 18rem;">
                      <?php
                          $thumbnail_id = get_post_thumbnail_id( $post->ID );
                          $image = wp_get_attachment_image( $thumbnail_id, 'medium', false, array( 'class' => 'card-img-top', 'alt' => 'service image', 'style' => 'height: 250px; object-fit: cover;' ) );
                          if ( $image ) {
                              echo $image;
                          }
                      ?>
                      <div class="card-body">
                          <h5 class="card-title"><?php esc_html(the_title()); ?></h5>
                          <p class="card-text"><?php esc_html(the_excerpt()); ?></p>
                      </div>
                  </div>
              </a>
          </div>
        
        <?php        
          }
          wp_reset_postdata(); // reset $post                   
        ?>

      </div>
    </div>
  </section>