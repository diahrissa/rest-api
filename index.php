<?php

    include "conn.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        $pekerjaan = $_POST['pekerjaan'];
        echo $pekerjaan;
    } else
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        $qu = "select * from mahasiswa";
        $ko = mysqli_query($conn, $qu);
        while ($data = mysqli_fetch_array($ko)) {
            // var_dump($data);
            $datanya[] = array(
                'npm' => $data['npm'],
                'nama' => $data['nama'],
                'jurusan' => $data['jurusan']
            );
        }

        $respon[] = array(
            'status' => 'OK',
            'kode' => '999',
            'data' => $datanya
        );
        header("Content-type: application/json");
        echo json_encode($respon);
    }

?>