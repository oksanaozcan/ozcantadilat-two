<?php get_header(); ?>
<main>
  <?php get_template_part('parts/breadcrumbs-section'); ?>
  <section>
    <div class="container">
      <div class="row flex-nowrap">
         <?php get_template_part('parts/sidebar-services')?>
          <div class="col py-3 bg-body-tertiary">
              <h1>
                <?php the_title(); ?>
              </h1>
          </div>
      </div>
    </div>  
  </section>  
</main>

<?php get_footer(); ?>