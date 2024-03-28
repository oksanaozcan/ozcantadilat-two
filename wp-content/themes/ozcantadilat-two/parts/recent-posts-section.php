<section>
  <div class="container bg-light px-4 py-4">        
    <div class="row">
      <div class="works-wrapper" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
        <h6 class="text-center text-uppercase">Son çalışmalar</h6>
        <div class="service-line"></div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">

      <?php
      $args = array(
          'post_type'      => 'post',
          'posts_per_page' => 3,
      );

      $query = new WP_Query( $args );

      if ( $query->have_posts() ) :
          while ( $query->have_posts() ) : $query->the_post();
      ?>

      <?php get_template_part('parts/lightbox-card'); ?> 

      <?php
          endwhile;
      endif;
      wp_reset_postdata(); // Reset the query
      ?>

    </div>

    <div class="row justify-content-center py-4">
      <div class="col-2" data-aos="slide-left" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
        <a class="btn btn-warning" href="<?php echo get_category_link( 22 ); ?>" role="button">Hepsini gör</a>
      </div>                  
    </div> 
    
  </div>             
</section>