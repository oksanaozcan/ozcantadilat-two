<?php
/*
Template name: 404 Page.
*/
?>

<?php get_header(); ?>

<main>
  <section class="page-404">
    <div class="container bg-secondary-subtle px-4">
      <div class="row py-4">
        <div class="col-12 col-md-6">            
          <?php 
            $exclude_categories = array(18,19,20);

            add_filter('widget_categories_args', function ($args) use ($exclude_categories) {
              $args['exclude'] = implode(',', $exclude_categories);
              return $args;
            });            
           
            the_widget('WP_Widget_Categories', array(
              'title' => 'Kategoriler:',
              'count' => 1, 
            )); 
            remove_filter('widget_categories_args', 'exclude_categories_from_widget');
          ?> 
        </div>
      </div>              
    </div>
  </section>
  <section class="404-icon">
    <div class="container bg-light">
      <div class="w-100 d-flex flex-column justify-content-center align-items-center py-4">

        <div class="d-flex flex-column justify-content-center align-items-center">
          <div class="icon-404 d-flex justify-content-center align-items-center">
            <div class="text-center">
              <i class="fa-solid fa-road-barrier"></i>
            </div>                         
          </div>
          <div class="ornament">
            <div class="ornament-line"></div>
            <div></div>
          </div>                 
        </div>

        <div class="content-404 w-70 d-flex flex-column justify-content-center align-items-center text-center">
          <div class="py-4 text-center d-flex flex-column justify-content-center align-items-center">
            <h3 class="text-uppercase">404 Sayfa Bulunamadı</h3>
            <div class="service-line"></div>        
          </div>    
          <div>
            <p>
              Üzgünüz ancak istediğiniz sayfayı bulamıyoruz.
              Bunun nedeni web adresini yanlış yazmış olmanız olabilir.
            </p>
          </div>       
        </div>

        <div>
          <a href="<?php echo get_home_url(); ?>" class="btn btn-lg btn-warning" type="button">Eve gitmek</a>
        </div>     

      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>