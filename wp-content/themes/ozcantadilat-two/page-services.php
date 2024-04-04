<?php
/*
Template name: Hizmetler.
*/
?>

<?php get_header(); ?>
<main>
  <?php get_template_part('parts/breadcrumbs-section'); ?>
  <section>
    <div class="container">
      <div class="row flex-nowrap">
          <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0  bg-body-tertiary">
              <div class="d-flex flex-column align-items-center align-items-sm-start pt-2 text-white min-vh-100" style="padding-left: 1rem;">                
                  <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100" id="menu">                                  
                      <li class="w-100">
                          <a href="#" class="btn btn-secondary align-middle w-100" style="border-radius: 0; font-size: 14px;">
                            <small><i class="fa-solid fa-list"></i> <span class="ms-1 d-none d-sm-inline">Hepsi</span></small>
                          </a>                          
                      </li>        
                      <li class="w-100">
                          <a href="#" class="btn btn-secondary align-middle w-100" style="border-radius: 0; font-size: 14px;">
                            <small><i class="fa-solid fa-key"></i>Anahtar teslim tadilat</small>
                          </a>
                      </li>            
                  </ul>                
              </div>
          </div>
          <div class="col py-3 bg-body-tertiary">
              Content area...
          </div>
      </div>
    </div>  
  </section>  
</main>

<?php get_footer(); ?>