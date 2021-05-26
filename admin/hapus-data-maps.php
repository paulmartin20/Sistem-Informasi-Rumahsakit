<?php 
    include "connection.php";

    //fungsi aksi pengambilan data ada disini
    $data['id_lokasi'] = $_GET['id_lokasi'];

    $sql = "delete from lokasi where id_lokasi=:id_lokasi";
    $query_data_lokasi = $conn->prepare($sql);
    $query_data_lokasi->execute($data);

    header("Location: data-maps.php");