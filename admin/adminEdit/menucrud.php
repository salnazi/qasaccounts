
<?php include_once '../Classess/menu.class.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>

    <div class="row">
                    <div class="col-lg-6">
                        <h1 class="page-header">
                            <small>Admin Page</small>
                        </h1>
                        <form class="" action="crudmenu.php" method="post">
                        <small>Change Logo</small>
                                          <input type="file" class="form-control" name="logo_img" value=""></input>
                                          <button type="submit" name="update_logo" >Update Logo</button>
</form>

                        <!--<ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>-->

                        <div class="col-xs-6">
                          <form class="" action="crudmenu.php" method="post">
                           
                                 <form class="" action="crudmenu.php" method="post">
                                  <div class="form-group">
                                    <label for="menu_title">Update Navbar Menu Name</label>
                                    <input  type="text"  class="form-control" name="update_title"<?php if(isset($_GET['updatevalue']))
                                    {?>
                                       value="<?php echo $_GET['updatevalue'];}?> " width="50%">
                                       <input  type="hidden"  class="form-control" name="menu_id"<?php if(isset($_GET['updatevalue']))
                                       {?>
                                          value="<?php echo $_GET['updateid'];}?> " width="50% "visibility="hidden">
                                  </div>

                                  <input  class="btn btn-primary" type="submit" name="edit" value="Update Navbar Menu">
                                </form>

                                <div class="col-xs-4">

                              <table class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th>Menu Name</th>
                                   
                                  </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    error_reporting(E_ALL ^ E_WARNING);
                                                  $menuobj=new menu();
                                                  $menuarray=$menuobj->showCategory();
                                                  //print_r($catarray);
                                                  echo "<br>";
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
                                                    echo  " <td> ";?><?php echo  $value['menu_name']; //unset($value[$k]);?><?php echo  " </td> ";
                                                    //unset($value['cat_id']);

                                                   

                                                    // echo "<td><a class='delete' href='crudcategory.php?delete={$value['cat_id']}'><i class='fa fa-fw fa-trash-o'></i></a></td>";
                                                    // echo "<td><a class='delete' href='crudcategory.php?updateid={$value['cat_id']}'><i class='fa fa-fw fa-refresh'></i></a></td>";
                                                    echo "<td><a class='edit' href='crudmenu.php?updateid={$value['menu_id']}'><i class='fa fa-edit'></i></a></td>";
                                                    unset($value['menu_id']);
                                                    unset($value['menu_name']);
                                                    unset($value['menu_link']);
                                                    echo "</tr>";
}

                                                   }
                                                   //unset($value['cat_id']);
                                                   //unset( $value['cat_title']);
                                                  //  echo "</tr>";
                                                 }?>



                                </tbody>

                              </table>
                            </div>
                             

                            </div>
                            </form>
                              </div>
</body>
</html>