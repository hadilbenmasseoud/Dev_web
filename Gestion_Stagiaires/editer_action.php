<?php
session_start();
if(!isset($_SESSION['user']))
{header('location:seconnecter.php');}
else{
include("connexion.php");
$cin=isset($_POST['cin'])?$_POST['cin']:"";
$nom=isset($_POST['nom'])?$_POST['nom']:"";
$prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
$ins=isset($_POST['institut'])?$_POST['institut']:"";
$dip=isset($_POST['diplome'])?$_POST['diplome']:"";
$niv=isset($_POST['niveau'])?$_POST['niveau']:"";
$spec=isset($_POST['spec'])?$_POST['spec']:"";
$tel=isset($_POST['tel'])?$_POST['tel']:"";
$email=isset($_POST['mail'])?$_POST['mail']:"";

$nomcv=$_FILES['cv']['name'];
$tmp=$_FILES['cv']['tmp_name'];
move_uploaded_file($tmp,"CV/".$nomcv);

if(!empty($nomcv)){
$requet="update stagaire set nom='$nom',prenom='$prenom',institut='$ins',diplome='$dip',niveau='$niv',specialite='$spec',tel='$tel',email='$email',cv='$nomcv' where cin='$cin'";
}
else
{$requet="update stagaire set nom='$nom',prenom='$prenom',institut='$ins',diplome='$dip',niveau='$niv',specialite='$spec',tel='$tel',email='$email' where cin='$cin'";
}
$ok=mysqli_query($idcon,$requet);
header('location:liste_stagiaire.php');
include("deconnexion.php");
}
?>
