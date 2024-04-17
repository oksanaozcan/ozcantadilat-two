<?php

require_once get_template_directory() . '/inc/customizer.php';

require_once get_template_directory() . '/inc/bootstrap_5_wp_nav_menu_walker.php';
require_once get_template_directory() . '/inc/custom_breadcrumbs.php';

function ozcantadilattwo_load_scripts()
{
  wp_enqueue_style('ozcantadilattwo-bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0', 'all'); 
  wp_enqueue_style('ozcantadilattwo-fontawesome-icons', get_template_directory_uri() . '/assets/fontawesome/css/all.css', array(), '1.0', 'all');  
  wp_enqueue_style('ozcantadilattwo-aos-css', get_template_directory_uri() . '/assets/css/aos.css', array(), '1.0', 'all'); 
  wp_enqueue_style('ozcantadilattwo-style', get_stylesheet_uri(), array(), '1.0', 'all');

  wp_enqueue_script('ozcantadilattwo-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0', true);
  wp_enqueue_script('ozcantadilattwo-aos-js', get_template_directory_uri() . '/assets/js/aos.js', array(), '1.0', true);
  wp_enqueue_script('ozcantadilattwo-bs5-lightbox-js', get_template_directory_uri() . '/assets/js/bs5-lightbox.js', array(), '1.0', true);
  wp_enqueue_script('ozcantadilattwo-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true); 
}
add_action('wp_enqueue_scripts', 'ozcantadilattwo_load_scripts');

register_nav_menus(
  array(
    'ozcantadilattwo_main_menu' => 'Main Menu',
    'ozcantadilattwo_footer_menu' => 'Footer Menu',
  )
);

add_theme_support('custom-logo');
add_theme_support('title-tag');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

function turkish_to_latin_permalink( $permalink, $post ) {
  $permalink = strtolower($permalink);
  $permalink = str_replace(
      array('ç', 'ğ', 'ı', 'ö', 'ş', 'ü', 'İ', 'Ç', 'Ğ', 'Ö', 'Ş', 'Ü'),
      array('c', 'g', 'i', 'o', 's', 'u', 'i', 'c', 'g', 'o', 's', 'u'),
      $permalink
  );
  return $permalink;
}
add_filter( 'pre_post_link', 'turkish_to_latin_permalink', 10, 2 );


//Repeatable lists for plan and details section and advantages section of single post of service
function custom_repeatable_list_meta_boxes() {
  add_meta_box(
      'custom_repeatable_list_meta_box',
      'Plan & Details List',
      'custom_repeatable_list_meta_box_callback',
      'post',
      'normal',
      'default'
  );

  add_meta_box(
    'custom_repeatable_list_2_meta_box',
    'Advantages of current service list',
    'custom_repeatable_list_2_meta_box_callback',
    'post',
    'normal',
    'default'
);
}
add_action('add_meta_boxes', 'custom_repeatable_list_meta_boxes');

function custom_repeatable_list_meta_box_callback($post) {
  $repeatable_list = get_post_meta($post->ID, 'repeatable_list', true);
  ?>
  <div id="repeatable-list-fields">
      <?php if ($repeatable_list) : ?>
          <?php foreach ($repeatable_list as $item) : ?>
              <div class="repeatable-list-item">
                  <textarea name="repeatable_list[]" style="width: 480px;"><?php echo esc_textarea($item); ?></textarea>
              </div>
          <?php endforeach; ?>
      <?php else : ?>
          <div class="repeatable-list-item">
              <textarea name="repeatable_list[]" style="width: 480px;"></textarea>
          </div>
      <?php endif; ?>
      <button id="add-new-item">Add New Item</button>
  </div>
  <script>
  document.getElementById('add-new-item').addEventListener('click', function() {
      var container = document.getElementById('repeatable-list-fields');
      var newItem = document.createElement('div');
      newItem.classList.add('repeatable-list-item');
      newItem.innerHTML = '<textarea name="repeatable_list[]" style="width: 480px;"></textarea>';
      container.appendChild(newItem);
  });
  </script>
  <?php
}

function custom_repeatable_list_2_meta_box_callback($post) {
  $repeatable_list_2 = get_post_meta($post->ID, 'repeatable_list_2', true);
  ?>
  <div id="repeatable-list-2-fields">
      <?php if ($repeatable_list_2) : ?>
          <?php foreach ($repeatable_list_2 as $item) : ?>
              <div class="repeatable-list-2-item">
                  <textarea name="repeatable_list_2[]" style="width: 480px;"><?php echo esc_textarea($item); ?></textarea>
              </div>
          <?php endforeach; ?>
      <?php else : ?>
          <div class="repeatable-list-2-item">
              <textarea name="repeatable_list_2[]" style="width: 480px;"></textarea>
          </div>
      <?php endif; ?>
      <button id="add-new-item-2">Add New Item</button>
  </div>
  <script>
  document.getElementById('add-new-item-2').addEventListener('click', function() {
      var container = document.getElementById('repeatable-list-2-fields');
      var newItem = document.createElement('div');
      newItem.classList.add('repeatable-list-2-item');
      newItem.innerHTML = '<textarea name="repeatable_list_2[]" style="width: 480px;"></textarea>';
      container.appendChild(newItem);
  });
  </script>
  <?php
}

function save_custom_repeatable_list_meta_box($post_id) {
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
  if (!current_user_can('edit_post', $post_id)) return;
  if (isset($_POST['repeatable_list'])) {
      update_post_meta($post_id, 'repeatable_list', $_POST['repeatable_list']);
  } else {
      delete_post_meta($post_id, 'repeatable_list');
  }
}
add_action('save_post', 'save_custom_repeatable_list_meta_box');

function save_custom_repeatable_list_2_meta_box($post_id) {
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
  if (!current_user_can('edit_post', $post_id)) return;
  if (isset($_POST['repeatable_list_2'])) {
      update_post_meta($post_id, 'repeatable_list_2', $_POST['repeatable_list_2']);
  } else {
      delete_post_meta($post_id, 'repeatable_list_2');
  }
}
add_action('save_post', 'save_custom_repeatable_list_2_meta_box');


// Custom meta box for repeatable accordion
function custom_repeatable_accordion_meta_box() {
  add_meta_box(
      'custom_repeatable_accordion_meta_box',
      'Repeatable Accordion',
      'custom_repeatable_accordion_meta_box_callback',
      'post',
      'normal',
      'default'
  );
}
add_action('add_meta_boxes', 'custom_repeatable_accordion_meta_box');

function custom_repeatable_accordion_meta_box_callback($post) {
  $accordion_items = get_post_meta($post->ID, 'accordion_items', true);
  ?>
  <div id="repeatable-accordion-fields">
      <?php if ($accordion_items) :
          foreach ($accordion_items as $index => $item) : ?>
              <div class="accordion-item">
                  <div>
                      <label for="accordion-title-<?php echo $index; ?>">Title:</label>
                      <input style="width: 480px;" type="text" id="accordion-title-<?php echo $index; ?>" name="accordion_items[<?php echo $index; ?>][title]" value="<?php echo esc_attr($item['title']); ?>">
                  </div>
                  <div>
                      <label for="accordion-content-<?php echo $index; ?>">Content:</label>
                      <textarea style="width: 480px;" id="accordion-content-<?php echo $index; ?>" name="accordion_items[<?php echo $index; ?>][content]"><?php echo esc_textarea($item['content']); ?></textarea>
                  </div>
                  <div>
                      <button class="accordion-delete-item">Delete</button>
                  </div>
                  <button class="accordion-button bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-<?php echo $index; ?>" aria-expanded="true" aria-controls="accordion-<?php echo $index; ?>">
                      <?php echo esc_html($item['title']); ?>
                  </button>
                  <div id="accordion-<?php echo $index; ?>" class="accordion-collapse collapse" data-bs-parent="#repeatable-accordion-fields">
                      <div class="accordion-body">
                          <?php echo wpautop($item['content']); ?>
                      </div>
                  </div>
              </div>
          <?php endforeach;
      endif; ?>
      <button id="add-new-accordion-item">Add New Item</button>
  </div>
  <script>
      // JavaScript to handle adding, deleting, and collapsing accordion items
      document.getElementById('add-new-accordion-item').addEventListener('click', function() {
          var container = document.getElementById('repeatable-accordion-fields');
          var newIndex = container.querySelectorAll('.accordion-item').length;
          var newItem = document.createElement('div');
          newItem.classList.add('accordion-item');
          newItem.innerHTML = `
              <div>
                  <label for="accordion-title-${newIndex}">Title:</label>
                  <input style="width: 480px;" type="text" id="accordion-title-${newIndex}" name="accordion_items[${newIndex}][title]" value="">
              </div>
              <div>
                  <label for="accordion-content-${newIndex}">Content:</label>
                  <textarea style="width: 480px;" id="accordion-content-${newIndex}" name="accordion_items[${newIndex}][content]"></textarea>
              </div>
              <div>
                  <button class="accordion-delete-item">Delete</button>
              </div>
              <button class="accordion-button bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-${newIndex}" aria-expanded="true" aria-controls="accordion-${newIndex}">
                  New Accordion Item
              </button>
              <div id="accordion-${newIndex}" class="accordion-collapse collapse" data-bs-parent="#repeatable-accordion-fields">
                  <div class="accordion-body">
                      New Accordion Content
                  </div>
              </div>
          `;
          container.appendChild(newItem);
      });

      document.addEventListener('click', function(e) {
          if (e.target && e.target.classList.contains('accordion-delete-item')) {
              e.target.closest('.accordion-item').remove();
          }
      });
  </script>
  <?php
}

function save_custom_repeatable_accordion_meta_box($post_id) {
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
  if (!current_user_can('edit_post', $post_id)) return;
  if (isset($_POST['accordion_items'])) {
      update_post_meta($post_id, 'accordion_items', $_POST['accordion_items']);
  } else {
      delete_post_meta($post_id, 'accordion_items');
  }
}
add_action('save_post', 'save_custom_repeatable_accordion_meta_box');


function exclude_categories_from_search($query) {
  // run query only if we are searching
  if ( !$query->is_search )
      return $query;
  
  $term_ids = array( 18,19 );
  $taxquery = array(
      array(
          'taxonomy' => 'category',
          'field' => 'id',
          'terms' => $term_ids,
          'operator'=> 'NOT IN'
      )
  );

  $query->set( 'tax_query', $taxquery );

}
add_action( 'pre_get_posts', 'exclude_categories_from_search' );
