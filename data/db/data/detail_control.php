<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Jika dataControl diklik maka
if (isset($_POST['dataControl'])) {
    $output = '';

    // mengambil data siswa dari id yang berasal dari dataControl
    $sql = "SELECT * FROM tb_control WHERE id_control = '" . $_POST['dataControl'] . "'";
    $result = mysqli_query($koneksi, $sql);

    $output .= '<div class="table-responsive">
                        <table class="table table-bordered">';
    foreach ($result as $row) {
        $output .= '<tr>
                            <th width="40%">Id</th>
                            <td width="60%">' . $row['id_control'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Nama Objek</th>
                            <td width="60%">' . $row['nama_objek_control'] . '</td>
                        </tr>
                        <tr>
                            <th width="40%">Status</th>
                            <td width="60%">' . $row['status_control'] . '</td>
                        </tr>
                       
                        ';
    }
    $output .= '</table></div>';
    // Tampilkan $output
    echo $output;
}
