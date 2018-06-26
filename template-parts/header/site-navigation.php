<?php
/**
 * Main Navigation
 *
 * @version 1.0
 * @package GT Workout
 */
?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>

	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo gt_workout_get_svg( 'menu' );
		echo gt_workout_get_svg( 'close' );
		esc_html_e( 'Menu', 'gt-workout' );
		?>
	</button>

	<div class="primary-navigation">

		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'gt-workout' ); ?>">

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
				)
			);
			?>
		</nav><!-- #site-navigation -->

	</div><!-- .primary-navigation -->

<?php endif; ?>
