<div class="col mb-4" data-aos="zoom-in-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
  <a class="link-offset-2 link-underline link-underline-opacity-0" href="<?php the_field('gallery_image'); ?>" data-toggle="lightbox" data-caption="Didim ve çevresinde tadilat tel: +90 553 872 03 19" data-gallery="category-gallery">
    <div class="card h-100">
      <img src="<?php the_field('gallery_image'); ?>" class="card-img-top h-100" alt="<?php esc_attr(the_title()); ?>" style="object-fit: cover;">
      <div class="card-body">
        <h6 class="card-title"><?php esc_html(the_title()); ?></h6>
        <p class="card-text"><?php esc_html(the_content()); ?></p>
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
        href="<?php echo esc_url(get_home_url().'/tag'.'/'.$tag->slug); ?>"
      >               
        <small><?php echo esc_html($tag->name); ?></small>
    </a>                                         
    <?php
      }
    }
    ?>                     
  </div>
</div>   