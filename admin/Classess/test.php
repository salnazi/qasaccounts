 function showCategory()
  {

    $sql="SELECT * FROM nav_menu LIMIT 3";
    $stmt=mysqli_query($conn, $sql);
   while($row=mysqli_fetch_assoc($stmt))
    {
       $menuname=$row['menu_name'];
       $menuid=$row['menu_id'];
       $menulink=$row['menu_link'];
      $menuarray[]=array('menu_name'=>$menuname,'menu_id'=>$menuid,'menu_link'=>$menulink);

    }

    return $menuarray;

  }
   function updategetMenu($updateid)
{
  $updateid=$updateid;
  $sql="SELECT* FROM nav_menu WHERE menu_id=$updateid";
  $stmt=$connect()->query($sql);
  $row=$stmt->fetch();

  return $row;
}
 function updateMenu($updateid,$updateval)
{
  $updateid=$updateid;
  $updateval=$updateval;
  //echo $updateval;
  //echo $updateid;
  $sql="UPDATE  nav_menu SET menu_name='$updateval' WHERE menu_id='$updateid'";
  $stmt=$connect()->query($sql);
  $row=$stmt->fetch();

  return $row;
}
 function showLogo()
  {

    $sql="SELECT * FROM logo ";
    $stmt=$connect()->query($sql);
   while($row=$stmt->fetch())
    {
       $logo=$row['logo_img'];
       
      

    }

    return $logo;

  }
   function updateLogo($logoname)
{
  $logo=$logoname;
  //echo $updateval;
  //echo $updateid;
  $sql="UPDATE  logo SET logo_img='$logo' ";
  $stmt=$connect()->query($sql);
  $row=$stmt->fetch();

  return $row;
}