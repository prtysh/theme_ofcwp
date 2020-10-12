<div class="ofcwp-banner">
  


  <svg class=ofcwp-banner-svg width="200px" viewbox="0 0 100 100">
    <circle cx="50" cy="50" r="45" stroke="#E11E7A" fill="#E11E7A" />
    <text class="ofcwp-banner-text" font-size="14" x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="white"> <?php wp_title(''); ?> </text>
  </svg>
  <?php
  $ofcwp_featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
  echo '<img class="ofcwp-banner-image" src="' .  esc_url($ofcwp_featured_img_url) . '" alt="">';
  //   if(false == is_home(  )){
  //     $ofcwp_featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
  //   echo '<img class="ofcwp-banner-image" src="' .  esc_url($ofcwp_featured_img_url) . '" alt="">'; 
  //   } 

  //   if (is_home() && get_option('blog') ) {
  //     $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('blog')),'full'); 
  //     $featured_image = $img[0];
  // } 

  ?>

</div>