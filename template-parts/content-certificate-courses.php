<!-- /wp-content/themes/ofcwp/assets/images/Icons/Impact/Trainings.svg -->
<?php if (get_the_title() == "Certificate Courses") : ?>
  <div style="padding-top: 1rem;"></div>
  <h2 class="ofcwp-carousel-header"><span> Outcomes </span> </h2>
  <div style="padding-bottom: 2rem;"></div>
  <div class="ofcwp-certificate-container">
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
    <div class="ofcwp-certificate-text">
      <p class="ofcwp-certificate-p">
        At One Future Collective, our courses, workshops and trainings involve a pedagogical framework which uses the participatory pproach. This approach is implemented through the use of the Learning Spiral model. This format encourages sharing of personal experiences and knowledge leading to a facilitator and peer led learning process. Rooted in principles of respect, compassion and reciprocity towards fellow participants and their voices, this approach promotes an open and empowering environment producing
        new knowledge and plans for action.
      </p>
      <p class="ofcwp-certificate-p">
        If you feel this may be draining or emotionally difficult for you, we are happy to discuss this with you in advance and make the relevant adaptations, where possible. Please contact us and let us know.
      </p>
      <p class="ofcwp-certificate-p">
        Please note, our courses are not delivered in a webinar format. They take place on specific dates and at specific times and are not recorded in order to ensure the safety and confidentiality of our participants.
      </p>
      <p class="ofcwp-certificate-p">
        They are experience-based and require active participation, contribution and dialogue by the participants. If you feel uncomfortable keeping your camera on or do not have video capabilities, please don't worry. As long as you have audio features or are able to type, you should be able to have a great learning experience with us.
      </p>
      <button type="button" class="btn btn-dark">Curriculum</button>
      <button type="button" class="btn btn-dark">Sign Up</button>

    </div>
  </div>


<?php endif; ?>