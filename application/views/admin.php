<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HALAMAN ADMIN</h1>

    <h5>Tabel Data Siswa</h5>
    <a href="<?php echo base_url('tambah_siswa'); ?>">TAMBAH DATA</a>
    <table border="1" id="siswa">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No.telp</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php foreach ($siswa as $ssw) : ?>
            <tr>
                <td><?= $ssw['NIS'] ?></td>
                <td><?= $ssw['Nama'] ?></td>
                <td><?= $ssw['Alamat'] ?></td>
                <td><?= $ssw['No_telp'] ?></td>
                <td><a href="<?= base_url(); ?>admin/edit/<?= $ssw['NIS']?>">Edit</a></td>
                <td><a onclick="return confirm ('yakiennn niehh mw hapuss??')" href="<?= base_url(); ?>admin/hapus/<?= $ssw['NIS']?>">hapus</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>