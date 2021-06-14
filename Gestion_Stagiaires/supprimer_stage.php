<?php 
session_start();
if(!isset($_SESSION['user']))
{header('location:seconnecter.php');}
else{
include("connexion.php");
$id=$_GET['ids'];
$requet="delete from stage where id='$id'";
$res=mysqli_query($idcon,$requet);
header('location:liste_stage.php');
include("deconnexion.php");
}
?>
