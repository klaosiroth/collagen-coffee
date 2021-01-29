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
    
    <!-- <header class="entry-header">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header> -->

    <div class="t-contact">
      <div class="t-contact__title">
        <h2>มีข้อสงสัย? ให้เราช่วยสิ</h2>
        <p>ติดต่อเราด้วยช่องทางที่คุณสะดวกมากที่สุด</p>
      </div>
      <div class="row">
        <!-- <div class="col-md-6">
          <div class="mb-4">
            <h3 class="">ฝากข้อความถึงเรา</h3>
            <p class="">ส่งคำถามหรือข้อเสนอแนะของคุณมาหาเรา เราจะติดต่อกลับคุณโดยเร็วที่สุด</p>
          </div>
          <form action="#">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>ชื่อ *</label>
                  <input class="form-control" name="contact-name" type="text" placeholder="ชื่อ - นามสกุล" required="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>อีเมล *</label>
                  <input class="form-control" name="contact-email" type="email" placeholder="อีเมลของคุณ" required="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>ข้อความ:</label>
              <textarea class="form-control" name="contact-message" cols="30" rows="5" placeholder="ข้อความของคุณ..."></textarea>
            </div>
            <button class="btn btn-primary" type="submit">ส่งข้อความ</button>
          </form>
        </div> -->
        <div class="col-md-6">
          <div class="contact__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15498.644538300341!2d100.5751156!3d13.79929!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xab97a494367d022c!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4nuC4o-C4m-C4tOC4ouC4sCDguYDguJnguYfguJXguYDguKfguLTguKPguYzguIQg4LiI4Liz4LiB4Lix4LiUIChQNSBOZXR3b3JrKQ!5e0!3m2!1sen!2sth!4v1611898472683!5m2!1sen!2sth" width="600" height="450" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
        <div class="col-md-6">
          <h3 >ที่อยู่บริษัท</h3>
          <p><strong>บริษัท พรปิยะ เน็ตเวิร์ค จำกัด</strong><br>เลขที่ 470 ซอยรัชดาภิเษก 26 ถนนรัชดาภิเษก<br>แขวงสามเสนนอก เขตห้วยขวาง กรุงเทพมหานคร 10310</p>
          <p>วันทำการ: จันทร์ – ศุกร์.<br>เวลาทำการ: 09.00 – 18.00 น.</p>
          <h4>โทรหาเรา</h4>
           <a href="tel:+66992193955">099 219 3955</a>
          <h6>ส่งอีเมลถึงเรา</h6>
          <a href="mailto:">example@email.com</a>
        </div>
      </div>

      <h1>มีข้อสงสัย? ให้เราช่วยสิ</h1>
      <h2>มีข้อสงสัย? ให้เราช่วยสิ</h2>
      <h3>มีข้อสงสัย? ให้เราช่วยสิ</h3>
      <h4>มีข้อสงสัย? ให้เราช่วยสิ</h4>
      <h5>มีข้อสงสัย? ให้เราช่วยสิ</h5>
      <h6>มีข้อสงสัย? ให้เราช่วยสิ</h6>
      
      <!-- <div class="row justify-content-center">
        <div class="col-md-9 col-lg-8 col-xl-6">
          <div class="text-center mb-4">
            <h2 class="">ฝากข้อความถึงเรา</h2>
            <p class="">ส่งคำถามหรือข้อเสนอแนะของคุณมาหาเรา เราจะติดต่อกลับคุณโดยเร็วที่สุด</p>
          </div>
          <form action="https://collagen-coffee/smtp.php" data-form-email="" novalidate="">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>ชื่อ *</label>
                  <input name="contact-name" type="text" class="form-control" required="">
                  <div class="invalid-feedback">
                    Please type your name.
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>นามสกุล *</label>
                  <input name="contact-company" type="text" class="form-control" required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>อีเมล *</label>
                  <input name="contact-email" type="email" placeholder="you@yoursite.com" class="form-control" required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>เบอร์โทรติดต่อ *</label>
                  <input name="contact-phone" type="tel" class="form-control" required="">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label>ข้อความ:</label>
                  <textarea class="form-control" name="contact-message" rows="10" placeholder="ข้อความของคุณ..."></textarea>
                </div>
              </div>
              <div class="col">
                <div class="d-none alert alert-success" role="alert" data-success-message="">
                  Thanks, a member of our team will be in touch shortly.
                </div>
                <div class="d-none alert alert-danger" role="alert" data-error-message="">
                  Please fill all fields correctly.
                </div>
                <button type="submit" class="btn btn-primary btn-loading" data-loading-text="Sending">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="injected-svg icon" data-src="assets/img/icons/theme/code/loading.svg">
                    <title>Icon For Loading</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g>
                            <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
                        </g>
                        <path d="M12,4 L12,6 C8.6862915,6 6,8.6862915 6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,10.9603196 17.7360885,9.96126435 17.2402578,9.07513926 L18.9856052,8.09853149 C19.6473536,9.28117708 20,10.6161442 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) "></path>
                    </g>
                  </svg>
                  <span>ส่งข้อความ</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div> -->

      <!-- <div class="faq">
        <h2 class="mb-4">คำถามที่พบบ่อย</h2>
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
      </div> -->

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

<style>
.btn>.icon:first-child {
  margin-right: .5rem;
}
.btn.btn-primary * {
  fill: #fff;
}
.btn-loading .icon {
  display: none;
  background: #f4ccce;
}
</style>

<?php
get_footer();