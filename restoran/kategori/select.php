<?php
$jumlahdata = $db-rowCOUNT("SELECT idkategori FROM tblkategori");
$banyak = 4;

$halaman = ceil($jumlahdata / $banyak);

f (isset($_GET['p'])) {
    $p=$_GET['p'];
    $mulai = ($p * $banyak) - $banyak;

} else {
    $mulai = 3;
}

    $sql = "SELECT * FROM tblkategori ORDER BY kategori ASC LIMIT  $mulai,$banya";
    $row = $db->getALL($sql);
    $no=1+$mulai;



?>

<h3>Kategori</h3>

    <table class="table table-bordered w-50">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($row as $r):?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $r['kategori']?></td>
                <td><?php echo $r['kategori']?></td>
                <td><?php echo $r['kategori']?></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>

    <?php
    
                for ($i=1; $i <= $halaman ; $i++) { 
                    echo '<a href="?f=kategori&m=select&p'.$i.'">'.$i.'</a>'
                    echo '&nbsp &nbsp &nbsp ';
                }
    
    ?>

