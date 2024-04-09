<section id="top-bar">
  <div class="container bg-body-secondary">
    <div class="row">
      <div class="col-8 col-sm-8 col-md-4 p-0">        
        <a target="_blank" href="tel:<?php echo esc_attr(get_theme_mod('phone_number_setting', '90 553 872 03 19')); ?>" class="btn btn-outline-secondary text-nowrap w-100 text-sm"
          style="border-radius: 0; border-right: none; border-bottom: none; border-left: none;"
        >
          <i class="fa-solid <?php echo esc_attr(get_theme_mod('phone_icon_setting', 'fa-phone')); ?>"></i>
          <small>&nbsp;<?php echo esc_html(get_theme_mod('phone_number_setting', '90 553 872 03 19')); ?></small>
        </a>       
      </div>
      <div class="col-md-4 d-none d-md-block p-0">
        <a target="_blank" href="mailto:<?php echo esc_attr(get_theme_mod('email_setting', 'help@ozcantadilat.com')); ?>" class="btn btn-outline-secondary text-nowrap w-100"
          style="border-radius: 0; border-right: none; border-bottom: none;"
        >
          <i class="fa-solid <?php echo esc_attr(get_theme_mod('email_icon_setting', 'fa-envelope')); ?>"></i>
          <small>&nbsp;<?php echo esc_html(get_theme_mod('email_setting', 'help@ozcantadilat.com')); ?></small>
        </a>
      </div>
      <div class="col-2 col-sm-2 col-md-1 p-0">        
        <a target="_blank" href="<?php echo esc_attr(get_theme_mod('facebook_link_setting', 'https://www.facebook.com/profile.php?id=100063594938033')); ?>" class="btn w-100 btn-outline-secondary text-nowrap"
          style="border-radius: 0; border-right: none; border-bottom: none;"
        >
          <i class="w-100 <?php echo esc_attr(get_theme_mod('facebook_icon_setting', 'fa-brands fa-facebook')); ?>"></i>
        </a>              
      </div>
      <div class="col-2 col-sm-2 col-md-1 p-0">
        <a target="_blank" href="<?php echo esc_attr(get_theme_mod('facebook_link_setting', 'https://www.instagram.com/dekorasyon_didim_tadilat')); ?>" class="btn w-100 btn-outline-secondary text-nowrap"
          style="border-radius: 0; border-right: none; border-bottom: none;"
        >
          <i class="<?php echo esc_attr(get_theme_mod('instagram_icon_setting', 'fa-brands fa-instagram')); ?>"></i>
        </a>
      </div>
      <div class="col-md-2 p-0 d-none d-md-block">
      <button type="button" class="btn btn-outline-secondary text-nowrap w-100" disabled
          style="border-radius: 0; border-bottom: none; border-right: none;"
        >
          <i class="fa-solid <?php echo esc_attr(get_theme_mod('location_icon_setting', 'fa-location-pin')); ?>"></i>
          <small>&nbsp;<?php echo esc_html(get_theme_mod('location_setting', 'Aydın Didim')); ?></small>
      </button>
      </div>
    </div>  
  </div>
</section>