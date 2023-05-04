<!DOCTYPE html>
<?php
include_once "db.class.php";
class menu extends db
{
 public  $menuname;
 public $updateid;
  public $updateval;

  public $menuid;
  public $menulink;

  public $logo;
  
  public function showCategory()
  {

    $sql="SELECT * FROM nav_menu LIMIT 3";
    $stmt=$this->connect()->query($sql);
   while($row=$stmt->fetch())
    {
       $this->menuname=$row['menu_name'];
       $this->menuid=$row['menu_id'];
       $this->menulink=$row['menu_link'];
      $menuarray[]=array('menu_name'=>$this->menuname,'menu_id'=>$this->menuid,'menu_link'=>$this->menulink);

    }

    return $menuarray;

  }
  public function updategetMenu($updateid)
{
  $this->updateid=$updateid;
  $sql="SELECT* FROM nav_menu WHERE menu_id=$this->updateid";
  $stmt=$this->connect()->query($sql);
  $row=$stmt->fetch();

  return $row;
}
public function updateMenu($updateid,$updateval)
{
  $this->updateid=$updateid;
  $this->updateval=$updateval;
  //echo $this->updateval;
  //echo $this->updateid;
  $sql="UPDATE  nav_menu SET menu_name='$this->updateval' WHERE menu_id='$this->updateid'";
  $stmt=$this->connect()->query($sql);
  $row=$stmt->fetch();

  return $row;
}
public function showLogo()
  {

    $sql="SELECT * FROM logo ";
    $stmt=$this->connect()->query($sql);
   while($row=$stmt->fetch())
    {
       $this->logo=$row['logo_img'];
       
      

    }

    return $this->logo;

  }
  public function updateLogo($logoname)
{
  $this->logo=$logoname;
  //echo $this->updateval;
  //echo $this->updateid;
  $sql="UPDATE  logo SET logo_img='$this->logo' ";
  $stmt=$this->connect()->query($sql);
  $row=$stmt->fetch();

  return $row;
}

 
}




 ?>
