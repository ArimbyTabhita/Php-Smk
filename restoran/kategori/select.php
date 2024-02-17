<?php

    require_once "../function.php";

    $sql = "SELECT * FROM tblkategori";

    $result = mysqli_($koneksi, $sqli);

    //var_dump($result);

    $jumlah = mysqli_num_rows($result);
    //echo'<br>';
    //echo $jumlah;

        echo'    
        <table border="1px">
        <tr>
            <td>NO</td>
            <td>Kategori</td>
        </tr>';
    $no=1;
    if ($jumlah > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo '<tr>';
            echo '<td>'$row['idkategori']. '</td>';
            echo '<td>'$row['kategori']. '</td>';
            echo '</tr>';
        }
    }

?>

    <table border="1px">
        <tr>
            <td>NO</td>
            <td>Kategori</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Kategori</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Kategori</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Kategori</td>
        </tr>
    </table>