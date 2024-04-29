<?php

$username="admin";
$password="admin";

if($_POST['username'] == $username && $_POST['password'] == $password){
    $_SESSION['jesuisconnecte'] = true;
    header('Location: dashboard.php');
}else{
    header('Location: index.php');
} 