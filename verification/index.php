<!doctype html>
<html>
<head>
    <title>PHPpage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h2>Met ton age</h2>
<form method="get">
    <input type="ageform" name="ageform" id="ageform" placeholder="ton age" class="col align-self-center" required><br/>
    <input type="submit" name="formsend" id="formsend" value="Envoyer" class="btn btn-primary">
</form>
<?php
$age = $_GET['ageform'];

$prenom = "Bob";

$user = array("prenom" => $prenom,
              "age" => $age);

if($user['age'] >= 18){
        echo '<div class="card" style="width: 18rem;">
  <img src="https://cdn.futura-sciences.com/buildsv6/images/wide1920/a/0/f/a0fc73919d_50166390_chaton.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">MAJEUR</h5>
    <p class="card-text">'. $user['prenom'] .' tu est majeur car tu a '. $user['age'] .'</p>
  </div>
</div>';

}else{
    echo '<div class="card" style="width: 18rem;">
  <img src="https://www.senup.com/blog/wp-content/uploads/2015/05/Bol-de-lait.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">MINEUR</h5>
    <p class="card-text">'. $user['prenom'] .' tu est mineur car tu a '. $user['age'] .'</p>
  </div>
</div>';
}

?>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
