<?php
/**
 * Displays the post header
 *
 * @package collagen-coffee
 */

$entry_header_classes = '';

if ( is_singular() ) {
	$entry_header_classes .= ' header-footer-group';
}
?>
<?php // echo esc_attr( $entry_header_classes ); ?>

<header class="entry-header has-text-align-center">

	<div class="entry-header-inner">

		<?php
		$show_categories = apply_filters( 'collagen-coffee_show_categories_in_entry_header', true );

		if ( true === $show_categories && has_category() ) {
			?>

			<div class="entry-categories">
				<span class="screen-reader-text"><?php _e( 'Categories', 'twentytwenty' ); ?></span>
				<div class="entry-categories-inner mb-4">
					<?php the_category( ' ' ); ?>
				</div><!-- .entry-categories-inner -->
			</div><!-- .entry-categories -->

			<?php
		}
		?>

	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
