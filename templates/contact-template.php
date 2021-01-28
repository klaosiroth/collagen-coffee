<?php
/**
 * Template Name: Contact Template
 * Template Post Type: (enter the post type: post, page, product, etc)
 * 
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files
 * 
 * @package collagen-coffee
 */

get_header();
?>

  <main id="primary" class="site-main">
    
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      </header><!-- .entry-header -->


      <div class="entry-content">
        <?php
        the_content();
        ?>
      </div><!-- .entry-content -->

    </article><!-- #post-<?php the_ID(); ?> -->

    <div class="t-contact">
      <div class="t-contact__title">
        <h2>Let us help you.</h2>
        <p>Here you can ask, custom orders or even do partnership with us in every way.</p>
      </div>
      <div class="row">
        <div class="col-lg-6" style="background: #f4ccce;">
          <form action="#">
            <h3>Send us a message</h3>
            <input type="text" placeholder="Write your name">
            <input type="email" placeholder="Write your email">
            <textarea name="messege" id="messege" cols="30" rows="10" placeholder="Tell us about your problem..."></textarea>
            <button type="submit">Submit</button>
          </form>
        </div>
        <div class="col-lg-6">
          <h3>Address</h3>
          470 Ratchadaphisak, Soi 26 Huaykwang Samsannok Bangkok 10310
          <h3>Call us</h3>
           <a href="tel:+66">099 664 6589</a>
          <h3>Mail us</h3>
          <a href="mailto:">example@email.com</a>
        </div>
      </div>
      <div class="faq">
        <h2 class="mb-4">Frequently<br>
          asked question</h2>
        <div class="row">
          <div class="col-lg-4">
            <h3>What do you do?</h3>
          </div>
          <div class="col-lg-8">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias ex doloribus cumque dolores reiciendis doloremque quibusdam suscipit voluptas eius rerum tempore, ut iure fuga sed praesentium accusamus! Necessitatibus, dolore officia?
          </div>
          <div class="col-lg-4">
            <h3>How does this work?</h3>
          </div>
          <div class="col-lg-8">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias ex doloribus cumque dolores reiciendis doloremque quibusdam suscipit voluptas eius rerum tempore, ut iure fuga sed praesentium accusamus! Necessitatibus, dolore officia?
          </div>
          <div class="col-lg-4">
            <h3>What if i'm not satisfied?</h3>
          </div>
          <div class="col-lg-8">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias ex doloribus cumque dolores reiciendis doloremque quibusdam suscipit voluptas eius rerum tempore, ut iure fuga sed praesentium accusamus! Necessitatibus, dolore officia?
          </div>
        </div>
      </div>

      <div class="py-5" style="background: #f5efe2;">
        <div class="text-center mb-5">
          <h2 class="display-4 font-weight-bold color-brand">Sign up for our Newsletter</h2>
          <p class="mb-0 lead">Join our newsletter and get resources, curated content, and design inspiration
            delivered straight to your inbox.</p>
        </div>
        <!-- Form -->
        <form class="form-row px-md-5">
          <div class="form-group col pl-0">
            <input type="email" class="form-control" placeholder="Email Address" required="">
          </div>
          <div class="form-group col-auto pl-0">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>

  </main><!-- #main -->

<?php
get_footer();