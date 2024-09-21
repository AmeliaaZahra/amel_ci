<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EDIT DATA SISWA SMK SYAFI'I AKROM</h1>
    <div class="tambah">
    <form action="<?= base_url()?>admin/update" method="POST">
    <input placeholder="masukkan nis" type="hidden" name="nis" value="<?= $edit ['NIS'] ?>"><br><br>
    <input placeholder="masukkan nama" type="text" name="nama" value="<?= $edit ['Nama'] ?>"><br><br>
    <select name="alamat">
        <option value="">pilih alamat</option>
        
        <?php foreach( $alamat as $al ) : ?>
            <?php if ( $al == $edit['alamat'] ) : ?>
                <option value="<?= $al; ?>" selected><?= $al; ?></option>
                <?php else : ?>
                    <option value="<?= $al; ?>"><?= $al; ?></option>
                    <?php endif; ?>
                    <?php endforeach; ?>
</select><br><br>
    <input placeholder="masukkan no.telp" type="text" name="no_telp" value="<?= $edit ['No_telp'] ?>"><br>
    <br>
    <input type="submit" value="EDIT">
</form>
</div>
</body>
</html>