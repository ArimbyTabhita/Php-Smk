<?php

    $row=$db->getALL("SELECT * FROM tblkategori ORDER BY kategori ASC");
?>
<h1>Insert menu</h1>
<div class="form-group">
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group w-50">

         <label for="">Kategori</label><br>
         <select name="idkategori" id="">
         <?php foreach ($row as $r);?>
            <option value="<?php echo $row['idkategori'] ?>"><?php echo $row['kategori'] ?></option>
            <?php endforeach ?>
            </select>
    </div>
    <div class="form-group w-50">
        <label for="">menu</label>
        <input type="text" name="menu" required placeholder="isi menu" class="form-control">
    </div>
    <div class="form-group w-50">
        <label for="">Harga</label>
        <input type="text" name="harga" number required placeholder="isi harga" class="form-control">
    </div>
    <div class="form-group w-50">
        <label for="">Gambar</label>
        <input type="file" name="gambar">
    </div>
    
    <div>
        <input type="submit" name="simpan" value="simpan">
    </div>
    </form>
</div>

<?php

    if (isset($_POST['simpan'])) {\
        $idkategori = $_POST['idkategori'];
        $menu = $_POST['menu'];
        $harga = $_POST['harga'];
        $gambar = $_FILES['gambar']['name'];
        $temp = $_FILES['gambar']['tmp_name']; 

            if (empty($gambar)) {
                echo "<h3>GAMBAR KOSONG</h3>";
            }else{
                $sql = "INSERT INTO tblmenu VALUES ('',$idkategori,'$menu', '$gambar','$harga')";
                move_upload_file($temp,'../upload/' .$gambar);
                $db->runnSQL($sql);
                header("location:?f=menu&m=select");
            }

        
    }

?>