<!doctype html>
<html>
<head>
    <title>PHPpage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div style="background-color: black; color: white">
<?php
$modeRevelation = false;
$modeForm = true;
$secret = "le sens de la vie c'est       ";
$revelation = "c'est à cet endroit que le secret devrait être revelé";
$unForm = '<form method="get" class="row g-3">
                <div class="col-auto">
                    <input type="text" class="form-control" name="psd" id="" placeholder="votre pseudo">
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" name="pass" id="" placeholder="Mot de passe">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-success">OK</button>
                </div>  
           </form>';
$pseudo = "pascale";
$password = "carrotte";
$utilisateurs = array(
    $pseudo => $password,
    'bob' => "dauphin",
    'patricia' => "camenbert",
    'magali' => "pterodactyle",
);


if(isset($_GET['pass']) && isset($_GET['psd']) && $_GET['pass'] == $password && $_GET['psd'] == $pseudo){
    echo "[debug] Get Existe". "<br>";
    echo "[debug] nyPseudo bon". "<br>";
    echo "[debug] Mot de passe bon". "<br>";
    $modeForm = !$modeForm;
    $modeRevelation = true;
}else{
    if (isset($_GET['pass']) && isset($_GET['psd'])){
    }else{
        echo "[debug] Tu na pas remplie tout les champs". "<br>";
    }
    if (isset($_GET['pass']) && $_GET['pass'] != $password){
        echo "[debug] Mot de passe pas bon". "<br>";
    }
    if (isset($_GET['psd']) && $_GET['psd'] != $pseudo){
        echo "[debug] Pseudo pas bon". "<br>";
    }
}

if($modeRevelation){
    echo "[debug] Vrai tu peut voir le secret". "<br>";
    $revelation = $secret;
    $modeForm = false;
}else {
    echo "[debug] Faux tu peut pas voir le secret". "<br>";
}

if(!$modeForm){
    echo "[debug] Désactivé le formulaire". "<br>";
    $unForm = "";
}else {
    echo "[debug] Activé le formulaire". "<br>";
}

?>
</div>
<br>

<?php echo $revelation;
      echo $unForm;?>
<hr>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
