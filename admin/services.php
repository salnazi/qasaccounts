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
      <!-- Base typography-->
      <section class="section section-lg">
        <div class="container">
          <div class="row row-50 flex-lg-row-reverse">
            <div class="col-lg-3 col-xl-4">
              <div class="row row-35 row-lg-50">
                <div class="col-sm-6 col-lg-12">
                  <article class="box-bordered">
                    <h5>Google Fonts</h5>
                    <h2 class="font-weight-bold">Muli</h2>
                    <h4>Open Sans</h4>
                  </article>
                </div>
                <div class="col-sm-6 col-lg-12">
                  <article class="box-bordered">
                    <h5>Used colors</h5>
                    <ul class="list-palette">
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-lg-9 col-xl-8">
              <ul class="list-xl">
                <li>
                  <h1>H1 Heading</h1>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h2>H2 Heading</h2>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h3>H3 Heading</h3>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h4>H4 Heading</h4>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h5>H5 Heading</h5>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
                <li>
                  <h6>H6 Heading</h6>
                  <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- HTML Text Elements-->
        <div class="container">
          <h3>HTML Text Elements</h3>
          <p class="text-block"><span class="font-weight-bold">Bold text</span>
            <mark>This is a highlighted text</mark><span class="text-strike">This is a strickethrough text</span><span class="text-underline">This is an underlined text.</span><span>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for</span><a href="#">Link</a><a class="link-hover" href="#">Hover link</a><a class="link-active" href="#">Press link</a><span>With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page.</span><span class="tooltip-custom" data-toggle="tooltip" data-placement="top" title="Default text">Tooltip</span>
          </p>
        </div>
        <!-- Ordered & unOrdered List-->
        <div class="container">
          <h3>Ordered & Unordered Lists</h3>
          <div class="row row-50">
            <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
              <ul class="list-marked">
                <li>Bubos velum</li>
                <li>Aonidess peregrinatione</li>
                <li>Bursas cantare!</li>
                <li>Domuss potus</li>
                <li>Vortexs accelerare</li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
              <ol class="list-ordered">
                <li>Parmas cadunt</li>
                <li>Genetrixs ortum</li>
                <li>Fraticinidas credere</li>
                <li>Solems cantare</li>
                <li>Follas ridetis</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- Blockquote-->
        <div class="container">
          <h3>Blockquote</h3>
          <div class="row row-50">
            <div class="col-lg-9 col-xl-7">
              <!-- Quote Light-->
              <blockquote class="quote-light">
                <div class="quote-light-mark linearicons-quote-open"></div>
                <div class="quote-light-text">
                  <p>Fidelis, brevis elevatuss grauiter acquirere de camerarius, castus brodium. Cum advena nocere, omnes demissioes vitare mirabilis, talis itineris tramitemes.</p>
                </div>
              </blockquote>
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
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>