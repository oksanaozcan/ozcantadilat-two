<section id="top-bar">
  <div class="container bg-secondary-subtle">
    <div class="d-flex justify-content-between mx-4">    

      <div class="list-group list-group-horizontal">
        <a target="_blank" href="tel:<?php the_field('phone_number'); ?>" class="list-group-item list-group-item-action list-group-item-secondary rounded-0 horizontal-content py-3"><i class="fa-solid fa-phone"></i> <span><?php the_field('phone_number'); ?></span></a>           
        <div class="d-sm-none d-md-block d-none d-sm-block">
          <a target="_blank" href="mailto:<?php the_field('email'); ?>" class="list-group-item list-group-item-action list-group-item-secondary rounded-0 horizontal-content py-3">
            <i class="fa-solid fa-envelope"></i> <span><?php the_field('email'); ?></span>
          </a>    
        </div>          
      </div>    

      <div class="list-group list-group-horizontal">
        <a target="_blank" href="<?php the_field('facebook'); ?>" class="list-group-item list-group-item-action list-group-item-secondary rounded-0 horizontal-content"><i class="fa-brands fa-facebook"></i></a>              
        <a target="_blank" href="<?php the_field('instagram'); ?>" class="list-group-item list-group-item-action list-group-item-secondary rounded-0 horizontal-content"><i class="fa-brands fa-instagram"></i></a>
        <div class="list-group-item list-group-item-secondary rounded-0 horizontal-content text-muted fw-light text-nowrap py-3 d-sm-none d-md-block d-none d-sm-block">
          <i class="fa-solid fa-location-pin"></i><span><?php the_field('location'); ?></span>
        </div>                   
      </div> 

    </div>            
  </div>
</section>