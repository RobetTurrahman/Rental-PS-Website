<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TENTANG KAMI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style_user.css">
</head>

<body>
    <section class="main">
        <h1>RUANG HISTORY</h1>
        <div class="container">
            <?php foreach ($data as $row): ?>
                <div class="wrapper2">
                    <h1>PEMBOOKINGAN <?= $row['nama_jenis'] ?> SUKSES!</h1>
                    <h3>Pesanan anda telah dibuatkan dan berstatus <span class="pending"><?= $row['status_ord'] ?></span> dengan rincian sebagai berikut!</h3>
                    <h3><i>Tanggal <?= $row['tanggal'] ?></i></h3>
                    <div class="table-container1">
                        <table class="history">
                            <tr class="baris">
                                <td class="keterangan">
                                    <h2>Nama</h2>
                                </td>
                                <td class="titik2">
                                    <h2>:</h2>
                                </td>
                                <td class="status">
                                    <h2><?= $row['nama_pengguna'] ?></h2>
                                </td>
                            </tr>
                            <tr class="baris">
                                <td class="keterangan">
                                    <h2>Status</h2>
                                </td>
                                <td class="titik2">
                                    <h2>:</h2>
                                </td>
                                <td class="status">
                                    <h2><span class="pending"><?= $row['status_ord'] ?></span></h2>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <h3><i>Keterangan : Jika anda belum di konfirmasi segera hubungi 089128562930</i></h3>
                    <div class="button-history">
                        <button class="button is-warning">Batalkan</button>
                        <a href="<?= BASEURL; ?>/user/rincian/<?= $row['id_order']; ?>">
                            <button class="button is-info">
                                Rincian
                            </button>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>

</html>
