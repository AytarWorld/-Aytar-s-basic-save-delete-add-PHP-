<?php
include("ayar.php"); 
$gelensecimler=$_POST["secim"]; 
foreach($gelensecimler as $gelenoyun_adisine){
$verisil=$db->query("delete from kayitlar where oyun_adi='$gelenoyun_adisine' order by oyun_adi asc limit 1"); 
if(!$verisil){ 
echo "işlem sırasında hata oluştu..";
die("işlem durduruldu.."); 
}
}
@header("location:index.php");
?>
