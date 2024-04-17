<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php
unlink("aktif/12.Sınıf/03numaraliOgrenci.txt");
unlink("aktif/12.Sınıf/06numaraliOgrenci.txt");
unlink("aktif/12.Sınıf/16numaraliOgrenci.txt");
echo "3 Öğrencinin dosya bilgileri silindi.";
touch("mezun/2021_03numaraliOgrenci.txt");
touch("mezun/2021_06numaraliOgrenci.txt");
touch("mezun/2021_16numaraliOgrenci.txt");
echo "3 Öğrenci için yeni dosyalar oluşturuldu.";
?>


</body>
</html>