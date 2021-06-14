<?php
session_start();
include("connexion.php");
$login=isset($_POST['login'])?$_POST['login']:"";
$pwd=isset($_POST['pwd'])?$_POST['pwd']:"";

$requet="select * from utulisateurs where login='$login' and pwd=md5('$pwd')";
$res=mysqli_query($idcon,$requet);
$user=mysqli_fetch_array($res);
if($user)
{
    if($user['etat']==1)
    {
        $_SESSION['user']=$user;
        header('location:index.php');
    }
    else {
        $_SESSION['erreurlogin']="votre compte est desactivé";
        header('location:seconnecter.php');

    }
}

else {
    $_SESSION['erreurlogin']="login ou mot de passe incorrect";
    header('location:seconnecter.php');
}



?>