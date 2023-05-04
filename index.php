<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<?php include("head.php"); ?>
  <body>
    <div class="preloader" id="loading">
      <?php include("logo_loader.php"); ?>
    </div>
    <div class="page">
     <?php 
      include("header_menu.php");  // nav menu top
      include("section_top_banner.php"); // top banner
      include("our_services.php"); // our services
      include("section_home_1.php"); // About us
      include("section_home_2.php"); // Features
      include("section_home_3.php"); // About our messenge
      include("section_home_4.php"); // People Ready to Change the World-
      include("footer.php"); // footer menu
      ?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <?php include("footer_js.php"); ?>
  </body>
</html>