<?php
include("ayar.php");
$oyun_adi = $_POST['oyun_adi']; 
$platform = $_POST['platform']; 
$satin_alma_yeri = $_POST['satin_alma_yeri'];
$fiyat = $_POST['fiyat']; 
$begendi_mi = $_POST['begendi_mi'];
$sql = $db->query("INSERT INTO kayitlar (oyun_adi, platform, satin_alma_yeri, fiyat, begendi_mi) 
VALUES ('$oyun_adi','$platform','$satin_alma_yeri','$fiyat','$begendi_mi')");
if ($sql == TRUE) { 
echo "Kayıt başarıyla eklendi."; 
@header("location:yenikayıt.php");
} else {
echo "Hata: " . $sql . "<br>" . $db->$error; 
}
?>