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

  <div class="container bg-secondary-subtle">
    <div class="row row-cols-1 row-cols-md-3 g-4">
   
      <?php
        $query = new WP_Query();       

        if (have_posts()){
          while(have_posts()) : the_post();
          ?>
      
          <div class="col mb-2">
            <a class="link-offset-2 link-underline link-underline-opacity-0" href="<?php the_field('gallery_image'); ?>" data-toggle="lightbox" data-caption="Didim ve çevresinde tadilat tel: +90 553 872 03 19" data-gallery="category-gallery">
              <div class="card h-100">
                <img src="<?php the_field('gallery_image'); ?>" class="card-img-top h-100" alt="<?php the_title(); ?>" style="object-fit: cover;">
                <div class="card-body">
                  <h6 class="card-title"><?php the_title(); ?></h6>
                  <p class="card-text"><?php the_content(); ?></p>
                </div>                
              </div>
            </a>
            <div class="d-flex flex-wrap justify-content-center align-items-start">
              <?php
              $tags = get_the_tags();
              if ($tags) {
                foreach ($tags as $tag) {   
              ?>                 
                <a
                  class="d-block px-1 link-secondary link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover"
                  href="<?php get_tag_link( $tag->term_id ) ?>"
                >
                  <small><?php echo $tag->name; ?></small>
              </a>                                         
              <?php
                }
              }
              ?>                     
            </div>
          </div>   

          <?php endwhile;
          wp_reset_postdata();
        } else {
          ?>
          <p>No posts</p>
          <?php
        }?>   
          
    </div>
  </div>

</section>
<?php get_footer(); ?> 