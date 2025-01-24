<?php $this->extend('layout/main') ?>

<?php $this->section('isi') ?>

<head>
    <!-- DataTables -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/plugins/datatables/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/datatables/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<div class="container my-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="m-0"><i class="fas fa-box"></i> Data User</h4>
            <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addModal">
                <i class="fas fa-plus-circle"></i> Tambah Data
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="datauser">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($user as $val): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $val['id'] ?></td>
                            <td><?= $val['username'] ?></td>
                            <td><?= $val['password'] ?></td>
                            <td><?= $val['email'] ?></td>
                            <td><?= $val['level'] ?></td>
                            <td>
                            <button type="button" class="btn btn-info btn-sm btn-edit" 
                            data-id="<?= $val['id'] ?>" 
                            data-username="<?= $val['username'] ?>"
                            data-password="<?= $val['password'] ?>"
                            data-email="<?= $val['email'] ?>"
                            data-level="<?= $val['level'] ?>"
                            data-bs-toggle="modal" data-bs-target="#editModal">
                            <i class="fa fa-pencil"></i> Edit
                        </button>
                                <button class="btn btn-sm btn-danger btn-delete" 
                                        data-id="<?= $val['id'] ?>" 
                                        data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="fas fa-trash"></i>
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
<form action="/user/save" method="post">
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="addModalLabel"><i class="fas fa-plus-circle"></i> Tambah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label>ID</label>
                            <input type="text" class="form-control" name="id" required>
                        </div>
                        <div class="col-md-6">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" required>
                        </div>
                        <div class="col-md-6">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label>Level</label>
                            <input type="text" class="form-control" name="level" required>
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
<form action="/user/delete" method="post">
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Hapus Akun</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus data ini?</p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" class="id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Modal Edit -->
<form action="/user/update" method="post">
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="editIdUser" class="form-label">ID</label>
                        <input type="text" class="form-control" id="editIdUser" name="id" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="editNamaUser" class="form-label">Username</label>
                        <input type="text" class="form-control" id="editNamaUser" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="editPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="editPassword" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="editEmail" class="form-label">Email</label>
                        <input type="text" class="form-control" id="editEmail" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="editLevel" class="form-label">Level</label>
                        <input type="text" class="form-control" id="editLevel" name="level" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>
</form>


<script>
    // Script untuk Edit Modal

// Isi data ke dalam modal edit
$('.btn-edit').on('click', function() {
    $('#editIdUser').val($(this).data('id'));
    $('#editNamaUser').val($(this).data('username'));
    $('#editPassword').val($(this).data('password'));
    $('#editEmail').val($(this).data('email'));
    $('#editLevel').val($(this).data('level'));
});
    // Handle delete button
    $('.btn-delete').on('click', function() {
        $('.id').val($(this).data('id'));
    });
</script>

<?= $this->endSection() ?>
