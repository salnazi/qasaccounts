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
      //include("section_home_3.php"); // About our messenge
      //include("section_home_4.php"); // People Ready to Change the World-
      include("footer.php"); // footer menu
      ?>
    </div>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/647d890f7957702c744bcb4e/1h255uptc';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <div class="snackbars" id="form-output-global"></div>
    <?php include("footer_js.php"); ?>
  </body>
</html>