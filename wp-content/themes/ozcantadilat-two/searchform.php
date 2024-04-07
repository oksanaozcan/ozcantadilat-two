<form role="search" method="get" class="d-flex" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="<?php echo get_search_query(); ?>" name="s">
    <button class="btn btn-outline-warning" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    <input type="hidden" value="post" name="post_type" id="post_type"/>
</form>
