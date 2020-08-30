<?php
/* 
Template Name: Members
*/
?>
<?php get_header('archive-member'); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="ofcwp-member-container pure-g">
      <?php
      $args = array('post_type' => 'member', 'posts_per_page' => 100);
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

          <div class="ofcwp-member-entry-content pure-u-6-24">
            <?php
            if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
              the_post_thumbnail('medium', array('class' => 'ofcwp-member-card-img'));
            }
            ?>
            <h2 class="ofcwp-member-card-title"><?php the_title(); ?></h2>

            <?php
            if (true == has_tag()) {
              $tags = get_the_tags();
              $html = '<div class="ofcwp_member_card_tags_holder">';
              $counter = 0;
              foreach ($tags as $tag) {
                $counter = $counter + 1;
                $html .= "<p class='ofcwp_member_card_tag'> {$tag->name} ";
                if (count($tags) > $counter) {
                  $html .= "<span>, </span> </p>";
                }
              }
              $html .= '</p></div>';
              echo $html;
            }
            ?>

            <div class="ofcwp-member-card-content">
              <p> <?php the_content(); ?> </p>
            </div>

          </div>
          <?php wp_reset_postdata(); ?>
        <?php endwhile;
      else :  ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
    </div>

    <?php ofcwp_numeric_posts_nav(); ?>

  </main>
</div>

<?php get_footer('splash'); ?>