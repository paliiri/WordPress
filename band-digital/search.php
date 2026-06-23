<?php get_header(); ?>

<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
  <div class="overlay dark-overlay"></div>
  <div class="container">
    <div class="row ">
      <div class="col-lg-8 col-sm-12 col-md-12">
        <div class="banner-content content-padding">
          <h1 class="text-white">
            <?php
            /* translators: %s: search query. */
            printf(esc_html__('Результаты поиска по&nbsp;фразе: %s', 'bj'), '<span>' . get_search_query() . '</span>');
            ?>
          </h1>
        </div>
      </div>
    </div>
  </div>
</div>
<!--MAIN HEADER AREA END -->

<section class="section blog-wrap ">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
          <?php $cnt = 0;
          if (have_posts()) : while (have_posts()) : the_post();
              $cnt++;
              switch ($cnt) {
                case "3": ?>
                  <div class="col-lg-12">
                    <div class="blog-post">
                      <?php
                      if (has_post_thumbnail()) {
                        the_post_thumbnail("post_thumbnail", array(
                          'class' => "img-fluid w-100",
                        ));
                      } else {
                        echo  '<img  class="img-fluid w-100" src="' . get_template_directory_uri() . '/images/blog/blog-1.jpg" />';
                      }
                      get_template_directory_uri()
                      ?>
                      <div class="mt-4 mb-3 d-flex">
                        <div class="post-author mr-3">
                          <i class="fa fa-user"></i>
                          <span class="h6 text-uppercase"><?php the_author(); ?></span>
                        </div>

                        <div class="post-info">
                          <i class="fa fa-calendar-check"></i>
                          <span><?php the_time("j F Y"); ?></span>
                        </div>
                      </div>
                      <a href="<?php get_the_permalink(); ?>" class="h4 "><?php the_title(); ?></a>
                      <p class="mt-3"><?php the_excerpt(); ?></p>
                      <a href="<?php get_the_permalink(); ?>" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
                    </div>
                  </div>
                <?php
                  break;
                default: ?>
                  <div class="col-lg-6">
                    <div class="blog-post">
                      <?php
                      if (has_post_thumbnail()) {
                        the_post_thumbnail("post_thumbnail", array(
                          'class' => "img-fluid w-100",
                        ));
                      } else {
                        echo  '<img  class="img-fluid w-100" src="' . get_template_directory_uri() . '/images/blog/blog-1.jpg" />';
                      }
                      get_template_directory_uri()
                      ?>
                      <div class="mt-4 mb-3 d-flex">
                        <div class="post-author mr-3">
                          <i class="fa fa-user"></i>
                          <span class="h6 text-uppercase"><?php the_author(); ?></span>
                        </div>

                        <div class="post-info">
                          <i class="fa fa-calendar-check"></i>
                          <span><?php the_time("j F Y"); ?></span>
                        </div>
                      </div>
                      <a href="<?php get_the_permalink(); ?>" class="h4 "><?php the_title(); ?></a>
                      <p class="mt-3"><?php the_excerpt(); ?></p>
                      <a href="<?php get_the_permalink(); ?>" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
                    </div>
                  </div>
              <?php break;
              } ?>
            <?php endwhile;
          else : ?>
            <p>Записей нет.</p>
          <?php endif; ?>
          <div class="col-lg-12">
            <?php the_posts_pagination(array(
              'prev_text'    => __('<span class="p-3 border">« Предыдущие посты</span>'),
              'next_text'    => __('<span class="p-3 border"> Следущие посты »</span>'),
              'bafore_page_number' => '<span class="p-3 border">',
              'after_page_number' => '</span>',
            )); ?>
          </div>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
  </div>
</section>


<?php get_footer(); ?>