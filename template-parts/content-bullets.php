<!-- /wp-content/themes/ofcwp/assets/images/Icons/Impact/Trainings.svg -->
<?php if (get_the_title() == "Impact") : ?>
  <?php if (get_field('ofcwp_is_report')) : ?>
    <div class="ofcwp_bullets_container">
      <div class="ofcwp_bullets_reports_container">
        <button type="button" class="btn btn-primary btn-lg btn-block btn-pink">Annual Report: 2017-2019</button>
        <button type="button" class="btn btn-primary btn-lg btn-block btn-pink">Annual Report: 2019-2020</button>
      </div>
    <?php endif; ?>
    <div class="ofc_bullets_bullets">
      <?php $bullet = 'ofcwp_bullet_1'; ?>
      <?php if (get_field($bullet)) : ?>
        <h5><span class="ofcwp-bullet-number">1</span><?php the_field($bullet); ?></h2>
        <?php endif; ?>

        <?php $bullet = 'ofcwp_bullet_2'; ?>
        <?php if (get_field($bullet)) : ?>
          <h5><span class="ofcwp-bullet-number">2</span><?php the_field($bullet); ?></h2>
          <?php endif; ?>

          <?php $bullet = 'ofcwp_bullet_3'; ?>
          <?php if (get_field($bullet)) : ?>
            <h5><span class="ofcwp-bullet-number">3</span><?php the_field($bullet); ?></h2>
            <?php endif; ?>

            <?php $bullet = 'ofcwp_bullet_4'; ?>
            <?php if (get_field($bullet)) : ?>
              <h5><span class="ofcwp-bullet-number">4</span><?php the_field($bullet); ?></h2>
              <?php endif; ?>

              <?php $bullet = 'ofcwp_bullet_5'; ?>
              <?php if (get_field($bullet)) : ?>
                <h5><span class="ofcwp-bullet-number">5</span><?php the_field($bullet); ?></h2>
                <?php endif; ?>
    </div>
    </div>
  <?php endif; ?>