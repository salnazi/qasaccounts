<?php include_once '../Classess/menu.class.php';

 ?>
<?php
ob_start();


if(isset($_GET['updateid'])){
  $menuobj=new menu();
  $menuarray=$menuobj->updategetMenu($_GET['updateid']);
  print_r($menuarray['menu_name']);
  foreach (array_slice($menuarray,0,2) as $key => $value) {
    $menuname=$menuarray['menu_name'];
    $menuid=$menuarray['menu_id'];
  }
  header("Location:menucrud.php?updatevalue=$menuname & updateid=$menuid");
  exit();
}

elseif(isset($_POST['edit']))
{
  $catid= $_POST['menu_id'];

$title= $_POST['update_title'];
$menuobj=new menu();
$menuarray=$menuobj->updateMenu($catid,$title);
header("Location:../../index.php");
exit();
}
elseif(isset($_POST['update_logo']))
{
  $image= $_POST['logo_img'];


$menuobj=new menu();
$menuarray=$menuobj->updateLogo($image);
header("Location:../../index.php");
exit();
}
else{
  echo "hello";
}
ob_flush();
?>
