<?php 
session_start();
if(!isset($_SESSION['user']))
{header('location:seconnecter.php');}
else{
include("connexion.php");
$id=$_POST['id'];
$type=$_POST['type'];
$dd=$_POST['dd'];
$df=$_POST['df'];
$requet="update demande set typestage='$type',dd='$dd',df='$df' where id='$id' ";
$ok=mysqli_query($idcon,$requet);
header('location:liste_demande.php');
include("deconnexion.php");
}
?>