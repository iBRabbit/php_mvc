<div class="container mt-5">

    <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Mahasiswa
    </button>

    <h1>Daftar mahasiswa</h1>

    <ul class="list-group">
        <?php foreach($data['mhs'] as $mhs) :?>

        <li class="list-group-item d-flex justify-content-between align-items-center">
            <?= $mhs['nama']; ?>
            <a class="badge bg-primary" href="<?= BASE_URL . 'mahasiswa/detail/' . $mhs['id']?>">Detail</a>
        </li>

        <?php endforeach; ?>
    </ul>
    </tbody>

    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalTitle">Tambah Data Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= BASE_URL . "mahasiswa/add" ?>" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Mahasiswa</label>
                            <input type="email" class="form-control" id="name" placeholder="" name = "nama">
                        </div>

                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="number" class="form-control" id="nim" placeholder="" name = "nim">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="" name = "email">
                        </div>

                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select" aria-label="Default select example" name = "jurusan">
                                <option value="1">TI</option>
                                <option value="2">Tekdus</option>
                                <option value="3">Mat</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>