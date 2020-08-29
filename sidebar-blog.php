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
<h1 class="ofcwp-tags-category">
        Calendar
    </h1>
<?php get_calendar() ;?>

    <h1 class="ofcwp-tags-category">
        Categories
    </h1>
    
 <?php
$tags = get_tags();
$html = '<div class="ofcwp_post_tags">';

foreach ( $tags as $tag ) {
    $tag_link = get_tag_link( $tag->term_id );
             
    $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
    $html .= "{$tag->name}</a>";
    $html .= "<span> &#9679 </span>";
}
$html .= '</div>';
echo $html;
?>

</aside><!-- #secondary -->
