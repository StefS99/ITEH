<?php 
require "../dbBroker.php";
require "../model/prijava.php";
if(isset($_POST['id'])){
 
    $id=$_POST['id'];
    $predmet=$_POST['predmet'];
    $katedra=$_POST['katedra']; 
    $datum=$_POST['datum'];
    $sala=$_POST['sala']; 

  $obj=  new Prijava($id,$predmet,$katedra,$sala,$datum);
  $obj->update($conn);
  if($obj){
    echo("Success");
}else echo("Failed");

}
?>