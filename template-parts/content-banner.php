<div class="ofcwp-banner">
  <div id="ofcwp-search-cover">
    <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
      <div class="ofcwp-search-tb">
        <span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span>
        <div class="ofcwp-search-td">
          <input type="search" class="search-field" placeholder="<?php echo esc_attr_x(' - Search - ', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
          <button type="submit">
            <span>&#x1f50d;</span>
          </button>  
        </div>
      </div>
    </form>
  </div>


  <svg class=ofcwp-banner-svg width="15%" viewbox="0 0 100 100">
    <circle cx="50" cy="50" r="45" stroke="#E11E7A" fill="#E11E7A" />
    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="white"> <?php wp_title(''); ?> </text>
  </svg>
  <?php $ofcwp_featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
  echo '<img class="ofcwp-banner-image" src="' .  esc_url($ofcwp_featured_img_url) . '" alt="">'; ?>

</div>