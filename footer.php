<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package collagen-coffee
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">

		</div><!-- .site-info -->
		
		<div class="footer__copyright">
			<div class="footer__copyright-inner container">
				<span>&copy; <?php echo get_the_date('Y'); ?> Company. สงวนสิทธิ์ทุกประการ</span>
				<span>เราอยากในคุณดูดีและมั่นใจในทุกๆวัน.™</span>
				<span><a href="/terms-of-use">ข้อกำหนดการใช้งาน</a>, <a href="/privacy-policy">นโยบายความเป็นส่วนตัว</a></span>
			</div>
		</div>
	</footer><!-- #colophon -->

	<div class="attribution">
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'collagen-coffee' ) ); ?>" target="_blank" rel="noopener noreferrer">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'collagen-coffee' ), 'WordPress' );
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf( esc_html__( 'Theme: %1$s Coded by %2$s.', 'collagen-coffee' ), 'collagen-coffee', '<a href="https://github.com/klaosiroth" target="_blank" rel="noopener noreferrer">Natthaphon Wichianphong</a>' );
		?>
		<style>
    .attribution { font-size: 11px; font-weight: 500; text-align: center; }
    .attribution a { color: hsl(228, 45%, 44%); }
  	</style>
	</div>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
