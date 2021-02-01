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

	<footer id="colophon" class="site-footer footer" role="contentinfo">	
		<div class="footer__main-content">
			<div class="container">
				<!-- <div class="footer__main-content-inner">
					<div class="footer__links-column">
						<div class="footer__logo">
							<img src="" alt="footer logo">
						</div>
						<h5 class="footer__link-heading">เมนูทั่วไป</h5>
						<a href="/about" class="footer__link">เกี่ยววกับเรา</a>
						<a href="/blog" class="footer__link">บทความ</a>
						<a href="/contact" class="footer__link">ติดต่อเรา</a>
					</div>
				</div> -->
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4">
						<h3 class="footer__logo text-uppercase mb-3">Logo</h3>
						<h6>บริษัท พรปิยะ เน็ตเวิร์ค จำกัด</h6>
						<address>เลขที่ 470 ซอยรัชดาภิเษก 26 ถนนรัชดาภิเษก แขวงสามเสนนอก เขตห้วยขวาง กรุงเทพมหานคร 10310</address>
					</div>
					<div class="col-6 col-lg-2 offset-lg-1">
						<h5 class="footer__link-heading mb-3">ข้อมูลทั่วไป</h5>
						<ul class="nav flex-column">
							<li><a href="/about" class="footer__link">เกี่ยววกับเรา</a></li>
							<li><a href="/blog" class="footer__link">บทความ</a></li>
							<li><a href="/contact" class="footer__link">ติดต่อเรา</a></li>
						</ul>
					</div>
					<div class="col-6 col-lg-2">
						<h5 class="footer__link-heading mb-3">ข้อมูลทั่วไป</h5>
						<ul class="nav flex-column">
							<li><a href="/about" class="footer__link">เกี่ยววกับเรา</a></li>
							<li><a href="/blog" class="footer__link">บทความ</a></li>
							<li><a href="/contact" class="footer__link">ติดต่อเรา</a></li>
						</ul>
					</div>
					<div class="col-12 col-md-6 col-lg-3 text-right">
						<div class="footer__link-phone">
							<a href="tel:+66992193955" class="footer__link">099 219 3955</a>
						</div>
						<div class="footer__link-email">
							<a href="mailto:info@collagencoffee.com" class="footer__link">info@collagen-coffee.com</a>
						</div>
					</div>
				</div>

				<!-- <div class="footer__social py-2 text-right">
					<a href="https://www.facebook.com/" class="social__link" target="_blank"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="facebook"><path d="M11,10h2.6l0.4-3H11V5.3c0-0.9,0.2-1.5,1.5-1.5H14V1.1c-0.3,0-1-0.1-2.1-0.1C9.6,1,8,2.4,8,5v2H5.5v3H8v8h3V10z"></path></svg><span>facebook</span></a>
					<span class="text-muted mx-2">|</span>
					<a href="https://www.facebook.com/" class="social__link" target="_blank"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="facebook"><path d="M11,10h2.6l0.4-3H11V5.3c0-0.9,0.2-1.5,1.5-1.5H14V1.1c-0.3,0-1-0.1-2.1-0.1C9.6,1,8,2.4,8,5v2H5.5v3H8v8h3V10z"></path></svg><span>line official</span></a>
				</div> -->

			</div>
		</div>
		<div class="footer__lower-content">
			<div class="footer__lower-content-inner container">
				<span class="copyright">&copy; <?php echo get_the_date('Y'); ?> Company. สงวนสิทธิ์ทุกประการ</span>
				<span class="slogan">เราอยากในคุณดูดีและมั่นใจในทุกๆวัน.™</span>
				<span class="legal">
					<a href="/terms-of-use">ข้อกำหนดการใช้งาน</a>, 
					<a href="/privacy-policy">นโยบายความเป็นส่วนตัว</a>
				</span>
			</div>
		</div>
		

		<!-- <div class="footer__copyright">
			<div class="footer__copyright-inner container">
				<span>&copy; <?php echo get_the_date('Y'); ?> Company. สงวนสิทธิ์ทุกประการ</span>
				<span>เราอยากในคุณดูดีและมั่นใจในทุกๆวัน.™</span>
				<span><a href="/terms-of-use">ข้อกำหนดการใช้งาน</a>, <a href="/privacy-policy">นโยบายความเป็นส่วนตัว</a></span>
			</div>
		</div> -->
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
