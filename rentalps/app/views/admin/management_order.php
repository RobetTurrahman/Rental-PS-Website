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
        <h1>MANAGEMENT ORDER</h1>
        <div class="container2">
            <div class="wrapper1">
                <div class="table-container4">
                    <h1>DATA ORDER MASUK</h1>
                    <table class="data_order">
                        <tr class="">
                            <td class="kolom_kode">
                                <h2><b>Tanggal</b></h2>
                            </td>
                            <td class="kolom_namaO">
                                <h2><b>Nama</b></h2>
                            </td>
                            <td class="kolom_ps">
                                <h2><b>Nama PS</b></h2>
                            </td>
                            <td class="kolom_estimasi">
                                <h2><b>Estimasi</b></h2>
                            </td>
                            <td class="kolom_mulai">
                                <h2><b>Waktu Mulai</b></h2>
                            </td>
                            <td class="kolom_akhir">
                                <h2><b>Waktu Selesai</b></h2>
                            </td>
                            <td class="kolom_status">
                                <h2><b>Status</b></h2>
                            </td>
                            <td class="kolom_konfir">
                                <h2><b>Aksi</b></h2>
                            </td>
                        </tr>
                        <?php $no = 0; foreach($data['management_order'] as $management_order): $no++; ?>                        
                        <tr class="baris_order">
                            <td class="kolom_kode">
                                <h2><?= $management_order['tanggal'] ?></h2>
                            </td>
                            <td class="kolom_namaO">
                                <h2><?= $management_order['nama_pengguna'] ?></h2>
                            </td>
                            <td class="kolom_ps">
                                <h2><?= $management_order['nama_ps'] ?></h2>
                            </td>
                            <td class="kolom_estimasi">
                                <h2><?= $management_order['estimasi'] ?></h2>
                            </td>
                            <td class="kolom_mulai">
                                <h2><?= $management_order['waktu_mulai'] ?></h2>
                            </td>
                            <td class="kolom_akhir">
                                <h2><?= $management_order['waktu_berakhir'] ?></h2>
                            </td>
                            <td class="kolom_status">
                                <h2><span class="pending"><?= $management_order['status'] ?></span></h2>
                            </td>
                            <td class="kolom_konfir">
                                <div class="button_konfir">
                                        <button class="button is-danger is-small">Berhenti</button>
                                        <button class="button is-info is-small" onclick="konfirmasiOrder(<?= $management_order['id_order'] ?>)">Konfirmasi</button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script>
        function konfirmasiOrder(idOrder) {

            console.log("Konfirmasi order dengan ID:", idOrder);

            // var url = '<? BASEURL ?>/?controller='


        }
    </script>
</body>

</html>
