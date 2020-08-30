<?php get_header('splash'); ?>

<div id="primary" class="content-area">
  
  <svg class="ofcwp-blog-other-reads" width="100%" viewbox="0 0 1000 200">
    <line x1="0" y1="100" x2="150" y2="100" stroke-width="1" stroke="#E11E7A" />
    <text x="25%" y="50%" dominant-baseline="middle" font-size="20" text-anchor="middle" fill="#000000"> Other Reads </text>
    <line x1="350" y1="100" x2="1000" y2="100" stroke-width="1" stroke="#E11E7A" />
  </svg>
  <main id="main" class="site-main" role="main">

    <div class="ofcwp-blog-container pure-g">
      <div class="pure-u-16-24">

      <?php
      $args = array('post_type' => 'post', 'posts_per_page' => 3);
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <?php // if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content-posts', get_post_format()); ?>
            <div class="ofcwp-blog-card pure-g">
              <div class="ofcwp-blog-card-img-frame pure-u-11-24">
                <?php
                if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
                  the_post_thumbnail('medium', array('class' => 'ofcwp-blog-card-img'));
                }
                ?>
              </div>
              <div class="ofcwp-blog-card-img-frame pure-u-13-24">
                <p class="ofcwp-blog-card-title"> <?php the_title_attribute(); ?></p>
                <p> by <span class="ofcwp-blog-card-title"> <?php the_author();  ?> </span> </p>

                <p class="ofcwp-blog-card-excerpt"> <?php echo get_the_excerpt();  ?></p>
                <a href="<?php the_permalink(); ?>"> Read More </a>
              </div>
            </div>

          <?php endwhile;
        else : ?>
          <?php get_the_tags(); ?>
          <?php get_template_part('template-parts/content', 'none'); ?>
          <p> <?php ofcw_entry_footer(); ?></p>
        <?php endif; ?>
        <?php // echo paginate_links(); 
        ?>
      </div>
      <div class="pure-u-8-24">
        <?php get_sidebar('blog'); ?>
      </div>
    </div>


    <?php ofcwp_numeric_posts_nav(); ?>

  </main>
</div>

<?php get_footer('splash'); ?>