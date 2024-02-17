<nav>
    <ul>
        <li><a href="?menu=isi">isi</a></li>
        <li><a href="?menu=hapus">Hapus</a></li>
        <li><a href="?menu=destroy">Destroy</a></li>
    </ul>
</nav>

<?php

     session_start();
     var_dump($_SESSION);
     
     if (isset($_GET['menu'])){
        $menu = $_GET['menu'];
        echo $menu;

        switch ($menu) {
            case 'isi':
                isiSesion();
                break;
            case 'hapus':
                unset($_SESSION['user']);
                break;
                case 'destroy':
                    session_destroy();
                    break;
            default:
                # code...
                break;
        }
     }


     echo '<br>';

    function isiSesion(){
        $_SESSION['user'] = 'joni';
        $_SESSION['nama'] = 'joni rambo';
        $_SESSION['alamat'] = 'sidoarjo';
    }
?>