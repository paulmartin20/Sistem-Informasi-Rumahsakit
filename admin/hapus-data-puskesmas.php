<?php 
    include "connection.php";

    //fungsi aksi pengambilan data ada disini
    $data['id_puskesmas'] = $_GET['id_puskesmas'];

    $sql = "delete from puskesmas where id_puskesmas=:id_puskesmas";
    $query_data_puskesmas = $conn->prepare($sql);
    $query_data_puskesmas->execute($data);

    header("Location: data_puskesmas.php");