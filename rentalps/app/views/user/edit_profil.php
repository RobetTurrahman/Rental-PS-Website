<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_user.css">
</head>

<body>
    <section class="main">
        <h1>PROFIL</h1>
        <div class="container3">
            <div class="wrapper6">
                <img src="<?= BASEURL; ?>/img/profil.png" alt="">
                <form action="<?= BASEURL; ?>/user/edit_profil" method="POST">
                <div class="form-masuk">

                    <h3>Nama Pengguna</h3>
                    <div class="control">
                        <input id="nama_pengguna" name="nama_pengguna" class="input is-hovered" type="text" value="<?= isset($_SESSION['nama_pengguna']) ? $_SESSION['nama_pengguna'] : ''; ?>">
                    </div>

                    <h3>Email</h3>
                    <div class="control">
                        <input id="email" name="email" class="input is-hovered" type="text" value="<?= isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
                    </div>

                    <h3>No. Whatsapp</h3>
                    <div class="control">
                        <input id="no_wa" name="no_wa" class="input is-hovered" type="text" value="<?= isset($_SESSION['no_wa']) ? $_SESSION['no_wa'] : ''; ?>">
                    </div>

                    <h3>Kata Sandi</h3>
                    <div class="control">
                        <input id="sandi" name="sandi" class="input is-hovered" type="text" value="<?= isset($_SESSION['sandi']) ? $_SESSION['sandi'] : ''; ?>">
                    </div>

                    <div class="button-masuk">
                            <button type="submit" class="button is-primary">Simpan</button>
                    </div>
                </form>
                        <a class="button is-warning" href="<?= BASEURL; ?>/user/profil">
                            Batalkan
                        </a>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(form);

            fetch('<?= BASEURL; ?>/user/edit_profil', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Data berhasil diubah');
                    location.reload();
                } else {
                    console.error('Gagal update profile');
                }
            })
            .catch(error => {
                alert('Data berhasil diubah');
                console.error('Error:', error);
            });
        });
    });
</script>
</html>
