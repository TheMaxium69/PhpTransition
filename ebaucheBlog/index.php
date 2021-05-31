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

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Php Site</title>
    <link href="" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css">
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand">Navbar</a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
<?php
    $requete = "SELECT * FROM post";

    $result = mysqli_query($ConnectDB, $requete);

    foreach ($result as $key => $value) {
    /*echo " id = " . $row['id'] . " | title = " .$row['title'] . " | contente = " .$row['content'] . "<br>";*/
    ?>
    <div class="card" style="width: 18rem;">
        <!--<img src="" class="card-img-top" alt="">-->
        <div class="card-body">
            <h5 class="card-title"><?php echo $value['id']; ?> : <?php echo $value['title']; ?></h5>
            <p class="card-text"><?php echo $value['content']; ?></p>
        </div>
    </div>
<?php
    }
    ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


