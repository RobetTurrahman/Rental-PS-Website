<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_admin.css">
</head>

<body>
    <section class="main">
        <div class="container2">
            <h1>EDIT <?= $data['management_ketersediaan']['nama_ps']; ?></h1>
            <div class="wrapper6">
                <div class="kotak_edit">
                    <div class="edit">

                        <h3>Nama Playstation</h3>
                        <form action="<?= BASEURL; ?>/admin/edit_ps/<?= $data['management_ketersediaan']['id_ps']; ?>" method="post">
                        <div class="control">
                            <input id="nama_ps" name="nama_ps" value="<?= $data['management_ketersediaan']['nama_ps']; ?>" class="input is-hovered" type="text" placeholder="Contoh : Plastation A">
                        </div>

                        <h3>Jenis Playstation</h3>
                        <div class="dropdown">
                            <div class="control">
                                <div class="select">
                                <select id="id_jenis" name="id_jenis">
                                        <option>Pilih Jenis Playstation</option>
                                        <option value="1">Playstation 4</option>
                                        <option value="2">Playstation 5</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <h3>Status</h3>
                        <div class="dropdown">
                            <div class="control">
                                <div class="select">
                                <select id="id_status" name="id_status">
                                        <option>Pilih Status Playstation</option>
                                        <option value="1">Tersedia</option>
                                        <option value="2">Disewakan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="button-input">
                            <button class="button is-warning">Batalkan</button>
                            <button type="submit" onclick="showAlert()" class="button is-primary">Simpan</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
    </section>
    <script>
            function showAlert() {
                alert("Data berhasil disimpan");
                // You can customize the alert or use a library like SweetAlert for a better UI
            }
    </script>
</body>


</html>
