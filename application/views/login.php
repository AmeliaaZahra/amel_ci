<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HALAMAN LOGIN</h1>
    <?= $this->session->flashdata('message');  ?>
    <form action="<?= base_url() ?>login/verifikasi" method="POST">
        <input type="text" placeholder="masukkan username" name="username"><br><br>
        <input type="password" placeholder="masukkan password" name="password"><br><br>

        <input type="submit" value="login">
    </form>
    
    <p>belum punya akun yh? <a href="<?= base_url() ?>daftar">Daftar</a></p>
    
</body>
</html>