<?php
$mahasiswa1 = [
    'id'=>1,
    'nim'=>0110121,
    'uts'=>90,
    'uas'=>85,
    'tugas'=>95,

];
$mahasiswa2 = [
    'id'=>2,
    'nim'=>0110122,
    'uts'=>95,
    'uas'=>90,
    'tugas'=>95,

];

$mahasiswa3 = [
    'id'=>2,
    'nim'=>0110123,
    'uts'=>85,
    'uas'=>80,
    'tugas'=>90,
];



$ar_nilai = [$mahasiswa1, $mahasiswa2, $mahasiswa3]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>Daftar Nilai Mahasiswa </h3>
        <table class="table table-stripped">
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
            </tr>
            <?php foreach($ar_nilai as $nilai){ ?>
            <tr>
                <td><?= $nilai['id']; ?></td>
                <td><?= $nilai['nim']; ?></td>
                <td><?= $nilai['uts']; ?></td>
                <td><?= $nilai['uas']; ?></td>
                <td><?= $nilai['tugas']; ?></td>
                
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>