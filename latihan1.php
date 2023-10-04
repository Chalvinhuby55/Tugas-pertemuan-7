<?php
// $_GET

$mahasiswa=[
    [
        "nim" => "19411007",
        "nama" => "Chalvin Huby",
        "email" => "cjemihuby@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "foto.png"
    ],
    [
        "nama" => "Akis Wenda",
        "nim" => "19411063",
        "email" => "akiswenda@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "buper.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul> 
         <?php foreach( $mahasiswa as $mhs):?>
            <li>
                <a href="latihan2.php?nama=<?=$mhs["nama"];?>&nim=<?=$mhs["nim"];?>&email=<?=$mhs["email"];?>&jurusan=<?=$mhs["jurusan"];?>&gambar=<?=$mhs["gambar"];?>"><?= $mhs["nama"];?></a>
            </li>
        <?php endforeach;?>
    </ul>
  
    
</body>
</html>