    <footer class="site-footer">
        <div class="container">
          <div class="row bg-body-tertiary px-4 py-4">
            <div class="col footer-col">
              <h4 class="fs-6">Hakkımızda</h4>
              <?php get_template_part('parts/two-colour-line'); ?>  
              <p>
              <?php echo esc_html(get_theme_mod('set_footer_text', '12 yılı aşkın deneyimimiz ve müşteri memnuniyetine gerçek anlamda odaklanmamızla, bir sonraki tadilat veya ev onarımınız için bize güvenebilirsiniz.')); ?>                
              </p>
              <div class="btn-group" role="group" aria-label="Basic example">
                <a target="_blank" href="<?php the_field('facebook'); ?>" class="btn btn-warning text-white" style="border-radius: 0;"><i class="fa-brands fa-facebook"></i></a>
                <a target="_blank" href="<?php the_field('instagram'); ?>" class="btn btn-warning text-white" style="border-radius: 0;"><i class="fa-brands fa-instagram"></i></a>                
              </div>
            </div>          
            <div class="col footer-col">
              <h4 class="fs-6 mt-4">Kategoriler</h4>
              <?php get_template_part('parts/two-colour-line'); ?>
              <div class="d-flex flex-wrap">
                  <?php
                  $exclude_categories = array(18,19,20,22,40);
                  $footer_args = array(
                      'exclude' => $exclude_categories,
                      'hide_empty' => true,
                  );

                  $footer_categories = get_categories($footer_args);
                  foreach ($footer_categories as $cat) {
                      ?>
                      <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="btn btn-outline-secondary m-1" style="border-radius: 0;"><small><?php echo esc_html($cat->name);  ?></small></a>                              
                      <?php
                  }
                  ?>
              </div>
            </div>
            <div class="col footer-col mt-4">
              <h4 class="fs-6">Tags</h4>
              <?php get_template_part('parts/two-colour-line'); ?>
              <div class="d-flex flex-wrap">
                <?php
                $footer_tags = get_tags(array('hide_empty' => true));
                foreach ($footer_tags as $tag) {
                    ?>
                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="btn btn-outline-secondary m-1" style="border-radius: 0;"><small><?php echo esc_html($tag->name); ?></small></a>
                    <?php
                }
                ?>
              </div>
            </div>
          </div>
          <div class="row bg-white px-4 py-2 text-center">
            <small><?php echo get_theme_mod('set_copyright', '© Copyright X - All Rights Reserved'); ?></small>
          </div>
        </div>
    </footer>
  </div> 
  <?php wp_footer(); ?>
</body>
</html>