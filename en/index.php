<?php include ('header.php'); ?>

<!-- cover -->
<section class="cover-section">

  <h1 data-aos="fade-down" data-aos-duration="1500">Web & Video Solutions ? <br>OkayWeb !</h1>

    <div class="cover-grid">

          <div id="item1-color" class="cover-grid-item" data-aos="zoom-in" data-aos-duration="1500">
              <i class="fab fa-wordpress fa-3x"></i>
              <h2>Web Design & Development.</h2>
              <p>WordPress | Custom Solutions.</p>
          </div>

          <div id="item3-color" class="cover-grid-item" data-aos="zoom-in" data-aos-duration="1500">
              <i class="fas fa-smile-wink fa-3x"></i>
              <h2>Project Satisfaction.</h2>
              <p>Every step together.<br>You can't go wrong like that.</p>
          </div>

          <div id="item2-color" class="cover-grid-item" data-aos="zoom-in" data-aos-duration="1500">
              <i class="fas fa-database fa-3x"></i>
              <h2>Backup & Software Updates.</h2>
              <p>Maintenance Guaranteed.</p>
          </div>

    </div>

</section>


<!-- services -->
<section id="services" class="focus-section">

<div data-aos="zoom-in" data-aos-duration="1500">
  <h1>01</h1>
  <h2>One Focus Only.</h2>
  <p>We focus to work in your online business to let you free to work on your business.</p>
</div>

  <div class="focus-section-grid" data-aos="zoom-in" data-aos-duration="1500">

        <div class="focus-section-grid-item clearfix">
            <i class="fas fa-desktop fa-2x"></i>
            <h2>Web Design.</h2>
            <p>We can design the look you want for your best communication.</p>
        </div>

        <div class="focus-section-grid-item clearfix">
            <i class="fas fa-laptop-code fa-2x"></i>
            <h2>Web Development.</h2>
            <p>We can add new features to your site. eCommerce? Other? <br>Feel free to ask.</p>
        </div>

        <div class="focus-section-grid-item clearfix" >
            <i class="fas fa-chart-bar fa-2x"></i>
            <h2>Web Analysis.</h2>
            <p>Basic Analysis of your site from a software, SEO, Security point of view.</p>
        </div>

        <div class="focus-section-grid-item clearfix">
            <i class="fas fa-camera fa-2x"></i>
            <h2>Photo & Video.</h2>
            <p>We can provide professional photos & videos for your site to tell your brand.</p>
        </div>



  </div>
</section>


<!-- goals -->
<section class="goals-section" >

  <div class="goals-section-grid" data-aos="zoom-in" data-aos-duration="1500" >

        <div class="goals-section-grid-item">
            <h2>+ Visibility.</h2>
            <p>You need an Online project.<br>The Web site.</p>
        </div>

        <div class="goals-section-grid-item">
            <h2>+ Clients.</h2>
            <p>The Website increases<br>Your Visibility.</p>
        </div>

        <div class="goals-section-grid-item">
            <h2>+ Passion.</h2>
            <p>Customers who love you, follow you. <br>Give them the right value.</p>
        </div>

        <div class="goals-section-grid-item">
            <h2>+ Value.</h2>
            <p>+ Value to your audience. <br>+ Value for you.</p>
        </div>

  </div>

</section>


<!-- maintenance plans -->
<section id="plans" class="plans-section">

<div data-aos="zoom-in" data-aos-duration="1500">
  <h1>02</h1>
  <h2>Maintenance Plans.</h2>
  <p>Two simple plans to decide what is better for you.</p>
</div>

