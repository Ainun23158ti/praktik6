<?php
require_once './db_koneksi.php';
//tangkap data form yang dikirim
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$gender = $_POST['gender'];
$kelurahan_id = $_POST['kelurahan'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];


//simpan data ke dalam array
$data = [$kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $kelurahan_id, $email, $alamat];

//cek nilai proses
switch ($_POST['proses']) {
    case  'simpan':
        $insertPasienSQL = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lahir, gender, kelurahan_id, email, alamat)VALUES (?,?,?,?,?,?,?,?)";
        //mendefinisikan prepare statement
        $stmt = $dbh->prepare($insertPasienSQL);
        //eksekusi
        $stmt->execute($data);
        break;
    case 'Ubah':
        //logic mengubah data
        break;
    case 'Hapus':
        //logic menghapus data
        break;
    default:
        header('location: ./data_pasien.php');
}
//redirect ke halaman data_pasien
header('location: ./data_pasien.php');
