<?php 
session_start();
if(!isset($_SESSION['user']))
{header('location:seconnecter.php');}
else{
include("connexion.php");
$id=$_GET['idd'];
$requet="update demande set etat='refuse' where id=$id";
$res=mysqli_query($idcon,$requet);
if($res)
{$msg="La demande a été refuser...";
header("location:liste_demande.php?message=$msg&ok=1");}
include("deconnexion.php");
}
?>