<div class="row">
            <div class="col-4 mx-auto mt-4">

                <div class="form-group">
                    <form action="" method="post">
                        <div>
                            <h3>LOGIN PELANGGAN</h3>
                        </div>
                        <div class="form-group">
                            <label for="">email</label>
                            <input type="email" name="email" required placeholder="isi email" class="form-control">
    </div>
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="text" name="password" required placeholder="isi password" class="form-control">
    </div>
    <div>
        <input type="submit" name="login" value="LOGIN" class="btn btn-primary">
    </div>
    </form>
</div>
            </div>
        </div>
        <?php

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql ="SELECT * FROM tblpelanggan WHERE email='$email' AND password='$password' AND aktif=1";

    $count = $db->rowCOUNT($sql);

        if ($count == 0) {
            echo "<center><h3>EMAIL atau PASSWORD salah</h3></center>";
        }else{
            $sql ="SELECT * FROM tblpelanggan WHERE email='$email' AND password='$password' AND aktif=1";
            $row=$db->getITEM($sql);

            $_SESSION['pelanggan']=$row['pelanggan'];
            $_SESSION['idpelanggan']=$row['idpelanggan'];

            header("location:index.php");
        }
    
}

?>