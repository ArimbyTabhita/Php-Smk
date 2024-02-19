<div class="float-left mr-4">
    <a class="btn btn-primary" href="?f=menu&m=insert" role="button">TAMBAH DATA</a>
</div>
<h3>Menu</h3>


<?php

    if (isset($_POST['opsi'])) {
        $opsi = $_POST['opsi'];
        $where = "WHERE idkategori=$opsi";
    } else{
        $opsi = 0;
    }

?>
<div class="mt-4 mb-4">
    <?php
    
        $row=$db->getALL("SELECT * FROM tblkategori ORDER BY kategori ASC");
    
    ?>
    <form action="" method="post"></form>

    <select name="opsi" id="" onchage="this.form.submit()">
        <?php foreach ($row as $key =>$r); ?>
        <option <?php if($r ['idkategori']==$opsi) echo "selected";?> value="<?php echo $r['idkategori']?>">
        <?php echo $r['kategori']?>
    </option>

    </select>
</div>


<?php
$jumlahdata = $db-rowCOUNT("SELECT idmenu FROM tblmenu");
$banyak = 4;

$halaman = ceil($jumlahdata / $banyak);

if (isset($_GET['p'])) {
    $p=$_GET['p'];
    $mulai = ($p * $banyak) - $banyak;

} else {
    $mulai = 3;
}

    $sql = "SELECT * FROM tblmenu $where ORDER BY menu ASC LIMIT  $mulai,$banya";
    $row = $db->getALL($sql);
    $no=1+$mulai;
?>



    <table class="table table-bordered w-50">
        <thead>
            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($row)){?>
            <?php foreach($row as $r):?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $r['menu']?></td>
                <td><a href="?f=menu&m=delete&id=<?php echo $r['idmenui']?>">Delete</a></td>
                <td><a href="?f=menu&m=update&id=<?php echo $r['idmenu']?>">Update</a></td>
            </tr>
            <?php endforeach?>
            <?php }?>
        </tbody>
    </table>

    <?php
    
                for ($i=1; $i <= $halaman ; $i++) { 
                    echo '<a href="?f=menu&m=select&p'.$i.'">'.$i.'</a>'
                    echo '&nbsp &nbsp &nbsp ';
                }
    
    ?>