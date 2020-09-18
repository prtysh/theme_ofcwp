<?php
/* 
Template Name: ofcknowledge
*/
?>
<?php get_header('archive-ofcknowledge'); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <p class="ofcwp-knowledge-abstract"> We undertake research, training, and the development of learning tools, products and experiences for building knowledge and capacity on issues of social justice.</p>
    <div class="ofcwp-knowledge-role pure-g">
      <div class="ofcwp-knowledge-sub-role pure-u-12-24">
        <p class="ofcwp-knowledge-sub-role-text"> <span class="ofcwp-knowledge-number"> 1 </span> We curate, create and share knowledge to develop a more nuanced understanding of pressing issues of social justice, inform public debates, and build policy-legal insights and interventions.</p>
      </div>
      <div class="ofcwp-knowledge-sub-role pure-u-12-24">
      <p class="ofcwp-knowledge-sub-role-text"><span class="ofcwp-knowledge-number"> 2 </span> We invest in people, communities and organisations to deepen their knowledge base, support leadership capacities, accelerate change efforts, ignite ideas and transform them into action.</p>
      </div>
    </div>
    <div class="ofcwp-knowledge-container pure-g">

      <?php
      $args = array('post_type' => 'ofcknowledge', 'posts_per_page' => 6);
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
    

  </main>
</div>
<?php ofcwp_numeric_posts_nav(); ?>
    <svg class="ofcwp-blog-other-reads" width="100%" viewbox="0 0 1000 200">
    <line x1="0" y1="100" x2="150" y2="100" stroke-width="1" stroke="#000000" />
    <text x="25%" y="50%" dominant-baseline="middle" font-size="24" text-anchor="middle" fill="#000000"> Testimonials </text>
    <line x1="350" y1="100" x2="1000" y2="100" stroke-width="1" stroke="#000000" />
  </svg>
    <?php get_template_part('template-parts/content', 'carousel'); ?>

<?php get_footer('splash'); ?>