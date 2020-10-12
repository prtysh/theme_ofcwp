<?php if (get_field('ofc_testimonial_title')): ?>
  <div style="padding-top:1rem"></div>
  <h2 class="ofcwp-carousel-header"><span><?php the_field('ofc_testimonial_title'); ?></span> </h2>
<?php endif; ?>

<?php if (get_the_title() == "Communities") : ?>
  <h2 class="ofcwp-carousel-header-communities">Stories of change are snippets from people whose lives we ve impacted.</h2>
<?php endif; ?>

<div class="ofcwp-testimonial-carousel">
  <div id="ofcwpTestimonialCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="ofcwp-carousel-item-with-border carousel-item active text-center p-4">
        <div class="ofcwp-testimonial-carousel-item-grid">
          <div class="opening-quotes"><span>"</span></div>
          <div>
            <?php $tw = "ofc_testimonial_tw_1" ?>
            <?php if (get_field($tw)) : ?>
              <p class="ofcwp-testimonial-tw">Tw:<?php the_field($tw); ?></p>
            <?php endif; ?>
            <p>

              <?php $testimonial = "ofc_testimonial_1" ?>
              <?php if (get_field($testimonial)) : ?>
                <?php the_field($testimonial); ?>
              <?php endif; ?>

            </p>
          </div>
          <div class="closing-quotes"><span>"</span></div>
        </div>
      </div>
      <div class="ofcwp-carousel-item-with-border carousel-item text-center p-4">
        <div class="ofcwp-testimonial-carousel-item-grid">
          <div class="opening-quotes"><span>"</span></div>
          <div>
          <?php $tw = "ofc_testimonial_tw_2" ?>
            <?php if (get_field($tw)) : ?>
              <p class="ofcwp-testimonial-tw">Tw:<?php the_field($tw); ?></p>
            <?php endif; ?>
            <p>

              <?php $testimonial = "ofc_testimonial_2" ?>
              <?php if (get_field($testimonial)) : ?>
                <?php the_field($testimonial); ?>
              <?php endif; ?>

            </p>
          </div>
          <div class="closing-quotes"><span>"</span></div>
        </div>
      </div>
      <div class="ofcwp-carousel-item-with-border carousel-item text-center p-4">
        <div class="ofcwp-testimonial-carousel-item-grid">
          <div class="opening-quotes"><span>"</span></div>
          <div>
          <?php $tw = "ofc_testimonial_tw_3" ?>
            <?php if (get_field($tw)) : ?>
              <p class="ofcwp-testimonial-tw">Tw:<?php the_field($tw); ?></p>
            <?php endif; ?>
            <p>

              <?php $testimonial = "ofc_testimonial_3" ?>
              <?php if (get_field($testimonial)) : ?>
                <?php the_field($testimonial); ?>
              <?php endif; ?>

            </p>
          </div>
          <div class="closing-quotes"><span>"</span></div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>