<?php require "logique.php"; ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Create article</title>
    <link href="" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css">
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark" style="color: white">
        <div class="container-fluid">
            <a class="navbar-brand">Créer un article</a>
            <form class="d-flex">
                <a class="btn btn-outline-light" href="index.php" type="submit">Home</a>
            </form>
        </div>
    </nav>

    <form style="padding: 40px">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name de l'article</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="tape ici un ptit nom">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="je suis une description"></textarea>
            <button type="submit" class="btn btn-dark" style="margin-top: 10px;">Submit</button>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


