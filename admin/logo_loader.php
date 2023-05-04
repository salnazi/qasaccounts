<?php
                                    error_reporting(E_ALL ^ E_WARNING);
                                                  $menuobj=new menu();
                                                  $logo=$menuobj->showLogo();
                                                  ?>
<img src="images/<?php  $logo ?>" alt=""/>