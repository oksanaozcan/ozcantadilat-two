<?php get_header(); ?>

<?php get_template_part('parts/breadcrumbs-section'); ?>

<section>
  <div class="container bg-light text-center py-4">
    <div class="row py-4 text-center" data-aos="zoom-in-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
      <div class="col-12 d-flex flex-column justify-content-center align-items-center">
        <h1 class="text-uppercase fs-3"><?php single_cat_title(); ?></h1>
        <div class="service-line"></div>  
      </div>       
    </div>   
  </div>

  <?php
    $category = get_queried_object();
    
    if ($category->slug !== 'services') {
      get_template_part('parts/lightbox');         
    } else {
      get_template_part('parts/all-services');     
    }  

    get_template_part('parts/pagination');     
  ?>

</section>

<?php get_footer(); ?>