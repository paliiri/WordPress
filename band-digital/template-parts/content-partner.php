<section class="section-padding">
  <div class="container">
    <div class="row">
      <?php if (!empty($args['custom_title']) || !empty($args['custom_description'])) { ?>
        <div class="col-lg-8 text-center text-lg-left">
          <div class="mb-5">
            <h3 class="mb-2">
              <?php if (!empty($args['custom_title'])) {
                echo $args['custom_title'];
              } ?>
              </h4>

              <p>
                <?php if (!empty($args['custom_description'])) {
                  echo $args['custom_description'];
                }  ?>
          </div>
        </div> <?php } ?>

    </div>
    <div class="row">
      <?php
      global $post;

      $query = new WP_Query([
        'posts_per_page' => 5,
        'post_type'        => 'partner',
      ]);

      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
      ?>
          <div class="col-lg-3 col-sm-6 col-md-3 text-center">
            <div class="service-box">
              <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="service-icon" class="img-fluid" />
            </div>
          </div>
        <?php
        }
      } else {
        ?>
        <p>Партнер пока нет</p>
      <?php
      }

      wp_reset_postdata(); // Сбрасываем $post
      ?>
    </div>
  </div>
</section>