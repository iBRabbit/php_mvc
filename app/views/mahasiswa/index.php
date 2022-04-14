<div class="container mt-5">
    <h1>Daftar mahasiswa</h1>

    <ul class="list-group">
        <?php foreach($data['mhs'] as $mhs) :?>
            
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <?= $mhs['nama']; ?>
            <a class = "badge bg-primary" href="<?= BASE_URL . 'mahasiswa/detail/' . $mhs['id']?>" >Detail</a>
        </li>
            
        <?php endforeach; ?>
    </ul>
    </tbody>

</div>