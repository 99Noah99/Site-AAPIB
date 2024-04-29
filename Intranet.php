<?php
session_start();
if(!isset($_SESSION['connected'])){
    header('Location: ./Index.php');
    exit();
}
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
            <div class="conteneur_intranet">
                <div>
                    <a href = "" class="bouton_intranet">Faire une demande d'assistance</a>
                </div>

                <div>
                    <a href = "192.168.1.35/nextcloud" class="bouton_intranet">Accéder au cloud</a>
                </div>

                <div>
                    <?php
                    if ($_SESSION['username'] === 'Binnon' && $_SESSION['Mdp'] = 'BINNON'){
                        echo "<a href = 'Formulaire.php' class='bouton_intranet'>Modifier l'évènement</a>";
                    };
                    ?>
                </div>

            </div>
        
            
            
        </section>
        
    </main>
    
    <footer>
        <p> <a href = "Index.php">Retourner a l'accueil</a>
    </footer>  

</body>
</html>

