<!-- On appelle le fichier contenant les fonctions php  -->
<?php 
include './inc/function.php'; 
if(!isset($_SESSION['connected'])){
    header('Location: ./Index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Formulaire de mise a jour des Evenement</title>
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <?php include('./inc/header.php'); ?>
    <main>
        <section class = "text-xl md:text-lg max-sm:text-sm ">
            
            <div class = "conteneur_formulaire ">
                
                    <h2 class = "mb-8">Modifier l'évènement</h2>

                    <form action = "./inc/action.php" method = "POST">
                        <input type="hidden" name="action" value="modifier_evenement">
                        <div>
                            <label class="font-semibold" for='Evenement'>Évènement actuel : <br></label>
                            <?php 
                            // echo"<input class ='modif' type='text' name='Evenement'  value='".Modif_evenement($connexionPDO)."' /> "
                            echo "<textarea class='text_area' name='Evenement'>".Modif_evenement()."</textarea>";

                            ?>  
                        </div>

                        <div class="conteneur_bouton">
                            <button class="bouton" type='submit' name='action' value ="btn_modifier">
                                Modifier
                            </button>
                            <button class="bouton" type='submit' name='action' value ="btn_annuler">
                                Annuler
                            </button>
                        </div>
                    </form>         
                
            </div>    

        </section>
    </main>
    
    <footer>
        
    </footer>  

</body>
</html>