<div class="plans-section-grid">

      <div class="plans-section-grid-item clearfix" data-aos="zoom-in" data-aos-duration="1500">

          <h2>WordPress Silver Plan.</h2>
          <img src="img/okayweb.png" width="150px" height="150px">

          <div class="box-offer">
            <ul>
              <li><p>WebSite Backup - Pre Software Update.</p></li>
              <li><p>Wordpress Plugins Update.</p></li>
              <li><p>WordPress Theme Update.</p></li>
              <li><p>WordPress Core Update.</p></li>
              <li><p>WordPress WebSite Check.</p></li>
              <li><p>WebSite Backup - Post Software Update.</p></li>
              <li><p>Wordpress Security Check.</p></li>
              <li><p>WordPress SEO Check.</p></li>
            </ul>

          </div>

          <!-- gumroad basic plan button  -->
            <!-- <script src="https://gumroad.com/js/gumroad.js"></script>
            <a class="gumroad-button btn-shape" href="https://gum.co/cClVc" target="_blank">Buy</a><br> -->
      </div>

      <div class="plans-section-grid-item clearfix" data-aos="zoom-in" data-aos-duration="1500">

          <h2>WordPress Gold Plan.</h2>
          <img src="img/okayweb.png" width="150px" height="150px">

          <div class="box-offer">
            <ul>
              <li><p>WebSite Backup - Pre Software Update.</p></li>
              <li><p>Wordpress Plugins Update.</p></li>
              <li><p>WordPress Theme Update.</p></li>
              <li><p>WordPress Core Update.</p></li>
              <li><p>WordPress WebSite Check.</p></li>
              <li><p>WebSite Backup - Post Software Update.</p></li>
              <li><p>Wordpress Security Check.</p></li>
              <li><p>WordPress SEO Check.</p></li>
              <li><p>1h/month consulting.</p></li>
            </ul>

          </div>

          <!-- gumroad advanced plan button -->
            <!-- <script src="https://gumroad.com/js/gumroad.js"></script>
            <a class="gumroad-button btn-shape" href="https://gum.co/lrYDZ" target="_blank">Buy</a> -->

      </div>

</section>


<!-- contact form -->
<section id="contacts" class="contacts-section">

  <div class="contacts-layer">

    <div data-aos="zoom-in" data-aos-duration="1500">
      <h1>03</h1>
      <h2>Get in touch.</h2>
      <p>Just 3 simple steps to contact us.</p>
    </div>

    <div class="container-grid">
      <div class="container">

          <form id="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

              <label for="name">Your Name *</label>
              <input id="name" REQUIRED type="text" name="name" placeholder="Your name.."></input>

              <label for="email">Your Email *</label>
              <input id="email" REQUIRED type="text"  name="email" placeholder="Your email .."></input>

              <label for="message">Your Message *</label>
              <textarea id="message" REQUIRED  name="message" placeholder="Your message .."></textarea>

              <div class="gdprFlag">
                <input REQUIRED type="checkbox" name="gdprFlag" value="">
                I give my permission to treat my personal datas provided in this form
                for the purpose to be contacted for replying to my request.
                <br>(Tick the box to agree).
              </div>
              <div class="container-btn"><br><a href="privacy-cookies.php">Click here for the Privacy / Cookies Policy.<a/></div>

              <div class="container-btn">

                <input id="btn-services"
                class="g-recaptcha btn-shape"
                type="submit"
                name="submit"
                value="Send"
                data-sitekey="6LfBIZEeAAAAACWedZHzsM3RUKS_A79VpnDJ-yrJ"
                data-callback='onSubmit'
                data-action='submit'>

                <!-- <input id="btn-services" class="btn-shape" type="submit" name="submit" value="Send" > -->
                <h3><?php echo $result ?></h3>
              </div>

              <!-- RECAPTCHA PANEL -->
              <!-- Add attributes to your html button -->
              <!-- <button class="g-recaptcha"
                      data-sitekey="6LfBIZEeAAAAACWedZHzsM3RUKS_A79VpnDJ-yrJ"
                      data-callback='onSubmit'
                      data-action='submit'></button> -->
          </form>
      </div>
    </div>
    <a href="index.php#top"><i class="fas fa-angle-double-up fa-2x btn-top"></i></a>
  </div>
</section>

<?php include ('footer.php'); ?>
