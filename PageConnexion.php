<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Connexion AAPIB</title>
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- on inclue le header -->
    <?php include('./inc/header.php'); ?>
    
    <main>

        <section  class="text-xl md:text-lg max-sm:text-sm">
            <form method="POST" action="inc/action.php">
                <div class="conteneur_login">
                    <?php
                    if (isset($_SESSION['erreur']) && $_SESSION['erreur']){
                    echo "<b class = 'text-red-600'> Votre nom d'utilisateur ou mot de passe est incorrect</b>";
                    }
                    ?>
                    <label for='username'>Nom d'utilisateur :</label>
                    <input class ="input_login mb-5" type="text" name="username" placeholder="nom d'utilisateur">

                    <label for='password'>Mot de passe :</label>
                    <input class ="input_login mb-5" type="password" name="password" placeholder="mot de passe">
                    
                    <button class="bouton_connexion" type='submit' name='action' value ="btn_connexion"> Connexion </button>
                </div>
            </form>
            
        </section>
        
    </main>
    
    <footer>
        
    </footer>  

</body>
</html>

