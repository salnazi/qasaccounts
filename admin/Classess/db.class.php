<?php
class db{



var $servername="localhost";
var $username="root";
var $password="";
var $dbname="cms";


 function connect()
{
  $dsn='mysql:host=localhost;dbname=qasaccount';

  $pdo=new PDO($dsn,$this->username,$this->password);
  $pdo->setAttribute(PDO::FETCH_DEFAULT,PDO::FETCH_ASSOC);

/*if($pdo){
  echo "succed";
}
else{
  echo "error";
}*/
return $pdo;
}



}

//$conobj=new db();

//$conobj->connect();
 ?>