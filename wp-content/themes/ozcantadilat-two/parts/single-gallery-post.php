<section>
  <div class="container">
  <?php
    $referer = wp_get_referer();

    if ( $referer && strpos( $referer, home_url() ) === 0 ) {
        ?>
        <a type="button" href="<?php echo esc_url( $referer ); ?>" class="btn btn-warning mb-4"><i class="fa-solid fa-rotate-left"></i> Arama sonuçlarına geri yönlendir</a>
        <?php
    } else {
        ?>
        <a type="button" href="<?php echo esc_url( home_url() ); ?>" class="btn btn-warning mb-4"><i class="fa-solid fa-house"></i> Ana sayfaya git</a>
        <?php
    }
  ?>
    <img src="<?php the_field('gallery_image'); ?>" class="img-fluid" alt="<?php esc_attr(the_title()); ?>">
    <div class="works-wrapper mt-4" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
      <h6 class="text-center text-uppercase"><?php esc_html(the_title()); ?></h6>
      <div class="service-line"></div>
    </div>

    <p class="card-text"><?php esc_html(the_content()); ?></p>           
    <?php if(has_category()): ?>
    <p class="card-text"><small class="text-body-secondary"><i class="fa-solid fa-list text-warning fs-6"></i>&nbsp; Kategoriler: <?php esc_html(the_category(' ')); ?></small></p>
    <?php endif; ?>
    <?php if(has_tag()): ?>
    <p class="card-text"><small class="text-body-secondary"><i class="fa-solid fa-tags text-warning fs-6"></i>&nbsp; Tags: <?php esc_html(the_tags('', ', ')); ?></small></p>
    <?php endif; ?>
    <p class="card-text"><small class="text-body-secondary"><i class="fa-solid fa-calendar-days text-warning fs-6"></i>&nbsp; Gönderildi: <?php the_date(); ?></small></p>

  </div>
</section>