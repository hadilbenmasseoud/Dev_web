<?php 
session_start();
if(!isset($_SESSION['user']))
{header('location:seconnecter.php');}
else{
include("connexion.php");
$id=$_GET['id'];
$direction=$_GET['direction'];
$encadreur=$_GET['encadreur'];
$sujet=$_GET['sujet'];

$requet="select cin from demande where id=$id";
$res=mysqli_query($idcon,$requet);
$ligne=mysqli_fetch_array($res);
$cin=$ligne[0];
$requet="insert into stage values ('$id','$cin','$direction','$encadreur','$sujet','en cours')";
$ok=mysqli_query($idcon,$requet);
$requet="update demande set etat='accepte' where id=$id";
$res=mysqli_query($idcon,$requet);
if($res&&$ok)
{
    $msg="L'affectation du Stagiaire a ete effectuer avec succsé";
header("location:liste_stage.php?message=$msg&ok=1");
}
else {
    $msg="Erreur !!!";
    header("location:liste_stage.php?message=$msg");
}
include("deconnexion.php");
}
?>
