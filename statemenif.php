<html><head><title>Statement IF</title></head>
<body>
<?php
'echo"<form action=\"$php_selt\"method=\"post\">";
'$nilail'=$_POST['nilail'];
echo"Berapa Nilai PHPmu? :
<input name=\"nilail\"value=\"$nilail\"size=\"3\"type=\"text\"value=\
<input name=\"cek\"type=\"submit\" value=\"Cek\"> </form>";
if($_POST['cek']) //perintah untuk menguji penekanan tombol cek
{echo"<br><hl>";
if($nilail=="")
{echo"Anda Belum Menentukan Nilai..!";}
elseif(!is_numeric($nilail)) //jika nilail tidak bertype numeric
{echo"Ini Bukan Nilai Angka";}
else
{
if($nilail<=30) //statemen pertama
{echo"Anda mendapat nilai huruf <b> E </b>";}
elseif($nilail<=50) //statemen kedua
{echo"Anda mendapat nilai huruf <b> D </b>";}
elseif($nilail<=70) //statemen ketiga
{echo"Anda mendapat nilai huruf <b> C </b>";}
elseif($nilail<=85) //statemen keempat
{echo"Anda mendapat nilai huruf <b> AB </b>";}
else //statemen kelima
{echo"Anda mendapat nilai huruf <b> A </b>";}
}
echo"</hl>";
}
?>
</body>
</html>