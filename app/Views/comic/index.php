<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">

    <h1 class="mt-2"> Daftar Komik</h1>
    <div class="row">
        <div class="col">
            <a href="/comic/create" class="btn btn-primary">Tambah Data Komik</a>
            <table class="table tabelku">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row">
                                <?= $i++; ?>
                            </th>
                            <td><img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul"></td>
                            <td><?= $k['judul']; ?></td>
                            <td><?= $k['penulis']; ?></td>
                            <td><a href="/comic/<?= $k['slug']; ?>" class="btn btn-success"> Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>