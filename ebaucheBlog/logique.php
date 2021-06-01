<div style="background-color: black; color: white;"><?php

    echo "[MENU DE DEBUG] <br>";

$unHote = "localhost";
$nomUtilisateurDB = "ebauche";
$motDePasseUserDB = "test";
$nomDatabase = "ebaucheblog";

//Tester la bonne connection à la base
$maConnection =    mysqli_connect($unHote, $nomUtilisateurDB, $motDePasseUserDB, $nomDatabase);
if(!$maConnection){

    echo "
    
    <div class='alert alert-dismissible alert-warning'>
      <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
      <h4 class='alert-heading'>Warning!</h4>
      <p class='mb-0'>probleme de connection à la base de données</a>.</p>
    </div>";

    die();

}

if ( isset($_GET['name']) && isset($_GET['description'])){

    if( $_GET['name'] !== "" && $_GET['description'] !== "" ) {
        $newTitre = $_GET['name'];
        $newDesc = $_GET['description'];

        $maRequete = "INSERT INTO post(`title`, `content`) VALUES ('$newTitre', '$newDesc')";

        $result = mysqli_query($maConnection, $maRequete);
        if($result == true){
            header('Location: index.php');
            $temp = 1;

        }
    }else{
        echo "remplie formulaire";
    }
}


//effectuer une requete pour un article spécifique:
if(  isset($_GET['postId'])  ){

    $postId = $_GET['postId'];

    $maRequeteArticleUnique = "SELECT * FROM post WHERE id=$postId";

    $leResultatDeMaRequeteArticleUnique = mysqli_query($maConnection, $maRequeteArticleUnique);
}else{    //effectuer une requete SQL pour récupérer TOUS les posts

    $maRequete = "SELECT * FROM post";

    $leResultatDeMaRequete = mysqli_query($maConnection, $maRequete);





}













?></div>