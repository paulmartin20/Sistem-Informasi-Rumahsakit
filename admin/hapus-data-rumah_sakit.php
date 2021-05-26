<?php 
    include "connection.php";

    //fungsi aksi pengambilan data ada disini
    $data['id_rumah_sakit'] = $_GET['id_rumah_sakit'];

    $sql = "delete from rumah_sakit where id_rumah_sakit=:id_rumah_sakit";
    $query_data_rumah_sakit = $conn->prepare($sql);
    $query_data_rumah_sakit->execute($data);

    header("Location: data_rumah_sakit.php");