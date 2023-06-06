<?php
error_reporting(0);
$url = explode("/" , $_SERVER['REQUEST_URI']);

if($url[2] == 'about-us.php')
{
  echo '<ul class="rd-navbar-nav">
        <li class="rd-nav-item " ><a class="rd-nav-link" href="index.php">Home</a></li>
        <li class="rd-nav-item active"><a class="rd-nav-link" href="about-us.php">About Us</a></li>
        <li class="rd-nav-item "><a class="rd-nav-link" href="index.php#services">Our Services</a></li>
        <li class="rd-nav-item "><a class="rd-nav-link" href="contact-us.php">Contact Us</a></li>
      </ul>';
}
else if($url[2] == 'index.php')
{
  echo '<ul class="rd-navbar-nav">
          <li class="rd-nav-item active" ><a class="rd-nav-link" href="index.php">Home</a></li>
          <li class="rd-nav-item "><a class="rd-nav-link" href="about-us.php">About Us</a></li>
          <li class="rd-nav-item"><a class="rd-nav-link" href="index.php#services">Our Services</a></li>
          <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.php">Contact Us</a></li>
        </ul>';
}
else if($url[2] == 'contact-us.php')
{
  echo '<ul class="rd-navbar-nav">
        <li class="rd-nav-item " ><a class="rd-nav-link" href="index.php">Home</a></li>
        <li class="rd-nav-item "><a class="rd-nav-link" href="about-us.php">About Us</a></li>
        <li class="rd-nav-item "><a class="rd-nav-link" href="index.php#services">Our Services</a></li>
        <li class="rd-nav-item active"><a class="rd-nav-link" href="contact-us.php">Contact Us</a></li>
      </ul>';
}
else {
  echo '<ul class="rd-navbar-nav">
        <li class="rd-nav-item active" ><a class="rd-nav-link" href="index.php">Home</a></li>
        <li class="rd-nav-item "><a class="rd-nav-link" href="about-us.php">About Us</a></li>
        <li class="rd-nav-item "><a class="rd-nav-link" href="index.php#services">Our Services</a></li>
        <li class="rd-nav-item "><a class="rd-nav-link" href="contact-us.php">Contact Us</a></li>
      </ul>';
}
?>
