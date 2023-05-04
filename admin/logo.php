
<?php include_once('Classess/menu.class.php');
                                    //error_reporting(E_ALL ^ E_WARNING);
                                                  $menuobj=new menu();
                                                 
                                                  $logo=$menuobj->showLogo();
                                                 
                                                  ?>
<img src="images/<?php echo $logo?>" alt="" style='width:180px;height:120px;'/>