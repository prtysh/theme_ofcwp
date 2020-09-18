<!-- /wp-content/themes/ofcwp/assets/images/Icons/Impact/Trainings.svg -->

<?php if (get_field('ofcwp_carousel_header')) : ?>
  <h2 class="ofcwp-carousel-header"><span><?php the_field('ofcwp_carousel_header'); ?></span> </h2>
<?php endif; ?>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="ofcwp-carousel-item carousel-item active">
      <div class="ofcwp-img-test"><img class="ofcwp-carousel-img" src="/wp-content/uploads/2020/08/queer-rights-centre-carousel-2.jpg" alt="..."></div>
      <div class="ofcwp-img-caption">
        <?php if (get_field('ofcwp_carousel_title_1')) : ?>
          <h2><?php the_field('ofcwp_carousel_title_1'); ?></h2>
        <?php endif; ?>
        <?php if (get_field('ofcwp_carousel_text_1')) : ?>
          <p><?php the_field('ofcwp_carousel_text_1'); ?></p>
        <?php endif; ?>
      </div>
    </div>

    <div class="ofcwp-carousel-item carousel-item">
      <div class="ofcwp-img-test"><img class="ofcwp-carousel-img" src="/wp-content/uploads/2020/08/queer-rights-centre-carousel-2.jpg" alt="..."></div>
      <div class="ofcwp-img-caption">
        <?php if (get_field('ofcwp_carousel_title_2')) : ?>
          <h2><?php the_field('ofcwp_carousel_title_2'); ?></h2>
        <?php endif; ?>
        <?php if (get_field('ofcwp_carousel_text_2')) : ?>
          <p><?php the_field('ofcwp_carousel_text_2'); ?></p>
        <?php endif; ?>
      </div>
    </div>

    <div class="ofcwp-carousel-item carousel-item">
      <div class="ofcwp-img-test"><img class="ofcwp-carousel-img" src="/wp-content/uploads/2020/08/queer-rights-centre-carousel-2.jpg" alt="..."></div>
      <div class="ofcwp-img-caption">
        <?php if (get_field('ofcwp_carousel_title_3')) : ?>
          <h2><?php the_field('ofcwp_carousel_title_3'); ?></h2>
        <?php endif; ?>
        <?php if (get_field('ofcwp_carousel_text_3')) : ?>
          <p><?php the_field('ofcwp_carousel_text_3'); ?></p>
        <?php endif; ?>
      </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>