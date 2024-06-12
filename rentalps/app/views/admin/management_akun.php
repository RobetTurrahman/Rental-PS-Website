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
        <h1>MANAGEMENT AKUN</h1>
        <div class="container">
            <div class="wrapper1">
                <div class="table-container1">
                    <table class="data">
                        <tr class="baris">
                            <td class="kolom_nomor">
                                <h2><b>No.</b></h2>
                            </td>
                            <td class="kolom_nama">
                                <h2><b>Nama</b></h2>
                            </td>
                            <td class="kolom_username">
                                <h2><b>Nama Pengguna</b></h2>
                            </td>
                            <td class="kolom_sandi">
                                <h2><b>Sandi</b></h2>
                            </td>
                        </tr>
                        <?php $no = 0; foreach($data['management_akun'] as $management_akun): $no++; ?>                        
                        <tr class="baris">
                            <td class="kolom_nomor">
                                <h2><?= $no ?></h2>
                            </td>
                            <td class="kolom_nama">
                                <h2><?= $management_akun['nama_pengguna'] ?></h2>
                            </td>
                            <td class="kolom_username">
                                <h2><?= $management_akun['email'] ?></h2>
                            </td>
                            <td class="kolom_sandi">
                                <h2><?= $management_akun['sandi'] ?></h2>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="paging">
        <nav class="pagination is-small" role="navigation" aria-label="pagination">
            <a class="pagination-previous <?= ($currentPage == 1) ? 'is-disabled' : ''; ?>"
            title="Previous Page" 
            href="<?= BASEURL; ?>/admin/management_akun/<?= max($currentPage - 1, 1); ?>">Previous</a>
            <a class="pagination-next <?= ($currentPage == $totalPages) ? 'is-disabled' : ''; ?>" 
            title="Next Page" 
            href="<?= BASEURL; ?>/admin/management_akun/<?= $i = max($currentPage + 2, $totalPages); ?>">Next page</a>
            <ul class="pagination-list">
            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                <li>
                    <a class="pagination-link <?= ($currentPage == $i) ? 'is-current' : ''; ?>" href="<?= BASEURL; ?>/admin/management_akun/<?= $i; ?>" aria-label="Page <?= $i; ?>"><?= $i; ?></a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>

    </section>
</body>

</html>
