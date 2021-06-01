
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
                <a href="create.php" class="btn btn-outline-dark" type="submit">Create</a>
            </form>
        </div>
    </nav>

    <?php if( isset($_GET['info']) && $_GET['info'] == 'added' ){?>

        <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>Bravo!</strong> You successfully posted <a href="#" class="alert-link">a new article</a>.
        </div>
    <?php } ?>
    <?php if( isset($_GET['info']) && $_GET['info'] == 'sup' ){?>

        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>Bravo!</strong> You successfully supp <a href="#" class="alert-link">a supp article</a>.
        </div>
    <?php } ?>

    <div class="container">


        <div class="row mt-5">


            <?php //debut de la boucle
            foreach($leResultatDeMaRequete as $post){
                ?>

                <div class="col-4">

                    <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                        <div class="card-header"><?php echo $post["title"]; ?></div>
                        <div class="card-body">
                            <p class="card-text"><?php echo $post["content"]; ?></p>
                        </div>
                        <a href="unique.php?postId=<?php echo $post['id'] ?>" class="btn btn-primary">Aller à l'article</a>
                    </div>


                </div>

                <?php //fin de la boucle
            } ?>

        </div>




    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


