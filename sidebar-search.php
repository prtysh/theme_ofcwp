<?php

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
    
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

</aside><!-- #secondary -->
