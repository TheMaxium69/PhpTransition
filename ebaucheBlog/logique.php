<div style="background-color: black; color: white;"><?php

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
            header('Location: index.php?info=added');

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


    if ( isset($_GET['titreEdite']) && isset($_GET['texteEdite'])){
        $editTitre = $_GET['titreEdite'];
        $editText = $_GET['texteEdite'];
        $editId = $_GET['idEdite'];

        $maRequeteArticleUnique = "UPDATE `post` SET `title`='$editTitre',`content`='$editText' WHERE id='$editId'";

        $leResultatDeMaRequeteArticleEdit = mysqli_query($maConnection, $maRequeteArticleUnique);
        header('Location: unique.php?postId='. $editId .'&info=edit');

    }

    if ( isset($_GET['suppId'])){
        $suppId = $_GET['suppId'];

        $maRequeteArticleDel = "DELETE FROM `post` WHERE id='$suppId'";

        $leResultatDeMaRequeteArticleSupp = mysqli_query($maConnection, $maRequeteArticleDel);
        header('Location: index.php?info=sup');

    }












    ?></div>