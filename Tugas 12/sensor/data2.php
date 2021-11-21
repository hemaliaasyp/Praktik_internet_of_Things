<?php

// melakukan koneksi 
$connect = mysqli_connect('localhost', 'root', '', 'smarthome');

//menghitung jumlah pesan dari tabel pesan
$query = mysqli_query($connect, "select count(id_sensor) as jumlah FROM tb_sensor");
// $query2 = mysqli_query($connect, "select count(id_sensor) as jumlah2 FROM tb_sensor ");
//menampilkan data
$hasil = mysqli_fetch_array($query);
// $hasil2 = mysqli_fetch_array($query2);

//membuat data json
echo json_encode(array('jumlah' => $hasil['jumlah']));
// echo json_encode(array('jumlah2' => $hasil2['jumlah2']));
