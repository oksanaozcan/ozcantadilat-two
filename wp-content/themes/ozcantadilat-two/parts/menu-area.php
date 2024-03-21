<section id="menu-area">          
    <nav class="container navbar navbar-expand-lg navbar-light bg-light py-3">
      <div class="container-fluid mx-4">
        <!-- Logo area -->
        <div class="navbar-brand">
          <?php if(has_custom_logo()) {
            the_custom_logo();
          } else {
            ?>
              <a href="<?php echo get_home_url(); ?>">
                <div class="logo-box">
                  <span class="logo-rotated"></span>
                  <h1>
                    OZCAN<br>
                    <span class="text-dark">tadilat</span>
                  </h1>
                </div>
              </a>
            <?php 
          }
          ?>
        </div>
        <!-- Main menu area -->

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ozcantadilattwo_main_menu" aria-controls="ozcantadilattwo_main_menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="ozcantadilattwo_main_menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'ozcantadilattwo_main_menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-warning" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>            
        </div>   

      </div>
    </nav>
  </section>       