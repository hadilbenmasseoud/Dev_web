<?php include("connexion.php");
session_start();
if(!isset($_SESSION['user']))
{header('location:seconnecter.php');}
else{
$cin=$_POST['cin'];
$type=$_POST['type'];
$dd=$_POST['dd'];
$df=$_POST['df'];
$requet="select* from stagaire where cin='$cin'";
$res=mysqli_query($idcon,$requet);
if(mysqli_num_rows($res)>0)
{
$requet="insert into demande values ('','$cin','$type','$dd','$df','en attente')";
$res=mysqli_query($idcon,$requet);
if($res)
{$msg=' la demande a été ajouter';  
    header("location:liste_demande.php?message=$msg&ok=1");
}
    else {
$msg='erreur!!! probleme d insertion';
header("location:liste_demande.php?message=$msg");
}
}
else {
    $msg="erreur!!! ce Stagiaire n'existe pas";
    header("location:liste_demande.php?message=$msg");

}
include("deconnexion.php");
}
?>