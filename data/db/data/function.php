<?php
// Koneksi Database
$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");

// membuat fungsi query dalam bentuk array
function query($query)
{
    // Koneksi database
    global $koneksi;

    $result = mysqli_query($koneksi, $query);

    // membuat varibale array
    $rows = [];

    // mengambil semua data dalam bentuk array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Membuat fungsi tambah
function tambah($data)
{
    global $koneksi;

    $id_control = htmlspecialchars($data['id_control']);
    $nama_objek_control = htmlspecialchars($data['nama_objek_control']);
    $status_control = htmlspecialchars($data['status_control']);
    

    $sql = "INSERT INTO tb_control VALUES ('$id_control','$nama_objek_control','$status_control')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi hapus
function hapus($id_control)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM tb_control WHERE id_control = $id_control");
    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi ubah
function ubah($data)
{
    global $koneksi;

    $id_control = $data['id_control'];
    $nama_objek_control = htmlspecialchars($data['nama_objek_control']);
    $status_control = $data['status_control'];
   
    $sql = "UPDATE tb_control SET nama_objek_control = '$nama_objek_control', status_control = '$status_control' WHERE id_control = $id_control";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi upload gambar