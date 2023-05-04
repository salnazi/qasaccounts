<ul class="rd-navbar-nav">
                                    <?php  
                                    include_once 'Classess/menu.class.php';
                                    error_reporting(E_ALL ^ E_WARNING);
                                                  $menuobj=new menu();
                                                  $menuarray=$menuobj->showCategory();
                                                    foreach ($menuarray as $key => $value) {
                                                    //  echo "<tr>";
                                                      echo "\n";
                                                      //print_r($value);

                                                    foreach ($value as $k => $v)
                                                    {
                                                      echo "<tr>";
                                                    //  echo $value[$k];
                                                    //  echo $v;

if($value[$k])
{
                                                ?> 

                  <li class="rd-nav-item active"><a class="rd-nav-link" href="<?php echo  $value['menu_link'];?>"><?php echo  $value['menu_name'];?></a>
                  </li> 
                
                   
                  <?php 
               unset($value['menu_id']);
                                                    unset($value['menu_name']);
                                                     unset($value['menu_link']);
                                                    }}} ?>
                                                    <li class="rd-nav-item"><a class="rd-nav-link" href="admin/adminEdit/menucrud.php">Edit Menu</a>
                  </li>
                  
                </ul>