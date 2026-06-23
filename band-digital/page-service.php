<?php get_header(); ?>

<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-service" id="page-banner">
  <div class="overlay dark-overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
        <div class="banner-content content-padding">
          <h1 class="text-white"><?php the_title(); ?></h1>
          <p>Мы оказываем весь спект диджитал услуг</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php the_content(); ?>

<!--  SERVICE START  -->
<?php echo get_template_part("template-parts/content", "service", [
  "class" => "service-style-two",
  "custom_title" => "Диджитал полного цикла",
  "custom_description" => " Это означает, что мы сможем выполнить любую цифровую задачу: видео, маркетинг, реклама, разработка или дизайн."
]); ?>


<!--  PARTNER START  -->

<?php echo get_template_part("template-parts/content", "partner", [
  "custom_title" => "Эти компании доверяют нам",
  "custom_description" => "Компании, с которыми мы работаем давно"
]); ?>


<?php get_footer(); ?>