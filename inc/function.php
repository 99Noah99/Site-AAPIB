<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}

// Connexion a la base de donnée 
$connexionPDO = new PDO ('mysql:host=127.0.0.1;dbname=aapib;charset=UTF8',"root","",
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

function Modif_evenement(){
    global $connexionPDO;
    // On fait notre requete SQL
    $requeteSQL = "SELECT text FROM main WHERE id = 1;";
    //On prépare la requête SQL : On informe le système que c'est une requête SQL, et qu'il faudra faire des traitements liés.
    $prepRequete = $connexionPDO->prepare($requeteSQL);
    // On execute la requete
    $prepRequete->execute();
    // On met le resultat en type tableau
    $text = $prepRequete->fetchAll(PDO::FETCH_ASSOC);
    return $text[0]["text"];
}

function MAJ_Evenement($text_area){
    global $connexionPDO;
    $requeteSQL = "UPDATE `main` SET `text`=:paramText WHERE main.id = 1;";
    // On prépare la requête SQL : On informe le système que c'est une requête SQL, et qu'il faudra faire des traitements liés.
    $PrepRequete = $connexionPDO->prepare($requeteSQL);
    $PrepRequete->bindParam(":paramText", $text_area);
    $PrepRequete->execute();
}

function login_AAPIB($username,$password){
    global $connexionPDO;
    $requete = "SELECT Nom, Mdp FROM user WHERE Nom = :paramNom AND Mdp = :paramMdp;";
    //Preparation de la requete SQL
    $PrepRequete = $connexionPDO->prepare($requete);
    $PrepRequete->bindParam(":paramNom", $username);
    $PrepRequete->bindParam(":paramMdp", $password);
    $PrepRequete->execute();
    $result = $PrepRequete->fetchAll(PDO::FETCH_ASSOC);
    if (count($result) == 1){
        $_SESSION['connected'] = true;
        $_SESSION['erreur'] = false;
        $_SESSION['username'] = $username;
        $_SESSION['Mdp'] = $password;
        header('Location: ../Intranet.php');

    }

    else{
        $_SESSION['erreur'] = true;
        header('Location: ../PageConnexion.php');

    } 

function verif_Binnon(){

}

}
?>