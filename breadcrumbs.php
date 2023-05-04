<?php
error_reporting(0);
$url = $_SERVER['REQUEST_URI'];

if(strpos($url,'about-us'))
{
    $path = 'About Us';
    $mode = '1';
}
else if(strpos($url,'contact-us'))
{
    $path = 'Contact Us';
    $mode = '1';
}
else if(strpos($url,'registration'))
{
    $path = 'Registration';
    include("section_registration.php");
}
else if(strpos($url,'login'))
{
    $path = 'Sign In';
    include("section_login.php");
}
?>
<?php
    if( $mode == '1')
    {
        echo '<section class="breadcrumbs-custom">
                <div class="breadcrumbs-custom-main context-dark">
                <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-xl-9">
                        <h2 class="breadcrumbs-custom-title">'.$path.'</h2>
                    </div>
                    </div>
                </div>
                </div>
                <div class="breadcrumbs-custom-aside">
                <div class="container">
                    <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">'.$path.'</li>
                    </ul>
                </div>
                </div>
            </section>';
    }
?>