<?php

//set data yang diperlukan
$host = 'localhost';
$database = 'db_puskesmas';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

//siapkan Data Source Name 
$dsn = "mysql:host=$host;dbname=$database;charset=$charset";

//konfigurasi opsi
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

//bust objek koneksi dengan instance PDO class
$dbh = new PDO($dsn, $username, $password, $opt);
?>
