<?php
/**
 * The template for displaying front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package collagen-coffee
 */

get_header();
?>

	<main id="primary" class="site-main">

    <!-- Banner Carousel -->

    <!-- Products -->
    <section class="product pb-lg-3 pt-lg-3">
      <div class="row d-lg-flex align-items-center mb-4">
        <div class="col">
          <h2 class="mb-0">สินค้า</h2>
        </div>
        <div class="col-auto">
          <a href="/shop" class="btn btn-outline-primary btn-sm">ดูทั้งหมด</a>
        </div>
      </div>
      <div class="row gutter-1">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12">
          <div class="card mb-4 shadow-lg ">
              <a href="blog-single.html" class="card-img-top">
                <img src="" class="card-img-top rounded-top" alt="">
              </a>
              <!-- Card body -->
              <div class="card-body">
                <a href="#" class="font-size-sm font-weight-semi-bold d-block mb-3 text-info">Courses</a>
                <h3><a href="<?php echo get_stylesheet_directory_uri(); ?>/form.html" class="text-inherit">
                    How to become modern Stack Developer in 2020
                  </a>
                </h3>
                <p>At beatae non sit dicta simili quepers lem piciatis facilis veritatis quam.
                  corrupti?</p>
                <div class="row align-items-center no-gutters mt-4">
                  <div class="col-auto">
                    <img src="" alt="" class="rounded-circle avatar-sm mr-2">
                  </div>
                  <div class="col lh-1">
                    <h5 class="mb-1">Sia Port</h5>
                    <p class="font-size-xs mb-0">September 10, 2020</p>
                  </div>
                  <div class="col-auto">
                    <p class="font-size-xs mb-0">10 Min Read</p>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mb-4">
          <a href="#" class="">
            <div class="mb-2 w-100">
              <img src="https://p-u.popcdn.net/event_details/covers/000/010/412/medium/aef046525462f6f9e09bd5f389b5bec4bf817890.jpg?1606470631">
            </div>
            <div class="info mt-4">
              <h5 class="title mb-2">Little Shelter</h5>
              <div class="price text-danger">
                <h4>฿4,500.00</h4>
              </div>
            </div>
          </a>
        </div>

      </div>
    </section>

    <section class="feature pb-lg-3 pt-lg-3">
      <div class="col-md-6"></div>
      <div class="col-md-6">
        <video controls="" autoplay="true">
          <source src="https://gmedia.playstation.com/is/content/SIEPDC/global_pdc/en/hardware/accessories/ds5/product-photography/video-renders/dualsense-thumbnail-ps5-01-en-04aug20.mp4">
        </video>
      </div>
      
    </section>

    <div class="latest-post pb-lg-3 pt-lg-3">
      <div class="row d-lg-flex align-items-center mb-4">
        <div class="col">
          <h2 class="mb-0">บทความ</h2>
        </div>
        <div class="col-auto">
          <a href="/blog" class="btn btn-outline-primary btn-sm">อ่านทั้งหมด</a>
        </div>
      </div>
      <div class="row row-cols-3">
        <div class="col">Column</div>
        <div class="col">Column</div>
        <div class="col">Column</div>

        <div class="col-lg-4 col-md-6 col-12">
          <div class="card mb-4 shadow-lg ">
              <a href="blog-single.html" class="card-img-top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-post.jpg" class="card-img-top rounded-top" alt=""></a>
              <!-- Card body -->
              <div class="card-body">
                <a href="#!" class="font-size-sm font-weight-semi-bold d-block mb-3 text-info">หมวดหมู่</a>
                <h3>
                  <a href="blog-single.html" class="text-inherit">
                    How to become modern Stack Developer in 2020
                  </a>
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi itaque in sint voluptatibus nemo magnam, dolor deleniti.</p>
                <div class="row align-items-center no-gutters mt-4">
                  <div class="col-auto">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/avatar.jpg" alt="" class="rounded-circle avatar-sm mr-2">
                  </div>
                  <div class="col lh-1">
                    <h5 class="mb-1">Sia Port</h5>
                    <p class="font-size-xs mb-0">September 10, 2020</p>
                  </div>
                  <div class="col-auto">
                    <p class="font-size-xs mb-0">10 Min Read</p>
                  </div>
                </div>
              </div>
            </div>
        </div>

      </div>
    </div>

    <header class="header">
      <h1><?php bloginfo('name'); ?></h1>
      <p><?php bloginfo('description'); ?></p>
      <?php
        $menu = array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu'
        );
      ?>
      <?php wp_nav_menu($menu);?>
    </header>

    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <h3>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>  
        </h3>
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php endif; ?>
        <div class="meta">
          <?php the_author(); ?> on <?php the_date(); ?>
        </div>
        <?php the_excerpt(); ?>
        <a class="btn btn-light" href="<?php the_permalink(); ?>">
          Read more
        </a>  
      <?php endwhile; ?>
    <?php else : ?>
      <?php echo wpautop('Sorry, Not has post.'); ?>
    <?php endif; ?>

    <?php comments_template(); ?>

    <?php if ( is_active_sidebar('sidebar-1') ) : ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>

    <footer>
      <p>&copy; <?php echo get_the_date('Y'); ?> - <?php bloginfo('name'); ?></p>
    </footer>

  </main><!-- #main -->

<?php
// get_sidebar();
get_footer();
