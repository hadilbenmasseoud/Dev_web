<?php 
session_start();
if(!isset($_SESSION['user']))
{header('location:seconnecter.php');}
else{
include("connexion.php");
$id=$_GET['idd'];
$requet="delete from demande  where id='$id'";
$ok=mysqli_query($idcon,$requet);
header('location:liste_demande.php');
include("deconnexion.php");
}
?>