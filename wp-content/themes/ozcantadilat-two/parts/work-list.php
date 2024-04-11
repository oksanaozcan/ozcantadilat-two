<div class="works-list">
  <div class="list-group" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">      
    
    <?php
      $work_list = get_posts( [
        'numberposts' => -1,
        'category_name' => 'services',
        'orderby'     => 'date',
        'order'       => 'ASC',                    
        'post_type'   => 'post',
        'suppress_filters' => true, // suppression of filters of SQL query change
      ] );

      foreach( $work_list as $post ){
        setup_postdata( $post );
    ?>

    <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" class="list-group-item list-group-item-action bg-secondary-subtle">
      <i class="fa-solid fa-check"></i><span><?php the_title(); ?></span>
    </a>             
  
    <?php
      }
      wp_reset_postdata(); // reset $post                   
    ?>                      
    
  </div>
</div>  