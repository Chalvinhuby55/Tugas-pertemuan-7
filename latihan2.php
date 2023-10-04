<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/buper.jpg"></li>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["nim"]?></li>
        <li><?= $_GET["email"]?></li>
        <li><?= $_GET["jurusan"]?></li>
     </ul> 
     <a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>