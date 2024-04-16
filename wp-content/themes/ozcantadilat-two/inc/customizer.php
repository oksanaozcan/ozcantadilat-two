<?php

function ozcantadilattwo_customizer ($wp_customize)
{
  //Top bar section//////////////////////////////////////////////////////////////
  $wp_customize->add_section(
    'sec_topbar',
    array(
      'title' => 'Top Bar Settings',
      'description' => 'Top Bar Settings'
    )
  );

  //Phone number
  $wp_customize->add_setting(
    'phone_number_setting',
    array(
      'type' => 'theme_mod',
      'default' => '90 553 872 03 19',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );

  $wp_customize->add_control(
    'phone_number_control',
    array(
      'label' => 'Phone Number',
      'description' => 'Enter your phone number',
      'section' => 'sec_topbar', 
      'settings' => 'phone_number_setting',
      'type' => 'text',
    )
  );

  $wp_customize->add_setting(
    'phone_icon_setting',
    array(
      'type' => 'theme_mod',
      'default' => 'fa-phone', // Default icon class
      'sanitize_callback' => 'sanitize_text_field',
    )
  );

  $wp_customize->add_control(
    'phone_icon_control',
    array(
      'label' => 'Phone Icon',
      'description' => 'Enter the icon class (Font Awesome)',
      'section' => 'sec_topbar',
      'settings' => 'phone_icon_setting',
      'type' => 'text',
    )
  );

  //Email
  $wp_customize->add_setting(
    'email_setting',
    array(
      'type' => 'theme_mod',
      'default' => 'help@ozcantadilat.com',
      'sanitize_callback' => 'sanitize_email',
    )
  );

  $wp_customize->add_control(
    'email_control',
    array(
      'label' => 'Email Address',
      'description' => 'Enter your email address',
      'section' => 'sec_topbar', 
      'settings' => 'email_setting',
      'type' => 'text',
    )
  );

  $wp_customize->add_setting(
    'email_icon_setting',
    array(
      'type' => 'theme_mod',
      'default' => 'fa-envelope', // Default icon class
      'sanitize_callback' => 'sanitize_text_field',
    )
  );

  $wp_customize->add_control(
    'email_icon_control',
    array(
      'label' => 'Email Icon',
      'description' => 'Enter the icon class (Font Awesome)',
      'section' => 'sec_topbar',
      'settings' => 'email_icon_setting',
      'type' => 'text',
    )
  );

  //Facebook icon
  $wp_customize->add_setting(
    'facebook_icon_setting',
    array(
      'type' => 'theme_mod',
      'default' => 'fa-brands fa-facebook', // Default icon class
      'sanitize_callback' => 'sanitize_text_field',
    )
  );

  $wp_customize->add_control(
    'facebook_icon_control',
    array(
      'label' => 'Facebook Icon',
      'description' => 'Enter the icon class (Font Awesome)',
      'section' => 'sec_topbar',
      'settings' => 'facebook_icon_setting',
      'type' => 'text',
    )
  );

  //Facebook link
  $wp_customize->add_setting(
    'facebook_link_setting',
    array(
      'type' => 'theme_mod',
      'default' => 'https://www.facebook.com/profile.php?id=100063594938033', // Default icon class
      'sanitize_callback' => 'esc_url_raw',
    )
  );

  $wp_customize->add_control(
    'facebook_link_control',
    array(
      'label' => 'Facebook link',
      'description' => 'Enter the facebook url',
      'section' => 'sec_topbar',
      'settings' => 'facebook_link_setting',
      'type' => 'url',
    )
  );

  //Instagram icon
  $wp_customize->add_setting(
    'instagram_icon_setting',
    array(
      'type' => 'theme_mod',
      'default' => 'fa-brands fa-instagram', // Default icon class
      'sanitize_callback' => 'sanitize_text_field',
    )
  );

  $wp_customize->add_control(
    'instagram_icon_control',
    array(
      'label' => 'Instagram Icon',
      'description' => 'Enter the icon class (Font Awesome)',
      'section' => 'sec_topbar',
      'settings' => 'instagram_icon_setting',
      'type' => 'text',
    )
  );

  //Instagram link
  $wp_customize->add_setting(
    'instagram_link_setting',
    array(
      'type' => 'theme_mod',
      'default' => 'https://www.instagram.com/dekorasyon_didim_tadilat', // Default icon class
      'sanitize_callback' => 'esc_url_raw',
    )
  );

  $wp_customize->add_control(
    'instagram_link_control',
    array(
      'label' => 'Instagram link',
      'description' => 'Enter the instagram url',
      'section' => 'sec_topbar',
      'settings' => 'instagram_link_setting',
      'type' => 'url',
    )
  );

  //Location icon
  $wp_customize->add_setting(
    'location_icon_setting',
    array(
      'type' => 'theme_mod',
      'default' => 'fa-location-pin', // Default icon class
      'sanitize_callback' => 'sanitize_text_field',
    )
  );

  $wp_customize->add_control(
    'location_icon_control',
    array(
      'label' => 'Location Icon',
      'description' => 'Enter the icon class (Font Awesome)',
      'section' => 'sec_topbar',
      'settings' => 'location_icon_setting',
      'type' => 'text',
    )
  );

  //Location text
  $wp_customize->add_setting(
    'location_setting',
    array(
      'type' => 'theme_mod',
      'default' => 'Aydın Didim',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );

  $wp_customize->add_control(
    'location_control',
    array(
      'label' => 'Location',
      'description' => 'Enter your location',
      'section' => 'sec_topbar', 
      'settings' => 'location_setting',
      'type' => 'text',
    )
  );

  //Recent Posts/////////////////////////////////////////////////////////////////
  $wp_customize->add_section(
    'sec_recent_posts',
    array(
      'title' => 'Recent Posts Settings',
      'description' => 'Recent Posts Settings'
    )
  );

  //Posts per page
  $wp_customize->add_setting(
    'set_per_page',
    array(
      'type' => 'theme_mode',
      'default' => 3,
      'sanitize_callback' => 'absint'
    )
  );

  $wp_customize->add_control( 
    'set_per_page', 
    array(
      'label' => 'Posts per page',
      'description' => 'How many items to display in the recent post list?',			
      'section' => 'sec_recent_posts',
      'type' => 'number'
    ) 
  );

  // Post categories to include
  $wp_customize->add_setting( 
    'set_category_include', 
    array(
      'type' => 'theme_mod',
      'default' => '22',
      'sanitize_callback' => 'sanitize_text_field'
    ) 
  );

  $wp_customize->add_control( 
    'set_category_include', 
    array(
      'label' => 'Post categories to include',
      'description' => 'Comma separated values or single category ID',
      'section' => 'sec_recent_posts',
      'type' => 'text'
    ) 
  );	

  // Post categories to exclude
  $wp_customize->add_setting( 
    'set_category_exclude', 
    array(
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_text_field'
    ) 
  );

  $wp_customize->add_control( 
    'set_category_exclude', 
    array(
      'label' => 'Post categories to exclude',
      'description' => 'Comma separated values or single category ID',			
      'section' => 'sec_recent_posts',
      'type' => 'text'
    ) 
  );

  // Progress Bars Section//////////////////////////////////////////////////////
  $wp_customize->add_section(
    'sec_progressbars',
    array(
      'title' => 'Progress Bars Settings',
      'description' => 'Progress Bars Settings'
    )
  );

  //Image
  $wp_customize->add_setting(
    'set_progressbars_image',
    array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'progressbars_image_control',
        array(
            'label' => 'Select Image',
            'section' => 'sec_progressbars',
            'settings' => 'set_progressbars_image',
        )
    )
  );
  
  //Title
  $wp_customize->add_setting(
    'set_progressbars_title',
    array(
      'type' => 'theme_mod',
      'default' => 'Please, add some title',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );

  $wp_customize->add_control(
    'set_progressbars_title',
    array(
      'label' => 'Progress Bars Title',
      'description' => 'Please, type your title here',
      'section' => 'sec_progressbars',
      'type' => 'text',
    )
  );

  //First Progress bar
    //Text
  $wp_customize->add_setting(
    'set_progressbar_first',
    array(
      'type' => 'theme_mod',
      'default' => 'Please, add some text',
      'sanitize_callback' => 'sanitize_textarea_field'
    )
  );

  $wp_customize->add_control(
    'set_progressbar_first',
    array(
      'label' => 'First Progress Bar text',
      'description' => 'Please, type your text here',
      'section' => 'sec_progressbars',
      'type' => 'textarea',
    )
  );
    //Bar value
  $wp_customize->add_setting(
    'set_progressbar_first_value',
    array(
        'type' => 'theme_mod',
        'default' => '85',
        'sanitize_callback' => 'absint',
    )
  );

  $wp_customize->add_control(
    'set_progressbar_first_value',
    array(
        'label' => 'First Progress Bar Value',
        'description' => 'Set the value for the progress bar (0-100)',
        'section' => 'sec_progressbars',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
        ),
    )
  );

   //Second Progress bar
   $wp_customize->add_setting(
    'set_progressbar_second',
    array(
      'type' => 'theme_mod',
      'default' => 'Please, add some text',
      'sanitize_callback' => 'sanitize_textarea_field'
    )
  );

  $wp_customize->add_control(
    'set_progressbar_second',
    array(
      'label' => 'Second Progress Bar text',
      'description' => 'Please, type your text here',
      'section' => 'sec_progressbars',
      'type' => 'textarea',
    )
  );

  //Bar value
  $wp_customize->add_setting(
  'set_progressbar_second_value',
  array(
      'type' => 'theme_mod',
      'default' => '70',
      'sanitize_callback' => 'absint',
  )
);

$wp_customize->add_control(
  'set_progressbar_second_value',
  array(
      'label' => 'Second Progress Bar Value',
      'description' => 'Set the value for the progress bar (0-100)',
      'section' => 'sec_progressbars',
      'type' => 'number',
      'input_attrs' => array(
          'min' => 0,
          'max' => 100,
          'step' => 1,
      ),
  )
);

  //Third Progress bar
  $wp_customize->add_setting(
    'set_progressbar_third',
    array(
      'type' => 'theme_mod',
      'default' => 'Please, add some text',
      'sanitize_callback' => 'sanitize_textarea_field'
    )
  );

  $wp_customize->add_control(
    'set_progressbar_third',
    array(
      'label' => 'Third Progress Bar text',
      'description' => 'Please, type your text here',
      'section' => 'sec_progressbars',
      'type' => 'textarea',
    )
  );

  //Bar value
  $wp_customize->add_setting(
    'set_progressbar_third_value',
    array(
        'type' => 'theme_mod',
        'default' => '95',
        'sanitize_callback' => 'absint',
    )
  );
  
  $wp_customize->add_control(
    'set_progressbar_third_value',
    array(
        'label' => 'Third Progress Bar Value',
        'description' => 'Set the value for the progress bar (0-100)',
        'section' => 'sec_progressbars',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
        ),
    )
  );

  // Footer ///////////////////////////////////////////////////////////////
  $wp_customize->add_section(
    'sec_footer',
    array(
      'title' => 'Footer Settings',
      'description' => 'Footer Settings'
    )
  );

  $wp_customize->add_setting(
    'set_footer_text',
    array(
      'type' => 'theme_mod',
      'default' => '12 yılı aşkın deneyimimiz ve müşteri memnuniyetine gerçek anlamda odaklanmamızla, bir sonraki tadilat veya ev onarımınız için bize güvenebilirsiniz.',
      'sanitize_callback' => 'sanitize_textarea_field'
    )
  );

  $wp_customize->add_control(
    'set_footer_text',
    array(
      'label' => 'Footer Information',
      'description' => 'Please, type your text information here',
      'section' => 'sec_footer',
      'type' => 'textarea',
    )
  ); 

  // Copyright Section/////////////////////////////////////////////////////
  $wp_customize->add_section(
    'sec_copyright',
    array(
      'title' => 'Copyright Settings',
      'description' => 'Copyright Settings'
    )
  );

  $wp_customize->add_setting(
    'set_copyright',
    array(
      'type' => 'theme_mod',
      'default' => 'Copyright X - All Rights Reserved',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );

  $wp_customize->add_control(
    'set_copyright',
    array(
      'label' => 'Copyright Information',
      'description' => 'Please, type your copyright here',
      'section' => 'sec_copyright',
      'type' => 'text',
    )
  );  
}

add_action('customize_register', 'ozcantadilattwo_customizer');