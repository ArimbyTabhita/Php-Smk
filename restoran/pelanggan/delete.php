<?php

    if (isset($_GET['id'])) {
    $id=$_GET['id'];

    $sql = "DELETE FROM tblpelanggan WHERE idpelanggan=$id";
    $db->runnSQL($sql);
    header("location:?f=pelanggan&m=select");

    }

?>