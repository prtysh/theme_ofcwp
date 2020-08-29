<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ofcwp
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
 <?php get_tags();

$tags = get_tags();
$html = '<div class="ofcwp_post_tags">';
foreach ( $tags as $tag ) {
    $tag_link = get_tag_link( $tag->term_id );
             
    $html .= "<div><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
    $html .= "{$tag->name}</a></div>";
}
$html .= '</div>';
echo $html;
?>
<!-- to get archive of month etc -->
<?php wp_get_archives(); ?> 
    
  <?php
    $args = [
      'type'  => 'weekly',
      'limit' => 10,
      'show_post_count' => true,
      'order' => 'ASC'
    ];
    wp_get_archives( $args );
   ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

</aside><!-- #secondary -->
