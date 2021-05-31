<div style="background: black; color: white;"><?php
    $host = "localhost";
    $userDB = "ebauche";
    $passDB = "test";
    $Database = "ebaucheblog";

    $ConnectDB = mysqli_connect($host, $userDB, $passDB, $Database);

    if(!$ConnectDB){

        echo '<div class="alert alert-danger" role="alert">
            Ta un souci de base de donné
        </div>';

        die();
    }else{

        echo "[debug] bien-connect" . "<br>";
    }
    ?></div>
