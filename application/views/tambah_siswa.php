<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DATA SISWA SMK SYAFI'I AKROM</h1>
    <div class="tambah">
    <form action="tambah_siswa/tambah" method="POST">
    <input placeholder="masukkan nama" type="text" name="nama"><br><br>
       <select name="alamat">
        <option value="">pilih alamat</option>
    <?php foreach ($alamat as $al) : ?>
                <option value="<?=  $al['id']?>"> <?= $al ['alamat']?> </option>
        <?php endforeach; ?>
</select><br><br>
    <input placeholder="masukkan no.telp" type="text" name="no_telp"><br>
    <br>
    <input type="submit" value="SIMPAN">
</div>
</body>
</html>