<?php
/*
Template name: Hakkımızda
*/
?>

<?php get_header(); ?>
<main>
  <?php get_template_part('parts/breadcrumbs-section'); ?>
  <section>
    <div class="container bg-light px-4 py-4">

      <div class="row py-2">
        <div class="col">
          <div class="works-wrapper" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
            <h6 class="text-center text-uppercase"><?php echo esc_html(get_theme_mod('set_about_1_title')); ?></h6>
            <div class="service-line"></div>
          </div>
        </div>
      </div>     

      <div class="row">
        <div class="col-12 col-md-6" data-aos="zoom-in-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-delay="100">
          <img src="<?php echo esc_url(get_theme_mod('set_about_image')); ?>" class="img-thumbnail" alt="about page image">
        </div>
        <div class="col-12 col-md-6" data-aos="zoom-in-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-delay="200">
          <p><?php echo esc_html(get_theme_mod('set_about_text')); ?></p>
        </div>
      </div> 

      <div class="row">
        <div class="col py-4">
          <div class="border d-flex align-items-center" data-aos="zoom-in-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-delay="100">
            <div class="mx-2">
              <i class="fa-solid fa-check text-warning fs-2"></i>
            </div>
            <div class="mx-2">
              <p class="p-4"><?php echo esc_html(get_theme_mod('set_about_card_1')); ?></p>
            </div>           
          </div>          
        </div>
        <div class="col py-4">
          <div class="border d-flex align-items-center" data-aos="zoom-in-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600"  data-aos-delay="200">
            <div class="mx-2">
              <i class="fa-solid fa-check text-warning fs-2"></i>
            </div>
            <div class="mx-2">
              <p class="p-4"><?php echo esc_html(get_theme_mod('set_about_card_2')); ?></p>
            </div>           
          </div>          
        </div>       
      </div>

      <div class="row py-4">
        <div class="col">
          <div class="works-wrapper" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
            <h6 class="text-center text-uppercase"><?php echo esc_html(get_theme_mod('set_about_2_title')); ?></h6>
            <div class="service-line"></div>
          </div>
        </div>
      </div>        
      
    </div>

  </section>  
  <div class="container px-0">
    <?php get_template_part('parts/footer-info'); ?>  
  </div>
</main>

<?php get_footer(); ?>