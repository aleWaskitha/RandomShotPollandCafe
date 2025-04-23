<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td><?php echo $mhs['Nama'];?></td>
            <td><?php echo $mhs['NIM'];?></td>
        </tr>
        <?php endforeach?>
    </table>
</body>
</html>