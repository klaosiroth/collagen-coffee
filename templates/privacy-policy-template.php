<?php
/**
 * Template Name: Privacy Policy Template
 * Template Post Type: page
 * 
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files
 * 
 * @package collagen-coffee
 */

get_header();
?>

  <main id="primary" class="site-main">

    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12 col-12 py-5">
          <div class="">
            <p class="text-muted">Updated <?php the_date(); ?></p>
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          </div>
          <hr class="my-5">
          <?php the_content(); ?>
        </div>
      </div>
      <?php endwhile; ?>
    <?php else : ?>
      <?php echo wpautop('Sorry, no posts.'); ?>
    <?php endif; ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();