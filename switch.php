<html>
<head><title>Pernyataan SWITCH</title></head>
<body bgcolor="#00FFFF">
<?php
$m=date("m",time()); //mencari nilai bulan dalam format m
switch($m)
{
case"1":$namabulan="Januari";break;
case"2":$namabulan="Februari";break;
case"4":$namabulan="April";break;
case"5":$namabulan="Mei";break;
case"6":$namabulan="Juni";break;
case"7":$namabulan="Juli";break;
case"8":$namabulan="Agustus";break;
case"9":$namabulan="September";break;
case"10":$namabulan="Oktober";break;
case"11":$namabulan="November";break;
default:$namabulan="Desember";break;
}
echo"<h2>Sekarang adalah bulan : $namabulan</h2>";
?>
</body>
</html>
