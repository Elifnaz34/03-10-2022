<html>
<h1> Ýf - Else Deyimi Kullanýmý </h1>
<?php
$kullanici_Adi = "Fatih";
$parola = 1453;
if ($parola == 1453 AND $kullanici_Adi == "Fatih")
{
echo "Giris Basarýlý";
}
else if ( $parola != 1453 AND $kullanici_Adi =="Fatih")
{
echo "Parola Hatalý";
}
else if ($parola == 1453 AND $kullanici_Adi !="Fatih")
{
echo "Kullanýcý Adý Hatalý";
}
else
{
echo "kullanýcý adý ve parola hatalý";
}
?>
</html>