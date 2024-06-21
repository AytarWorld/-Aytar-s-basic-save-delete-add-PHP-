<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ana Sayfa</title>
</head>
<body>
    <div style="text-align:center;">
        <a href="Anasayfa.php">ANA SAYFA</a> - <a href="index.php">KAYIT LİSTESİ ve SİLME</a> - <a href="yenikayıt.php">YENİ KAYIT</a>
        <br><hr><br><br>
        
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible"
content="IE=edge">
<meta name="viewport" content="width=devicewidth, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("ayar.php");
$sorgu1=$db->query("select * from kayitlar order by 
oyun_adi asc");
?>
<form name="secimformu" action="Sil.php"
method="post">
<table width="600" border="1" align="center"
cellpadding="1" cellspacing="1">
<tr>
<td width="150" height="25" align="left"
valign="middle" bgcolor="#000000">
<font color="#FFFFFF">Oyun</font>
</td>
<td width="150" height="25" align="left"
valign="middle" bgcolor="#000000">
<font color="#FFFFFF">Platform</
font>
</td>
<td width="200" height="25" align="left"
valign="middle" bgcolor="#000000">
<font color="#FFFFFF">Satın alındığı yer</font>
</td>
<td width="187" height="25" align="left"
valign="middle" bgcolor="#000000">
<font color="#FFFFFF">Fiyat</font>
</td>
<td width="150" height="25" align="left"
valign="middle" bgcolor="#000000">
<font color="#FFFFFF">Beğendi mi ?</font>
</td>
<td width="50" height="25" align="left"
valign="middle" bgcolor="#000000">
<font color="#FFFFFF">SİL</font>
</td>
</tr>
<?php
while($kayitlar1=$sorgu1->fetch()){
$gelenoyun_adi=$kayitlar1["oyun_adi"];
$gelenplatform=$kayitlar1["platform"];
$gelensatin_alma_yeri=$kayitlar1["satin_alma_yeri"];
$gelenfiyat=$kayitlar1["fiyat"];
$gelenbegendi_mi=$kayitlar1["begendi_mi"];
?>
<tr>
<td width="150" height="25" align="left"
valign="middle"><?=$gelenoyun_adi ?>    
</td>
<td width="150" height="25" align="left"
valign="middle"><?=$gelenplatform ?></td>
<td width="200" height="25" align="left"
valign="middle"><?=$gelensatin_alma_yeri ?></td>
<td width="187" height="25" align="left"
valign="middle"><?=$gelenfiyat ?></td>
<td width="150" height="25" align="left"
valign="middle"><?=$gelenbegendi_mi ?></td>
<td width="40" height="25" align="left"
valign="middle">
<input type="checkbox" name="secim[]"
value="<?=$gelenoyun_adi ?>" />
</td>
</tr>
<?php
 }
?>
<tr>
<td height="25" colspan="6" align="center"
valign="middle">
<input backgroundcolor="green" type="submit" value="Seçili Olanları 
Sil" />
</td>
</tr>
</table>
</form>
</body>
</html>