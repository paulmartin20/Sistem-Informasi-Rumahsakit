<?php 
    include "connection.php";

    //fungsi aksi pengambilan data ada disini
    $data['id_dokter'] = $_GET['id_dokter'];

    $sql = "delete from dokter where id_dokter=:id_dokter";
    $query_data_dokter = $conn->prepare($sql);
    $query_data_dokter->execute($data);

    header("Location: data-dokter.php");