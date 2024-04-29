<?php
include'function.php';

switch($_POST['action']){
    case 'btn_modifier':
        MAJ_Evenement($_POST['Evenement']);
        header('Location: ../Index.php');
        break;
    
    case 'btn_annuler':
        header('Location: ../Index.php');
        break;

    case 'btn_connexion':
        echo $_POST['username'];
        echo $_POST['password'];
        login_AAPIB($_POST['username'], $_POST['password']);
        break;
}

?>