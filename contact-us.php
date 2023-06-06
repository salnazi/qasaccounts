<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<?php include("head.php"); ?>
  <body>
    <div class="preloader" id="loading">
      <?php include("logo_loader.php"); ?>
    </div>
    <div class="page">
      <?php 
          include("header_menu.php");
          include("breadcrumbs.php");
      ?>
      
      <section class="section section-md">
        <div class="container">
          <div class="row row-50">
            <div class="col-xl-5">
              <div class="inset-1">
                <h2>Our Office</h2>
                <p class="big">Visit Us.</p>
                <div class="row row-50">
                  <div class="col-sm-6 col-xl-12">
                    <p class="heading-7">QAS Office</p>
                    <ul class="list list-style-1">
                      <li class="unit"><span class="unit-left icon icon-sm text-accent mdi mdi-map-marker"></span>
                        <div class="unit-body"><a href="#">Jumeirah Lake Towers, Cluster-I, Silver Tower, Office#5G</a></div>
                      </li>
                      <li class="unit"><span class="unit-left icon icon-sm text-accent mdi mdi-cellphone"></span>
                        <div class="unit-body"><a href="tel:#">+971 50 194 2984</a></div>
                      </li>
                      <li class="unit"><span class="unit-left icon icon-sm text-accent mdi mdi-email-outline"></span>
                        <div class="unit-body"><a class="text-accent" href="mailto:#">info@qasaccounts.com</a></div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-xl-12">
                    <p class="heading-7">Office 5G</p>
                    <ul class="list list-style-1">
                      <li class="unit"><span class="unit-left icon icon-sm text-accent mdi mdi-map-marker"></span>
                        <div class="unit-body"><a href="#">9870 St Vincent Place, Glasgow, DC 45 Fr 45</a></div>
                      </li>
                      <li class="unit"><span class="unit-left icon icon-sm text-accent mdi mdi-cellphone"></span>
                        <div class="unit-body"><a href="tel:#">+1 800 603 6035</a></div>
                      </li>
                      <li class="unit"><span class="unit-left icon icon-sm text-accent mdi mdi-email-outline"></span>
                        <div class="unit-body"><a class="text-accent" href="mailto:#">info@demolink.org</a></div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-7">
              <div style="overflow:hidden;max-width:100%;width:700px;height:500px;"><div id="display-google-map" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=ANPA+MEDICAL+SUPPLIES+DMCC,+5G+Near,+Almas+Tower+-+Dubai+-+United+Arab+Emirates&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="code-for-google-map" href="https://www.bootstrapskins.com/themes" id="enable-maps-data">premium bootstrap themes</a><style>#display-google-map img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
                <ul class="google-map-markers">
                  <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Get in Touch-->
      <section class="section section-md bg-gray-100">
        <div class="container">
          <h3 class="text-center">Get in Touch</h3>
          <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-9">
              <!-- RD Mailform-->
              <form class="rd-mailform rd-form" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-x-16 row-20">
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                      <label class="form-label" for="contact-email">Email</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Message</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                      <label class="form-label" for="contact-phone">Phone</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap form-button">
                      <button class="button button-block button-primary" type="submit">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <?php
        include("footer.php");
      ?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <?php include("footer_js.php"); ?>
  </body>
</html>