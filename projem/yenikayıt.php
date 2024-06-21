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

<html>
 <header>
 <link rel="stylesheet" href="Style.css">
 </header>
 <body>
 <fieldset>
 <legend>Yeni Kayıt</legend>
 <form name="kayit" method="post" action="Kaydet.php">
 <table>
 <tr>
 <td align="right"><b>Oyun:</b></td>
 <td><input type="text" name="oyun_adi"></td>
 </tr>
<tr>
 <td align="right"><b>Fiyat:</b></td>
 <td><input type="number" name="fiyat"></td>
 </tr>
 </table>
<fieldset>
 <legend>Platform</legend>
 <input type="radio" name="platform" value="PC">PC<br>
 <input type="radio" name="platform" value="XBOX">XBOX<br>
 <input type="radio" name="platform" value="PlayStation">PlayStation<br>
 <input type="radio" name="platform" value="NintendoeSwitch">Nintendo Switch<br>
 </fieldset>
 <fieldset>
 <legend>Satın aldığınız yer</legend>
 <table>
 <tr>
 <td>
 <input type="radio" name="satin_alma_yeri" value="Steam">Steam<br>
 <input type="radio" name="satin_alma_yeri" value="EpicGames">Epic Games<br>
 <input type="radio" name="satin_alma_yeri" value="MicrosoftStore">Microsoft Store<br>
 <input type="radio" name="satin_alma_yeri" value="PlayStationStore">PlayStation Store<br>
 <input type="radio" name="satin_alma_yeri" value="NintendoeShop">Nintendo eShop<br>
 </td>
 </tr>
 </table>
 </fieldset>
 <br>
 <label for="beğenme"><b>Oyunu Beğendin mi ?:</b></label>
 <select name="begendi_mi" id="begendi_mi">
 <option value="evet">Evet</option>
 <option value="hayır">Hayır</option>
 </select><br>
 <br>
<input type="submit" name="kayit" value="Kaydet" id="Kaydet">
 </form>
 </fieldset>
 </body>
</html>