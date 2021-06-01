
<?php include "logique.php"?>



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
                <a class="btn btn-outline-dark" href="index.php" type="submit">Home</a>
            </form>
        </div>
    </nav>
    </nav>
</header>

<div class="container">
    <div class="">
        <?php
        if (isset($_GET['postId']) ){
        foreach($leResultatDeMaRequeteArticleUnique as $value){
            $IdEdit = $value['id'];?>


            <form action="">

                <input class="form-control" type="text" name="titreEdite" id="" value="<?php echo $value['title'] ?>" placeholder="votre titre">
                <textarea class="form-control" name="texteEdite" id="" cols="30" rows="10" placeholder="votre texte"><?php echo $value['content'] ?></textarea>
                <input class="form-control btn btn-success" type="submit" value="Poster">



            </form>
        <?php }}

        if ( isset($_GET['titreEdite']) && isset($_GET['texteEdite'])){
            $editTitre = $_GET['titreEdite'];
            $editText = $_GET['texteEdite'];

            $maRequeteArticleUnique = "UPDATE `post` SET `title`='$editTitre',`content`='$editText' WHERE id='$IdEdit'";

            $leResultatDeMaRequeteArticleEdit = mysqli_query($maConnection, $maRequeteArticleUnique);

        }
        ?>

    </div>
</div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

