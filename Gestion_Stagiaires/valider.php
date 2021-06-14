<?php 
session_start();
if(!isset($_SESSION['user']))
{header('location:seconnecter.php');}
else{
include("connexion.php");
$ids=$_GET['ids'];
$requet="update stage set etat='validé' where id=$ids";
$res=mysqli_query($idcon,$requet);
if($res)
{
    $msg="Le Stage est Validé";
header("location:liste_stage.php?message=$msg&ok=1");
}
else {
    $msg="Erreue !!!";
    header("location:liste_stage.php?message=$msg");
}
include("deconnexion.php");
}
?>