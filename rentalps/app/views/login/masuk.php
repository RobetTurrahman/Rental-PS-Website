<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEWA PS BAROKAH</title>
    <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/img/Group 112.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_login.css">
</head>

<body>
    <section class="main">
        <div class="container1">
            <div class="wrapper7">
            <form class="" action="<?= BASEURL; ?>/login/masuk" method="post" autocomplete="off">
                    <div class="form-masuk">
                        <h1>MASUK</h1>
                        <h3>Nama Pengguna</h3>
                        <div class="control">
                            <input id="nama_pengguna" name="nama_pengguna" class="input is-hovered" type="text" placeholder="Masukan Nama Anda" required>
                        </div>
                        <h3>Sandi</h3>
                        <div class="control">
                            <input id="sandi" name="sandi" class="input is-hovered" type="password" placeholder="Masukan Kata Sandi" required>
                        </div>
                        <a href="?controller=login&method=lupa_sandi"><h4> Lupa Sandi?</h4></a>
                        <div class="button-masuk">
                            <button name="button_masuk" class="button is-fullwidth" type="submit" value="Masuk">Masuk</button>
                        </div>
                        <h5> <a href="?controller=login&method=daftar">Buat Akun?</a></h5>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
