<?php $this->extend('layout/main') ?>

<?php $this->section('isi') ?>

<head>
    <!-- DataTables -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/plugins/datatables/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<div class="container my-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="m-0"><i class="fas fa-box"></i> Tabungan Masuk</h4>
            <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addModal">
                <i class="fas fa-plus-circle"></i> Tambah Data
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="datamasuk">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal Masuk</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($masuk as $val): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $val['namamasuk'] ?></td>
                            <td><?= $val['tglmasuk'] ?></td>
                            <td><?= $val['jumlah'] ?></td>
                            <td>
                                <button class="btn btn-sm btn-danger btn-delete" 
                                        data-idmasuk="<?= $val['idmasuk'] ?>" 
                                        data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="fas fa-trash"></i>Hapus
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<form action="/masuk/save" method="post" id="formTambah">
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="addModalLabel"><i class="fas fa-plus-circle"></i> Tambah Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label>Nama</label>
                            <select name="namamasuk" id="namamasuk" class="form-control">
                            <option value="">Pilih Nama</option>
                                <option value="Adit">Adit</option>
                                <option value="Dira">Dira </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Tanggal Masuk</label>
                            <input type="date" class="form-control" name="tglmasuk" required>
                        </div>
                        <div class="col-md-6">
                            <label>Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>



<!-- Modal Hapus -->
<form action="/masuk/delete" method="post" style="display: none;" id="formDelete">
    <input type="hidden" name="idmasuk" class="idmasuk">
</form>

<!-- Modal Edit -->


<script>

$('.btn-delete').on('click', function() {
    const IdMasuk = $(this).data('idmasuk'); // Ambil kd_buku dari data attribute
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: 'Data tabungan ini akan dihapus!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            // Set the kd_buku value in the hidden input for deletion
            $('#formDelete .idmasuk').val(IdMasuk);
            
            // Submit the delete form
            $('#formDelete').submit();
        }
    });
});

$(document).ready(function () {
        $('#formTambah').on('submit', function (e) {
            e.preventDefault();
            const form = $(this);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: form.serialize(),
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data berhasil disimpan!',
                    }).then(() => {
                        location.reload();
                    });
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Terjadi kesalahan saat menyimpan data.',
                    });
                }
            });
        });
    });
</script>

<?= $this->endSection() ?>
