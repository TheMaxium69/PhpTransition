<?php 


    $unHote = "localhost";
    $nomUtilisateurDB = "bloggeur";
    $motDePasseUserDB = "coucou";
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
    //creation d'article

    if( isset($_GET['nouveauTitre']) && isset($_GET['nouveauTexte']) ){
            if( $_GET['nouveauTitre'] !== "" && $_GET['nouveauTexte'] !== "" ){
                    $nouveauTitre = $_GET['nouveauTitre'];
                    $nouveauTexte = $_GET['nouveauTexte'];

                    $maRequete = "INSERT INTO posts(title, content) VALUES ('$nouveauTitre', '$nouveauTexte')";
                     
                     $leResultatDeMonAjoutArticle = mysqli_query($maConnection, $maRequete);
                     header("Location: index.php?info=added");
                  }
         else{
            echo "remplis ton formulaire en entier";
         }
           
    }
    
    //effectuer une requete pour un article spécifique:
     if(  isset($_GET['postId'])  ){

            $postId = $_GET['postId'];

             $maRequeteArticleUnique = "SELECT * FROM posts WHERE id=$postId";

             $leResultatDeMaRequeteArticleUnique = mysqli_query($maConnection, $maRequeteArticleUnique);
     }else{    //effectuer une requete SQL pour récupérer TOUS les posts

        $maRequete = "SELECT * FROM posts";

        $leResultatDeMaRequete = mysqli_query($maConnection, $maRequete);





     }








    


    







?>