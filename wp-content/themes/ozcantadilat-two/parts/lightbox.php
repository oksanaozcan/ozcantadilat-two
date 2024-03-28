<div class="container bg-secondary-subtle">
    <div class="row row-cols-1 row-cols-md-3 g-4">
   
      <?php
        $query = new WP_Query();       

        if (have_posts()){
          while(have_posts()) : the_post();
          ?>
      
          <?php get_template_part('parts/lightbox-card'); ?>        

          <?php endwhile;
          wp_reset_postdata();
        } else {
          ?>
          <p>No posts</p>
          <?php
        }?>   
          
    </div>
  </div>