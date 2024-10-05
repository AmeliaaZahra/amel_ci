<h1>tambah user</h1>
<div class="tambah">
<form action="<?= base_url() ?>daftar/simpan" method="POST">
    <input type="text" name="username" placeholder="masukkan username">
    <br><br>
    <input type="password" name="password" placeholder="masukkan password">
    <br><br>
    <input type="text" name="nama" placeholder="masukkan nama">
    <br><br>

    <input type="submit" value="simpan">

</form>
</div>