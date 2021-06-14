<?php 
session_start();
if(!isset($_SESSION['user']))
{header('location:seconnecter.php');}
else{
include("connexion.php");
$cin=$_GET['ids'];
$requet="delete from stagaire  where cin='$cin'";
$ok=mysqli_query($idcon,$requet);
header('location:liste_stagiaire.php');
include("deconnexion.php");

}
?>
