<div class="container mt-5">
    <h1>Daftar mahasiswa</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>

            
            <?php foreach($data['mhs'] as $mhs) :?>
                <tr>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['nim']; ?></td>
                <td><?= $mhs['email']; ?></td>
                </tr>
            <?php endforeach; ?>
            


            <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr> -->
        </tbody>
    </table>
</div>

