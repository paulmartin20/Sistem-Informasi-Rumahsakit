<?php 
    include "connection.php";

    //fungsi aksi pengambilan data ada disini
    $data['id_posyandu'] = $_GET['id_posyandu'];

    $sql = "delete from posyandu where id_posyandu=:id_posyandu";
    $query_data_posyandu = $conn->prepare($sql);
    $query_data_posyandu->execute($data);

    header("Location: data_posyandu.php");