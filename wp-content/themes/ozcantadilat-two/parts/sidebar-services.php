<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-body-tertiary">
    <div class="d-flex flex-column align-items-center align-items-sm-start pt-2 text-white min-vh-100" style="padding-left: 1rem;">                
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100" id="menu">     

          <?php
          $current_url = get_permalink();

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

          <li class="w-100 mb-1">
            <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" 
              class="btn align-middle w-100 text-start sidebar-link <?php 
              if ($current_url == get_permalink($post->ID)) {
                echo ' btn-warning';
              } else {
                echo ' btn-secondary';
              }
               ?>" 
              style="border-radius: 0; font-size: 14px; display: flex; justify-content: space-between;"
            >
                <small>
                  <i class="<?php the_field('sidebar_icon') ?>"></i> 
                    <span class="ms-1 d-none d-sm-inline"><?php the_field('sidebar_title') ?></span>
                </small>
                <small>
                    <i class="fa-solid fa-chevron-right ms-1 d-none d-sm-inline"></i>
                </small>
            </a>   
          </li>        

          <?php        
            }
            wp_reset_postdata(); // reset $post                   
          ?>        
        </ul>
      </div>
</div>