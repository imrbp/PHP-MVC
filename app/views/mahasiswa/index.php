<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flaser::flash(); ?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Mahasiswa</button>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL ?>/mahasiswa/cari" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search by name" aria-label="Search by name" name="keyword" id="keyword" autocomplete="off" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama'] ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-end ms-2" onclick="return confirm('Are you sure you want to delete this item?')">hapus</a>
                        <a href=" <?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge bg-warning float-end ms-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id'] ?>;">edit</a>
                        <a href=" <?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end ms-2">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>
</div>

<br>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="<?= BASEURL ?>/mahasiswa/tambah">
                <input type="hidden" name="id" id="id">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" aria-describedby="NIM">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="Email">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select id="jurusan" name="jurusan" class="form-select">
                            <option value="Statistika">Statistika</option>
                            <option value="Meterologi Terapan">Meterologi Terapan</option>
                            <option value="Biologi">Biologi</option>
                            <option value="Kimia">Kimia</option>
                            <option value="Matematika">Matematika</option>
                            <option value="Aktuaria">Aktuaria</option>
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                            <option value="Fisika">Fisika</option>
                            <option value="BioKimia">BioKimia</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
</div>