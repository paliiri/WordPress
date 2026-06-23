<aside class="col-lg-4">


  <div class="sidebar-widget search">
    <?php get_search_form(); ?>
  </div>

  <?php if (! dynamic_sidebar("sidebar-blog")) : dynamic_sidebar("sidebar-blog");
  endif; ?>

  </div>
</aside>