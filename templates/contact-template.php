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

    <div class="wrapper">
      <div class="w-50 text-center mx-md-auto mb-5">
        <h1>We're here to help</h1>
        <p>Contact us if you have any question about our company or products. We will try to provide an answer within a few days.</p>
      </div>
      <div class="row mb-5">
        <div class="col-md-4 col-12">
          <div class="card h-100">
            <div class="card-body">
              <figure>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/message.svg" alt="" style="height: 60px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.4" d="M22 15.9402C22 18.7302 19.76 20.9902 16.97 21.0002H16.96H7.05C4.27 21.0002 2 18.7502 2 15.9602V15.9502C2 15.9502 2.006 11.5242 2.014 9.2982C2.015 8.8802 2.495 8.6462 2.822 8.9062C5.198 10.7912 9.447 14.2282 9.5 14.2732C10.21 14.8422 11.11 15.1632 12.03 15.1632C12.95 15.1632 13.85 14.8422 14.56 14.2622C14.613 14.2272 18.767 10.8932 21.179 8.9772C21.507 8.7162 21.989 8.9502 21.99 9.3672C22 11.5762 22 15.9402 22 15.9402Z" fill="#200E32"/>
                  <path d="M21.4759 5.6736C20.6099 4.0416 18.9059 2.9996 17.0299 2.9996H7.04988C5.17388 2.9996 3.46988 4.0416 2.60388 5.6736C2.40988 6.0386 2.50188 6.4936 2.82488 6.7516L10.2499 12.6906C10.7699 13.1106 11.3999 13.3196 12.0299 13.3196C12.0339 13.3196 12.0369 13.3196 12.0399 13.3196C12.0429 13.3196 12.0469 13.3196 12.0499 13.3196C12.6799 13.3196 13.3099 13.1106 13.8299 12.6906L21.2549 6.7516C21.5779 6.4936 21.6699 6.0386 21.4759 5.6736Z" fill="#200E32"/>
                </svg>
              </figure>
              <h3 class="card-title">อีเมลถึงเรา</h3>
              <p class="card-text text-muted">Ask us a question by email and we will respond within a few days.</p>
            </div>
            <div class="card-footer font-weight-bold bg-transparent border-0">
              <a href="mailto:">ฝากข้อความ</a>
              <i class="fas fa-angle-right fa-sm ml-2"></i>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="card h-100">
            <div class="card-body">
              <figure>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/location.svg" alt="" style="height: 60px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.53162 2.93677C10.7165 1.66727 13.402 1.68946 15.5664 2.99489C17.7095 4.32691 19.012 6.70418 18.9998 9.26144C18.95 11.8019 17.5533 14.19 15.8075 16.0361C14.7998 17.1064 13.6726 18.0528 12.4488 18.856C12.3228 18.9289 12.1848 18.9777 12.0415 19C11.9036 18.9941 11.7693 18.9534 11.6508 18.8814C9.78243 17.6746 8.14334 16.134 6.81233 14.334C5.69859 12.8314 5.06584 11.016 5 9.13442C4.99856 6.57225 6.34677 4.20627 8.53162 2.93677ZM9.79416 10.1948C10.1617 11.1008 11.0292 11.6918 11.9916 11.6918C12.6221 11.6964 13.2282 11.4438 13.6748 10.9905C14.1214 10.5371 14.3715 9.92064 14.3692 9.27838C14.3726 8.29804 13.7955 7.41231 12.9073 7.03477C12.0191 6.65723 10.995 6.86235 10.3133 7.55435C9.63159 8.24635 9.42664 9.28872 9.79416 10.1948Z" fill="#200E32"/>
                  <ellipse opacity="0.4" cx="12" cy="21" rx="5" ry="1" fill="#200E32"/>
                </svg>
              </figure>
              <h3 class="card-title">โลเคชั่นของเรา</h3>
              <p class="card-text text-muted">You can meet us at our office and dissuss the details of your question.</p>
            </div>
            <div class="card-footer font-weight-bold bg-transparent border-0">
              <a href="mailto:">Get directions</a>
              <i class="fas fa-angle-right fa-sm ml-2"></i>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="card h-100">
            <div class="card-body">
              <figure>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/info.svg" alt="" style="height: 60px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.4" d="M14.4184 5.48994C13.9423 5.402 13.5051 5.70579 13.4145 6.17047C13.3239 6.63515 13.6286 7.08884 14.0917 7.17978C15.486 7.45159 16.5626 8.53085 16.8354 9.92989V9.93089C16.9131 10.3336 17.2677 10.6264 17.676 10.6264C17.7308 10.6264 17.7855 10.6214 17.8413 10.6114C18.3044 10.5185 18.6091 10.0658 18.5185 9.60012C18.1112 7.51055 16.5028 5.89666 14.4184 5.48994Z" fill="#200E32"/>
                  <path opacity="0.4" d="M14.3561 2.00793C14.133 1.97595 13.9089 2.04191 13.7307 2.18381C13.5474 2.32771 13.4329 2.53557 13.408 2.76841C13.3552 3.23908 13.6948 3.66479 14.1649 3.71776C17.4065 4.07951 19.9262 6.60477 20.2907 9.85654C20.3395 10.2922 20.705 10.621 21.1412 10.621C21.174 10.621 21.2059 10.619 21.2388 10.615C21.4668 10.59 21.67 10.4771 21.8134 10.2972C21.9558 10.1174 22.0206 9.89351 21.9947 9.66467C21.5405 5.60746 18.4005 2.45862 14.3561 2.00793Z" fill="#200E32"/>
                  <path d="M17.6049 14.673C16.9566 14.5351 16.4437 14.8349 15.9896 15.0967C15.5245 15.3666 14.6391 16.0811 14.1332 15.8972C11.5379 14.8339 9.09693 12.5705 8.04028 9.97626C7.85405 9.45961 8.56811 8.57322 8.83601 8.10554C9.09793 7.65185 9.39272 7.13521 9.25827 6.48565C9.13677 5.90106 7.56524 3.90942 7.00952 3.3648C6.64204 3.00505 6.26758 2.80718 5.88216 2.7742C4.43313 2.71325 2.81479 4.63892 2.53095 5.09961C1.81888 6.08193 1.82386 7.38903 2.5429 8.97395C4.27577 13.231 10.8298 19.6556 15.1201 21.4464C15.9109 21.8151 16.6359 22 17.2862 22C17.9226 22 18.4893 21.8231 18.9763 21.4724C19.3428 21.2615 21.3565 19.5697 21.3027 18.0877C21.2718 17.7099 21.0736 17.3322 20.7171 16.9665C20.1734 16.4078 18.1875 14.7959 17.6049 14.673Z" fill="#200E32"/>
                </svg>
              </figure>
              <h3 class="card-title">โทรหาเราได้ตลอดเวลา</h3>
              <p class="card-text text-muted">Call us if your question require an immediate response.</p>
            </div>
            <div class="card-footer font-weight-bold bg-transparent border-0">
              <a href="tel:+66 99 219 3955">+66 99 219 3955</a>
              <i class="fas fa-angle-right fa-sm ml-2"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="wrapper">
      <div class="row justify-content-center py-5 mb-5">
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
                <p class="text-muted">I agree to the Terms & Conditions</p>
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
      </div>
    </div>
    
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