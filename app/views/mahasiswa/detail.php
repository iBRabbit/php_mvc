<div class="container mt-3">
    <h3>List Mahasiswa</h3>
        
    <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Mahasiswa</div>
        <div class="card-body text-primary">
            <h5 class="card-title"><?= $data['mhs']['nama'] ?></h5>
            <p class="card-text"><?= $data['mhs']['email'] ?></p>
            <a href="<?= BASE_URL . 'mahasiswa' ?>">Kembali</a>
        </div>
    </div>
</div>