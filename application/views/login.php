<h1>HALAMAN LOGIN</h1>

<div class="login">
    <?= $this->session->flashdata('message');  ?>
    <form action="<?= base_url() ?>login/verifikasi" method="POST">
        <input type="text" placeholder="masukkan username" name="username"><br><br>
        <input type="password" placeholder="masukkan password" name="password"><br><br>

        <input type="submit" value="login">
    </form>
</div>
    
    <p class="daftar">belum punya akun yh? <a class="tdftr" href="<?= base_url() ?>daftar">Daftar</a></p>
    
