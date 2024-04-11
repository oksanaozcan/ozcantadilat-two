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
            ?>

             <div class="d-flex justify-content-center gap-2 flex-wrap">
              <img class="d-block" src="<?php the_field('image_left'); ?>" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600"
                style="max-width: 100%; width: 450px; height: 320px;"/>
              <img class="d-block" src="<?php the_field('image_right'); ?>" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600"
                style="max-width: 100%; width: 450px; height: 320px;"/>
             </div>

            <div>
              <div class="works-wrapper mt-2" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
                <h6 class="text-center text-uppercase"><?php the_field('overview_title'); ?></h6>
                <div class="service-line"></div>
              </div>
              <p><?php the_field('overview_text'); ?></p>

              <div class="works-wrapper mt-2" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
                <h6 class="text-center text-uppercase"><?php the_field('plan_details_title'); ?></h6>
                <div class="service-line"></div>
              </div>

              <?php
                $repeatable_list = get_post_meta(get_the_ID(), 'repeatable_list', true);

                if ($repeatable_list) {
                  echo '<ul class="list-group">';

                  foreach ($repeatable_list as $item) {
                      echo '<li class="list-group-item"><i class="fa-solid fa-pen-ruler text-warning"></i>&nbsp;' . esc_html($item) . '</li>';
                  }
                  
                  echo '</ul>';
                }
              ?>
              
              <p class="pt-4"><i class="fa-solid fa-triangle-exclamation text-warning"></i>&nbsp;<?php the_field('warning_text'); ?></p>              
            </div>

            <div>
              <div>
                <div class="works-wrapper mt-2" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
                  <h6 class="text-center text-uppercase"><?php the_field('advantages_of_service_title'); ?></h6>
                  <div class="service-line"></div>
                </div>

                <?php
                $repeatable_list_2 = get_post_meta(get_the_ID(), 'repeatable_list_2', true);

                if ($repeatable_list_2) {
                  echo '<ul class="list-group">';

                  foreach ($repeatable_list_2 as $item) {
                      echo '<li class="list-group-item"><i class="fa-solid fa-thumbs-up text-warning"></i>&nbsp;' . esc_html($item) . '</li>';
                  }
                  
                  echo '</ul>';
                }
              ?>               
              </div>

              <div>
                <div class="works-wrapper my-2" data-aos="zoom-in-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
                  <h6 class="text-center text-uppercase"><?php the_field('faq_title'); ?></h6>
                  <div class="service-line"></div>
                </div>
                
                <?php
                  $accordion_items = get_post_meta(get_the_ID(), 'accordion_items', true);

                  // Check if accordion items exist
                  if ($accordion_items) {
                      echo '<div class="accordion accordion-flush" id="accordionExample">';
                      foreach ($accordion_items as $index => $item) {
                          echo '<div class="accordion-item">';
                          echo '<h2 class="accordion-header">';
                          echo '<button class="accordion-button bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-' . $index . '" aria-expanded="true" aria-controls="accordion-' . $index . '">';
                          echo esc_html($item['title']);
                          echo '</button>';
                          echo '</h2>';
                          echo '<div id="accordion-' . $index . '" class="accordion-collapse collapse" data-bs-parent="#accordionExample">';
                          echo '<div class="accordion-body">';
                          echo wpautop($item['content']); // Add paragraph tags
                          echo '</div>';
                          echo '</div>';
                          echo '</div>';
                      }
                      echo '</div>';
                  } else {
                      echo '<p>No accordion items found.</p>';
                  }
                ?>              

              </div>

            </div>

            <?php endwhile; ?>

          </div>
      </div>
    </div>  
  </section>  
</main>

<?php get_footer(); ?>