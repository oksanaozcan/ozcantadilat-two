<nav class="d-flex justify-content-center" aria-label="Page navigation example">
  <ul class="pagination">
    <?php
    global $wp_query;
    
    $total_pages = $wp_query->max_num_pages;
    $current_page = max(1, get_query_var('paged'));
    
    // Previous page link
    if ($current_page > 1) {
        echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($current_page - 1) . '" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
    }
    
    // Page links
    for ($i = 1; $i <= $total_pages; $i++) {
        echo '<li class="page-item ' . ($current_page == $i ? 'active' : '') . '"><a class="page-link" href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
    }
    
    // Next page link
    if ($current_page < $total_pages) {
        echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($current_page + 1) . '" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
    }
    ?>
  </ul>
</nav>