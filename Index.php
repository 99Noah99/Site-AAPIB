<!-- On peut commenter en sélectionnant des lignes et en faisant le raccourcis Ctrl + /  -->
<?php include './inc/function.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Accueil AAPIB</title>
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- on inclue le header -->
    <?php include('./inc/header_Index.php'); 
    ?>
    
    <main>

        <section  class="text-xl md:text-lg max-sm:text-sm">

            <div class ="conteneur_text_debut space-y-4 md:flex md:space-y-0">
                <div>
                    L’Association des amis de personnes présentant une déficience intellectuelle pouvant être 
                    associée à une déficience physique, dite AAPIB (Association des Amis des Personnes Inadaptés 
                    de Belfort) est une association à but non lucratif.
                </diV>

                <div class ="bordure_separation_text_debut"></div>
                
                <div class ="text_debut">
                    <h3 style ="text-decoration : underline;">Évènement :</h3>
                    <?php
                    echo Modif_evenement($connexionPDO)
                    ?>
                </div>
            </div>

            <!-- image bénévol -->
            <div class = "conteneur_img_benevol">  
                <img class = "img_benevol" src="images/img_main_benevol.png" alt="Image de bénévol index main">
            </div>

            <div class="mission">
                <h2>Nos missions sont :</h2>
                        <ul class="list-disc">
                            <li>d’assurer la défense des intérêts généraux des personnes déficientes intellectuelles tant du point de vue
                                moral que matériel auprès des élus, des pouvoirs publics, des commissions, des autorités de tutelle </li>
                            <li>de favoriser leur plein épanouissement et leur insertion sociale </li>
                            <li>d'établir un esprit de solidarité et d'entraide</li>
                            <li>de développer l'information et le conseil, notamment lors des changements d’orientation</li>
                            <li>de promouvoir et mettre en oeuvre tout ce qui est nécessaire pour un meilleur développement physique,
                                intellectuel et moral des personnes déficientes en vue de l'éducation, la rééducation, l'adaptation,
                                l'insertion sociale et professionnelle, l'hébergement et l'organisation de loisirs</li>
                            <li>d’établir sur le plan local des liens avec les autres organismes, associations et établissements
                                d’enseignement, qui oeuvrent en faveur des personnes handicapées</li>
                        </ul>
            </div>

            <div class="bordure_separation"></div>   <!-- Ligne de séparation -->

            <div class = "text_fin">
                <h3>Plusieurs établissements sont rattachés à l’AAPIB :</h3>
                        <ul class="list-disc">
                            <li>L’IME de Belfort</li>
                            <li>La mairie de Belfort</li>
                            <li>Le Conseil départemental</li>
                            <li>Les établissements scolaires du Territoire de Belfort</li>
                        </ul>
            </div>
            
            <!-- Création du bouton afin de modifier les évènements -->
            <!-- <div class ="flex mt-10"> 
                <a href = "Formulaire.php" class="bouton_modif_evenement">Modifier l'évènement</a>
            </div> -->

        </section>
        
    </main>
    
    <footer>
        <a href = "Mentions obligatoires.php"> Mentions obligatoire </a>
    </footer>  

</body>
</html>

