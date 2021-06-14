<?php 
session_start();
if(!isset($_SESSION['user']))
{header('location:seconnecter.php');}
else{
include("connexion.php");
$idu=$_GET['idu'];
$requet="update utulisateurs set etat='1' where iduser=$idu";
$res=mysqli_query($idcon,$requet);
header('location:liste_utulisateurs.php');
include("deconnexion.php");
}
?>