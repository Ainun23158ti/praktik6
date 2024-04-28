<?php

require_once './db_koneksi.php';

$data_kelurahan = $dbh->query("SELECT * FROM kelurahan");

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
      <h3 class="card-title">form tambah pasien</h3>
    </div>
    <div class="card body">
      <form method="post" action="proses_pasien.php">
        <div class="form-group row">
          <label for="id" class="col-4 col-form-label">id</label>
          <div class="col-8">
            <input id="id" name="id" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="kode" class="col-4 col-form-label">kode</label>
          <div class="col-8">
            <input id="kode" name="kode" type="text" class="form-control">>
          </div>
        </div>
        <div class="form-group row">
          <label for="nama" class="col-4 col-form-label">nama lengkap</label>
          <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="tmp_lahir" class="col-4 col-form-label">tempat lakhir</label>
          <div class="col-8">
            <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="tgl_lahir" class="col-4 col-form-label">tanggal lahir</label>
          <div class="col-8">
            <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4">jenis kelamin</label>
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" checked>
              <label for="gender_0" class="custom-control-label">laki-laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P">
              <label for="gender_1" class="custom-control-label">perempuan</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="kelurahan" class="col-4 col-form-label">kelurahan</label>
          <div class="col-8">
            <?php ?>
            <select id="kelurahan" name="kelurahan" class="custom-select">
              <option value="" disabled selected>-----pilih kelurahan ----</option>
              <?php foreach ($data_kelurahan as $key => $kelurahan) : ?>
                <option value="<?= $kelurahan['id'] ?>"><?= $kelurahan['nama'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-4 col-form-label">email</label>
          <div class="col-8">
            <input id="email" name="email" type="text" class="form-control">
          </div>
              </div>
        <div class="form-group row">
          <label for="alamat" class="col-4 col-form-label">alamat</label>
          <div class="col-8">
            <textarea id="alamat" name="alamat" cols="40" rows="2" class="form-control"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-4 col-8">
            <!-- <button name="submit" type="submit" class="btn btn-primary">Tambah Pasien</button> -->
            <input type="submit" name="proses"class="btn btn-primary" value="simpan">
          </div>
        </div>
      </form>
    </div>
   
  </div>
  <?php
include_once './layouts/bottom.php';
?>
