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
        <h1>MANAGEMENT KETERSEDIAAN</h1>
        <div class="container">
            <div class="wrapper1">
                <div class="table-container1">
                    <table class="data">
                        <tr class="baris">
                            <td class="kolom_nomor">
                                <h2><b>No.</b></h2>
                            </td>
                            <td class="kolom_nama">
                                <h2><b>Nama Playstation</b></h2>
                            </td>
                            <td class="kolom_username">
                                <h2><b>Jenis</b></h2>
                            </td>
                            <td class="kolom_sandi">
                                <h2><b>Status</b></h2>
                            </td>
                            <td class="kolom_aksi">
                                <h2><b>Aksi</b></h2>
                            </td>
                        </tr>
                        <?php $no = 0; foreach($data['management_ketersediaan'] as $management_ketersediaan): $no++; ?>                        
                        <tr class="baris">
                            <td class="kolom_nomor">
                                <h2><?= $no ?></h2>
                            </td>
                            <td class="kolom_nama">
                                <h2><?= $management_ketersediaan['nama_ps'] ?></h2>
                            </td>
                            <td class="kolom_username">
                                <h2><?= $management_ketersediaan['nama_jenis'] ?></h2>
                            </td>
                            <td class="kolom_sandi">
                                <h2><?= $management_ketersediaan['status_ps'] ?></h2>
                            </td>
                            <td class="kolom_aksi">
                            <a href="<?= BASEURL; ?>/admin/edit_ps/<?= $management_ketersediaan['id_ps'] ?>">
                                <button class="button is-info is-small">Edit </button>
                            </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                    </table>
                </div>
            </div>
        </div>
        <div class="paging">
            <nav class="pagination is-small" role="navigation" aria-label="pagination">
                <a class="pagination-previous is-disabled" title="This is the first page">Previous</a>
                <a class="pagination-next">Next page</a>
                <ul class="pagination-list">
                    <li>
                        <a class="pagination-link is-current" aria-label="Page 1" aria-current="page">1</a>
                    </li>
                    <li>
                        <a class="pagination-link" aria-label="Goto page 2">2</a>
                    </li>
                    <li>
                        <a class="pagination-link" aria-label="Goto page 3">3</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

</body>

</html>
