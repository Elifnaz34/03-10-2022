<html>
<h1> �f - Else Deyimi Kullan�m� </h1>
<?php
$kullanici_Adi = "Fatih";
$parola = 1453;
if ($parola == 1453 AND $kullanici_Adi == "Fatih")
{
echo "Giris Basar�l�";
}
else if ( $parola != 1453 AND $kullanici_Adi =="Fatih")
{
echo "Parola Hatal�";
}
else if ($parola == 1453 AND $kullanici_Adi !="Fatih")
{
echo "Kullan�c� Ad� Hatal�";
}
else
{
echo "kullan�c� ad� ve parola hatal�";
}
?>
</html>