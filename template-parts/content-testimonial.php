<?php if (get_field('ofc_testimonial_title')) : ?>
  <div style="padding-top:1rem"></div>
  <h2 class="ofcwp-carousel-header"><span><?php the_field('ofc_testimonial_title'); ?></span> </h2>
<?php endif; ?>

<?php if (get_the_title() == "Communities") : ?>
  <h2 class="ofcwp-carousel-header-communities">Stories of change are snippets from people whose lives we ve impacted.</h2>
<?php endif; ?>

<div class="ofcwp-testimonial-card-container">
  <?php $tw = "ofc_testimonial_tw_1" ?>
  <?php $testimonial = "ofc_testimonial_1" ?>
  <?php if (get_field($testimonial)) : ?>
    
    <div class="card text-left">
      <div class="card-body">
        <p class="card-text"></p>
        <?php if (get_field($tw)) : ?>
          <p class="ofcwp-testimonial-tw">Tw:<?php the_field($tw); ?></p>
          
        <?php endif; ?>
        <blockquote class="ofcwp-testimonial-quote"><?php the_field($testimonial); ?></blockquote>
      </div>
    </div>
  <?php endif; ?>

  <?php $tw = "ofc_testimonial_tw_2" ?>
  <?php $testimonial = "ofc_testimonial_2" ?>
  <?php if (get_field($testimonial)) : ?>
    
    <div class="card text-left">
      <div class="card-body">
        <p class="card-text"></p>
        <?php if (get_field($tw)) : ?>
          <p class="ofcwp-testimonial-tw">Tw:<?php the_field($tw); ?></p>
          
        <?php endif; ?>
        <blockquote class="ofcwp-testimonial-quote"><?php the_field($testimonial); ?></blockquote>
      </div>
    </div>
  <?php endif; ?>

  <?php $tw = "ofc_testimonial_tw_3" ?>
  <?php $testimonial = "ofc_testimonial_3" ?>
  <?php if (get_field($testimonial)) : ?>
    
    <div class="card text-left">
      <div class="card-body">
        <p class="card-text"></p>
        <?php if (get_field($tw)) : ?>
          <p class="ofcwp-testimonial-tw">Tw:<?php the_field($tw); ?></p>
          
        <?php endif; ?>
        <blockquote class="ofcwp-testimonial-quote"><?php the_field($testimonial); ?></blockquote>
      </div>
    </div>
  <?php endif; ?>
</div>
<div style="padding-bottom: 2rem;"></div>