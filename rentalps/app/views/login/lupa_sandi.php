<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['title']?></title>
    <link rel="icon" type="image/x-icon" href="user/img/Group 112.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_login.css">
</head>

<body>
    <section class="main">
        <div class="container7">
            <div class="wrapper7">
            <form class="" action="" method="post" autocomplete="off">
                <div class="form-masuk">
                    <h1>PERBARUI KATA SANDI</h1>
                    <h3>Username</h3>

                    <div class="control">
                        <input id="nama_pengguna" name="nama_pengguna" class="input is-hovered" type="text" placeholder="Masukan Nama Anda">
                    </div>

                    <h3>Kata Sandi Baru</h3>

                    <div class="control">
                        <input id="sandi" name="sandi" class="input is-hovered" type="password" placeholder="Masukan Password Anda">
                    </div>

                    <h3>Ulang Kata Sandi</h3>
                    <div class="control">
                        <input class="input is-hovered" type="password" placeholder="Masukan Ulang Password Anda">
                    </div>

                    <div class="button-masuk">
                        <button type="submit" class="button is-fullwidth">Simpan</button>
                    </div>

                        <p>Sudah ingat password? <a href="<?= BASEURL; ?>/login/masuk">Masuk</a></p>
                </div>
            </form>
            </div>
        </div>
    </section>
</body>

</html>
