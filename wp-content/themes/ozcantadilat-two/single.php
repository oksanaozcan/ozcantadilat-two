<?php get_header(); ?>
<main>
  <?php get_template_part('parts/breadcrumbs-section'); ?>
  <section>
    <div class="container">
      <div class="row flex-nowrap">
         <?php get_template_part('parts/sidebar-services')?>
          <div class="col py-3 bg-body-tertiary" id="post-<?php the_ID();?>">

            <?php
            while(have_posts()):
              the_post();

              if ( in_category( array( 'gallery', 'drywall', 'exterior-renovation', 'electricity', 'tiling_works', 'interior_renovation', 'laminate', 'plumbing' ) ) ) {
                get_template_part('parts/single-gallery-post');
              } else {
                get_template_part('parts/single-service-post');
              }
            ?>         

            <?php endwhile; ?>
          </div>
      </div>
    </div>  
  </section>  
</main>

<?php get_footer(); ?>