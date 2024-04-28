<?php
include_once './db_koneksi.php';

$sql = 'SELECT * FROM pasien';
$getPasien = $dbh->query($sql);

include_once './layouts/top.php';
include_once './layouts/navbar.php';
include_once './layouts/sidebar.php';

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pasien</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Pasien</h3>
        <div class="card-body">
        <table class="table">
                    <thead>
                        <tr>
                        <th>No</th>
                            <th>Kode</th>
                            <th>Pasien</th>
                            <th>tmp_lahir</th>
                            <th>tgl_lahir</th>
                            <th>gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($getPasien as $key => $pasien) : ?>
                        <tr>
                            <td><?= ++$key ?></td>
                            <td><?= $pasien['kode'] ?></td>
                            <td><?= $pasien['nama'] ?></td>
                            <td><?= $pasien['alamat'] ?></td>
                            <td><?= $pasien['email'] ?></td>
                            <td>
                              <a href="./form_pasien.php?id=<?= $pasien['id']?>" class="btn btn-sm btn-warning">Ubah</a>
                              <from action="./proses_pasien.php?id=<?= $pasien['id'] ?>" method="POST">
                              <input type="submit" name="proses" class="btn btn-sm btn-danger" value="Hapus">
                            </from>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
<?php include_once './layouts/bottom.php'; ?>
