<?php 
session_start();
if(!isset($_SESSION['user']))
{header('location:seconnecter.php');}
else{
include("connexion.php");
$id=$_GET['id'];
$dir=$_GET['direction'];
$enc=$_GET['encadreur'];
$sujet=$_GET['sujet'];

$requet="update stage set dep='$dir',encadreur='$enc',sujet='$sujet' where id='$id'";
$res=mysqli_query($idcon,$requet);
header('location:liste_stage.php');
include("deconnexion.php");
}
?>