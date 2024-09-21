<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HALAMAN LOGIN</h1>
    <form action="<?= base_url() ?>login/verifikasi" method="POST">
        <input type="text" placeholder="masukkan username"><br><br>
        <input type="password" placeholder="masukkan password"><br><br>

        <input type="submit" value="login">
    </form>
</body>
</html>