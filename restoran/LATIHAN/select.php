<div style="margin:auto; width:900px;">

<h1><a href="#">TAMBAH DATA</a></h1>
<?php

    require_once "../function.php";

        if (isset($_GET['update'])) {
            $id=$_GET['update'];
            require_once"update.php";
        }

        if (isset($_GET['hapus'])) {
            $id=$_GET['hapus'];
            require_once "delete.php";
        }

        echo '<br>';

    $sql = "SELECT * FROM idkategori LIMIT tblkategori";
    $result = mysqlu_query($koneksi, $sqli);

    $jumlahdata = mysqli_num_rows($result);

    
    $banyak = 4;

    $halaman = ceil($jumlahdata / $banyak);
    for ($i=1; $i <= $halaman; $i++) { 
        echo '<a href="?p='.$i.' ">' .$i.' </a>';
        echo '&nbsp &nbsp &nbsp';
    }
    echo '<br> <br>';

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        $mulai = ($p * $banyak) - $banyak;
        //  3 = (3*3) - 3

    } else {
        $mulai = 3;
    }
    

    $sql = "SELECT * FROM tblkategori LIMIT  $mulai,$banyak";

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
            <th>hapus</th>
            <th>Update</th>
        </tr>';
    $no=1;
    if ($jumlah > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo '<tr>';
            echo '<td>'.$no++.'</td>';
            echo '<td>'$row['idkategori']. '</td>';
            echo '<td><a href="?hapus='.$row['idkategori'].'">'.'Hapus'.'</a></td>';
            echo '<td><a href="?update='.$row['idkategori'].'">'.'update'.'</a></td>';
            echo '</tr>';
        }
    }

?>


    </div>