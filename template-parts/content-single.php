<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package collagen-coffee
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-12 col-12 mb-2">
      <header class="entry-header has-text-align-center">
        <?php
        /**
         * Filter the display of the categories in the entry header.
         */
        $show_categories = apply_filters( 'collagen-coffee_show_categories_in_entry_header', true );
        ?>
        <?php if ( true === $show_categories && has_category() ) : ?>
          <div class="entry-categories">
            <span class="screen-reader-text"><?php _e( 'Categories', 'collagen-coffee' ); ?></span>
            <div class="entry-categories-inner mb-4">
              <?php the_category( ' ' ); ?>
            </div><!-- .entry-categories-inner -->
          </div><!-- .entry-categories -->
        <?php endif; ?>

        <?php if ( is_singular() ) : ?>
          <?php the_title( '<h1 class="entry-title font-weight-bold mb-4">', '</h1>' ); ?><!-- .entry-title -->
        <?php endif; ?>

        <span class="d-inline-block mb-3">4 min read</span>
        
        <?php if ( 'post' === get_post_type() ) : ?>
          <div class="entry-meta mb-4">
            <?php
            collagen_coffee_posted_on();
            collagen_coffee_posted_by();
            ?>
          </div><!-- .entry-meta -->
        <?php endif; ?>
      </header><!-- .entry-header -->
    </div>
    <div class="col-lg-10 col-md-12 col-12">
      <?php if  ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
          <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid rounded-lg', 'title' => 'Feature image']); ?>
        </div>
      <?php else : ?>
        <div class="post-thumbnail__placeholder no-post-thumbnail">
          <img src="https://via.placeholder.com/923x498" alt="Placeholder image">
        </div>
      <?php endif; ?><!-- .post-thumbnail -->
    </div>
    <div class="col-lg-8 col-md-12 col-12 mb-2">
      <div class="entry-content">
        <?php
        the_content(
          sprintf(
            wp_kses(
              /* translators: %s: Name of current post. Only visible to screen readers */
              __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'collagen-coffee' ),
              array(
                'span' => array(
                  'class' => array(),
                ),
              )
            ),
            wp_kses_post( get_the_title() )
          )
        );

        wp_link_pages(
          array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'collagen-coffee' ),
            'after'  => '</div>',
          )
        );
        ?>
      </div><!-- .entry-content -->
    </div>
    <div class="col-lg-8 col-md-12 col-12 mb-2">
      <footer class="entry-footer">
        <?php collagen_coffee_entry_footer(); ?>
      </footer><!-- .entry-footer -->
    </div>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
