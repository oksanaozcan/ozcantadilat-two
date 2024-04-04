<section>
    <div class="container px-4 py-4 bg-body-tertiary">
      <div class="row row-cols-3">

        <?php
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
        ?>      

          <div class="col my-2">
              <a href="<?php echo get_permalink($post->ID); ?>" class="link-offset-2 link-underline link-underline-opacity-0">
                  <div class="card" style="width: 18rem;">
                      <?php
                          $thumbnail_id = get_post_thumbnail_id( $post->ID );
                          $image = wp_get_attachment_image( $thumbnail_id, 'medium', false, array( 'class' => 'card-img-top', 'alt' => 'service image', 'style' => 'height: 250px;' ) );
                          if ( $image ) {
                              echo $image;
                          }
                      ?>
                      <div class="card-body">
                          <h5 class="card-title"><?php the_title(); ?></h5>
                          <p class="card-text"><?php the_excerpt(); ?></p>
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