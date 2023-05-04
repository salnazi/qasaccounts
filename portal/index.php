<!DOCTYPE html>
<html>
<?php 
	include("head.php");
?>
<body>
	<?php
        include("preloader.php");
        include("top_nav.php");
        //include("right_side_bar.php");
        include("left_side_bar.php");

        if($_GET['id'] == 'accounts'){
            include("accounts.php");
        }

        if($_GET['id'] == 'dashboard'){
            include("main_container.php");
        }
        //nclude("main_container.php");
        include("footer_js.php");
    ?>
</body>
</html>