<?php get_header(); ?>

<div class="container bg-secondary-subtle">
    <div class="row">

    <div class="works-wrapper" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
      <h1 class="text-center">İçin arama sonuçları: <strong class="text-secondary"><?php echo get_search_query(); ?></strong></h1>
      <div class="service-line"></div>
    </div>
    <div class="py-4" style="max-width: 50%; min-width: 380px;">
      <?php get_search_form(); ?>
    </div>
   

<?php 
if(have_posts()):
  while(have_posts()):
    the_post();
?>

  <div class="col-12">
   
      <div class="card mb-3">
        <div class="row g-0">
          <?php if (has_post_thumbnail()): ?>
          <div class="col-md-4">
            <a class="text-reset text-decoration-none" href="<?php echo esc_url(get_permalink($post->ID)); ?>">
              <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid rounded-start" style="object-fit: cover;" alt="<?php esc_html(the_title()); ?>">
            </a>           
          </div>
          <?php endif; ?>
          <div class="col-md-8">
            <div class="card-body">
              <a class="text-reset text-decoration-none" href="<?php echo esc_url(get_permalink($post->ID)); ?>">
                <h5 class="card-title"><?php esc_html(the_title()); ?></h5>
              </a>            
              <p class="card-text"><?php the_excerpt(); ?></p>           
              <?php if(has_category()): ?>
                <p class="card-text"><small class="text-body-secondary"><i class="fa-solid fa-list text-warning fs-6"></i>&nbsp; Kategoriler: <?php esc_html(the_category(' ')); ?></small></p>
              <?php endif; ?>
              <?php if(has_tag()): ?>
              <p class="card-text"><small class="text-body-secondary"><i class="fa-solid fa-tags text-warning fs-6"></i>&nbsp; Tags: <?php esc_html(the_tags('', ', ')); ?></small></p>
              <?php endif; ?>
              <p class="card-text"><small class="text-body-secondary"><i class="fa-solid fa-calendar-days text-warning fs-6"></i>&nbsp; Gönderildi: <?php the_date(); ?></small></p>
            </div>
          </div>
        </div>
      </div>
   
  </div>  

<?php 
  endwhile;

  get_template_part('parts/pagination');

else:
  ?>

  <div class="w-100 text-center text-uppercase fs-3">
    <p><i class="fa-regular fa-circle-xmark text-warning"></i> Sonuç yok.</p>
  </div>

  <?php
  endif;
?>
  </div>
</div>

<?php get_footer(); ?>