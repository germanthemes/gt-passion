<?php
/**
 * Custom Markup for Search form
 *
 * @version 1.0
 * @package GT Passion
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'gt-passion' ); ?></span>
		<input type="search" class="search-field"
			placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'gt-passion' ); ?>"
			value="<?php echo get_search_query(); ?>" name="s"
			title="<?php echo esc_attr_x( 'Search for:', 'label', 'gt-passion' ); ?>" />
	</label>
	<button type="submit" class="search-submit">
		<?php echo gt_passion_get_svg( 'search' ); ?>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'gt-passion' ); ?></span>
	</button>
</form>
